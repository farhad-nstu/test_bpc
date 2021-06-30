<?php

namespace Modules\Hrms\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Hrms\Entities\HrmsLoanManage;
use Validator;
use DB;
use Modules\Hrms\Entities\HrmsEmployee;
use Modules\Hrms\Entities\HrmsLoan;
use App\Helpers\Logs;
use Sentinel;

class LoanManageController extends Controller
{
    private $model;
	private $moduleName;
	private $data;
	private $tableId;
	private $bUrl;

	public function __construct(){	
	
		 $this->tableId = 'loan_manage_id';
		 $this->model = HrmsLoanManage::class;
		 $this->moduleName = 'hrms';
		 $this->bUrl = $this->moduleName.'/loan-manage';

	}


	public function layout($pageName){
		$this->data['tableID'] = $this->tableId;
		$this->data['bUrl'] = $this->bUrl;		
		echo view($this->moduleName.'::loanManage.'.$pageName.'', $this->data);
	}

    public function index(Request $request)
    {
        $this->data = [
            'title'         => 'Employee Loan Manager',
			'pageUrl'         => $this->bUrl,
            'employees'     => HrmsEmployee::all(),
            'loans'     => HrmsLoan::all(),
            'page_icon'     => '<i class="fa fa-book"></i>',
        ];

		//result per page
		$perPage = session('per_page') ?: 20;

		//table item serial starting from 0
		$this->data['serial'] = ( ($request->get('page') ?? 1) -1) * $perPage;

		if($request->method() === 'POST'){
			session(['per_page' => $request->post('per_page') ]);
		}

		//model query...
		// $queryData = HrmsLoanManage::orderBy( getOrder(HrmsLoanManage::$sortable, $this->tableId)['by'], getOrder(HrmsLoanManage::$sortable, $this->tableId)['order']);

		//filter by text.....
		// if( $request->filled('filter') ){
		// 	$this->data['filter'] = $filter = $request->get('filter');

		// 	$queryData->where('employee_id', 'like', '%'.$filter.'%');
		// 	//$queryData->orWhere('district_name', 'like', '%'.$filter.'%');
		// }


        $queryData = DB::table('hrms_loan_manages')
                ->join('hrms_employees', 'hrms_loan_manages.employee_id', '=', 'hrms_employees.employee_bpc_id')
                ->join('hrms_loans', 'hrms_loan_manages.loan_id', '=', 'hrms_loans.loan_id')
                ->select('hrms_loan_manages.*', 'hrms_employees.employee_bpc_id', 'hrms_employees.employee_name', 'hrms_loans.loan_title')
                ->orderBy( getOrder(HrmsLoanManage::$sortable, $this->tableId)['by'], getOrder(HrmsLoanManage::$sortable, $this->tableId)['order']);

        //filter by text.....
        if( $request->filled('filter') ){
            $this->data['filter'] = $filter = $request->get('filter');

            $queryData->where('hrms_employees.employee_name', 'like', '%'.$filter.'%');
            $queryData->orWhere('hrms_employees.employee_bpc_id', 'like', '%'.$filter.'%');
        }

		$this->data['allData'] =  $queryData->paginate($perPage)->appends( request()->query() ); // paginate
		$this->layout('index');

    }

    public function create()
    {
        $this->data = [
            'title'         => 'Add New Employee Loan',
            'page_icon'     => '<i class="fa fa-plus-circle"></i>',
            'employees'     => HrmsEmployee::all(),
            'loans'     => HrmsLoan::all(),
            'installments'     => DB::table('hrms_installments')->select('*')->get(),
            'objData'       => '',
        ];

		$this->layout('create');
    }

    public function edit($id)
    {
		$id = filter_var($id, FILTER_VALIDATE_INT);
		if( !$id ){ exit('Bad Request!'); }

        $this->data = [
            'title'         => 'Edit Salary Structure',
			'page_icon'     => '<i class="fa fa-edit"></i>',
            'employees'     => HrmsEmployee::all(),
            'loans'     => HrmsLoan::all(),
            'installments'     => DB::table('hrms_installments')->select('*')->get(),
            'objData'       => $this->model::where($this->tableId, $id)->first(),
        ];

		$this->layout('edit');
    }

    public function store(Request $request)
    {
        $checkIsExists = $this->model::where('employee_id', $request->employee_id)->where('loan_id', $request->loan_id)->first();
        if($checkIsExists){
            return redirect()->back()->withErrors("Already taken this loan")->withInput();
        }  
         
        $rules = [
            'employee_id'        => 'required',
            'loan_id' => 'required',
            'loan_date' => 'required',
            'amount' => 'required',
            'installment' => 'required'
        ];

        $attribute =[
            'employee_id'      => 'Employee ID',
            'loan_id'  => 'Loan',
            'loan_date' => 'Date Of Laon',
            'amount' => 'Amount Of Loan',
            'installment' => 'Loan Installment'
        ];

        $customMessages =[];

        $validator = Validator::make($request->all(), $rules, $customMessages, $attribute);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }       

        // dd($loanData);

        $loan = HrmsLoan::where('loan_id', $request['loan_id'])->select('interest')->first();
        
        $amountInterest = ($request['amount']*$loan->interest) / 100;
        $payableAmount = $request['amount'] + $amountInterest;
        $monthlyPayableAmount = $payableAmount / $request['installment'];
        $paidAmount = $monthlyPayableAmount * $request['installment_no'];

