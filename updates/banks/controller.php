<?php

namespace Modules\Hrms\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Hrms\Entities\HrmsBank;
use Validator;
use Modules\Hrms\Entities\HrmsEmployee;
use App\Helpers\Logs;
use Sentinel;
use DB;

class BankController extends Controller
{
    private $model;
	private $moduleName;
	private $data;
	private $tableId;
	private $bUrl;

	public function __construct(){	
	
		 $this->tableId = 'bank_id';
		 $this->model = HrmsBank::class;
		 $this->moduleName = 'hrms';
		 $this->bUrl = $this->moduleName.'/bank';

	}


	public function layout($pageName){
		$this->data['tableID'] = $this->tableId;
		$this->data['bUrl'] = $this->bUrl;		
		echo view($this->moduleName.'::banks.'.$pageName.'', $this->data);
	}

    public function index(Request $request)
    {
        $this->data = [
            'title'         => 'Bank Management',
			'pageUrl'         => $this->bUrl,
            'page_icon'     => '<i class="fa fa-book"></i>',
        ];

		//result per page
		$perPage = session('per_page') ?: 20;

		//table item serial starting from 0
		$this->data['serial'] = ( ($request->get('page') ?? 1) -1) * $perPage;

        // $this->data['employees'] =  HrmsEmployee::all();

		if($request->method() === 'POST'){
			session(['per_page' => $request->post('per_page') ]);
		}

		//model query...
		$queryData = HrmsBank::orderBy( getOrder(HrmsBank::$sortable, $this->tableId)['by'], getOrder(HrmsBank::$sortable, $this->tableId)['order']);

        $queryData = DB::table('hrms_banks')
                ->join('hrms_employees', 'hrms_banks.employee_id', '=', 'hrms_employees.employee_bpc_id')
                ->select('hrms_banks.bank_id', 'hrms_banks.account_no', 'hrms_banks.branch', 'hrms_employees.employee_bpc_id', 'hrms_employees.employee_name')
                ->orderBy( getOrder(HrmsBank::$sortable, $this->tableId)['by'], getOrder(HrmsBank::$sortable, $this->tableId)['order']);

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
            'title'         => 'Add New Bank',
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
            'title'         => 'Edit Bank',
			'page_icon'     => '<i class="fa fa-book"></i>',
            'objData'       => $this->model::where($this->tableId, $id)->first(),
        ];

        $this->data['employees'] =  HrmsEmployee::all();
		$this->layout('create');
    }

    public function store(Request $request)
    {
        $id = $request[$this->tableId];

        if(empty($id)) {
            $rules = [
                'employee_id'        => 'required',
                'bank_name'        => 'required|string',
                'account_no'        => 'required|numeric|unique:hrms_banks',
                'branch'        => 'required',
            ];
    
            $attribute = [
                'employee_id'              => 'Employee Id',
                'bank_name'              => 'Bank Title',
                'account_no'              => 'A/C Number',
                'branch'              => 'Branch',
            ];

            $customMessages =[];

            $validator = Validator::make($request->all(), $rules, $customMessages, $attribute);

            if ($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $bankData = [
                'employee_id' => $request['employee_id'],
                'bank_name' => $request['bank_name'],
                'account_no'   =>$request['account_no'],
                'branch'   =>$request['branch'],
            ];

        } else {

            $rules = [
                'branch'        => 'required',
            ];
    
            $attribute = [
                'branch'              => 'Branch',
            ];

            $customMessages =[];

            $validator = Validator::make($request->all(), $rules, $customMessages, $attribute);

            if ($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $bankData = [
                'branch'   =>$request['branch'],
            ];

        }
		

        if ( empty($id) ){
			// Insert Query
            $this->model::create($bankData);

            $log_title = 'Hrms (Employee Id - '.$bankData['employee_id'].', bank- '.$bankData ['bank_name'] .') was created by '. Sentinel::getUser()->full_name;
            Logs::create($log_title,'bank_create');

			return redirect($this->bUrl)->with('success', 'Record Successfully Created.');

        }else{
            // Update Query
            $this->model::where($this->tableId, $id)->update($bankData);

            $bankInfo = $this->model::where($this->tableId, $id)->first();

            $log_title = 'Hrms (Employee Id - '.$bankInfo->employee_id.', bank - '.$bankInfo->bank_name .') was updated by '. Sentinel::getUser()->full_name;
            Logs::create($log_title,'bank_update');

            return redirect($this->bUrl)->with('success', 'Successfully Updated');
        }
    }

    public function show($id)
    {	
		$id = filter_var($id, FILTER_VALIDATE_INT);
		if( !$id ){ exit('Bad Request!'); }

        $this->data = [
            'title'         => 'Bank Information',
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
            'title'     => 'Delete Bank Information',
            'pageUrl'   => $this->bUrl.'/delete/'.$id,
			'page_icon' => '<i class="fa fa-book"></i>',
            'objData'   => $this->model::where($this->tableId, $id)->first(),
        ];

		$this->data['tableID'] = $this->tableId;
		$this->data['bUrl'] = $this->bUrl;

		if($request->method() === 'POST' ){

            $employee = $this->data['objData']->employee_id;
            $bank = $this->data['objData']->bank_name;

			$this->model::where($this->tableId, $id)->delete();

            $log_title = 'Hrms (Employee Id - '.$employee.' bank '.$bank.') was deleted by '. Sentinel::getUser()->full_name;
            Logs::create($log_title,'bank_delete');

			echo json_encode(['fail' => FALSE, 'error_messages' => "Bank ".$this->data['objData']->bank_name." was deleted."]);
		}else{
			return view($this->moduleName.'::banks.delete', $this->data);
		}

    }
}
