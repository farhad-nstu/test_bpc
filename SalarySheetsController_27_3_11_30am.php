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
use DB;

class SalarySheetsController extends Controller
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
		 $this->bUrl = $this->moduleName.'/salary-sheets';

	}


	public function layout($pageName){
		$this->data['tableID'] = $this->tableId;
		$this->data['bUrl'] = $this->bUrl;		
		echo view($this->moduleName.'::salarySheets.'.$pageName.'', $this->data);
	}

    public function salary_sheets(Request $request)
    {
        $this->data = [
            'title'         => 'Salary Sheets',
			'pageUrl'         => $this->bUrl,
            'addRules' => HrmsSalaryRules::where('rules_type', 'addition')->get(),
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

        $queryData = DB::table('hrms_salaries')
        ->join('hrms_employees', 'hrms_salaries.employee_id', '=', 'hrms_employees.employee_bpc_id')
        ->leftJoin('hrms_designations', 'hrms_employees.employee_designation', '=', 'hrms_designations.desg_id')
        ->select('hrms_salaries.salary_addition_details', 'hrms_salaries.salary_deductiontion_details', 'hrms_salaries.salary_total_addition', 'hrms_salaries.salary_total_deductiontion', 'hrms_employees.employee_bpc_id', 'hrms_employees.employee_name', 'hrms_employees.employee_nid', 'hrms_employees.employee_basic_salary', 'hrms_designations.desg_title')
        ->where('salary_date', date('Y-m'));


		//filter by text.....
		if( $request->filled('filter') ){
			$this->data['filter'] = $filter = $request->get('filter');
            $queryData->where('hrms_employees.employee_name', 'like', '%'.$filter.'%');           
		}

		$this->data['allData'] =  $queryData->paginate($perPage)->appends( request()->query() ); // paginate
		$this->layout('salarySheets');
    }

    public function fetch_timewise_salary()
    {
        $title = "Salary Sheet";
        return view('hrms::salarySheets.timewiseSalary', compact('title'));
    }

    public function fetch_timewise_salaries(Request $request)
    {
        $date = substr($request->place_date, 0, 7);
        $queryData = HrmsSalary::where('salary_date', $date)->get();
        $title = "Salary Sheet";
        $addRules = HrmsSalaryRules::where('rules_type', 'addition')->get();
        $deducRules = HrmsSalaryRules::where('rules_type', 'deduction')->get();
        $loans = HrmsLoan::all();
        $date = $request->place_date;
        return view('hrms::salarySheets.timewiseSalaries', compact('queryData', 'title', 'addRules', 'deducRules', 'loans', 'date'));
    }

    public function view_single_salary_page()
    {
        $title = "Single Salary Page";
        $employees = HrmsEmployee::all();
        return view('hrms::salarySheets.singleSalary', compact('title', 'employees'));
    }

    public function single_salary_sheet(Request $request)
    {
        if(empty($request->place_date)) {
            $query = HrmsSalary::where('employee_id', $request->employee_id)->where('salary_date', date('Y-m'))->first();
            $title = "Salary Sheet Of ".date('F Y', strtotime(date('Y-m')));
        } else {
            $query = HrmsSalary::where('employee_id', $request->employee_id)->where('salary_date', substr($request->place_date, 0, 7))->first();
            $title = "Salary Sheet Of ".date('F Y', strtotime(substr($request->place_date, 0, 7)));
        }		
        
        $addRules = HrmsSalaryRules::where('rules_type', 'addition')->get();
        $deducRules = HrmsSalaryRules::where('rules_type', 'deduction')->get();
        $loans = HrmsLoanManage::where('employee_id', $request->employee_id)->get();
        return view('hrms::salarySheets.singleSheet', compact('query', 'title', 'addRules', 'deducRules', 'loans'));
    }
}
