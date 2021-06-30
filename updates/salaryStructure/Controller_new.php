<?php

namespace Modules\Hrms\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Hrms\Entities\HrmsSalaryStructure;
use Validator;
use Modules\Hrms\Entities\HrmsEmployee;
use Modules\Hrms\Entities\HrmsSalaryRules;
use Modules\Hrms\Entities\HrmsSalaryCategory;
use App\Helpers\Logs;
use Sentinel;
use DB;

class SalaryStructureController extends Controller
{
    private $model;
	private $moduleName;
	private $data;
	private $tableId;
	private $bUrl;

	public function __construct(){	
	
		 $this->tableId = 'structure_id';
		 $this->model = HrmsSalaryStructure::class;
		 $this->moduleName = 'hrms';
		 $this->bUrl = $this->moduleName.'/salary-structure';

	}


	public function layout($pageName){
		$this->data['tableID'] = $this->tableId;
		$this->data['bUrl'] = $this->bUrl;		
		echo view($this->moduleName.'::salaryStructure.'.$pageName.'', $this->data);
	}

    public function index(Request $request)
    {
        $this->data = [
            'title'         => 'Salary Structure Management',
			'pageUrl'         => $this->bUrl,
            'employees'     => HrmsEmployee::all(),
            'rules'     => HrmsSalaryRules::all(),
            'categories'     => HrmsSalaryCategory::all(),
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
		// $queryData = HrmsSalaryStructure::orderBy( getOrder(HrmsSalaryStructure::$sortable, $this->tableId)['by'], getOrder(HrmsSalaryStructure::$sortable, $this->tableId)['order']);

        $queryData = DB::table('hrms_salary_structures')
                    ->join('hrms_employees', 'hrms_salary_structures.employee_id', '=', 'hrms_employees.employee_bpc_id')
                    ->leftJoin('hrms_salary_categories', 'hrms_salary_structures.category', '=', 'hrms_salary_categories.category_id')
                    ->select('hrms_salary_structures.structure_id', 'hrms_employees.employee_bpc_id', 'hrms_employees.employee_name', 'hrms_salary_categories.category_name')
                    ->orderBy( getOrder(HrmsSalaryStructure::$sortable, $this->tableId)['by'], getOrder(HrmsSalaryStructure::$sortable, $this->tableId)['order']);

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
            'title'         => 'Add New Salary Structure',
            'page_icon'     => '<i class="fa fa-plus-circle"></i>',
            'employees'     => HrmsEmployee::all(),
            'additionRules'     => HrmsSalaryRules::where('rules_type', 'addition')->get(),
            'deductionRules'     => HrmsSalaryRules::where('rules_type', 'deduction')->get(),
            'categories'    => HrmsSalaryCategory::all(),
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
            'additionRules'     => HrmsSalaryRules::where('rules_type', 'addition')->get(),
            'deductionRules'     => HrmsSalaryRules::where('rules_type', 'deduction')->get(),
            'categories'    => HrmsSalaryCategory::all(),
            'objData'       => $this->model::where($this->tableId, $id)->first(),
        ];

		$this->layout('edit');
    }

