<?php

namespace Modules\Hrms\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Hrms\Entities\EmployeeDisciplinaryAction;
use Illuminate\Support\Str;
use Sentinel;
use Validator;
use Modules\Hrms\Entities\HrmsEmployee;

class EmployeeDisciplinaryActionsController extends Controller
{
    private $model;
	private $moduleName;
	private $data;
	private $tableId;
	private $bUrl;

	public function __construct(){	
	
		 $this->tableId = 'dis_act_id';
		 $this->model = EmployeeDisciplinaryAction::class;
		 $this->moduleName = 'hrms';
		 $this->bUrl = $this->moduleName.'/disciplinary-action';

	}


	public function layout($pageName){
		$this->data['tableID'] = $this->tableId;
		$this->data['bUrl'] = $this->bUrl;		
		echo view($this->moduleName.'::disciplinaryActions.'.$pageName.'', $this->data);
	}

    public function index(Request $request)
    {
        $this->data = [
            'title'         => 'Disciplinary Action Management',
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
		$queryData = EmployeeDisciplinaryAction::orderBy( getOrder(EmployeeDisciplinaryAction::$sortable, $this->tableId)['by'], getOrder(EmployeeDisciplinaryAction::$sortable, $this->tableId)['order']);

		//filter by text.....
		if( $request->filled('filter') ){
			$this->data['filter'] = $filter = $request->get('filter');

			$queryData->where('employee_id', 'like', '%'.$filter.'%');
			$queryData->orWhere('nature_of_offense', 'like', '%'.$filter.'%');
		}

		$this->data['allData'] =  $queryData->paginate($perPage)->appends( request()->query() ); // paginate
		$this->layout('index');

    }

    public function create()
    {
        $this->data = [
            'title'         => 'Add New Action',
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
            'title'         => 'Edit Posting',
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
            'nature_of_offense'        => 'required|string',
        ];

        $attribute = [
            'employee_id'              => 'Employee Id',
            'nature_of_offense'              => 'Nature Of Offense',
        ];
        $customMessages =[];

        $validator = Validator::make($request->all(), $rules, $customMessages, $attribute);

        if ($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
        }

		$postingData = [
            'employee_id' => $request['employee_id'],
            'nature_of_offense' => $request['nature_of_offense'],
            'punishment'   =>$request['punishment'],
            'dis_date'   =>$request['dis_date'],
            'remarks'   =>$request['remarks'],
        ];

        if ( empty($id) ){
			// Insert Query
            $this->model::create($postingData);
			return redirect($this->bUrl)->with('success', 'Record Successfully Created.');

        }else{
            // Update Query
            $this->model::where($this->tableId, $id)->update($postingData);
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
			  echo json_encode(['fail' => FALSE, 'error_messages' => "Posting ".$this->data['objData']->nature_of_offense." was deleted."]);
		}else{
			return view($this->moduleName.'::disciplinaryActions.delete', $this->data);
		}

    }
}
