<?php

namespace Modules\Hrms\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Hrms\Entities\HrmsDesignation;
use Validator;
use App\Helpers\Logs;
use Sentinel;

class DesignationsController extends Controller
{
    public function index(){
        $this->data=[
            'title'         => 'Designation Manage',
            'page_icon'     => '<i class="fa fa-book"></i>',
            'bUrl'          => 'hrms/designation',
            'allData'         => HrmsDesignation::all(),
        ];
        return view('hrms::designations.index',$this->data);
    }

    public function store(Request $request)
    { 
        $rules = [
            'desg_title'        => 'required|string',
        ];

        $attribute =[
            'desg_title'      => 'Designation Title',
        ];

        $customMessages =[];

        $validator = Validator::make($request->all(), $rules, $customMessages, $attribute);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $currentExists = HrmsDesignation::where('desg_title', $request->desg_title)->first();

        if ($currentExists){
            return redirect()->back()->withErrors('Already Inserted!')->withInput();
        }

        $desgData = [
            'desg_title' => $request['desg_title'],
        ];

        HrmsDesignation::create($desgData);

        $log_title = 'Hrms ('.$desgData ['desg_title'] .') was created by '. Sentinel::getUser()->full_name;
        Logs::create($log_title,'designation_create');

        return redirect()->back()->with('success', 'Record Successfully Created!');

    }

    public function edit($id){
        $this->data=[
            'title'         => 'Edit Designation',
            'bUrl'          => 'hrms/designation/update',
            'objData'       => HrmsDesignation::where('desg_id',$id)->first(),
        ];
        return view('hrms::designations.edit',$this->data);
    }
    public function update(Request $request)
    {
        $id = $request['id'];

        $rules = [
            'desg_title'        => 'required|string',
        ];

        $attribute =[
            'desg_title'      => 'Designation Title',
        ];

        $customMessages =[];

        $validator = Validator::make($request->all(), $rules, $customMessages, $attribute);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $desgData = [
            'desg_title' => $request['desg_title'],
        ];

        HrmsDesignation::where('desg_id', $id)->update($desgData);

        $log_title = 'Hrms ('.$desgData ['desg_title'] .') was updated by '. Sentinel::getUser()->full_name;
        Logs::create($log_title,'designation_update');
        
        return 'success';
    }

    public function show($id){
        $this->data=[
            'title'         => 'Designation View',
            'page_icon'     => '<i class="fa fa-book"></i>',
            'objData'       => HrmsDesignation::where('desg_id',$id)->first(),
        ];
        return view('hrms::designations.view',$this->data);
    }


    public function destroy(Request $request, $id)
    {
        $id = filter_var($id, FILTER_VALIDATE_INT);
        if( !$id ){ exit('Bad Request!'); }

        $this->data = [
            'title'     => 'Delete Employee Award',
            'pageUrl'   => 'hrms/designation/delete/'.$id,
            'objData'   => HrmsDesignation::where('desg_id',$id)->first(),
        ];

        $this->data['bUrl'] = 'hrms/designation/delete/'.$id;

        if($request->method() === 'POST' ){

            $title = $this->data['objData']->desg_title;

            HrmsDesignation::where('desg_id',$id)->delete();

            $log_title = 'Hrms ('.$title.') was deleted by '. Sentinel::getUser()->full_name;
            Logs::create($log_title,'designation_delete');

            return json_encode(['fail' => FALSE, 'error_messages' => " was deleted."]);
        }else{
            return view('hrms::designations.delete',$this->data);
        }

    }

}
