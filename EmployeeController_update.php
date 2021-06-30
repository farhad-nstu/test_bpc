<?php

namespace Modules\Hrms\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use Sentinel;
use Validator;
use Modules\Hrms\Entities\HrmsEmployee;
use App\Models\District;
use Modules\Hrms\Entities\HrmsDesignation;
use App\Models\Religion;
use Modules\Hrms\Entities\HrmsDepartment;
use Modules\Hrms\Entities\HrmsUnit;
use DB;
use Session;

class EmployeesController extends Controller
{
    private $model;
	private $moduleName;
	private $data;
	private $tableId;
	private $bUrl;

	public function __construct(){	
	
		$this->tableId = 'employee_id';
		$this->model = HrmsEmployee::class;
		$this->moduleName = 'hrms';
		$this->bUrl = $this->moduleName.'/hrm';

	}

	public function layout($pageName){
		$this->data['tableID'] = $this->tableId;
		$this->data['bUrl'] = $this->bUrl;		
		echo view($this->moduleName.'::hrms.'.$pageName.'', $this->data);
	}

    public function index(Request $request)
    {
        $this->data = [
            'title'         => 'Human Resource Management',
			'pageUrl'         => $this->bUrl,
            'designations'     => HrmsDesignation::all(),
            'page_icon'     => '<i class="fa fa-book"></i>',
        ];

        // $this->data['accounts'] =  AccountingAccount::all();

		//result per page
		$perPage = session('per_page') ?: 3;

		//table item serial starting from 0
		$this->data['serial'] = ( ($request->get('page') ?? 1) -1) * $perPage;


		if($request->method() === 'POST'){
			session(['per_page' => $request->post('per_page') ]);
		}


        $queryData = HrmsEmployee::orderBy('employee_id', 'desc');
        // dd($queryData);
		//model query...
		// $queryData = HrmsEmployee::orderBy( getOrder(HrmsEmployee::$sortable, $this->tableId)['by'], getOrder(HrmsEmployee::$sortable, $this->tableId)['order']);
        // dd($queryData);
		//filter by text.....
		if( $request->filled('filter') ){
			$this->data['filter'] = $filter = $request->get('filter');

			$queryData->where('employee_name', 'like', '%'.$filter.'%');
            // $queryData->orWhere('account_number', 'like', '%'.$filter.'%');
		}

		$this->data['allData'] =  $queryData->paginate($perPage)->appends( request()->query() ); // paginate

		$this->layout('index');

    }

    public function create()
    {
        $this->data = [
            'title'         => 'Add New Employee',
            'page_icon'     => '<i class="fa fa-book"></i>',
            'districts'     => District::all(),
            'designations'     => HrmsDesignation::all(),
            'religions'     => Religion::all(),
            'departments'     => HrmsDepartment::all(),
            'units'     => HrmsUnit::all(),
            'payscaleGrades' => DB::table('hrms_payscale')->select('*')->get(),
            'objData'       => '',
        ];
        
		$this->layout('create');
    }

    public function edit($id)
    {
        $id = filter_var($id, FILTER_VALIDATE_INT);
        $employee = $this->model::where($this->tableId, $id)->first();
		if( !$id ){ exit('Bad Request!'); }

        $this->data = [
            'title'         => 'Edit Employee',
			'page_icon'     => '<i class="fa fa-book"></i>',
            'districts'     => District::all(),
            'designations'     => HrmsDesignation::all(),
            'religions'     => Religion::all(),
            'departments'     => HrmsDepartment::all(),
            'units'     => HrmsUnit::all(),
            'payscaleGrades' => DB::table('hrms_payscale')->select('*')->get(),
            'employeeSalaries' => DB::table('hrms_payscale_steps')->where('payscale_grad_no', $employee->employee_payscale_grade)->get(),
            'objData'       => $employee,
        ];

		$this->layout('edit');
    }

    public function store(Request $request)
    {
        $rules = [
            'employee_name'        => 'required|string|max:255',
            'employee_designation'   => 'required|string',
            'employee_posting' => 'required',
            'employee_rank' => 'required',
            'employee_join_date' => 'required',
            'employee_mobile' => 'required',
            'employee_email' => 'required',
            'employee_present_address' => 'required',
            'employee_payscale_grade' => 'required',
            'employee_basic_salary' => 'required',
            'employee_nid' => 'required',
        ];

        $attribute = [
            'employee_name'              => 'Employee Name',
            'employee_designation'             => 'Employee Designation',
            'employee_posting'           => 'Employee Posting',
            'employee_rank'   => 'Employee Rank',
            'employee_join_date'   => 'Employee Join Date',
            'employee_mobile'   => 'Employee Mobile',
            'employee_email'   => 'Employee Email',
            'employee_present_address'   => 'Employee Present Address',
            'employee_payscale_grade'   => 'Employee Payscale Grade',
            'employee_basic_salary'   => 'Employee Payscale Salary',
            'employee_nid'   => 'Employee National ID',
        ];

        $customMessages =[];

        $validator = Validator::make($request->all(), $rules, $customMessages, $attribute);

        // $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
        }

