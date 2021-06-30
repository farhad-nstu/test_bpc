<?php

namespace Modules\Hrms\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Hrms\Entities\HrmsEmployee;
use Modules\Hrms\Entities\HrmsSalaryRules;
use Modules\Hrms\Entities\HrmsLoan;

class SalarySheetsController extends Controller
{
    public function single_salary_sheet($employeeId)
    {
        $queryData = HrmsEmployee::where('employee_bpc_id', $employeeId)->first();
        $title = "Salary Sheet";
        $addRules = HrmsSalaryRules::where('rules_type', 'addition')->get();
        $deducRules = HrmsSalaryRules::where('rules_type', 'deduction')->get();
        $loans = HrmsLoan::all();
        return view('hrms::salarySheets.singleSheet', compact('queryData', 'title', 'addRules', 'deducRules', 'loans'));
    }

    public function salary_sheets()
    {
        $queryData = HrmsEmployee::all('employee_bpc_id', 'employee_name', 'employee_designation', 'employee_nid', 'employee_basic_salary');
        $title = "Salary Sheet";
        $addRules = HrmsSalaryRules::where('rules_type', 'addition')->get();
        $deducRules = HrmsSalaryRules::where('rules_type', 'deduction')->get();
        $loans = HrmsLoan::all();
        return view('hrms::salarySheets.salarySheets', compact('queryData', 'title', 'addRules', 'deducRules', 'loans'));
    }
}
