<?php

namespace Modules\Hrms\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Hrms\Entities\HrmsLoan;
use Validator;
use DB;
use Modules\Hrms\Entities\HrmsLoanManage;
use App\Helpers\Logs;
use Sentinel;

class LoansController extends Controller
{
    private $model;
	private $moduleName;
	private $data;
	private $tableId;
	private $bUrl;

	public function __construct(){	
	
		 $this->tableId = 'loan_id';
		 $this->model = HrmsLoan::class;
		 $this->moduleName = 'hrms';
		 $this->bUrl = $this->moduleName.'/loan';

	}


	public function layout($pageName){
		$this->data['tableID'] = $this->tableId;
		$this->data['bUrl'] = $this->bUrl;		
		echo view($this->moduleName.'::loans.'.$pageName.'', $this->data);
	}

    public function index(Request $request)
    {
        $this->data = [
            'title'         => 'Loan Management',
			'pageUrl'         => $this->bUrl,
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
		$queryData = HrmsLoan::orderBy( getOrder(HrmsLoan::$sortable, $this->tableId)['by'], getOrder(HrmsLoan::$sortable, $this->tableId)['order']);

		//filter by text.....
		if( $request->filled('filter') ){
			$this->data['filter'] = $filter = $request->get('filter');

			$queryData->where('loan_title', 'like', '%'.$filter.'%');
			$queryData->orWhere('loan_code', 'like', '%'.$filter.'%');
		}

		$this->data['allData'] =  $queryData->paginate($perPage)->appends( request()->query() ); // paginate
		$this->layout('index');

    }

    public function create()
    {
        $this->data = [
            'title'         => 'Add New Loan',
            'page_icon'     => '<i class="fa fa-plus-circle"></i>',
            'objData'       => '',                                         
        ];

		$this->layout('create');
    }

    public function edit($id)
    {
		$id = filter_var($id, FILTER_VALIDATE_INT);
		if( !$id ){ exit('Bad Request!'); }

        $this->data = [
            'title'         => 'Edit Loan',
			'page_icon'     => '<i class="fa fa-edit"></i>',
            'objData'       => $this->model::where($this->tableId, $id)->first(),
        ];

		$this->layout('create');
    }

    public function store(Request $request)
    {
        $id = $request[$this->tableId];

        $rules = [
            'loan_title'        => 'required',
            'interest'        => 'required',
        ];

        $attribute = [
            'loan_title'              => 'Loan Name',
            'interest'              => 'Loan Amount',
        ];
        $customMessages =[];

        $validator = Validator::make($request->all(), $rules, $customMessages, $attribute);

        if ($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
        }

		$loanData = [
            'loan_title' => $request['loan_title'],
            'loan_code' => $request['loan_code'],
            'interest'   =>$request['interest'],
        ];

        if ( empty($id) ){
			// Insert Query
            $this->model::create($loanData);

            $log_title = 'Hrms ('.$loanData ['loan_title'] .') was created by '. Sentinel::getUser()->full_name;
            Logs::create($log_title,'loan_create');

			return redirect($this->bUrl)->with('success', 'Record Successfully Created.');

        }else{
            // Update Query      
            $loan = HrmsLoan::where('loan_id', $id)->first();

            //// Update loanManage ////
            $loanManages = HrmsLoanManage::all();
            foreach($loanManages as $loanManage){                

                $loanManageObjData = json_decode($loanManage->loans);
                $loanManageData = array ($loanManageObjData);

                for($j = 0; $j < count($loanManageData[0]->loan_id); $j++){
                    if($id == $loanManageData[0]->loan_id[$j]){

                        $a4 = array($j => $request['loan_code']);
                        array_splice($loanManageData[0]->loan_code, $j, 1, $a4);
                        
                        if(substr($loanManage->loan_date, 0, 7) == date('Y-m')){
                            $a5 = array($j => $request['interest']);                            
                            array_splice($loanManageData[0]->interest, $j , 1, $a5);
                        }
                        
                        $obj = (object) $loanManageData[0];
                        DB::table('hrms_loan_manages')->where('loan_manage_id', $loanManage->loan_manage_id)->update(['loans' => json_encode($obj)]);
                    }
                }             
                
            }

            $this->model::where($this->tableId, $id)->update($loanData);

            $log_title = 'Hrms ('.$loanData ['loan_title'] .') was updated by '. Sentinel::getUser()->full_name;
            Logs::create($log_title,'loan_update');

            return redirect($this->bUrl)->with('success', 'Successfully Updated');
        }
    }

    public function show($id)
    {		
		$id = filter_var($id, FILTER_VALIDATE_INT);
		if( !$id ){ exit('Bad Request!'); }

        $this->data = [
            'title'         => 'Loan Information',
			'page_icon'     => '<i class="fa fa-eye"></i>',
            'objData'       => $this->model::where($this->tableId, $id)->first(),
        ];		       

		$this->layout('view');

    }

    public function destroy(Request $request, $id)
    {
		$id = filter_var($id, FILTER_VALIDATE_INT);
		if( !$id ){ exit('Bad Request!'); }

        $this->data = [
            'title'     => 'Delete Loan',
            'pageUrl'   => $this->bUrl.'/delete/'.$id,
			'page_icon' => '<i class="fa fa-trash"></i>',
            'objData'   => $this->model::where($this->tableId, $id)->first(),
        ];

		$this->data['tableID'] = $this->tableId;
		$this->data['bUrl'] = $this->bUrl;

		if($request->method() === 'POST' ){
			  
            $title = $this->data['objData']->loan_title;

            $this->model::where($this->tableId, $id)->delete();

            $log_title = 'Hrms ('.$title.') was deleted by '. Sentinel::getUser()->full_name;
            Logs::create($log_title,'loan_delete');

			echo json_encode(['fail' => FALSE, 'error_messages' => "Loan was deleted."]);
		}else{
			return view($this->moduleName.'::loans.delete', $this->data);
		}

    }
}
