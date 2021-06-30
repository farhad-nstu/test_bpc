<?php

namespace Modules\Hrms\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Hrms\Entities\HrmsEmployee;
use App\Models\District;
use Modules\Hrms\Entities\HrmsDesignation;
use App\Models\Religion;
use Modules\Hrms\Entities\HrmsDepartment;
use Modules\Hrms\Entities\HrmsUnit;
use DB;
use Validator;
 
class HRReportController extends Controller
{
    private $moduleName;
	private $data;
	private $bUrl;

	public function __construct(){	

		$this->moduleName = 'hrms';
		$this->bUrl = $this->moduleName.'/hr/report';

	}

	public function layout($pageName){
		$this->data['bUrl'] = $this->bUrl;		
		echo view($this->moduleName.'::reports.hr.'.$pageName.'', $this->data);
	}

    public function hr_report_page()
    {
        $this->data = [
			'title'         => 'Insert employee to make report',
			'pageUrl'         => $this->bUrl,
			'employees'  => HrmsEmployee::all('employee_bpc_id', 'employee_name'),
			'page_icon'     => '<i class="fa fa-book"></i>',
		];

        $this->layout('findEmployeeForReport');
    }

    public function make_hr_report(Request $request)
    {
        $rules = [
            'employee_id'   => 'required',
        ];

        $attribute =[
            'employee_id'       => 'Employee',
        ];

        $customMessages =[];

        $validator = Validator::make($request->all(), $rules, $customMessages, $attribute);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $this->data = [
            'title'         => 'Report of Employee',
			'page_icon'     => '<i class="fa fa-book"></i>',
            'districts'     => District::all(),
            'designations'  => HrmsDesignation::all(),
            'religions'     => Religion::all(),
            'departments'   => HrmsDepartment::all(),
            'units'         => HrmsUnit::all(),
            'countries'      => DB::table('tbl_countries')->get(),
            'payscaleGrades'      => DB::table('hrms_payscale')->get(),
            'objData'       => HrmsEmployee::where('employee_bpc_id', $request->employee_id)->first(),
        ];				       

		$this->layout('hrReport');
    }

    //// District ////
    public function get_district()
    {
        // dd("hlq");
        $this->data = [
			'title'         => 'Bangladesh Parjatan Shilpo Employee Report',
			'pageUrl'         => $this->bUrl,
			'districts'  => DB::table('tbl_districts')->orderBy('district_name')->get(),
			'page_icon'     => '<i class="fa fa-book"></i>',
		];

        $this->layout('filters.district');
    }

    public function by_district(Request $request)
    {
        $rules = [
			'district' 	=> 'required',
		];

		$attribute =[
			'district'		=> 'District',
		];

		$customMessages =[];

		$validator = Validator::make($request->all(), $rules, $customMessages, $attribute);

		if ($validator->fails()){
		    return redirect()->back()->withErrors($validator)->withInput();
		}
        
        $this->data = [
            'title'         => 'District Wise Employee Report',
            'pageUrl'         => $this->bUrl.'/district',
            'page_icon'     => '<i class="fa fa-book"></i>',
        ];

        $employees = DB::table('hrms_employees')
                    ->join('tbl_districts', 'hrms_employees.employee_district', '=', 'tbl_districts.district_id')
                    ->join('hrms_designations', 'hrms_employees.employee_designation', '=', 'hrms_designations.desg_id')
                    ->join('religions', 'hrms_employees.employee_religion', '=', 'religions.id')
                    ->select('hrms_employees.*', 'hrms_designations.desg_title', 'tbl_districts.district_name', 'religions.name as religion')
                    ->where('hrms_employees.employee_district', $request->district)
                    ->get();

        $this->data['allData'] = $employees;

        $this->layout('districtReport');
    }

    //// Religion ////
    public function get_religion()
    {
        // dd("hlq");
        $this->data = [
			'title'         => 'Bangladesh Parjatan Shilpo Employee Report',
			'pageUrl'         => $this->bUrl,
			'religions'  => DB::table('religions')->get(),
			'page_icon'     => '<i class="fa fa-book"></i>',
		];

        $this->layout('filters.religion');
    }

