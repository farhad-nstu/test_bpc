<?php

namespace Modules\Hrms\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Hrms\Entities\HrmsEmployee;
use Modules\Hrms\Entities\HrmsSalaryRules;
use Modules\Hrms\Entities\HrmsLoanManage;
use Modules\Hrms\Entities\HrmsLoan;
use Modules\Hrms\Entities\HrmsSalary;
use Modules\Hrms\Entities\HrmsDesignation;
use Modules\Hrms\Entities\HrmsSalaryCategory;
use DB;
use Modules\Hrms\Entities\HrmsFestival;

class ReportsController extends Controller
{
	private $moduleName;
	private $data;
	private $bUrl;

	public function __construct(){	

		$this->moduleName = 'hrms';
		$this->bUrl = $this->moduleName.'/report';

	}

	public function layout($pageName){
		$this->data['bUrl'] = $this->bUrl;		
		echo view($this->moduleName.'::reports.'.$pageName.'', $this->data);
	}

	public function category_total_salary(Request $request)
	{       
		$this->data = [
			'title'         => 'Category wise salary of '.date('F Y', strtotime(date('Y-m'))),
			'pageUrl'         => $this->bUrl,
			'page_icon'     => '<i class="fa fa-book"></i>',
		];

		//result per page
		$perPage = session('per_page') ?: 3;

		//table item serial starting from 0
		$this->data['serial'] = ( ($request->get('page') ?? 1) -1) * $perPage;

		if($request->method() === 'POST'){
			session(['per_page' => $request->post('per_page') ]);
		}

		$queryData = HrmsSalaryCategory::orderBy('category_id', 'asc');

		//filter by text.....
		if( $request->filled('filter') ){
			$this->data['filter'] = $filter = $request->get('filter');

			$queryData->where('category_name', 'like', '%'.$filter.'%');
		}

		$this->data['allData'] =  $queryData->paginate($perPage)->appends( request()->query() ); // paginate
		$this->layout('categorySalaries');
	}

	public function monthly_deduction_list(Request $request)
	{  	
		$this->data = [
			'title'         => 'Deduction Summery For The Month of '.date('F Y', strtotime(date('Y-m'))),
			'pageUrl'         => $this->bUrl,
			'categories'  => HrmsSalaryCategory::where('category_name', '<>', 'chairman')->where('category_name', '<>', 'Dir(Planing)')->get(),
			'deducRules' => HrmsSalaryRules::where('rules_type', 'deduction')->get(),
			'loans' => HrmsLoan::all(),
			'page_icon'     => '<i class="fa fa-book"></i>',
		];

		//result per page
		$perPage = session('per_page') ?: 3;

		//table item serial starting from 0
		$this->data['serial'] = ( ($request->get('page') ?? 1) -1) * $perPage;

		if($request->method() === 'POST'){
			session(['per_page' => $request->post('per_page') ]);
		}
				
		$queryData = HrmsSalary::where('salary_date', date('Y-m'));

		//filter by text.....
		if( $request->filled('filter') ){
			$this->data['filter'] = $filter = $request->get('filter');

			$queryData->where('employee_id', 'like', '%'.$filter.'%');
		}

		$this->data['allData'] =  $queryData->paginate($perPage)->appends( request()->query() ); // paginate
		$this->layout('monthlyDeductionList');

	}

	//// Category Deduction Start ////
	public function insert_category()
	{
		$this->data = [
			'title'         => 'Insert category to find out deduction',
			'pageUrl'         => $this->bUrl,
			'categories'  => HrmsSalaryCategory::where('category_name', '<>', 'chairman')->where('category_name', '<>', 'Dir(Planing)')->get(),
			'page_icon'     => '<i class="fa fa-book"></i>',
		];

		$this->layout('findCategory');
	}

	public function category_wise_deduction(Request $request)
	{
		$this->data = [
			'title'         => 'Deduction Pay & Allowance Ment For The Month of '.date('F Y', strtotime(date('Y-m'))),
			'pageUrl'         => $this->bUrl,
			'deducRules' => HrmsSalaryRules::where('rules_type', 'deduction')->get(),
			'loans' => HrmsLoan::all(),
			'page_icon'     => '<i class="fa fa-book"></i>',
		];

		//result per page
		$perPage = session('per_page') ?: 3;

		//table item serial starting from 0
		$this->data['serial'] = ( ($request->get('page') ?? 1) -1) * $perPage;

		if($request->method() === 'POST'){
			session(['per_page' => $request->post('per_page') ]);
		}

		// $category = HrmsSalaryCategory::where('category_name', 'Officer(Bank)')->first();
		$queryData = HrmsSalary::where('salary_date', substr($request->place_date, 0, 7))->where('category', $request->category_id);

		//filter by text.....
		if( $request->filled('filter') ){
			$this->data['filter'] = $filter = $request->get('filter');

			$queryData->where('employee_id', 'like', '%'.$filter.'%');
		}

		$this->data['allData'] =  $queryData->paginate($perPage)->appends( request()->query() ); // paginate
		$this->layout('catWiseDeduction');
	}
	//// Category Deduction End ////

