<?php

namespace Modules\Hrms\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Hrms\Entities\HrmsSalaryRules;
use Validator;
use DB;
use Auth;
use Modules\Hrms\Entities\HrmsSalaryStructure;
use Modules\Hrms\Entities\HrmsSalary;
use Modules\Hrms\Entities\HrmsEmployee;

class SalaryRulesController extends Controller
{
    private $model;
	private $moduleName;
	private $data;
	private $tableId;
	private $bUrl;

	public function __construct(){	
	
		 $this->tableId = 'rules_id';
		 $this->model = HrmsSalaryRules::class;
		 $this->moduleName = 'hrms';
		 $this->bUrl = $this->moduleName.'/salary-rules';

	}


	public function layout($pageName){
		$this->data['tableID'] = $this->tableId;
		$this->data['bUrl'] = $this->bUrl;		
		echo view($this->moduleName.'::salaryRules.'.$pageName.'', $this->data);
	}

    public function index(Request $request)
    {
        $this->data = [
            'title'         => 'Salary Rules Management',
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

		//model query...
		$queryData = HrmsSalaryRules::orderBy( getOrder(HrmsSalaryRules::$sortable, $this->tableId)['by'], getOrder(HrmsSalaryRules::$sortable, $this->tableId)['order']);

		//filter by text.....
		if( $request->filled('filter') ){
			$this->data['filter'] = $filter = $request->get('filter');

			$queryData->where('rules_type', 'like', '%'.$filter.'%');
			$queryData->orWhere('rules_code', 'like', '%'.$filter.'%');
            $queryData->orWhere('rules_name', 'like', '%'.$filter.'%');
		}

		$this->data['allData'] =  $queryData->paginate($perPage)->appends( request()->query() ); // paginate
		$this->layout('index');

    }

    public function create()
    {
        $this->data = [
            'title'         => 'Add New Salary Rules',
            'page_icon'     => '<i class="fa fa-book"></i>',
            'objData'       => '',
        ];

		$this->layout('create');
    }

    public function edit($id)
    {
		$id = filter_var($id, FILTER_VALIDATE_INT);
		if( !$id ){ exit('Bad Request!'); }

        $this->data = [
            'title'         => 'Edit Salary Rules',
			'page_icon'     => '<i class="fa fa-book"></i>',
            'objData'       => $this->model::where($this->tableId, $id)->first(),
        ];

		$this->layout('create');
    }

    public function store(Request $request)
    {
        $id = $request[$this->tableId];

        $rules = [
            'rules_name'        => 'required',
            'rules_type'        => 'required',
        ];

        $attribute = [
            'rules_name'              => 'Rules Name',
            'rules_type'              => 'Rules Type',
        ];
        $customMessages =[];

        $validator = Validator::make($request->all(), $rules, $customMessages, $attribute);

        if ($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
        }

		$rulesData = [
            'rules_name' => $request['rules_name'],
            'rules_code' => $request['rules_code'],
            'rules_type' => $request['rules_type'],
            'rules_condition'   =>$request['rules_condition'],
            'rules_amount'   =>$request['rules_amount'],
            'rules_description'   =>$request['rules_description'],
            'rules_status'   =>$request['rules_status'],
        ];

        if ( empty($id) ){
			// Insert Query
            $this->model::create($rulesData);
            $logData = [
                'log_title' => 'New Salary Rules Created',
                'log_type'  => 'Employee Section Updated',
                'log_amount'=> 1,
                'log_creator'=> Auth::id(),
                'log_date' => date("Y-m-d"),
            ];
            DB::table('tbl_logs')->insert($logData);
			return redirect($this->bUrl)->with('success', 'Record Successfully Created.');

        }else{
            // Update Query
            $salaryStructures = HrmsSalaryStructure::all();
            $rules = HrmsSalaryRules::where('rules_id', $id)->first();
            

            foreach($salaryStructures as $salaryStructure){

                $salary = HrmsSalary::where('employee_id', $salaryStructure->employee_id)->select('salary_total_addition', 'salary_total_deductiontion')->first();
                $employeeBasic = HrmsEmployee::where('employee_bpc_id', $salaryStructure->employee_id)->select('employee_basic_salary')->first(); 
                
                if($rules->rules_type == "addition"){
                    $strucObjData = json_decode($salaryStructure->structure_addition);
                    $strucData = array ($strucObjData);  

                    for($i = 0; $i < count($strucData[0]->rule_id); $i++){
                        if($id == $strucData[0]->rule_id[$i]){

                            $a2=array($i=>$request['rules_code']);
                            array_splice($strucData[0]->code,$i,1,$a2);

                            $a3=array($i=>$request['rules_amount']);
                            
                            array_splice($strucData[0]->amount,$i,1,$a3);

                            $totalAllowance = array_sum($strucData[0]->amount);                            
                            $total = $employeeBasic->employee_basic_salary + $totalAllowance - $salary->salary_total_deductiontion;
                            
                            $obj = (object) $strucData[0];
                            DB::table('hrms_salary_structures')->where('structure_id', $salaryStructure->structure_id)->update(['structure_addition' => json_encode($obj)]);
                            DB::table('hrms_salaries')->where('employee_id', $salaryStructure->employee_id)->update(['salary_addition_details' => json_encode($obj), 'salary_total_addition' => $totalAllowance, 'salary_total' => $total]);
                        }
                    }
                } else {
                    $strucObjData = json_decode($salaryStructure->structure_deduction);
                    $strucData = array ($strucObjData);               
                    
                    for($i = 0; $i < count($strucData[0]->deductionRule_id); $i++){
                        if($id == $strucData[0]->deductionRule_id[$i]){

                            $a2=array($i=>$request['rules_code']);
                            array_splice($strucData[0]->deductionCode,$i,1,$a2);

                            $a3=array($i=>$request['rules_amount']);
                            array_splice($strucData[0]->deductionAmount,$i,1,$a3);

                            $totalDeduc = array_sum($strucData[0]->deductionAmount);                            
                            $total = $employeeBasic->employee_basic_salary + $salary->salary_total_addition - $totalDeduc;

                            $obj = (object) $strucData[0];
                            DB::table('hrms_salary_structures')->where('structure_id', $salaryStructure->structure_id)->update(['structure_deduction' => json_encode($obj)]);
                            DB::table('hrms_salaries')->where('employee_id', $salaryStructure->employee_id)->update(['salary_deductiontion_details' => json_encode($obj), 'salary_total_deductiontion' => $totalDeduc, 'salary_total' => $total]);
                        }
                    }
                }
                
            }

            $this->model::where($this->tableId, $id)->update($rulesData);


            $logData = [
                'log_title' => 'Salary Rules Updated',
                'log_type'  => 'Employee Section Updated',
                'log_amount'=> 1,
                'log_creator'=> Auth::id(),
                'log_date' => date("Y-m-d"),
            ];
            DB::table('tbl_logs')->insert($logData);
            return redirect($this->bUrl)->with('success', 'Successfully Updated');
        }
    }

    public function show($id)
    {		
		$id = filter_var($id, FILTER_VALIDATE_INT);
		if( !$id ){ exit('Bad Request!'); }

        $this->data = [
            'title'         => 'Salary Rules Information',
			'page_icon'     => '<i class="fa fa-book"></i>',
            'objData'       => $this->model::where($this->tableId, $id)->first(),
        ];		       

		$this->layout('view');

    }

    public function destroy(Request $request, $id)
    {
		$id = filter_var($id, FILTER_VALIDATE_INT);
		if( !$id ){ exit('Bad Request!'); }

        $this->data = [
            'title'     => 'Delete Rule',
            'pageUrl'   => $this->bUrl.'/delete/'.$id,
			'page_icon' => '<i class="fa fa-book"></i>',
            'objData'   => $this->model::where($this->tableId, $id)->first(),
        ];

		$this->data['tableID'] = $this->tableId;
		$this->data['bUrl'] = $this->bUrl;

		if($request->method() === 'POST' ){
			  $this->model::where($this->tableId, $id)->delete();
              $logData = [
                'log_title' => 'Rule Deleted',
                'log_type'  => 'Employee Section Updated',
                'log_amount'=> 1,
                'log_creator'=> Auth::id(),
                'log_date' => date("Y-m-d"),
            ];
            DB::table('tbl_logs')->insert($logData);
			echo json_encode(['fail' => FALSE, 'error_messages' => "Salary Rules ".$this->data['objData']->rules_name." was deleted."]);
		}else{
			return view($this->moduleName.'::salaryRules.delete', $this->data);
		}

    }
}
