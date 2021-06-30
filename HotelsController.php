<?php

namespace Modules\Hotels\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Hotels\Entities\HotelConfig;
use Modules\Hotels\Entities\HotelList;
use Illuminate\Support\Str;
use Sentinel;
 

use Validator;

class HotelsController extends Controller
{

	private $model;
	private $moduleName;
	private $data;
	private $tableId;
	private $bUrl;

	public function __construct(){	
	
		 $this->tableId = 'h_id';
		 $this->model = HotelList::class;
		 $this->moduleName = 'hotels';
		 $this->bUrl = $this->moduleName.'/hotel';

	}


	public function layout($pageName){
		$this->data['tableID'] = $this->tableId;
		$this->data['bUrl'] = $this->bUrl;		
		echo view($this->moduleName.'::hotels.'.$pageName.'', $this->data);
	}

    public function dashboard($hotel_id=null){
	    if($hotel_id){
            session(['_hotel_id' => $hotel_id]);
        }
        if (session()->get('_hotel_id') == 0) { return redirect()->route('home.hotel');}
        $hotel  = HotelList::where('h_id', session()->get('_hotel_id'))->first();
        $this->data['title'] = $hotel->h_name;
        session(['_hotel_name' => $hotel->h_name]);
        if (Sentinel::getUser()->roles[0]->name == 'frontdesk'){
            return redirect()->route('hotel.front');
        }
        return view('hotels::dashboard',$this->data);
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {


        $this->data = [
            'title'         => 'Hotel Management',
			'pageUrl'         => $this->bUrl,
            'page_icon'     => '<i class="fa fa-book"></i>',
        ];



		$this->data['locations'] =  District::all();

		//result per page
		$perPage = session('per_page') ?: 3;

		//table item serial starting from 0
		$this->data['serial'] = ( ($request->get('page') ?? 1) -1) * $perPage;


		if($request->method() === 'POST'){
			session(['per_page' => $request->post('per_page') ]);
		}

		//model query...
		$queryData = HotelList::with(['districtName'])->orderBy( getOrder(HotelList::$sortable, $this->tableId)['by'], getOrder(HotelList::$sortable, $this->tableId)['order']);

		//filter by text.....
		if( $request->filled('filter') ){
			$this->data['filter'] = $filter = $request->get('filter');

			$queryData->where('h_name', 'like', '%'.$filter.'%');
			//$queryData->orWhere('district_name', 'like', '%'.$filter.'%');
		}

		//filter by location.....
		if( $request->filled('location') ){
			$this->data['location'] = $locationFilter = $request->get('location');
			$queryData->where( [ 'district_id' => $locationFilter ] );
		}


		$this->data['allData'] =  $queryData->paginate($perPage)->appends( request()->query() ); // paginate

		$this->layout('index');

    }



    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $this->data = [
            'title'         => 'Add New Hotel',
            'page_icon'     => '<i class="fa fa-book"></i>',
            'objData'       => '',
        ];

		$this->data['districts'] =  District::all();

		$this->layout('create');
    }


    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */


    public function edit($id)
    {
		$id = filter_var($id, FILTER_VALIDATE_INT);
		if( !$id ){ exit('Bad Request!'); }

        $this->data = [
            'title'         => 'Edit Hotel',
			'page_icon'     => '<i class="fa fa-book"></i>',
            'objData'       => $this->model::where($this->tableId, $id)->first(),
        ];

        $this->data['districts'] =  District::all();

		$this->layout('create');
    }



    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $id = $request[$this->tableId];

        $rules = [
            'h_name'        => 'required|string|max:255',
            'district_id'   => 'required|integer|max:10',
            'h_contact'     => 'required',
            'h_description' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
        }

		$params   = $request->except( ['_token'] );

