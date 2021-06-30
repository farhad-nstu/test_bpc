<?php

namespace Modules\Hrms\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Hrms\Entities\HrmsAward;
use Illuminate\Support\Str;
use Validator;
use Modules\Hrms\Entities\HrmsEmployee;
use App\Helpers\Logs;
use Sentinel;
use DB;

class EmployeeAwardController extends Controller
{
    private $model;
	private $moduleName;
	private $data;
	private $tableId;
	private $bUrl;

	public function __construct(){	
	
		 $this->tableId = 'award_id';
		 $this->model = HrmsAward::class;
		 $this->moduleName = 'hrms';
		 $this->bUrl = $this->moduleName.'/award';

	}


	public function layout($pageName){
		$this->data['tableID'] = $this->tableId;
		$this->data['bUrl'] = $this->bUrl;		
		echo view($this->moduleName.'::awards.'.$pageName.'', $this->data);
	}

    public function index(Request $request){
        $this->data=[
            'title'         => 'Award Manager',
            'page_icon'     => '<i class="fa fa-book"></i>',
            'pageUrl'          => $this->bUrl,
            'employees'     => HrmsEmployee::all(),
        ];

        $perPage = session('per_page') ?: 20;

		//table item serial starting from 0
		$this->data['serial'] = ( ($request->get('page') ?? 1) -1) * $perPage;

		if($request->method() === 'POST'){
			session(['per_page' => $request->post('per_page') ]);
		}

        //model query...
		// $queryData = HrmsAward::orderBy( getOrder(HrmsAward::$sortable, $this->tableId)['by'], getOrder(HrmsAward::$sortable, $this->tableId)['order']);

        $queryData = DB::table('hrms_awards')
                ->join('hrms_employees', 'hrms_awards.employee_id', '=', 'hrms_employees.employee_bpc_id')
                ->select('hrms_awards.award_id', 'hrms_awards.award_title', 'hrms_employees.employee_bpc_id', 'hrms_employees.employee_name')
                ->orderBy( getOrder(HrmsAward::$sortable, $this->tableId)['by'], getOrder(HrmsAward::$sortable, $this->tableId)['order']);

		//filter by text.....
		if( $request->filled('filter') ){
			$this->data['filter'] = $filter = $request->get('filter');

			$queryData->where('hrms_employees.employee_name', 'like', '%'.$filter.'%');
            $queryData->orWhere('hrms_employees.employee_bpc_id', 'like', '%'.$filter.'%');
		}

		$this->data['allData'] =  $queryData->paginate($perPage)->appends( request()->query() ); // paginate
		$this->layout('index');

    }

    public function store(Request $request)
    {
        $rules = [
            'employee_id'        => 'required',
            'award_title'        => 'required|string',
        ];

        $attribute =[
            'employee_id'      => 'Employee',
            'award_title'      => 'Title',
        ];

        $customMessages =[];

        $validator = Validator::make($request->all(), $rules, $customMessages, $attribute);

        if ($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
        }

        $awardData = [
            'employee_id' => $request['employee_id'],
            'award_title' => $request['award_title'],
            'award_ground'   =>$request['award_ground'],
            'award_date'   =>$request['award_date'],
        ];

        HrmsAward::create($awardData);

        $log_title = 'Hrms (Employee Id - '.$awardData['employee_id'].', award- '.$awardData ['award_title'] .') was created by '. Sentinel::getUser()->full_name;
        Logs::create($log_title,'award_create');

        return redirect()->back()->with('success', 'Record Successfully Created!');

    }

    public function edit($id){
        $this->data=[
            'title'         => 'Edit Award',
            'bUrl'          => $this->bUrl,
            'employees'     => HrmsEmployee::all(),
            'objData'       => HrmsAward::where('award_id',$id)->first(),
        ];
        $this->layout('edit');
    }

    public function update(Request $request)
    {
        $id = $request['id'];

        $rules = [
            'employee_id'        => 'required',
            'award_title'        => 'required|string',
        ];

        $attribute =[
            'award_title'      => 'Award Title',
        ];

        $customMessages =[];

        $validator = Validator::make($request->all(), $rules, $customMessages, $attribute);

        if ($validator->fails()){
            return response()->json($validator->messages(), 200);
        }

        $awardData = [
            'employee_id' => $request['employee_id'],
            'award_title' => $request['award_title'],
            'award_ground'   =>$request['award_ground'],
            'award_date'   =>$request['award_date'],
        ];
        HrmsAward::where('award_id', $id)->update($awardData);

        $log_title = 'Hrms (Employee Id - '.$awardData['employee_id'].', award- '.$awardData ['award_title'] .') was updated by '. Sentinel::getUser()->full_name;
        Logs::create($log_title,'award_update');

        return 'success';
    }

    public function show($id){
        $this->data=[
            'title'         => 'Employee Award Show',
            'page_icon'     => '<i class="fa fa-book"></i>',
            'objData'       => HrmsAward::where('award_id',$id)->with('employee')->first(),
        ];
        $this->layout('view');
    }


    public function destroy(Request $request, $id)
    {
        $id = filter_var($id, FILTER_VALIDATE_INT);
        if( !$id ){ exit('Bad Request!'); }

        $this->data = [
            'title'     => 'Delete Employee Award',
            'pageUrl'   => $this->bUrl.'/delete/'.$id,
            'objData'   => HrmsAward::where('award_id',$id)->first(),
        ];

        $this->data['bUrl'] = $this->bUrl.'/delete/'.$id;

        if($request->method() === 'POST' ){

            $employee = $this->data['objData']->employee_id;
            $award = $this->data['objData']->award_title;

            HrmsAward::where('award_id',$id)->delete();

            $log_title = 'Hrms (Employee Id - '.$employee.', award- '.$award.') was deleted by '. Sentinel::getUser()->full_name;
            Logs::create($log_title,'award_delete');

            return json_encode(['fail' => FALSE, 'error_messages' => " was deleted."]);
        }else{
            $this->layout('delete');
        }

    }

}
