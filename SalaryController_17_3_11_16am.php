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
use Auth;
use Modules\Hrms\Entities\HrmsLoanManage;

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
		$queryData = HrmsSalary::orderBy( getOrder(HrmsSalary::$sortable, $this->tableId)['by'], getOrder(HrmsSalary::$sortable, $this->tableId)['order']);

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
            'title'         => 'Add Salary For Employee',
            'page_icon'     => '<i class="fa fa-book"></i>',
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
			'page_icon'     => '<i class="fa fa-book"></i>',
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

        $employeeBasic = HrmsEmployee::where('employee_bpc_id', $request->employee_id)->pluck('employee_basic_salary')->first();
        $checkIsExists = $this->model::where('employee_id', $request->employee_id)->where('salary_date', substr($request->salary_date, 0, 7))->first();

        if ( empty($id) ){
            // Insert Query
            if($checkIsExists) {
                return redirect()->back()->withErrors("Already have made salary sheet for this employee of this month");
            }

            $loans = HrmsLoanManage::where('employee_id', $request->employee_id)->get();
            $paid = [];
            $installment_no = [];
            foreach ($loans as $loan) {
                array_push($paid, $loan->paid_amount);
                array_push($installment_no, $loan->installment_no);
            }
            
            // $loanData = json_encode(array_map(null, $installment_no, $paid));

            $salaryData = [
                'employee_id' => $request['employee_id'],
                'salary_date' => substr($request['salary_date'], 0, 7),
                'salary_description' => $request['salary_description'],
                'salary_addition_details'   => $salaryStructure->structure_addition,
                'salary_deductiontion_details'   => $salaryStructure->structure_deduction,
                'loans'                 => json_encode(array_map(null, $installment_no, $paid)),
                'salary_total_addition'   => $totalAddition,
                'salary_total_deductiontion'   => $totalDeduction,
                'salary_total'   => $employeeBasic + $totalAddition - $totalDeduction,
            ];
            

            $this->model::create($salaryData);
            $logData = [
                'log_title' => 'Employee(Id-'.$request['employee_id'].') Salary Created',
                'log_type'  => 'Employee Section Updated',
                'log_amount'=> 1,
                'log_creator'=> Auth::id(),
                'log_date' => date("Y-m-d"),
            ];
            DB::table('tbl_logs')->insert($logData);
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
                        'salary_total'   => $employeeBasic + $totalAddition - $totalDeduction,
                    ];
                } else {
                    $salaryData = [
                        'employee_id' => $request['employee_id'],
                        'salary_date' => substr($request['salary_date'], 0, 7),
                        'salary_description' => $request['salary_description'],
                    ];
                }            
                
                $this->model::where($this->tableId, $id)->update($salaryData);
                $logData = [
                    'log_title' => 'Employee(Id-'.$request['employee_id'].') Posting Updated',
                    'log_type'  => 'Employee Section Updated',
                    'log_amount'=> 1,
                    'log_creator'=> Auth::id(),
                    'log_date' => date("Y-m-d"),
                ];
                DB::table('tbl_logs')->insert($logData);
                return redirect($this->bUrl)->with('success', 'Successfully Updated');
            } elseif($checkIsExists) {
                return redirect()->back()->withErrors("Already has made salary sheet for this employee of this month");
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
                        'salary_total'   => $employeeBasic + $totalAddition - $totalDeduction,
                    ];
                } else {
                    $salaryData = [
                        'employee_id' => $request['employee_id'],
                        'salary_date' => substr($request['salary_date'], 0, 7),
                        'salary_description' => $request['salary_description'],
                    ];
                }            
                
                $this->model::where($this->tableId, $id)->update($salaryData);
                $logData = [
                    'log_title' => 'Employee(Id-'.$request['employee_id'].') Posting Updated',
                    'log_type'  => 'Employee Section Updated',
                    'log_amount'=> 1,
                    'log_creator'=> Auth::id(),
                    'log_date' => date("Y-m-d"),
                ];
                DB::table('tbl_logs')->insert($logData);
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
			'page_icon'     => '<i class="fa fa-book"></i>',
            'employees'     => HrmsEmployee::all('employee_bpc_id', 'employee_name'),
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
			'page_icon' => '<i class="fa fa-book"></i>',
            'objData'   => $this->model::where($this->tableId, $id)->first(),
        ];

		$this->data['tableID'] = $this->tableId;
		$this->data['bUrl'] = $this->bUrl;

		if($request->method() === 'POST' ){
			  $this->model::where($this->tableId, $id)->delete();
              $logData = [
                'log_title' => 'Employee(Id-'.$this->data['objData']->employee_id.') Salary Sheet Deleted',
                'log_type'  => 'Employee Section Updated',
                'log_amount'=> 1,
                'log_creator'=> Auth::id(),
                'log_date' => date("Y-m-d"),
            ];
            DB::table('tbl_logs')->insert($logData);
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

}