        if ( empty($id) ){

			// Insert Query
            $hotel_id = $this->model::insertGetId($params);
            $configData = [
                'h_id'      =>$hotel_id,
                'c_phone'   =>$request['h_contact'],
                'c_email'   =>$request['h_email'],
            ];
            HotelConfig::create($configData);

			return redirect($this->bUrl)->with('success', 'Record Successfully Created.');

        }else{

            // Update Query
            $this->model::where($this->tableId, $id)->update($params);

            return redirect($this->bUrl)->with('success', 'Successfully Updated');
        }
    }



    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {		
		$id = filter_var($id, FILTER_VALIDATE_INT);
		if( !$id ){ exit('Bad Request!'); }

        $this->data = [
            'title'         => 'Hotel Information',
			'page_icon'     => '<i class="fa fa-book"></i>',
            'objData'       => $this->model::with(['districtName'])->where($this->tableId, $id)->first(),
        ];				       

		$this->layout('view');


    }



    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */

    public function destroy(Request $request, $id)
    {
		$id = filter_var($id, FILTER_VALIDATE_INT);
		if( !$id ){ exit('Bad Request!'); }

        $this->data = [
            'title'     => 'Delete Hotel',
            'pageUrl'   => $this->bUrl.'/delete/'.$id,
			'page_icon' => '<i class="fa fa-book"></i>',
            'objData'   => $this->model::where($this->tableId, $id)->first(),
        ];

		$this->data['tableID'] = $this->tableId;
		$this->data['bUrl'] = $this->bUrl;


		if($request->method() === 'POST' ){

			  //$this->model::where($this->tableId, $id)->delete();

			  echo json_encode(['fail' => FALSE, 'error_messages' => "Hotel ".$this->data['objData']->h_name." was deleted."]);
		}else{
			return view($this->moduleName.'::hotels.delete', $this->data);
		}

    }

    public function front_desk(){

        $this->data = [
            'title'     => 'Front Desk',
        ];

        if (Sentinel::getUser()->roles[0]->name != 'frontdesk'){
            return redirect()->route('hotel.home');
        }
        return view($this->moduleName.'::front', $this->data);
    }





    public function picture(Request $request, $id)
    {
		$id = filter_var($id, FILTER_VALIDATE_INT);
		if( !$id ){ exit('Bad Request!'); }	


        $objData = $this->model::select(['h_id','h_name','h_photo'])->where($this->tableId, $id)->first();
		
		$this->data = [
            'title'     => 'Add Picture',
			'page_icon' => '<i class="fa fa-book"></i>',
			'pageUrl'   => $this->bUrl.'/picture/'.$id,
			'tableID' 	=> $this->tableId,
			'bUrl' 		=> $this->bUrl,
            'objData'   => $objData,
        ];

	
		if($request->method() === 'POST' ){

			$rules = [
				'image' => ['required', 'max:1024', 'dimensions:max_width=1000,max_height=1000', 'mimes:jpeg,bmp,png'],								
				];
		
			$attributes = [
				'image' => 'Hotel Image',						
				];				
						
				$validator = Validator::make($request->all(), $rules, [],  $attributes);			
																		
				if($validator->fails()){	
																														
						echo json_encode(['fail' => TRUE, 'messages' => $validator->errors()->first().$request->file('image') ]);
				}else{																
								
					//processing image file
					$file = $request->file('image');
					$pic_name = 'hotel_'.rand(11,99).time().'.'.$file->getClientOriginalExtension();
					$dir_name = "/images/".'hotel_'.$objData->h_id;
										
					$file->move(public_path().$dir_name, $pic_name);		
										
					//get previous image string and append the new one.
					if(!empty($objData->h_photo) )					
						$db_image = $objData->h_photo.'|'.$dir_name.'/'.$pic_name;						
					else $db_image = $dir_name.'/'.$pic_name;
											
					$this->model::where($this->tableId, $id)->update( ['h_photo' => $db_image] );
					  
			  		echo json_encode(['fail' => FALSE, 'messages' => "Picture Uploaded"]);
			}
			
		}else{
			echo view($this->moduleName.'::hotels.picture', $this->data);
		}		
		
		
		
    }
		
	
	 public function remove(){
	 
		request('picture') ?: die("Bad Request!");
		
		$hotel_id = session()->get('_hotel_id');
		$dir_name = "/images/".'hotel_'.$hotel_id;
		$dir_image = $dir_name.'/'.request('picture');
		
		$objData = $this->model::select(['h_photo'])->where($this->tableId, $hotel_id)->first();	
		
		// remove image path
		$image_paths = explode('|', $objData->h_photo);		
		$image_paths = array_diff( $image_paths, [$dir_image]);
		$image_paths = implode("|",$image_paths);		
				
		// update in the db			
		$this->model::where($this->tableId, $hotel_id)->update( ['h_photo' => $image_paths ] );
		
		// remove from dir
		if(file_exists(public_path().$dir_image)){
		  //onlye remove file.
		  if(is_file(public_path().$dir_image) ) unlink(public_path().$dir_image);
		}
		
		 return redirect($this->bUrl."/".$hotel_id)->with('success', 'Remove Successful.');
						
	}
	



}