    public function by_religion(Request $request)
    {
        $rules = [
			'religion' 	=> 'required',
		];

		$attribute =[
			'religion'		=> 'Religion',
		];

		$customMessages =[];

		$validator = Validator::make($request->all(), $rules, $customMessages, $attribute);

		if ($validator->fails()){
		    return redirect()->back()->withErrors($validator)->withInput();
		}

        $this->data = [
            'title'         => 'Religion Wise Employee Report',
            'pageUrl'         => $this->bUrl.'/religion',
            'page_icon'     => '<i class="fa fa-book"></i>',
        ];

        $employees = DB::table('hrms_employees')
                    ->join('tbl_districts', 'hrms_employees.employee_district', '=', 'tbl_districts.district_id')
                    ->join('hrms_designations', 'hrms_employees.employee_designation', '=', 'hrms_designations.desg_id')
                    ->join('religions', 'hrms_employees.employee_religion', '=', 'religions.id')
                    ->select('hrms_employees.*', 'hrms_designations.desg_title', 'tbl_districts.district_name', 'religions.name as religion')
                    ->where('hrms_employees.employee_religion', $request->religion)
                    ->get();

        $this->data['allData'] = $employees;

        $this->layout('religionReport');
    }
    //// Religion End ////

    //// Gender ////
    public function get_gender()
    {
        // dd("hlq");
        $this->data = [
			'title'         => 'Bangladesh Parjatan Shilpo Employee Report',
			'pageUrl'         => $this->bUrl,
			'page_icon'     => '<i class="fa fa-book"></i>',
		];

        $this->layout('filters.gender');
    }

    public function by_gender(Request $request)
    {
        $rules = [
			'gender' 	=> 'required',
		];

		$attribute =[
			'gender'		=> 'Employee Gender',
		];

		$customMessages =[];

		$validator = Validator::make($request->all(), $rules, $customMessages, $attribute);

		if ($validator->fails()){
		    return redirect()->back()->withErrors($validator)->withInput();
		}

        $this->data = [
            'title'         => 'Gender Wise Employee Report',
            'pageUrl'         => $this->bUrl.'/gender',
            'page_icon'     => '<i class="fa fa-book"></i>',
        ];

        $employees = DB::table('hrms_employees')
                    ->join('tbl_districts', 'hrms_employees.employee_district', '=', 'tbl_districts.district_id')
                    ->join('hrms_designations', 'hrms_employees.employee_designation', '=', 'hrms_designations.desg_id')
                    ->join('religions', 'hrms_employees.employee_religion', '=', 'religions.id')
                    ->select('hrms_employees.*', 'hrms_designations.desg_title', 'tbl_districts.district_name', 'religions.name as religion')
                    ->where('hrms_employees.employee_sex', $request->gender)
                    ->get();

        $this->data['allData'] = $employees;

        $this->layout('genderReport');
    }
    //// Gender End ////

     //// Designation ////
     public function get_designation()
     {
         $this->data = [
             'title'         => 'Bangladesh Parjatan Shilpo Employee Report',
             'pageUrl'         => $this->bUrl,
             'designations'  => DB::table('hrms_designations')->get(),
             'page_icon'     => '<i class="fa fa-book"></i>',
         ];
 
         $this->layout('filters.designation');
     }
 
     public function by_designation(Request $request)
     {
        $rules = [
			'designation' 	=> 'required',
		];

		$attribute =[
			'designation'		=> 'Designation',
		];

		$customMessages =[];

		$validator = Validator::make($request->all(), $rules, $customMessages, $attribute);

		if ($validator->fails()){
		    return redirect()->back()->withErrors($validator)->withInput();
		}

         $this->data = [
             'title'         => 'Designation Wise Employee Report',
             'pageUrl'         => $this->bUrl.'/designation',
             'page_icon'     => '<i class="fa fa-book"></i>',
         ];
 
         $employees = DB::table('hrms_employees')
                     ->join('tbl_districts', 'hrms_employees.employee_district', '=', 'tbl_districts.district_id')
                     ->join('hrms_designations', 'hrms_employees.employee_designation', '=', 'hrms_designations.desg_id')
                     ->join('religions', 'hrms_employees.employee_religion', '=', 'religions.id')
                     ->select('hrms_employees.*', 'hrms_designations.desg_title', 'tbl_districts.district_name', 'religions.name as religion')
                     ->where('hrms_employees.employee_designation', $request->designation)
                     ->get();
 
         $this->data['allData'] = $employees;
 
         $this->layout('designationReport');
     }
     //// Designation End ////

