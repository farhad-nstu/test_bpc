<?php

namespace Modules\Hrms\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Hrms\Entities\HrmsSalaryStructure;
use Validator;
use Modules\Hrms\Entities\HrmsEmployee;
use Modules\Hrms\Entities\HrmsSalaryRules;
use DB;
use Auth;

class SalaryStructureController extends Controller
{
    public function index(){
        $this->data=[
            'title'         => 'Salary Structure Manage',
            'page_icon'     => '<i class="fa fa-book"></i>',
            'bUrl'          => 'hrms/award',
            'employees'     => HrmsEmployee::all(),
            'rules'     => HrmsSalaryRules::all(),
            'allData'         => HrmsSalaryStructure::all(),
        ];
        return view('hrms::salaryStructure.index',$this->data);
    }

    public function store(Request $request)
    {
        dd($request->all());
        $validator = Validator::make($request->all(),[
            'employee_id'        => 'required',
            'rule_id'        => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->with('error', 'Provide Valid Information' );
        }

        $salaryStructureData = [
            'employee_id' => $request['employee_id'],
            'rule_id' => $request['rule_id'],
            'structure_frequency'   =>$request['structure_frequency'],
        ];

        HrmsSalaryStructure::create($salaryStructureData);
        $logData = [
            'log_title' => 'Employee(Id-'.$request['employee_id'].') Salary Structure Inserted',
            'log_type'  => 'Employee Section Updated',
            'log_amount'=> 1,
            'log_creator'=> Auth::id(),
            'log_date' => date("Y-m-d"),
        ];
        DB::table('tbl_logs')->insert($logData);
        return redirect()->route('hrms.salaryStructure.index')->with('success', 'Record Successfully Created!');

    }

    public function edit($id){
        $this->data=[
            'title'         => 'Edit Salary Structure',
            'bUrl'          => 'hrms/salary-structure/update',
            'employees'     => HrmsEmployee::all(),
            'rules'     => HrmsSalaryRules::all(),
            'objData'       => HrmsSalaryStructure::where('structure_id',$id)->first(),
        ];
        return view('hrms::salaryStructure.edit',$this->data);
    }
    public function update(Request $request)
    {
        $id = $request['id'];

        $rules = [
            'employee_id'        => 'required',
            'rule_id'        => 'required',
        ];

        $attribute =[
            'employee_id'      => 'Employee ID',
            'rule_id'      => 'Rule ID',
        ];

        $customMessages =[];

        $validator = Validator::make($request->all(), $rules, $customMessages, $attribute);

        if ($validator->fails()){
            return response()->json($validator->messages(), 200);
        }

        $salaryStructureData = [
            'employee_id' => $request['employee_id'],
            'rule_id' => $request['rule_id'],
            'structure_frequency'   =>$request['structure_frequency'],
        ];
        HrmsSalaryStructure::where('structure_id', $id)->update($salaryStructureData);

        $logData = [
            'log_title' => 'Employee(Id-'.$request['employee_id'].') Salary Structure Updated',
            'log_type'  => 'Employee Section Updated',
            'log_amount'=> 1,
            'log_creator'=> Auth::id(),
            'log_date' => date("Y-m-d"),
        ];
        DB::table('tbl_logs')->insert($logData);

        return 'success';
    }

    public function show($id){
        $this->data=[
            'title'         => 'Employee Salary Structure',
            'page_icon'     => '<i class="fa fa-book"></i>',
            'objData'       => HrmsSalaryStructure::where('structure_id',$id)->first(),
        ];
        return view('hrms::salaryStructure.view',$this->data);
    }


    public function destroy(Request $request, $id)
    {
        $id = filter_var($id, FILTER_VALIDATE_INT);
        if( !$id ){ exit('Bad Request!'); }

        $this->data = [
            'title'     => 'Delete Salary Structure',
            'pageUrl'   => 'hrms/salary-structure/delete/'.$id,
            'objData'   => HrmsSalaryStructure::where('structure_id',$id)->first(),
        ];

        $this->data['bUrl'] = 'hrms/salary-structure/delete/'.$id;

        if($request->method() === 'POST' ){
            HrmsSalaryStructure::where('structure_id',$id)->delete();
            $logData = [
                'log_title' => 'Employee(Id-'.$this->data['objData']->employee_id.') Salary Structure Deleted',
                'log_type'  => 'Employee Section Updated',
                'log_amount'=> 1,
                'log_creator'=> Auth::id(),
                'log_date' => date("Y-m-d"),
            ];
            DB::table('tbl_logs')->insert($logData);
            return json_encode(['fail' => FALSE, 'error_messages' => " was deleted."]);
        }else{
            return view('hrms::salaryStructure.delete',$this->data);
        }

    }

    public function fetch_rule_details(Request $request)
    {
        $rule = HrmsSalaryRules::where('rules_id', $request->ruleId)->first();
        return $rule;
    }
}