    public function store(Request $request)
    {
        $rules = [
            'employee_id'        => 'required',
            'category'  => 'required',
            'salary_status' => 'required',
        ];

        $attribute =[
            'employee_id'      => 'Employee',
            'category' => 'Category',
            'salary_status' => 'Status',
        ];

        $customMessages =[];

        $validator = Validator::make($request->all(), $rules, $customMessages, $attribute);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //// Check Is Exists ////
        $checkIsExists = $this->model::where('employee_id', $request->employee_id)->first();
        if($checkIsExists) {
            $employee = HrmsEmployee::where('employee_bpc_id', $request->employee_id)->pluck('employee_name')->first();
            return redirect()->back()->withErrors("Salary structure has already been made for ".$employee)->withInput();
        }        

        $addData = $request->only('rule_id','code','amount');
        $deducData = $request->only('deductionRule_id','deductionCode','deductionAmount');

        $salaryStructureData = [
            'employee_id' => $request['employee_id'],
            'structure_addition' => json_encode($addData),
            'structure_deduction' => json_encode($deducData),
            'structure_frequency'   =>$request['structure_frequency'],
            'category'   =>$request['category'],
            'salary_status'   =>$request['salary_status'],
            'current_salary'   =>$request['current_salary'],
            'partial_day'   =>$request['partial_day'],
            'active_salary'   =>$request['active_salary'],
        ];

        // Insert Query
        $this->model::create($salaryStructureData);

        $log_title = 'Hrms (Employee Id - '.$salaryStructureData['employee_id'].') salary structure was created by '. Sentinel::getUser()->full_name;
        Logs::create($log_title,'salary_structure_create');

        return redirect($this->bUrl)->with('success', 'Record Successfully Created.');
        
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $id = $request[$this->tableId];

        $rules = [
            'employee_id'        => 'required',
            'category'  => 'required',
            'salary_status' => 'required',
        ];

        $attribute =[
            'employee_id'      => 'Employee ID',
            'category'  => 'Category',
            'salary_status' => 'Status',
        ];

        $customMessages =[];

        $validator = Validator::make($request->all(), $rules, $customMessages, $attribute);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $addData = $request->only('rule_id','code','amount');
        $deducData = $request->only('deductionRule_id','deductionCode','deductionAmount');

        $salaryStructureData = [
            'employee_id' => $request['employee_id'],
            'structure_addition' => json_encode($addData),
            'structure_deduction' => json_encode($deducData),
            'structure_frequency'   =>$request['structure_frequency'],
            'category'   =>$request['category'],
            'salary_status'   =>$request['salary_status'],
            'current_salary'   =>$request['current_salary'],
            'partial_day'   =>$request['partial_day'],
            'active_salary'   =>$request['active_salary'],
        ];

        $checkIsExists = $this->model::where('employee_id', $request->employee_id)->first();
        $currentExists = $this->model::where($this->tableId, $id)->first();
        // dd("hlw");
        
        if($checkIsExists == $currentExists){

            $this->model::where($this->tableId, $id)->update($salaryStructureData);       

            $log_title = 'Hrms (Employee Id - '.$salaryStructureData['employee_id'].') salary structure was updated by '. Sentinel::getUser()->full_name;
            Logs::create($log_title,'salary_structure_update');

            return redirect($this->bUrl)->with('success', 'Record Successfully Updated.');

        } elseif($checkIsExists) {

            $employee = HrmsEmployee::where('employee_bpc_id', $request->employee_id)->pluck('employee_name')->first();
            return redirect()->back()->withErrors("Salary structure has already been made for ".$employee)->withInput();

        } else {

            $this->model::where($this->tableId, $id)->update($salaryStructureData);     

            $log_title = 'Hrms (Employee Id - '.$salaryStructureData['employee_id'].') salary structure was updated by '. Sentinel::getUser()->full_name;
            Logs::create($log_title,'salary_structure_update');

            return redirect($this->bUrl)->with('success', 'Record Successfully Updated.');

        }        
    }

    public function show($id)
    {		
		$id = filter_var($id, FILTER_VALIDATE_INT);
		if( !$id ){ exit('Bad Request!'); }

        $this->data = [
            'title'         => 'Salary Structure Information',
			'page_icon'     => '<i class="fa fa-eye"></i>',
            'employees'     => HrmsEmployee::all(),
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
            'title'     => 'Delete Salary Structure',
            'pageUrl'   => $this->bUrl.'/delete/'.$id,
			'page_icon' => '<i class="fa fa-trash"></i>',
            'objData'   => $this->model::where($this->tableId, $id)->first(),
        ];

		$this->data['tableID'] = $this->tableId;
		$this->data['bUrl'] = $this->bUrl;

		if($request->method() === 'POST' ){
			  
            $employee = $this->data['objData']->employee_id;

            $this->model::where($this->tableId, $id)->delete();

            $log_title = 'Hrms (Employee Id - '.$employee.') salary structure was deleted by '. Sentinel::getUser()->full_name;
            Logs::create($log_title,'salary_structure_delete');

			echo json_encode(['fail' => FALSE, 'error_messages' => "Saalry Structure was deleted."]);
		}else{
			return view($this->moduleName.'::salaryStructure.delete', $this->data);
		}

    }

    public function fetch_rule_details(Request $request)
    {
        $rule = HrmsSalaryRules::where('rules_id', $request->ruleId)->first();

        if($rule->is_fixed == 0) {
            $amount = $rule->rules_amount;
        } else if($rule->is_fixed == 1) {
            $amount = ($request->basic_salary * $rule->rules_amount) / 100;
        }

        return response()->json(['code' => $rule->rules_code, 'amount' => floor($amount)]);
        // return $rule;
    }

    public function fetch_deduc_rule_details(Request $request)
    {
        $deducRule = HrmsSalaryRules::where('rules_id', $request->deducRuleId)->first();

        if($deducRule->is_fixed == 0) {
            $amount = $deducRule->rules_amount;
        } else if($deducRule->is_fixed == 1) {
            $amount = ($request->basic_salary * $deducRule->rules_amount) / 100;
            // dd($amount);
        }

        return response()->json(['code' => $deducRule->rules_code, 'amount' => floor($amount)]);
        // return $deducRule;
    }

    public function current_salary(Request $request)
    {
        $employeeSalary = DB::table('hrms_employees')
                            ->where('employee_bpc_id', $request->employee_id)
                            ->select('*')->first();
        return response()->json($employeeSalary);
    }
}
