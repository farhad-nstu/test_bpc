<?php

namespace Modules\Accounting\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Accounting\Entities\Bank;

class BanksController extends Controller
{
    private $model;
	private $moduleName;
	private $data;
	private $tableId;
	private $bUrl;

	public function __construct(){	
	
		 $this->tableId = 'bank_id';
		 $this->model = Bank::class;
		 $this->moduleName = 'accounting';
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
            'title'         => 'Bank Account Management',
			'pageUrl'         => $this->bUrl,
            'page_icon'     => '<i class="fa fa-book"></i>',
        ];



		// $this->data['locations'] =  District::all();

		//result per page
		$perPage = session('per_page') ?: 3;

		//table item serial starting from 0
		$this->data['serial'] = ( ($request->get('page') ?? 1) -1) * $perPage;


		if($request->method() === 'POST'){
			session(['per_page' => $request->post('per_page') ]);
		}

		//model query...
		$queryData = Bank::orderBy( getOrder(Bank::$sortable, $this->tableId)['by'], getOrder(Bank::$sortable, $this->tableId)['order']);

		//filter by text.....
		if( $request->filled('filter') ){
			$this->data['filter'] = $filter = $request->get('filter');

			$queryData->where('bank_name', 'like', '%'.$filter.'%');
			//$queryData->orWhere('district_name', 'like', '%'.$filter.'%');
		}

		//filter by location.....
		// if( $request->filled('location') ){
		// 	$this->data['location'] = $locationFilter = $request->get('location');
		// 	$queryData->where( [ 'district_id' => $locationFilter ] );
		// }


		$this->data['allData'] =  $queryData->paginate($perPage)->appends( request()->query() ); // paginate

		$this->layout('index');

    }

    // public function index()
    // {
    //     return view('accounting::index');
    // }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('accounting::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('accounting::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('accounting::edit');
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
