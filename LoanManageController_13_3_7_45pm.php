<?php

namespace Modules\Hrms\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Hrms\Entities\HrmsLoanManage;
use Validator;
use DB;
use Auth;
use Modules\Hrms\Entities\HrmsEmployee;
use Modules\Hrms\Entities\HrmsLoan;

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
            'title'         => 'Loan Management',
			'pageUrl'         => $this->bUrl,
            'employees'     => HrmsEmployee::all(),
            'page_icon'     => '<i class="fa fa-book"></i>',
        ];

		//result per page
		$perPage = session('per_page') ?: 3;

		//table item serial starting from 0
		$this->data['serial'] = ( ($request->get('page') ?? 1) -1) * $perPage;

		if($request->method() === 'POST'){
			session(['per_page' => $request->post('per_page') ]);
		}

		//model query...
		$queryData = HrmsLoanManage::orderBy( getOrder(HrmsLoanManage::$sortable, $this->tableId)['by'], getOrder(HrmsLoanManage::$sortable, $this->tableId)['order']);

		//filter by text.....
		if( $request->filled('filter') ){
			$this->data['filter'] = $filter = $request->get('filter');

			$queryData->where('employee_id', 'like', '%'.$filter.'%');
			//$queryData->orWhere('district_name', 'like', '%'.$filter.'%');
		}

		$this->data['allData'] =  $queryData->paginate($perPage)->appends( request()->query() ); // paginate
		$this->layout('index');

    }

    public function create()
    {
        $this->data = [
            'title'         => 'Add New Employee Loan',
            'page_icon'     => '<i class="fa fa-book"></i>',
            'employees'     => HrmsEmployee::all(),
            'loans'     => HrmsLoan::all(),
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
			'page_icon'     => '<i class="fa fa-book"></i>',
            'employees'     => HrmsEmployee::all(),
            'loans'     => HrmsLoan::all(),
            'objData'       => $this->model::where($this->tableId, $id)->first(),
        ];

		$this->layout('edit');
    }

    public function store(Request $request)
    {

        $rules = [
            'employee_id'        => 'required',
            'loan_id' => 'required',
            'loan_date' => 'required'
        ];

        $attribute =[
            'employee_id'      => 'Employee ID',
            'loan_id'  => 'Loan',
            'loan_date' => 'Date Of Laon'
        ];

        $customMessages =[];

        $validator = Validator::make($request->all(), $rules, $customMessages, $attribute);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }       

        $loanData = (object) $request->only('loan_id','loan_code','interest','amount','kisti');
        // dd($loanData);
        for($i = 0; $i < count($loanData->loan_id); $i++){
            $amount = $loanData->amount[$i];
            $interest = $loanData->interest[$i];
            $kisti = $loanData->kisti[$i];
            $amountInterest = ($amount*$interest) / 100;
            $monthlyInterest = $amountInterest / $kisti;
            $installment = $amount / $kisti;
            $installmentWithInterest = $installment + $monthlyInterest;
            $loanData->payable[$i] = $installmentWithInterest;
        }
        // dd($loanData);

        $loanManageData = [
            'employee_id' => $request['employee_id'],
            'loans' => json_encode($loanData),
            'loan_date'   =>$request['loan_date'],
            'description'   =>$request['description'],
        ];
            $this->model::create($loanManageData);
            $logData = [
                'log_title' => 'Employee(Id-'.$request['employee_id'].') Laon Manage Created',
                'log_type'  => 'Employee Section Updated',
                'log_amount'=> 1,
                'log_creator'=> Auth::id(),
                'log_date' => date("Y-m-d"),
            ];
            DB::table('tbl_logs')->insert($logData);
            return redirect($this->bUrl)->with('success', 'Record Successfully Created.');
        
    }

    public function update(Request $request)
    {
        $id = $request[$this->tableId];

        $rules = [
            'employee_id'        => 'required',
            'loan_id' => 'required',
            'loan_date' => 'required'
        ];

        $attribute =[
            'employee_id'      => 'Employee ID',
            'loan_id'  => 'Loan',
            'loan_date' => 'Date Of Laon'
        ];

        $customMessages =[];

        $validator = Validator::make($request->all(), $rules, $customMessages, $attribute);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $loanData = $request->only('loan_id','loan_code','interest');

        $loanManageData = [
            'employee_id' => $request['employee_id'],
            'loans' => json_encode($loanData),
            'loan_date'   =>$request['loan_date'],
            'description'   =>$request['description'],
        ];

        $this->model::where($this->tableId, $id)->update($loanManageData);
        $logData = [
            'log_title' => 'Employee(Id-'.$request['employee_id'].') Loan Manage Updated',
            'log_type'  => 'Employee Section Updated',
            'log_amount'=> 1,
            'log_creator'=> Auth::id(),
            'log_date' => date("Y-m-d"),
        ];
        DB::table('tbl_logs')->insert($logData);
        return redirect($this->bUrl)->with('success', 'Record Successfully Updated.');
    }

    public function show($id)
    {		
		$id = filter_var($id, FILTER_VALIDATE_INT);
		if( !$id ){ exit('Bad Request!'); }

        $this->data = [
            'title'         => 'Laon Manage Information',
			'page_icon'     => '<i class="fa fa-book"></i>',
            'employees'     => HrmsEmployee::all(),
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
			'page_icon' => '<i class="fa fa-book"></i>',
            'objData'   => $this->model::where($this->tableId, $id)->first(),
        ];

		$this->data['tableID'] = $this->tableId;
		$this->data['bUrl'] = $this->bUrl;

		if($request->method() === 'POST' ){
			  $this->model::where($this->tableId, $id)->delete();
              $logData = [
                'log_title' => 'Employee(Id-'.$this->data['objData']->employee_id.') Loan Manage Deleted',
                'log_type'  => 'Employee Section Updated',
                'log_amount'=> 1,
                'log_creator'=> Auth::id(),
                'log_date' => date("Y-m-d"),
            ];
            DB::table('tbl_logs')->insert($logData);
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
}