        $employeeBasicSalary = DB::table('hrms_payscale_steps')->where('payscale_grad_no', $request->employee_payscale_grade)->where('payscale_step_salary', $request->employee_basic_salary)->first();
        if(empty($employeeBasicSalary)){
            return back()->with('danger', 'Invalid Employee Salary');
        }
        

        //// for json save ////
        $spousesData = $request->only('spouse_name','spouse_occup','spouse_desg', 'spouse_dist', 'spouse_org', 'spouse_loc');
        $childsData = $request->only('child_name','child_birth','child_sex');
        $languagesData = $request->only('lang_name','readLang','writeLang', 'speakLang');
        $educationcationalData = $request->only('ins_name','subject','degree', 'passing_year', 'result');

        $employeeData = [
            'employee_name' => $request['employee_name'],
            'employee_designation'   =>$request['employee_designation'],
            'employee_father_name'   =>$request['employee_father_name'],
            'employee_mother_name'   =>$request['employee_mother_name'],
            'employee_district'   =>$request['employee_district'],
            'employee_birth_date'   =>$request['employee_birth_date'],
            'employee_prl_date'   =>$request['employee_prl_date'],
            'employee_posting'   =>$request['employee_posting'],
            'employee_rank'   =>$request['employee_rank'],
            'employee_location' => $request['employee_location'],
            'employee_join_date'   =>$request['employee_join_date'],
            'employee_cadre'   =>$request['employee_cadre'],
            'employee_batch'   =>$request['employee_batch'],
            'employee_cadre_date'   =>$request['employee_cadre_date'],
            'employee_confirm_g_o_date'   =>$request['employee_confirm_g_o_date'],
            'employee_sex'   =>$request['employee_sex'],
            'employee_religion'   =>$request['employee_religion'],
            'employee_marital_state'   =>$request['employee_marital_state'],
            'employee_mobile'   =>$request['employee_mobile'],
            'employee_email'   =>$request['employee_email'],
            'employee_nid'   =>$request['employee_nid'],
            'employee_department'   =>$request['employee_department'],
            'employee_unit'   =>$request['employee_unit'],
            'employee_payscale_grade'   =>$request['employee_payscale_grade'],
            'employee_basic_salary'   =>$request['employee_basic_salary'],
            'employee_present_address'   =>$request['employee_present_address'],
            'employee_permanent_address'   =>$request['employee_permanent_address'],
            'employee_spouse'   => json_encode($spousesData),
            'employee_children'   => json_encode($childsData),
            'employee_language'   => json_encode($languagesData),
            'employee_education'   => json_encode($educationcationalData),
        ];