        $loanManageData = [
            'employee_id' => $request['employee_id'],
            'loan_id' => $request['loan_id'],
            'interest' => $loan->interest,
            'loan_date'   => $request['loan_date'],
            'amount'   => $request['amount'],
            'payableAmount' => $payableAmount,
            'installment'   => $request['installment'],
            'monthlyPayableAmount' => $monthlyPayableAmount,
            'installment_no'   => $request['installment_no'],
            'paid_amount' => $paidAmount,
            'rest_amount' => $payableAmount - $paidAmount,
        ];

        $this->model::create($loanManageData);

        $log_title = 'Hrms (Employee Id - '.$loanManageData['employee_id'].', loan- '.$loanManageData ['loan_id'] .') was created by '. Sentinel::getUser()->full_name;
        Logs::create($log_title,'loan_create');

        return redirect($this->bUrl)->with('success', 'Record Successfully Created.');
        
    }

    public function update(Request $request)
    {
        $id = $request[$this->tableId];

        $rules = [
            'employee_id'        => 'required',
            'loan_id' => 'required',
            'loan_date' => 'required',
            'amount' => 'required',
            'installment' => 'required'
        ];

        $attribute =[
            'employee_id'      => 'Employee ID',
            'loan_id'  => 'Loan',
            'loan_date' => 'Date Of Laon',
            'amount' => 'Amount Of Loan',
            'installment' => 'Loan Installment'
        ];

        $customMessages =[];

        $validator = Validator::make($request->all(), $rules, $customMessages, $attribute);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $loan = HrmsLoan::where('loan_id', $request['loan_id'])->select('interest')->first();

        $amountInterest = ($request['amount']*$loan->interest) / 100;
        $payableAmount = $request['amount'] + $amountInterest;
        $monthlyPayableAmount = $payableAmount / $request['installment'];
        $paidAmount = $monthlyPayableAmount * $request['installment_no'];

        $loanManageData = [
            'employee_id' => $request['employee_id'],
            'loan_id' => $request['loan_id'],
            'interest' => $loan->interest,
            'loan_date'   => $request['loan_date'],
            'amount'   => $request['amount'],
            'payableAmount' => $payableAmount,
            'installment'   => $request['installment'],
            'monthlyPayableAmount' => $monthlyPayableAmount,
            'installment_no'   => $request['installment_no'],
            'paid_amount' => $paidAmount,
            'rest_amount' => $payableAmount - $paidAmount,
        ];

        $this->model::where($this->tableId, $id)->update($loanManageData);

        $log_title = 'Hrms (Employee Id - '.$loanManageData['employee_id'].', loan- '.$loanManageData ['loan_id'] .') was updated by '. Sentinel::getUser()->full_name;
        Logs::create($log_title,'loan_update');

        return redirect($this->bUrl)->with('success', 'Record Successfully Updated.');
    }

    public function show($id)
    {		
		$id = filter_var($id, FILTER_VALIDATE_INT);
		if( !$id ){ exit('Bad Request!'); }

        $this->data = [
            'title'         => 'Loan Manage Information',
			'page_icon'     => '<i class="fa fa-eye"></i>',
            'employees'     => HrmsEmployee::all(),
            'loans'     => HrmsLoan::all(),
            'objData'       => $this->model::where($this->tableId, $id)->first(),
        ];		       

		$this->layout('view');

    }

    public function destroy(Request $request, $id)
    {
		$id = filter_var($id, FILTER_VALIDATE_INT);
		if( !$id ){ exit('Bad Request!'); }

        $this->data = [
            'title'     => 'Delete Loan Manage',
            'pageUrl'   => $this->bUrl.'/delete/'.$id,
			'page_icon' => '<i class="fa fa-trash"></i>',
            'objData'   => $this->model::where($this->tableId, $id)->first(),
        ];

		$this->data['tableID'] = $this->tableId;
		$this->data['bUrl'] = $this->bUrl;

		if($request->method() === 'POST' ){
			  
            $employee = $this->data['objData']->employee_id;
            $loanManage = $this->data['objData']->loan_id;

            $this->model::where($this->tableId, $id)->delete();

            $log_title = 'Hrms (Employee Id - '.$employee.', loan- '.$loanManage.') was deleted by '. Sentinel::getUser()->full_name;
            Logs::create($log_title,'loan_delete');

			echo json_encode(['fail' => FALSE, 'error_messages' => "Saalry Structure was deleted."]);
		}else{
			return view($this->moduleName.'::loanManage.delete', $this->data);
		}

    }

    public function fetch_loan_details(Request $request)
    {
        $loan = HrmsLoan::where('loan_id', $request->loanId)->first();
        return $loan;
    }

    public function fetch_installment_no(Request $request)
    {
        $installments = DB::table('hrms_installments')->select('*')->paginate($request->installment_no);
        return view($this->moduleName.'::loanManage.installments', compact('installments'));
    }

    public function fetch_paid_amount(Request $request)
    {
        $amountInterest = ($request->amount * $request->interest) / 100;       
        $payableAmount = $request->amount + $amountInterest;
        $monthlyPayableAmount = $payableAmount / $request->installment;
        $paidAmount = $monthlyPayableAmount * $request->paid_installment;
        return $paidAmount;
    }
}
