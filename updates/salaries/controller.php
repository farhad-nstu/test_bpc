<?php

namespace Modules\Hrms\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Hrms\Entities\HrmsSalary;
use Validator;
use Modules\Hrms\Entities\HrmsEmployee;
use Modules\Hrms\Entities\HrmsSalaryStructure;
use DB;
use Modules\Hrms\Entities\HrmsLoanManage;
use Modules\Hrms\Entities\HrmsLoan;
use Modules\Hrms\Entities\HrmsSalaryCategory;
use App\Helpers\Logs;
use Sentinel;

class SalaryController extends Controller
{
    private $model;
	private $moduleName;
	private $data;
	private $tableId;
	private $bUrl;

	public function __construct(){	
	
		 $this->tableId = 'salary_id';
		 $this->model = HrmsSalary::class;
		 $this->moduleName = 'hrms';
		 $this->bUrl = $this->moduleName.'/salary-manage';

	}


	public function layout($pageName){
		$this->data['tableID'] = $this->tableId;
		$this->data['bUrl'] = $this->bUrl;		
		echo view($this->moduleName.'::salaries.'.$pageName.'', $this->data);
	}

    public function index(Request $request)
    {
        $this->data = [
            'title'         => 'Salary Management',
			'pageUrl'         => $this->bUrl,
            'employees'     => HrmsEmployee::all(),
            'categories'    => HrmsSalaryCategory::all(),
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
		// $queryData = HrmsSalary::orderBy( getOrder(HrmsSalary::$sortable, $this->tableId)['by'], getOrder(HrmsSalary::$sortable, $this->tableId)['order']);

        // dd(date('Y-m', strtotime('last month')));

        $queryData = DB::table('hrms_salaries')
                    ->join('hrms_employees', 'hrms_salaries.employee_id', '=', 'hrms_employees.employee_bpc_id')
                    ->leftJoin('hrms_salary_categories', 'hrms_salaries.category', '=', 'hrms_salary_categories.category_id')
                    ->select('hrms_salaries.*', 'hrms_employees.employee_bpc_id', 'hrms_employees.employee_name', 'hrms_employees.employee_basic_salary', 'hrms_salary_categories.category_name')
                    ->where('salary_date', date('Y-m'))
                    ->orderBy( getOrder(HrmsSalary::$sortable, $this->tableId)['by'], getOrder(HrmsSalary::$sortable, $this->tableId)['order']);

        if(empty($queryData)) {
            $queryData = DB::table('hrms_salaries')
                        ->join('hrms_employees', 'hrms_salaries.employee_id', '=', 'hrms_employees.employee_bpc_id')
                        ->leftJoin('hrms_salary_categories', 'hrms_salaries.category', '=', 'hrms_salary_categories.category_id')
                        ->select('hrms_salaries.*', 'hrms_employees.employee_bpc_id', 'hrms_employees.employee_name', 'hrms_employees.employee_basic_salary', 'hrms_salary_categories.category_name')
                        ->where('salary_date', date('Y-m', strtotime('last month')))
                        ->orderBy( getOrder(HrmsSalary::$sortable, $this->tableId)['by'], getOrder(HrmsSalary::$sortable, $this->tableId)['order']);
        }

		//filter by text.....
		if( $request->filled('filter') ){
			$this->data['filter'] = $filter = $request->get('filter');

			$queryData->where('hrms_employees.employee_name', 'like', '%'.$filter.'%')->where('salary_date', date('Y-m'));
			$queryData->orWhere('hrms_employees.employee_bpc_id', 'like', '%'.$filter.'%')->where('salary_date', date('Y-m'));
		}

		$this->data['allData'] =  $queryData->paginate($perPage)->appends( request()->query() ); // paginate
		$this->layout('index');

    }

    public function create()
    {
        $this->data = [
            'title'         => 'Add Salary For Employee',
            'page_icon'     => '<i class="fa fa-plus-circle"></i>',
            'employees'     => HrmsEmployee::all(),
            'objData'       => '',
        ];

		$this->layout('create');
    }

    public function edit($id)
    {
		$id = filter_var($id, FILTER_VALIDATE_INT);
		if( !$id ){ exit('Bad Request!'); }

        $this->data = [
            'title'         => 'Edit Salary',
			'page_icon'     => '<i class="fa fa-edit"></i>',
            'employees'     => HrmsEmployee::all(),
            'objData'       => $this->model::where($this->tableId, $id)->first(),
        ];

		$this->layout('create');
    }

    public function store(Request $request)
    {
        $id = $request[$this->tableId];

        $rules = [
            'employee_id'        => 'required',
            'salary_date'        => 'required',
        ];

        $attribute = [
            'employee_id'              => 'Employee Id',
            'salary_date'              => 'Date Of Salary',
        ];
        $customMessages =[];

        $validator = Validator::make($request->all(), $rules, $customMessages, $attribute);

        if ($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
        }

        $salaryStructure = HrmsSalaryStructure::where('employee_id', $request->employee_id)->first();

        if (empty($salaryStructure)){
			return redirect()->back()->withErrors("Make Salary Structure fot this Employee First")->withInput();
        }

        //// Additon ////
        $salaryAdditionObj = json_decode($salaryStructure->structure_addition);
        $salaryAddition = array ($salaryAdditionObj);
        $totalAddition = 0;
        for($i = 0; $i < count($salaryAddition[0]->amount); $i++){
            $totalAddition = $totalAddition + $salaryAddition[0]->amount[$i];
        }
        //// Additoin End ////

        //// Deduction ////
        $salaryDeductionObj = json_decode($salaryStructure->structure_deduction);
        $salaryDeduction = array ($salaryDeductionObj);
        $totalDeduction = 0;
        for($i = 0; $i < count($salaryDeduction[0]->deductionAmount); $i++){
            $totalDeduction += $salaryDeduction[0]->deductionAmount[$i];
        }
        //// Deduction End ////

        $checkIsExists = $this->model::where('employee_id', $request->employee_id)->where('salary_date', substr($request->salary_date, 0, 7))->first();


        //// Active and Partial Salary Count Start ////
        if(! empty($salaryStructure->active_salary)) {
            $employeeBasic = $salaryStructure->active_salary;
        } else {
            $employeeBasic = HrmsEmployee::where('employee_bpc_id', $request->employee_id)->pluck('employee_basic_salary')->first();
        }     

        if(! empty($salaryStructure->partial_day)) {
            $perdayBasic = $employeeBasic / 30;
            $payableSlary = $perdayBasic * $salaryStructure->partial_day;
        } else {
            $payableSlary = $employeeBasic;
        }
        //// Active and Partial Salary Count End ////

        if ( empty($id) ){
            // Insert Query
            if($checkIsExists) {
                $employee = HrmsEmployee::where('employee_bpc_id', $request->employee_id)->pluck('employee_name')->first();
                return redirect()->back()->withErrors("Salary has already been created for ".$employee." of ".date('F, Y', strtotime(substr($request->salary_date, 0, 7))))->withInput();
            }

            $salaryIssueNo = rand(100000, 1000000);

            $salaryData = [
                'employee_id' => $request['employee_id'],
                'issue_no' => $salaryIssueNo.'-'.$request['employee_id'],
                'salary_date' => substr($request['salary_date'], 0, 7),
                'salary_description' => $request['salary_description'],
                'salary_addition_details'   => $salaryStructure->structure_addition,
                'salary_deductiontion_details'   => $salaryStructure->structure_deduction,
                'category'      => $salaryStructure->category,
                'salary_total_addition'   => $totalAddition,
                'salary_total_deductiontion'   => $totalDeduction,
                'active_salary'         => $employeeBasic,
                'partial_day'           => $salaryStructure->partial_day,
                'partial_salary'        => $payableSlary,
                'salary_total'   => ceil($payableSlary) + $totalAddition - $totalDeduction,
            ];

            $this->model::create($salaryData);
            
            $loanManages = HrmsLoanManage::where('employee_id', $request->employee_id)->get();
            foreach($loanManages as $loanManage){
                $loanManageData = [
                    'installment_no' => $loanManage->installment_no + 1,
                    'paid_amount' => $loanManage->paid_amount + $loanManage->monthlyPayableAmount,
                    'rest_amount' => $loanManage->rest_amount - $loanManage->monthlyPayableAmount,
                ];
                $loanManage->where('loan_manage_id', $loanManage->loan_manage_id)->update($loanManageData);
            }

            $log_title = 'Hrms (Employee Id- '.$salaryData ['employee_id'] .') was created by '. Sentinel::getUser()->full_name;
            Logs::create($log_title,'salary_created');

			return redirect($this->bUrl)->with('success', 'Record Successfully Created.');

        }else{
            // Update Query
            $currentExists = $this->model::where('salary_id', $id)->first();
            if($checkIsExists == $currentExists) {
                if($request->is_update_salary == 1) {
                    $salaryData = [
                        'employee_id' => $request['employee_id'],
                        'salary_date' => substr($request['salary_date'], 0, 7),
                        'salary_description' => $request['salary_description'],
                        'salary_addition_details'   => $salaryStructure->structure_addition,
                        'salary_deductiontion_details'   => $salaryStructure->structure_deduction,
                        'salary_total_addition'   => $totalAddition,
                        'salary_total_deductiontion'   => $totalDeduction,
                        'active_salary'         => $employeeBasic,
                        'partial_day'           => $salaryStructure->partial_day,
                        'partial_salary'        => $payableSlary,
                        'salary_total'   => ceil($payableSlary) + $totalAddition - $totalDeduction,
                        'category'      => $salaryStructure->category,
                    ];
                } else {
                    $salaryData = [
                        'employee_id' => $request['employee_id'],
                        'salary_date' => substr($request['salary_date'], 0, 7),
                        'salary_description' => $request['salary_description'],
                    ];
                }            
                
                $this->model::where($this->tableId, $id)->update($salaryData);

                $log_title = 'Hrms (Employee Id- '.$salaryData ['employee_id'] .') was updated by '. Sentinel::getUser()->full_name;
                Logs::create($log_title,'salary_updated');

                return redirect($this->bUrl)->with('success', 'Successfully Updated');
            } elseif($checkIsExists) {
                $employee = HrmsEmployee::where('employee_bpc_id', $request->employee_id)->pluck('employee_name')->first();
                return redirect()->back()->withErrors("Salary has already been created for ".$employee." of ".date('F, Y', strtotime(substr($request->salary_date, 0, 7))))->withInput();
            } else {
                if($request->is_update_salary == 1) {
                    $salaryData = [
                        'employee_id' => $request['employee_id'],
                        'salary_date' => substr($request['salary_date'], 0, 7),
                        'salary_description' => $request['salary_description'],
                        'salary_addition_details'   => $salaryStructure->structure_addition,
                        'salary_deductiontion_details'   => $salaryStructure->structure_deduction,
                        'salary_total_addition'   => $totalAddition,
                        'salary_total_deductiontion'   => $totalDeduction,
                        'active_salary'         => $employeeBasic,
                        'partial_day'           => $salaryStructure->partial_day,
                        'partial_salary'        => $payableSlary,
                        'salary_total'   => ceil($payableSlary) + $totalAddition - $totalDeduction,
                        'category'      => $salaryStructure->category,
                    ];
                } else {
                    $salaryData = [
                        'employee_id' => $request['employee_id'],
                        'salary_date' => substr($request['salary_date'], 0, 7),
                        'salary_description' => $request['salary_description'],
                    ];
                }            
                
                $this->model::where($this->tableId, $id)->update($salaryData);

                $log_title = 'Hrms (Employee Id- '.$salaryData ['employee_id'] .') was updated by '. Sentinel::getUser()->full_name;
                Logs::create($log_title,'salary_updated');

                return redirect($this->bUrl)->with('success', 'Successfully Updated');
            }
        }
    }

    public function show($id)
    {		
		$id = filter_var($id, FILTER_VALIDATE_INT);
		if( !$id ){ exit('Bad Request!'); }

        $this->data = [
            'title'         => 'Salary Manage',
			'page_icon'     => '<i class="fa fa-eye"></i>',
            'employees'     => HrmsEmployee::all('employee_bpc_id', 'employee_name'),
            'categories'    => HrmsSalaryCategory::all(),
            'objData'       => $this->model::where($this->tableId, $id)->first(),
        ];	       

		$this->layout('view');

    }

    public function destroy(Request $request, $id)
    {
		$id = filter_var($id, FILTER_VALIDATE_INT);
		if( !$id ){ exit('Bad Request!'); }

        $this->data = [
            'title'     => 'Delete Salary Sheet',
            'pageUrl'   => $this->bUrl.'/delete/'.$id,
			'page_icon' => '<i class="fa fa-trash"></i>',
            'objData'   => $this->model::where($this->tableId, $id)->first(),
        ];

		$this->data['tableID'] = $this->tableId;
		$this->data['bUrl'] = $this->bUrl;

		if($request->method() === 'POST' ){
			  
            $employee = $this->data['objData']->employee_id;

            $this->model::where($this->tableId, $id)->delete();

            $log_title = 'Hrms (Employee Id - '.$employee.') salary was deleted by '. Sentinel::getUser()->full_name;
            Logs::create($log_title,'salary_delete');

			echo json_encode(['fail' => FALSE, 'error_messages' => "Salary Sheet was deleted."]);
		}else{
			return view($this->moduleName.'::salaries.delete', $this->data);
		}

    }


    public function fetch_salary_details(Request $request)
    {
        // $employeeSalary = HrmsSalary::where('employee_id', $request->employee_id)->where('salary_date', date('Y-m'))->first();
        $employee = HrmsEmployee::where('employee_bpc_id', $request->employee_id)->first();
        $designation = DB::table('hrms_designations')->where('desg_id', $employee->employee_designation)->select('desg_title')->first();
        return view($this->moduleName.'::salaries.employeeDetails', compact('employee', 'designation'));
    }

    //// make salary for all employee ////
    public function create_salary(Request $request)
    {
        $rules = [
            'salary_date'        => 'required',
        ];

        $attribute = [
            'salary_date'              => 'Date Of Salary',
        ];

        $customMessages =[];

        $validator = Validator::make($request->all(), $rules, $customMessages, $attribute);

        if ($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
        }

        $employeeSalaries = DB::table('hrms_salaries')
                            ->join('hrms_salary_structures', 'hrms_salaries.employee_id', '=', 'hrms_salary_structures.employee_id')
                            ->where('salary_date', $request->salary_date)
                            ->select('hrms_salaries.employee_id')
                            ->get();
        

        $ids = [];

        foreach ($employeeSalaries as $employeeSalary) {
            array_push($ids, $employeeSalary->employee_id);        
        }

        $employeeStructures = HrmsSalaryStructure::whereNotIn('employee_id', $ids)->get();

        if(! count($employeeStructures) > 0) {
            return back()->with('success', 'Salary has already created. Nothing is found to create.');
        }

        foreach ($employeeStructures as $salaryStructure) {
            //// Additon ////
            $salaryAdditionObj = json_decode($salaryStructure->structure_addition);
            $salaryAddition = array ($salaryAdditionObj);
            $totalAddition = 0;
            for($i = 0; $i < count($salaryAddition[0]->amount); $i++){
                $totalAddition = $totalAddition + $salaryAddition[0]->amount[$i];
            }
            //// Additoin End ////

            //// Deduction ////
            $salaryDeductionObj = json_decode($salaryStructure->structure_deduction);
            $salaryDeduction = array ($salaryDeductionObj);
            $totalDeduction = 0;
            for($i = 0; $i < count($salaryDeduction[0]->deductionAmount); $i++){
                $totalDeduction += $salaryDeduction[0]->deductionAmount[$i];
            }
            //// Deduction End ////

            $employee = HrmsEmployee::where('employee_bpc_id', $salaryStructure->employee_id)->first();
            $designation = DB::table('hrms_designations')->where('desg_id', $employee->employee_designation)->select('desg_title')->first();

            $salary_description = "<p>(a)&nbsp; NID No. ". $employee->employee_nid ."</p>
            <p>(b)&nbsp; Scale: ". $employee->employee_basic_salary ."/- (Grade-". $employee->employee_payscale_grade .")</p>
            <p>(c)&nbsp; G P F Deduction = ". ($employee->employee_basic_salary * 10) / 100 ."/-</p>
            <p>(d)&nbsp; Basic Pay = ".$employee->employee_basic_salary ."/-</p>
            <p>(e)&nbsp; Date Of Joining: ". $employee->employee_join_date ." (". $designation->desg_title .")</p>
            <p>(f)&nbsp; BPC Joining Date: ".$employee->employee_confirm_g_o_date ."</p>";

            $salaryIssueNo = rand(100000, 1000000);

            //// Partial or full salary make ////
            if(! empty($salaryStructure->active_salary)) {
                $employeeBasic = $salaryStructure->active_salary;
            } else {
                $employeeBasic = $employee->employee_basic_salary;
            }     
    
            if(! empty($salaryStructure->partial_day)) {
                $perdayBasic = $employeeBasic / 30;
                $payableSlary = $perdayBasic * $salaryStructure->partial_day;
            } else {
                $payableSlary = $employeeBasic;
            }
            // dd($employeeBasic);

            $salaryData = [
                'employee_id' => $salaryStructure->employee_id,
                'issue_no' => $salaryIssueNo.'-'.$salaryStructure->employee_id,
                'salary_date' => $request->salary_date,
                'salary_description' => $salary_description,
                'salary_addition_details'   => $salaryStructure->structure_addition,
                'salary_deductiontion_details'   => $salaryStructure->structure_deduction,
                'salary_total_addition'   => $totalAddition,
                'salary_total_deductiontion'   => $totalDeduction,
                'active_salary'         => $employeeBasic,
                'partial_day'           => $salaryStructure->partial_day,
                'partial_salary'        => $payableSlary,
                'salary_total'   => ceil($payableSlary) + $totalAddition - $totalDeduction,
                'category'      => $salaryStructure->category,
            ];

            $this->model::create($salaryData);
            
            //// For Message ////
            // $personalLoan = 0;
            ////
            $loanManages = HrmsLoanManage::where('employee_id', $salaryStructure->employee_id)->get();

            foreach($loanManages as $loanManage){
                $loanManageData = [
                    'installment_no' => $loanManage->installment_no + 1,
                    'paid_amount' => $loanManage->paid_amount + $loanManage->monthlyPayableAmount,
                    'rest_amount' => $loanManage->rest_amount - $loanManage->monthlyPayableAmount,
                ];
                $loanManage->where('loan_manage_id', $loanManage->loan_manage_id)->update($loanManageData);

                //// For Message ////
                // $personalLoan = $personalLoan + $loanManage->monthlyPayableAmount;
                ////
            }

            $log_title = 'Hrms (Employee Id- '.$salaryData ['employee_id'] .') was created by '. Sentinel::getUser()->full_name;
            Logs::create($log_title,'salary_created');

            //// For Message //// 
            // $totalEmployee++;
            // $totalBasic = $totalBasic + $employee->employee_basic_salary;
            // $totalAdd = $totalAdd + $totalAddition;
            // $totalDeduc = $totalDeduc + $totalDeduction;
            // $totalPaidLoan = $totalPaidLoan + $personalLoan;
            
        }

        return redirect($this->bUrl)->with('success', 'Salary Created Successfully.');
    }

    public function create_salary_overview()
    {
        $salaryStructures = DB::table('hrms_salary_structures')
                            ->select('*')
                            ->get();
        

        //// For Message ////
        $totalEmployee = 0;
        $totalBasic = 0;
        $totalAdd = 0;
        $totalDeduc = 0;
        ////

        foreach ($salaryStructures as $salaryStructure) {
            //// Additon ////
            $salaryAdditionObj = json_decode($salaryStructure->structure_addition);
            $salaryAddition = array ($salaryAdditionObj);
            $totalAddition = 0;
            for($i = 0; $i < count($salaryAddition[0]->amount); $i++){
                $totalAddition = $totalAddition + $salaryAddition[0]->amount[$i];
            }
            //// Additoin End ////

            //// Deduction ////
            $salaryDeductionObj = json_decode($salaryStructure->structure_deduction);
            $salaryDeduction = array ($salaryDeductionObj);
            $totalDeduction = 0;
            for($i = 0; $i < count($salaryDeduction[0]->deductionAmount); $i++){
                $totalDeduction += $salaryDeduction[0]->deductionAmount[$i];
            }
            //// Deduction End ////

            //// For Message //// 
            $basic = HrmsEmployee::where('employee_bpc_id', $salaryStructure->employee_id)->pluck('employee_basic_salary')->first();

            if(! empty($salaryStructure->active_salary)) {
                $employeeBasic = $salaryStructure->active_salary;
            } else {
                $employeeBasic = HrmsEmployee::where('employee_bpc_id', $salaryStructure->employee_id)->pluck('employee_basic_salary')->first();
            }     
    
            if(! empty($salaryStructure->partial_day)) {
                $perdayBasic = $employeeBasic / 30;
                $payableSlary = $perdayBasic * $salaryStructure->partial_day;
            } else {
                $payableSlary = $employeeBasic;
            }

            $totalEmployee++;
            $totalBasic = $totalBasic + $payableSlary;
            
            $totalAdd = $totalAdd + $totalAddition;
            $totalDeduc = $totalDeduc + $totalDeduction;
            
        }

        $title = "Total Employee Salary Overview";
        $pageUrl   = $this->bUrl;
		$page_icon = '<i class="fa fa-book"></i>';

        return view($this->moduleName.'::salaries.salaryDetails', compact('totalEmployee', 'totalBasic', 'totalAdd', 'totalDeduc', 'title', 'pageUrl', 'page_icon'));
    }


    //// Salary Structure Start ////
    public function filter_pay_slip()
	{
		$this->data = [
			'title'         => 'Filter Date & Employee',
			'pageUrl'         => 'hrms/filter/pay-slip',
			'employees'  => HrmsEmployee::all('employee_bpc_id', 'employee_name'),
			'page_icon'     => '<i class="fa fa-book"></i>',
		];
		$this->layout('filterPaySlip');
	}

	public function pay_slip(Request $request)
	{	
		$rules = [
			'employee_id' 	=> 'required',
			'month_year'		=> 'required',
		];

		$attribute =[
			'employee_id'		=> 'Employee',
			'month_year'		=> 'Time'
		];

		$customMessages =[];

		$validator = Validator::make($request->all(), $rules, $customMessages, $attribute);

		if ($validator->fails()){
		    return redirect()->back()->withErrors($validator)->withInput();
		}

		$employeeSalaryStructure = DB::table('hrms_salaries')
					->join('hrms_employees', 'hrms_salaries.employee_id', '=', 'hrms_employees.employee_bpc_id')
					->LeftJoin('hrms_designations', 'hrms_employees.employee_designation', '=', 'hrms_designations.desg_id')
					->select('hrms_salaries.*', 'hrms_employees.employee_name', 'hrms_employees.employee_basic_salary', 'hrms_designations.desg_title')
					->where('hrms_salaries.employee_id', $request->employee_id)
					->where('hrms_salaries.salary_date', $request->month_year)
					->first();

		$title = "Pay Slip";
		$page_icon = '<i class="fa fa-book"></i>';
		// $pageUrl = $this->bUrl;

		return view($this->moduleName.'::salaries.paySlip', compact('employeeSalaryStructure', 'title', 'page_icon'));

	}
    //// Salary Structure End //// 

}