     //// Unit ////
     public function get_unit()
     {
         $this->data = [
             'title'         => 'Bangladesh Parjatan Shilpo Employee Report',
             'pageUrl'         => $this->bUrl,
             'units'  => DB::table('hrms_units')->get(),
             'page_icon'     => '<i class="fa fa-book"></i>',
         ];
 
         $this->layout('filters.unit');
     }
 
     public function by_unit(Request $request)
     {
        $rules = [
			'unit' 	=> 'required',
		];

		$attribute =[
			'unit'		=> 'Employee Unit',
		];

		$customMessages =[];

		$validator = Validator::make($request->all(), $rules, $customMessages, $attribute);

		if ($validator->fails()){
		    return redirect()->back()->withErrors($validator)->withInput();
		}

         $this->data = [
             'title'         => 'Unit Wise Employee Report',
             'pageUrl'         => $this->bUrl.'/unit',
             'page_icon'     => '<i class="fa fa-book"></i>',
         ];
 
         $employees = DB::table('hrms_employees')
                     ->join('tbl_districts', 'hrms_employees.employee_district', '=', 'tbl_districts.district_id')
                     ->join('hrms_designations', 'hrms_employees.employee_designation', '=', 'hrms_designations.desg_id')
                     ->join('hrms_units', 'hrms_employees.employee_unit', '=', 'hrms_units.unit_id')
                     ->select('hrms_employees.*', 'hrms_designations.desg_title', 'tbl_districts.district_name', 'hrms_units.unit_title as unit')
                     ->where('hrms_employees.employee_unit', $request->unit)
                     ->get();
 
         $this->data['allData'] = $employees;
 
         $this->layout('unitReport');
     }
     //// Unit End ////

      //// Section ////
      public function get_section()
      {
          $this->data = [
              'title'         => 'Bangladesh Parjatan Shilpo Employee Report',
              'pageUrl'         => $this->bUrl,
              'sections'  => DB::table('hrms_departments')->get(),
              'page_icon'     => '<i class="fa fa-book"></i>',
          ];
  
          $this->layout('filters.section');
      }
  
      public function by_section(Request $request)
      {
        $rules = [
			'section' 	=> 'required',
		];

		$attribute =[
			'section'		=> 'Employee Section',
		];

		$customMessages =[];

		$validator = Validator::make($request->all(), $rules, $customMessages, $attribute);

		if ($validator->fails()){
		    return redirect()->back()->withErrors($validator)->withInput();
		}

          $this->data = [
              'title'         => 'Section Wise Employee Report',
              'pageUrl'         => $this->bUrl.'/section',
              'page_icon'     => '<i class="fa fa-book"></i>',
          ];
  
          $employees = DB::table('hrms_employees')
                      ->join('tbl_districts', 'hrms_employees.employee_district', '=', 'tbl_districts.district_id')
                      ->join('hrms_designations', 'hrms_employees.employee_designation', '=', 'hrms_designations.desg_id')
                      ->join('hrms_departments', 'hrms_employees.employee_department', '=', 'hrms_departments.dpt_id')
                      ->select('hrms_employees.*', 'hrms_designations.desg_title', 'tbl_districts.district_name', 'hrms_departments.dpt_title as section')
                      ->where('hrms_employees.employee_department', $request->section)
                      ->get();
  
          $this->data['allData'] = $employees;
  
          $this->layout('sectionReport');
      }
      //// Section End ////

    //// Type ////
    public function get_type()
    {
        $this->data = [
            'title'         => 'Bangladesh Parjatan Shilpo Employee Report',
            'pageUrl'         => $this->bUrl,
            'page_icon'     => '<i class="fa fa-book"></i>',
        ];

        $this->layout('filters.type');
    }