        $this->model::create($employeeData);
        return redirect($this->bUrl)->with('success', 'Record Successfully Created.');
    }

    public function show($id)
    {	
		$id = filter_var($id, FILTER_VALIDATE_INT);
		if( !$id ){ exit('Bad Request!'); }

        $this->data = [
            'title'         => 'Employee Information',
			'page_icon'     => '<i class="fa fa-book"></i>',
            'districts'     => District::all(),
            'designations'     => HrmsDesignation::all(),
            'religions'     => Religion::all(),
            'departments'     => HrmsDepartment::all(),
            'units'     => HrmsUnit::all(),
            'objData'       => $this->model::where($this->tableId, $id)->first(),
        ];				       

		$this->layout('view');
    }

    public function update(Request $request)
    {
       
        $id = $request[$this->tableId];
        // dd($id);
        $rules = [
            'employee_name'        => 'required|string|max:255',
            'employee_designation'   => 'required|string',
            'employee_district'     => 'required',
            'employee_posting' => 'required',
            'employee_rank' => 'required',
            'employee_join_date' => 'required',
            'employee_mobile' => 'required',
            'employee_email' => 'required',
            'employee_present_address' => 'required',
            'employee_payscale_grade' => 'required',
            'employee_basic_salary' => 'required',
            'employee_nid' => 'required',
        ];

        $attribute = [
            'employee_name'              => 'Employee Name',
            'employee_designation'             => 'Employee Designation',
            'employee_district'           => 'Employee District',
            'employee_posting'           => 'Employee Posting',
            'employee_rank'   => 'Employee Rank',
            'employee_join_date'   => 'Employee Join Date',
            'employee_mobile'   => 'Employee Mobile',
            'employee_email'   => 'Employee Email',
            'employee_present_address'   => 'Employee Present Address',
            'employee_payscale_grade'   => 'Employee Payscale Grade',
            'employee_basic_salary'   => 'Employee Payscale Salary',
            'employee_nid'   => 'Employee National ID',
        ];
        $customMessages =[];

        $validator = Validator::make($request->all(), $rules, $customMessages, $attribute);

        if ($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
        }

        $employeeBasicSalary = DB::table('hrms_payscale_steps')->where('payscale_grad_no', $request->employee_payscale_grade)->where('payscale_step_salary', $request->employee_basic_salary)->first();
        if(empty($employeeBasicSalary)){
            return back()->with('danger', 'Invalid Employee Salary');
        }

        //// for json save ////
        $spousesData = $request->only('spouse_name','spouse_occup','spouse_desg', 'spouse_dist', 'spouse_org', 'spouse_loc');
        $childsData = $request->only('child_name','child_birth','child_sex');
        $languagesData = $request->only('lang_name','readLang','writeLang', 'speakLang');
        $educationcationalData = $request->only('ins_name','subject','degree', 'passing_year', 'result');

        $employeeData = [
            'employee_name' => $request['employee_name'],
            'employee_designation'   =>$request['employee_designation'],
            'employee_father_name'   =>$request['employee_father_name'],
            'employee_mother_name'   =>$request['employee_mother_name'],
            'employee_district'   =>$request['employee_district'],
            'employee_birth_date'   =>$request['employee_birth_date'],
            'employee_prl_date'   =>$request['employee_prl_date'],
            'employee_posting'   =>$request['employee_posting'],
            'employee_rank'   =>$request['employee_rank'],
            'employee_location' => $request['employee_location'],
            'employee_join_date'   =>$request['employee_join_date'],
            'employee_cadre'   =>$request['employee_cadre'],
            'employee_batch'   =>$request['employee_batch'],
            'employee_cadre_date'   =>$request['employee_cadre_date'],
            'employee_confirm_g_o_date'   =>$request['employee_confirm_g_o_date'],
            'employee_sex'   =>$request['employee_sex'],
            'employee_religion'   =>$request['employee_religion'],
            'employee_marital_state'   =>$request['employee_marital_state'],
            'employee_mobile'   =>$request['employee_mobile'],
            'employee_email'   =>$request['employee_email'],
            'employee_nid'   =>$request['employee_nid'],
            'employee_department'   =>$request['employee_department'],
            'employee_unit'   =>$request['employee_unit'],
            'employee_payscale_grade'   =>$request['employee_payscale_grade'],
            'employee_basic_salary'   =>$request['employee_basic_salary'],
            'employee_present_address'   =>$request['employee_present_address'],
            'employee_permanent_address'   =>$request['employee_permanent_address'],
            'employee_spouse'   => json_encode($spousesData),
            'employee_children'   => json_encode($childsData),
            'employee_language'   => json_encode($languagesData),
            'employee_education'   => json_encode($educationcationalData),
        ];

        $this->model::where($this->tableId, $id)->update($employeeData);
        return redirect($this->bUrl)->with('success', 'Successfully Updated');
    }

    public function destroy(Request $request, $id)
    {
        
		$id = filter_var($id, FILTER_VALIDATE_INT);
		if( !$id ){ exit('Bad Request!'); }

        $this->data = [
            'title'     => 'Delete Employee',
            'pageUrl'   => $this->bUrl.'/delete/'.$id,
			'page_icon' => '<i class="fa fa-book"></i>',
            'objData'   => $this->model::where($this->tableId, $id)->first(),
        ];        

		$this->data['tableID'] = $this->tableId;
		$this->data['bUrl'] = $this->bUrl;

		if($request->method() === 'POST' ){

			$this->model::where($this->tableId, $id)->delete();

			echo json_encode(['fail' => FALSE, 'error_messages' => "Bank ".$this->data['objData']->employee_name." was deleted."]);
		}else{
			return view($this->moduleName.'::hrms.delete', $this->data);
		}

    }

    public function get_gradewise_salary(Request $request)
    {
        $employeeSalaries = DB::table('hrms_payscale_steps')->where('payscale_grad_no', $request->grade)->get();
        $this->data['employeeSalaries'] = $employeeSalaries;
        $this->layout('employeeSalary');
    }

}
