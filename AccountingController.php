<?php

namespace Modules\Accounting\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Accounting\Entities\AccountingEntry;
use Illuminate\Support\Str;
use Sentinel;
use Validator;
use Modules\Accounting\Entities\AccountingAccount;

class AccountingController extends Controller
{
    private $model;
	private $moduleName;
	private $data;
	private $tableId;
	private $bUrl;

	public function __construct(){	
	
		$this->tableId = 'account_id';
		$this->model = AccountingEntry::class;
		$this->moduleName = 'accounting';
		$this->bUrl = $this->moduleName.'/account';

	}

	public function layout($pageName){
		$this->data['tableID'] = $this->tableId;
		$this->data['bUrl'] = $this->bUrl;		
		echo view($this->moduleName.'::accounts.'.$pageName.'', $this->data);
	}

    public function index(Request $request)
    {
        $this->data = [
            'title'         => 'Accounts Management',
			'pageUrl'         => $this->bUrl,
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


        // $queryData = AccountingEntry::with('accounting_bank')->orderBy('entry_id', 'desc');
        // dd($datt);
		//model query...
		$queryData = AccountingAccount::orderBy( getOrder(AccountingAccount::$sortable, $this->tableId)['by'], getOrder(AccountingAccount::$sortable, $this->tableId)['order']);
		//filter by text.....
		if( $request->filled('filter') ){
			$this->data['filter'] = $filter = $request->get('filter');

			$queryData->where('account_title', 'like', '%'.$filter.'%');
            $queryData->orWhere('account_number', 'like', '%'.$filter.'%');
		}

		$this->data['allData'] =  $queryData->paginate($perPage)->appends( request()->query() ); // paginate

		$this->layout('index');

    }

    public function create()
    {
        $this->data = [
            'title'         => 'Add New Accounting Account',
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
            'title'         => 'Edit Account Entry',
			'page_icon'     => '<i class="fa fa-book"></i>',
            'objData'       => $this->model::where($this->tableId, $id)->first(),
        ];

		$this->layout('create');
    }

    public function store(Request $request)
    {
        $id = $request[$this->tableId];

        $rules = [
            'account_title'        => 'required',
            'account_parent'   => 'required',
            'account_date'     => 'required',
        ];

        $attribute = [
            'account_title'  => 'Account Title',
            'account_parent'    => 'Account Parent',
            'account_date'           => 'Account Date',
        ];
        $customMessages =[];

        $validator = Validator::make($request->all(), $rules, $customMessages, $attribute);

        // $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
        }

        $accountData = [
            'account_title' => $request['account_title'],
            'account_number'   =>$request['account_number'],
            'account_parent'   =>$request['account_parent'],
            'account_balance'   =>$request['account_balance'],
            'account_currrent_balance'   =>$request['account_currrent_balance'],
            'account_drcr'   =>$request['account_drcr'],
            'account_normal_side'   =>$request['account_normal_side'],
            'account_type'   =>$request['account_type'],
            'account_bank_cash'   =>$request['account_bank_cash'],
            'account_reconciliation'   =>$request['account_reconciliation'],
            'account_note'   =>$request['account_note'],
            'account_date'   =>$request['account_date'],
            'account_status'   =>$request['account_status'],
        ];

        if ( empty($id) ){
            $this->model::create($accountData);
			return redirect($this->bUrl)->with('success', 'Record Successfully Created.');

        }else{
            $this->model::where($this->tableId, $id)->update($accountData);

            return redirect($this->bUrl)->with('success', 'Successfully Updated');
        }
    }

    public function show($id)
    {
        return view('accounting::show');
    }


    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