	//// Employee Salary Start ////
	public function insert_employee()
	{
		$this->data = [
						'title'         => 'Insert employee to make report',
			'pageUrl'         => $this->bUrl,
						'employees'  => HrmsEmployee::all('employee_bpc_id', 'employee_name'),
						'page_icon'     => '<i class="fa fa-book"></i>',
				];
		$this->layout('findEmployee');
	}

	public function single_employee(Request $request)
	{		
		$employee = DB::table('hrms_salary_structures')
					->join('hrms_employees', 'hrms_salary_structures.employee_id', '=', 'hrms_employees.employee_bpc_id')
					->select('hrms_salary_structures.*', 'hrms_employees.employee_name', 'hrms_employees.employee_basic_salary', 'hrms_employees.employee_designation')
					->where('hrms_salary_structures.employee_id', $request->employee_id)
					->first();
		$designation = HrmsDesignation::where('desg_id', $employee->employee_designation)->select('desg_title')->first();
		$title = "Employee Salary Structure";
		return view('hrms::reports.singleEmployee', compact('employee', 'designation', 'title'));		
	}
	//// Employee Salary End ////

	//// Income Tax Start ////
	public function insert_employee_for_income_tax()
	{
		$this->data = [
			'title'         => 'Insert employee to make income tax report',
			'pageUrl'         => $this->bUrl,
			'page_icon'     => '<i class="fa fa-book"></i>',
		];

		$this->layout('findEmployeeForIncomeTax');
	}

	public function employee_income_tax(Request $request)
	{	
		$f=date('d-m-Y',strtotime($request->from_date));		
		$t=date('d-m-Y',strtotime($request->to_date));
		$nodays=(strtotime($t) - strtotime($f))/ (60 * 60 * 24);
		$months = floor($nodays / 30);

		$from = substr($request->from_date, 0, 7);		
		$to = substr($request->to_date, 0, 7);

		if(empty($request->to_date)) {
			$employees = DB::table('hrms_salaries')
					->join('hrms_employees', 'hrms_salaries.employee_id', '=', 'hrms_employees.employee_bpc_id')
					->LeftJoin('hrms_designations', 'hrms_employees.employee_designation', '=', 'hrms_designations.desg_id')
					->select('hrms_salaries.employee_id', 'hrms_salaries.salary_deductiontion_details', 'hrms_salaries.salary_date', 'hrms_employees.employee_name', 'hrms_designations.desg_title')
					->where('hrms_salaries.salary_date', substr($request->from_date, 0, 7))
					->get();

			$title = "Employee Salary Structure";
			return view('hrms::reports.singleIncomeTax', compact('employees', 'title', 'from'));

		} else {			
			$employees = DB::table('hrms_salary_structures')
					->join('hrms_employees', 'hrms_salary_structures.employee_id', '=', 'hrms_employees.employee_bpc_id')
					->LeftJoin('hrms_designations', 'hrms_employees.employee_designation', '=', 'hrms_designations.desg_id')
					->select('hrms_salary_structures.employee_id', 'hrms_employees.employee_name', 'hrms_designations.desg_title')
					->get();
			
			$title = "Employee Salary Structure";
			return view('hrms::reports.incomeTax', compact('employees', 'title', 'from', 'to', 'months'));
		}

				
	}
	//// Income Tax End ////

	//// Allowance Details ////
	public function insert_employee_for_allowance_details(Request $request)
	{
		$this->data = [
			'title'         => 'Insert employee and date for allowance report',
			'pageUrl'         => $this->bUrl,
			'employees'  => HrmsEmployee::all('employee_bpc_id', 'employee_name'),
			'page_icon'     => '<i class="fa fa-book"></i>',
		];

		$this->layout('filterForallowanceDetails');
	}	

