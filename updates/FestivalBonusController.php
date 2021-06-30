<?php

namespace Modules\Hrms\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DB;
use Modules\Hrms\Entities\HrmsFestival;
use Modules\Hrms\Entities\HrmsSalaryRules;
use Modules\Hrms\Entities\HrmsFestivalBonus;
use App\Helpers\Logs;
use Sentinel;

class FestivalBonusController extends Controller
{
    private $moduleName;
	private $data;
	private $bUrl;

	public function __construct(){	

		$this->moduleName = 'hrms';
		$this->bUrl = $this->moduleName.'/festival-bonus';

	}

	public function layout($pageName){
		$this->data['bUrl'] = $this->bUrl;		
		echo view($this->moduleName.'::festivalBonus.'.$pageName.'', $this->data);
	}

    public function fetch_festivals()
    {
        $this->data = [
			'title'         => 'Make Festival Bonus',
			'pageUrl'         => $this->bUrl,
			'festivals'  => HrmsFestival::all(),
			'page_icon'     => '<i class="fa fa-book"></i>',
		];
		
		$this->layout('create');
    }

    public function make_festival_bonus(Request $request)
    {
        $existingBonus = HrmsFestivalBonus::where('festival_id', $request->festival_id)->where('year', date('Y'))->first();
        // dd($existingBonus);
        if(!empty($existingBonus)) {
            return redirect()->back()->withErrors("Already made bonuses for this festival of the year");
        }

        if($request->festival_id == 6) {
			$employeeDetails = DB::table('hrms_employees')
                            ->select('hrms_employees.employee_bpc_id', 'hrms_employees.employee_basic_salary')
                            ->get();
        } elseif($request->festival_id == 3 || $request->festival_id == 5) {
            $employeeDetails = DB::table('hrms_employees')
                            ->select('hrms_employees.employee_bpc_id', 'hrms_employees.employee_basic_salary')
                            ->where('employee_religion', 2)
                            ->orWhere('employee_religion', 3)
                            ->get();

        } else {
            $employeeDetails = DB::table('hrms_festivals')
					->join('hrms_employees', 'hrms_festivals.religion_id', '=', 'hrms_employees.employee_religion')
					->select('hrms_employees.employee_bpc_id', 'hrms_employees.employee_basic_salary')
					->where('hrms_festivals.festival_id', $request->festival_id)->get();
        }                

        $stampDeduction = HrmsSalaryRules::where('rules_name', "stamp")->pluck('rules_amount')->first();

        foreach($employeeDetails as $employeeDetail) {

            $employeeData = [
                'festival_id' => $request->festival_id,
                'employee_id' => $employeeDetail->employee_bpc_id,
                'employee_salary' => $employeeDetail->employee_basic_salary,
                'festival_bonus'   => $employeeDetail->employee_basic_salary - $stampDeduction,
                'month'   => substr(date('m'), 1, 1),
                'year'   => date('Y'),
            ];

            HrmsFestivalBonus::create($employeeData);
        }

        $festival = HrmsFestivalBonus::where('festival_id', $request->festival_id)->pluck('festival_name')->first();

        $log_title = 'Hrms '.$festival.' bonus was created by '. Sentinel::getUser()->full_name;
        Logs::create($log_title,'festival_bonus_create');

        return redirect($this->bUrl)->with('success', 'Record Successfully Created.');
    }
}
