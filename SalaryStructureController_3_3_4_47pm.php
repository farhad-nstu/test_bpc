<?php

namespace Modules\Hrms\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Hrms\Entities\HrmsSalaryStructure;
use Validator;
use Modules\Hrms\Entities\HrmsEmployee;
use Modules\Hrms\Entities\HrmsSalaryRules;
use DB;
use Auth;

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
		$queryData = HrmsSalaryStructure::orderBy( getOrder(HrmsSalaryStructure::$sortable, $this->tableId)['by'], getOrder(HrmsSalaryStructure::$sortable, $this->tableId)['order']);

		//filter by text.....
		if( $request->filled('filter') ){
			$this->data['filter'] = $filter = $request->get('filter');

			$queryData->where('posting_title', 'like', '%'.$filter.'%');
			//$queryData->orWhere('district_name', 'like', '%'.$filter.'%');
		}

		$this->data['allData'] =  $queryData->paginate($perPage)->appends( request()->query() ); // paginate
		$this->layout('index');

    }

    public function create()
    {
        $this->data = [
            'title'         => 'Add New Salary Structure',
            'page_icon'     => '<i class="fa fa-book"></i>',
            'employees'     => HrmsEmployee::all(),
            'rules'     => HrmsSalaryRules::all(),
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
            'rules'     => HrmsSalaryRules::all(),
            'objData'       => $this->model::where($this->tableId, $id)->first(),
        ];

		$this->layout('create');
    }

    public function store(Request $request)
    {
        $id = $request[$this->tableId];

        $rules = [
            'employee_id'        => 'required',
            'rule_id'        => 'required',
        ];

        $attribute =[
            'employee_id'      => 'Employee ID',
            'rule_id'      => 'Rule ID',
        ];

        $customMessages =[];

        $validator = Validator::make($request->all(), $rules, $customMessages, $attribute);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // dd($request->rule_id[1]);

        for($i = 0; $i < count($request->rule_id); $i++){
            $salaryStructureData = [
                'employee_id' => $request['employee_id'],
                'rule_id' => $request->rule_id[$i],
                'structure_frequency'   =>$request['structure_frequency'],
            ];
    
            if ( empty($id) ){
                // Insert Query
                $this->model::create($salaryStructureData);
            }else{
                // Update Query
                $this->model::where($this->tableId, $id)->update($salaryStructureData);
            }
        }

        if(empty($id)){
            $logData = [
                'log_title' => 'Employee(Id-'.$request['employee_id'].') Salary Structure Created',
                'log_type'  => 'Employee Section Updated',
                'log_amount'=> 1,
                'log_creator'=> Auth::id(),
                'log_date' => date("Y-m-d"),
            ];
            DB::table('tbl_logs')->insert($logData);
            return redirect($this->bUrl)->with('success', 'Record Successfully Created.');
        } else {
            $logData = [
                'log_title' => 'Employee(Id-'.$request['employee_id'].') Salary Structure Updated',
                'log_type'  => 'Employee Section Updated',
                'log_amount'=> 1,
                'log_creator'=> Auth::id(),
                'log_date' => date("Y-m-d"),
            ];
            DB::table('tbl_logs')->insert($logData);
            return redirect($this->bUrl)->with('success', 'Record Successfully Updated.');
        }

        
        
    }

    public function show($id)
    {		
		$id = filter_var($id, FILTER_VALIDATE_INT);
		if( !$id ){ exit('Bad Request!'); }

        $this->data = [
            'title'         => 'Salary Structure Information',
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
            'title'     => 'Delete Salary Structure',
            'pageUrl'   => $this->bUrl.'/delete/'.$id,
			'page_icon' => '<i class="fa fa-book"></i>',
            'objData'   => $this->model::where($this->tableId, $id)->first(),
        ];

		$this->data['tableID'] = $this->tableId;
		$this->data['bUrl'] = $this->bUrl;

		if($request->method() === 'POST' ){
			  $this->model::where($this->tableId, $id)->delete();
              $logData = [
                'log_title' => 'Employee(Id-'.$this->data['objData']->employee_id.') Salary Structure Deleted',
                'log_type'  => 'Employee Section Updated',
                'log_amount'=> 1,
                'log_creator'=> Auth::id(),
                'log_date' => date("Y-m-d"),
            ];
            DB::table('tbl_logs')->insert($logData);
			echo json_encode(['fail' => FALSE, 'error_messages' => "Saalry Structure was deleted."]);
		}else{
			return view($this->moduleName.'::salaryStructure.delete', $this->data);
		}

    }

    public function fetch_rule_details(Request $request)
    {
        $rule = HrmsSalaryRules::where('rules_id', $request->ruleId)->first();
        return $rule;
    }
}