	public function allowance_details(Request $request)
	{
		$from = $request->from_date;
		$to = $request->to_date;

		$f=date('d-m-Y',strtotime($from));		
		$t=date('d-m-Y',strtotime($to));
		$nodays=(strtotime($t) - strtotime($f))/ (60 * 60 * 24);
		$months = ceil($nodays / 30);

		$salaries = DB::table('hrms_salaries')
					->join('hrms_employees', 'hrms_salaries.employee_id', '=', 'hrms_employees.employee_bpc_id')
					->LeftJoin('hrms_designations', 'hrms_employees.employee_designation', '=', 'hrms_designations.desg_id')
					->select('hrms_salaries.employee_id', 'hrms_salaries.salary_deductiontion_details', 'hrms_salaries.salary_date', 'hrms_salaries.salary_addition_details', 'hrms_employees.employee_name', 'hrms_employees.employee_basic_salary', 'hrms_designations.desg_title')
					->whereBetween('hrms_salaries.salary_date', [substr($from, 0, 7), substr($to, 0, 7)])
					->where('hrms_salaries.employee_id', $request->employee_id)
					->get();

		$title = "Employee Salary Structure";

		
		$allAllowance = [];
		$allAllowanceAmount = [];

		$allDeduction = [];
		$allDeductionAmount = [];

		$gpf = ($salaries[0]->employee_basic_salary * 10) / 100;
		array_push($allDeduction, "GPF");
		array_push($allDeductionAmount, $gpf);	

		foreach($salaries as $salary) {

			//// Allowance End ////
			$allowances = json_decode($salary->salary_addition_details);
			
			for($i = 0; $i < count($allowances->rule_id); $i++) {

				$salaryRule = HrmsSalaryRules::where('rules_id', $allowances->rule_id[$i])->select('rules_name', 'rules_amount')->first();

				if(! in_array($salaryRule->rules_name, $allAllowance)) {
					array_push($allAllowance, $salaryRule->rules_name);
				}

				if(! in_array($salaryRule->rules_amount, $allAllowanceAmount)) {
					array_push($allAllowanceAmount, $salaryRule->rules_amount);
				}					

			}
			//// Allowance Count ////
			
			//// Deduction Count ////
			$deductions = json_decode($salary->salary_deductiontion_details);
			
			for($j = 0; $j < count($deductions->deductionRule_id); $j++) {

				$salaryDeducRule = HrmsSalaryRules::where('rules_id', $deductions->deductionRule_id[$j])->select('rules_name', 'rules_amount')->first();

				if(! in_array($salaryDeducRule->rules_name, $allDeduction)) {
					array_push($allDeduction, $salaryDeducRule->rules_name);
				}

				if(! in_array($salaryDeducRule->rules_amount, $allDeductionAmount)) {
					array_push($allDeductionAmount, $salaryDeducRule->rules_amount);
				}					

			}				
			//// Deduction End ////
			
		}		
	
		return view('hrms::reports.allowanceDetails', compact('salaries', 'title', 'from', 'to', 'months', 'allAllowance', 'allAllowanceAmount', 'allDeduction', 'allDeductionAmount'));
	}
	//// Allowance Details End ////

	//// Festival ////
	public function filter_festival()
	{
		$this->data = [
			'title'         => 'Filter festival for making report',
			'pageUrl'         => $this->bUrl,
			'festivals'  => HrmsFestival::all(),
			'page_icon'     => '<i class="fa fa-book"></i>',
		];
		
		$this->layout('filterFestival');
	}

	public function festival_bonus(Request $request)
	{
		$title = 'Festival Bonus';

		if($request->festival_id == 6) {
			$allData = DB::table('hrms_employees')
					->LeftJoin('hrms_designations', 'hrms_employees.employee_designation', '=', 'hrms_designations.desg_id')
					->LeftJoin('hrms_banks', 'hrms_employees.employee_bpc_id', '=', 'hrms_banks.employee_id')
					->select('hrms_employees.employee_bpc_id', 'hrms_employees.employee_name', 'hrms_employees.employee_basic_salary', 'hrms_designations.desg_title', 'hrms_banks.account_no', 'hrms_banks.branch')
					->get();
		} else {
			$allData = DB::table('hrms_festivals')
					->join('hrms_employees', 'hrms_festivals.religion_id', '=', 'hrms_employees.employee_religion')
					->LeftJoin('hrms_designations', 'hrms_employees.employee_designation', '=', 'hrms_designations.desg_id')
					->LeftJoin('hrms_banks', 'hrms_employees.employee_bpc_id', '=', 'hrms_banks.employee_id')
					->select('hrms_employees.employee_bpc_id', 'hrms_employees.employee_name', 'hrms_employees.employee_basic_salary', 'hrms_designations.desg_title', 'hrms_festivals.festival_name', 'hrms_banks.account_no', 'hrms_banks.branch')
					->where('hrms_festivals.festival_id', $request->festival_id)->get();
					
		}

		return view('hrms::reports.festivalBonus', compact('allData', 'title'));
	}

}