    public function by_type(Request $request)
    {
        $rules = [
			'type' 	=> 'required',
		];

		$attribute =[
			'type'		=> 'Employee Type',
		];

		$customMessages =[];

		$validator = Validator::make($request->all(), $rules, $customMessages, $attribute);

		if ($validator->fails()){
		    return redirect()->back()->withErrors($validator)->withInput();
		}

        $this->data = [
            'title'         => 'Type Wise Employee Report',
            'pageUrl'         => $this->bUrl.'/type',
            'page_icon'     => '<i class="fa fa-book"></i>',
        ];

        $employees = DB::table('hrms_employees')
                    ->join('tbl_districts', 'hrms_employees.employee_district', '=', 'tbl_districts.district_id')
                    ->join('hrms_designations', 'hrms_employees.employee_designation', '=', 'hrms_designations.desg_id')
                    ->select('hrms_employees.*', 'hrms_designations.desg_title', 'tbl_districts.district_name')
                    ->where('hrms_employees.employee_type', $request->type)
                    ->get();

        $this->data['allData'] = $employees;

        $this->layout('typeReport');
    }
    //// Type End ////

    //// Blood Group ////
    public function get_blood_group()
    {
        $this->data = [
            'title'         => 'Bangladesh Parjatan Shilpo Employee Report',
            'pageUrl'         => $this->bUrl,
            'page_icon'     => '<i class="fa fa-book"></i>',
        ];

        $this->layout('filters.bloodGroup');
    }

    public function by_blood_group(Request $request)
    {
        $rules = [
			'group' 	=> 'required',
		];

		$attribute =[
			'group'		=> 'Blood Group',
		];

		$customMessages =[];

		$validator = Validator::make($request->all(), $rules, $customMessages, $attribute);

		if ($validator->fails()){
		    return redirect()->back()->withErrors($validator)->withInput();
		}

        $this->data = [
            'title'         => 'Blood Group Wise Employee Report',
            'pageUrl'         => $this->bUrl.'/blood-group',
            'page_icon'     => '<i class="fa fa-book"></i>',
        ];

        $employees = DB::table('hrms_employees')
                    ->join('tbl_districts', 'hrms_employees.employee_district', '=', 'tbl_districts.district_id')
                    ->join('hrms_designations', 'hrms_employees.employee_designation', '=', 'hrms_designations.desg_id')
                    ->select('hrms_employees.*', 'hrms_designations.desg_title', 'tbl_districts.district_name')
                    ->where('hrms_employees.blood_group', $request->group)
                    ->get();

        $this->data['allData'] = $employees;

        $this->layout('bloodGroupReport');
    }
    //// Blood Group End ////

    //// PRL ////
    public function get_prl()
    {
        $this->data = [
            'title'         => 'Bangladesh Parjatan Shilpo Employee Report',
            'pageUrl'         => $this->bUrl,
            'page_icon'     => '<i class="fa fa-book"></i>',
        ];

        $this->layout('filters.prl');
    }

    public function by_prl(Request $request)
    {
        $rules = [
			'from_date' 	=> 'required',
			'to_date' 	=> 'required',
		];

		$attribute =[
			'from_date'		=> 'Starting Date',
			'to_date'		=> 'Ending Date',
		];

		$customMessages =[];

		$validator = Validator::make($request->all(), $rules, $customMessages, $attribute);

		if ($validator->fails()){
		    return redirect()->back()->withErrors($validator)->withInput();
		}

        $from = $request->from_date;
		$to = $request->to_date;

		$f=date('d-m-Y',strtotime($from));		
		$t=date('d-m-Y',strtotime($to));
		$nodays=(strtotime($t) - strtotime($f))/ (60 * 60 * 24);
		$months = ceil($nodays / 30);

        $this->data = [
            'title'         => 'PRL Wise Employee Report of  '.date('j F Y', strtotime($from)).'-'.date('j F Y', strtotime($to)),
            'pageUrl'       => $this->bUrl.'/prl',
            'months'        => $months,
            'page_icon'     => '<i class="fa fa-book"></i>',
        ];

        $employees = DB::table('hrms_employees')
                    ->join('tbl_districts', 'hrms_employees.employee_district', '=', 'tbl_districts.district_id')
                    ->join('hrms_designations', 'hrms_employees.employee_designation', '=', 'hrms_designations.desg_id')
                    ->select('hrms_employees.*', 'hrms_designations.desg_title', 'tbl_districts.district_name')
                    ->whereBetween('hrms_employees.employee_prl_date', [$from, $to])
                    ->get();
        // dd($employees);

        $this->data['allData'] = $employees;

        $this->layout('prlReport');
    }
    //// PRL ////

}
