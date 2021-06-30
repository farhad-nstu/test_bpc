<?php

namespace Modules\Hrms\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Hrms\Entities\EmployeeAward;
use Illuminate\Support\Str;
use Sentinel;
use Validator;
use Modules\Hrms\Entities\HrmsEmployee;

class EmployeeAwardController extends Controller
{
    private $model;
    private $moduleName;
    private $data;
    private $tableId;
    private $bUrl;

    public function __construct(){  
    
         $this->tableId = 'award_id';
         $this->model = EmployeeAward::class;
         $this->moduleName = 'hrms';
         $this->bUrl = $this->moduleName.'/award';

    }


    public function layout($pageName){
        $this->data['tableID'] = $this->tableId;
        $this->data['bUrl'] = $this->bUrl;      
        echo view($this->moduleName.'::awards.'.$pageName.'', $this->data);
    }

    public function index(Request $request)
    {
        $this->data = [
            'title'         => 'Award Management',
            'pageUrl'         => $this->bUrl,
            'page_icon'     => '<i class="fa fa-book"></i>',
        ];

        //result per page
        $perPage = session('per_page') ?: 3;

        //table item serial starting from 0
        $this->data['serial'] = ( ($request->get('page') ?? 1) -1) * $perPage;

        $this->data['employees'] =  HrmsEmployee::all();

        if($request->method() === 'POST'){
            session(['per_page' => $request->post('per_page') ]);
        }

        //model query...
        $queryData = EmployeeAward::orderBy( getOrder(EmployeeAward::$sortable, $this->tableId)['by'], getOrder(EmployeeAward::$sortable, $this->tableId)['order']);

        //filter by text.....
        if( $request->filled('filter') ){
            $this->data['filter'] = $filter = $request->get('filter');
            $queryData->orWhere('award_title', 'like', '%'.$filter.'%');
        }

        $this->data['allData'] =  $queryData->paginate($perPage)->appends( request()->query() ); // paginate
        $this->layout('index');

    }

    public function create()
    {
        $this->data = [
            'title'         => 'Add New Award',
            'page_icon'     => '<i class="fa fa-book"></i>',
            'objData'       => '',
        ];

        $this->data['employees'] =  HrmsEmployee::all();

        $this->layout('create');
    }

    public function edit($id)
    {
        $id = filter_var($id, FILTER_VALIDATE_INT);
        if( !$id ){ exit('Bad Request!'); }

        $this->data = [
            'title'         => 'Edit Award',
            'page_icon'     => '<i class="fa fa-book"></i>',
            'objData'       => $this->model::where($this->tableId, $id)->first(),
        ];

        $this->data['employees'] =  HrmsEmployee::all();

        $this->layout('create');
    }

    public function store(Request $request)
    {
        $id = $request[$this->tableId];

        $rules = [
            'employee_id'        => 'required',
            'award_title'        => 'required|string',
        ];

        $attribute = [
            'employee_id'              => 'Employee Id',
            'award_title'              => 'Title Of Award',
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

        if ( empty($id) ){
            // Insert Query
            $this->model::create($awardData);
            return redirect($this->bUrl)->with('success', 'Record Successfully Created.');

        }else{
            // Update Query
            $this->model::where($this->tableId, $id)->update($awardData);
            return redirect($this->bUrl)->with('success', 'Successfully Updated');
        }
    }

    public function show($id)
    {       
        $id = filter_var($id, FILTER_VALIDATE_INT);
        if( !$id ){ exit('Bad Request!'); }

        $this->data = [
            'title'         => 'Posting Information',
            'page_icon'     => '<i class="fa fa-book"></i>',
            'objData'       => $this->model::with(['employee'])->where($this->tableId, $id)->first(),
        ];                     

        $this->layout('view');

    }

    public function destroy(Request $request, $id)
    {
        $id = filter_var($id, FILTER_VALIDATE_INT);
        if( !$id ){ exit('Bad Request!'); }

        $this->data = [
            'title'     => 'Delete Action',
            'pageUrl'   => $this->bUrl.'/delete/'.$id,
            'page_icon' => '<i class="fa fa-book"></i>',
            'objData'   => $this->model::where($this->tableId, $id)->first(),
        ];

        $this->data['tableID'] = $this->tableId;
        $this->data['bUrl'] = $this->bUrl;

        if($request->method() === 'POST' ){
              $this->model::where($this->tableId, $id)->delete();
              echo json_encode(['fail' => FALSE, 'error_messages' => "Award ".$this->data['objData']->award_title." was deleted."]);
        }else{
            return view($this->moduleName.'::disciplinaryActions.delete', $this->data);
        }

    }
}
