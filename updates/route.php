<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('hrms')->group(function() {
    Route::get('/dashboard', 'HrmsController@dashboard')->name('hrms.dashboard');

    //// HRMS ////
    Route::resource('/hrm', 'EmployeesController');
    Route::match(['get', 'post'], '/hrm', 'EmployeesController@index')->name('hrms.employee.hrm');
    Route::post('/hrm/store', 'EmployeesController@store')->name('hrms.employee.store');
    Route::match(['get', 'post'], '/hrm/delete/{id}', 'EmployeesController@destroy')
        ->where(['id'=>'[0-9]+'])->name('hrms.employee.delete');
    Route::get('hrm/{id}/view', 'EmployeesController@show')->name('hrms.employee.view');  
    Route::post('/hrm/update', 'EmployeesController@update')->name('hrms.employee.update');

    /// Salary ////
    
    

    //// Designation ////
    Route::match(['get', 'post'], '/designation', 'DesignationsController@index')->name('hrms.designation');
    Route::post('/designation/store', 'DesignationsController@store')->name('hrms.designation.store');
    Route::match(['get', 'post'], '/designation/delete/{id}', 'DesignationsController@destroy')
        ->where(['id'=>'[0-9]+'])->name('hrms.designation.delete');
    Route::get('designation/{id}/edit', 'DesignationsController@edit')->name('hrms.designation.edit');
    Route::get('designation/{id}/view', 'DesignationsController@show')->name('hrms.designation.show');
    Route::post('/designation/update', 'DesignationsController@update')->name('hrms.designation.update');

    //// Festival ////
    Route::match(['get', 'post'], '/festival', 'FestivalController@index')->name('hrms.festival');
    Route::post('/festival/store', 'FestivalController@store')->name('hrms.festival.store');
    Route::match(['get', 'post'], '/festival/delete/{id}', 'FestivalController@destroy')
        ->where(['id'=>'[0-9]+'])->name('hrms.festival.delete');
    Route::get('festival/{id}/edit', 'FestivalController@edit')->name('hrms.festival.edit');
    Route::get('festival/{id}/view', 'FestivalController@show')->name('hrms.festival.view');
    Route::post('/festival/update', 'FestivalController@update')->name('hrms.festival.update');

    //// Unit ////
    Route::match(['get', 'post'], '/unit', 'UnitController@index')->name('hrms.unit');
    Route::post('/unit/store', 'UnitController@store')->name('hrms.unit.store');
    Route::match(['get', 'post'], '/unit/delete/{id}', 'UnitController@destroy')
        ->where(['id'=>'[0-9]+'])->name('hrms.unit.delete');
    Route::get('unit/{id}/edit', 'UnitController@edit')->name('hrms.unit.edit');
    Route::get('unit/{id}/view', 'UnitController@show')->name('hrms.unit.view');
    Route::post('/unit/update', 'UnitController@update')->name('hrms.unit.update');

    //// Department ////
    Route::match(['get', 'post'], '/department', 'DepartmentController@index')->name('hrms.department');
    Route::post('/department/store', 'DepartmentController@store')->name('hrms.department.store');
    Route::match(['get', 'post'], '/department/delete/{id}', 'DepartmentController@destroy')
        ->where(['id'=>'[0-9]+'])->name('hrms.department.delete');
    Route::get('department/{id}/edit', 'DepartmentController@edit')->name('hrms.department.edit');
    Route::get('department/{id}/view', 'DepartmentController@show')->name('hrms.department.view');
    Route::post('/department/update', 'DepartmentController@update')->name('hrms.department.update');

    //// Training ////
    Route::resource('/training', 'EmployeeTrainingController');
    Route::match(['get', 'post'], '/training', 'EmployeeTrainingController@index')->name('hrms.training');
    Route::post('/training/store', 'EmployeeTrainingController@store')->name('hrms.training.store');
    Route::match(['get', 'post'], '/training/delete/{id}', 'EmployeeTrainingController@destroy')
        ->where(['id'=>'[0-9]+'])->name('hrms.training.delete');
    Route::get('training/{id}/view', 'EmployeeTrainingController@show')->name('hrms.training.view');

    //// Promotion ////
    Route::resource('/promotion', 'EmployeePromotionController');
    Route::match(['get', 'post'], '/promotion', 'EmployeePromotionController@index')->name('hrms.promotion');
    Route::post('/promotion/store', 'EmployeePromotionController@store')->name('hrms.promotion.store');
    Route::match(['get', 'post'], '/promotion/delete/{id}', 'EmployeePromotionController@destroy')
        ->where(['id'=>'[0-9]+'])->name('hrms.promotion.delete');
    Route::get('promotion/{id}/view', 'EmployeePromotionController@show')->name('hrms.promotion.view'); 
    Route::post('promotion/current-salary', 'EmployeePromotionController@current_salary')->name('hrms.promotion.current_salary');
    Route::post('promotion/increment-salary', 'EmployeePromotionController@increment_salary')->name('hrms.promotion.increment_salary');

    //// Postings ////
    Route::resource('/posting', 'EmployeePostingController');
    Route::match(['get', 'post'], '/posting', 'EmployeePostingController@index')->name('hrms.posting');
    Route::post('/posting/store', 'EmployeePostingController@store')->name('hrms.posting.store');
    Route::match(['get', 'post'], '/posting/delete/{id}', 'EmployeePostingController@destroy')
        ->where(['id'=>'[0-9]+'])->name('hrms.posting.delete');
    Route::get('posting/{id}/view', 'EmployeePostingController@show')->name('hrms.posting.view');
    Route::post('/posting/current-grade', 'EmployeePostingController@current_grade')->name('hrms.posting.current_grade');

    //// Disciplinary Action ////
    Route::resource('/disciplinary-action', 'EmployeeDisciplinaryActionsController');
    Route::match(['get', 'post'], '/disciplinary-action', 'EmployeeDisciplinaryActionsController@index')->name('hrms.disciplinary-action');
    Route::post('/disciplinary-action/store', 'EmployeeDisciplinaryActionsController@store')->name('hrms.disciplinary-action.store');
    Route::match(['get', 'post'], '/disciplinary-action/delete/{id}', 'EmployeeDisciplinaryActionsController@destroy')
        ->where(['id'=>'[0-9]+'])->name('hrms.disciplinary-action.delete');
    Route::get('disciplinary-action/{id}/view', 'EmployeeDisciplinaryActionsController@show')->name('hrms.disciplinary-action.view');

    //// Award ////
    Route::resource('/award', 'EmployeeAwardController');
    Route::match(['get', 'post'], '/award', 'EmployeeAwardController@index')->name('hrms.award');
    Route::post('/award/store', 'EmployeeAwardController@store')->name('hrms.award.store');
    Route::match(['get', 'post'], '/award/delete/{id}', 'EmployeeAwardController@destroy')
        ->where(['id'=>'[0-9]+'])->name('hrms.award.delete');
    Route::get('award/{id}/view', 'EmployeeAwardController@show')->name('hrms.award.view');

    //// Publications ////
    Route::resource('/publication', 'PublicationController');
    Route::match(['get', 'post'], '/publication', 'PublicationController@index')->name('hrms.publication');
    Route::post('/publication/store', 'PublicationController@store')->name('hrms.publication.store');
    Route::match(['get', 'post'], '/publication/delete/{id}', 'PublicationController@destroy')
        ->where(['id'=>'[0-9]+'])->name('hrms.publication.delete');
    Route::get('publication/{id}/view', 'PublicationController@show')->name('hrms.publication.view');

    //// Bank ////
    Route::resource('/bank', 'BankController');
    Route::match(['get', 'post'], '/bank', 'BankController@index')->name('hrms.bank');
    Route::post('/bank/store', 'BankController@store')->name('hrms.bank.store');
    Route::match(['get', 'post'], '/bank/delete/{id}', 'BankController@destroy')
        ->where(['id'=>'[0-9]+'])->name('hrms.bank.delete');
    Route::get('bank/{id}/view', 'BankController@show')->name('hrms.bank.view');

    //// Allowance ////
    Route::resource('/allowance', 'AllowanceController');
    Route::match(['get', 'post'], '/allowance', 'AllowanceController@index')->name('hrms.allowance');
    Route::post('/allowance/store', 'AllowanceController@store')->name('hrms.allowance.store');
    Route::match(['get', 'post'], '/allowance/delete/{id}', 'AllowanceController@destroy')
        ->where(['id'=>'[0-9]+'])->name('hrms.allowance.delete');
    Route::get('allowance/{id}/view', 'AllowanceController@show')->name('hrms.allowance.view');

    //// Salary Rules ////
    Route::resource('/salary-rules', 'SalaryRulesController');
    Route::match(['get', 'post'], '/salary-rules', 'SalaryRulesController@index')->name('hrms.salary_rules');
    Route::post('/salary-rules/store', 'SalaryRulesController@store')->name('hrms.salary_rules.store');
    Route::match(['get', 'post'], '/salary-rules/delete/{id}', 'SalaryRulesController@destroy')
        ->where(['id'=>'[0-9]+'])->name('hrms.salary_rules.delete');
    Route::get('salary-rules/{id}/view', 'SalaryRulesController@show')->name('hrms.salary_rules.view');

    //// Salary Category ////
    Route::match(['get', 'post'], '/salary-category', 'SalaryCategoryController@index')->name('hrms.salary_category');
    Route::post('/salary-category/store', 'SalaryCategoryController@store')->name('hrms.salary_category.store');
    Route::match(['get', 'post'], '/salary-category/delete/{id}', 'SalaryCategoryController@destroy')
        ->where(['id'=>'[0-9]+'])->name('hrms.salary_category.delete');
    Route::get('salary-category/{id}/edit', 'SalaryCategoryController@edit')->name('hrms.salary_category.edit');
    Route::get('salary-category/{id}/view', 'SalaryCategoryController@show')->name('hrms.salary_category.view');
    Route::post('/salary-category/update', 'SalaryCategoryController@update')->name('hrms.salary_category.update');

    //// Salary Structure ////
    Route::resource('/salary-structure', 'SalaryStructureController');
    Route::match(['get', 'post'], '/salary-structure', 'SalaryStructureController@index')->name('hrms.salary_structure');
    Route::post('/salary-structure/store', 'SalaryStructureController@store')->name('hrms.salary_structure.store');
    Route::match(['get', 'post'], '/salary-structure/delete/{id}', 'SalaryStructureController@destroy')
        ->where(['id'=>'[0-9]+'])->name('hrms.salary_structure.delete');
    Route::get('salary-structure/{id}/view', 'SalaryStructureController@show')->name('hrms.salary_structure.view');
    Route::post('salary-structure/update', 'SalaryStructureController@update')->name('hrms.salary_structure.update');
    Route::post('salary-structure/rule-details', 'SalaryStructureController@fetch_rule_details')->name('hrms.salary_structure.rule_details');
    Route::post('salary-structure/deduc-rule-details', 'SalaryStructureController@fetch_deduc_rule_details')->name('hrms.salary_structure.deduc_rule_details');
    Route::post('salary-structure/current-salary', 'SalaryStructureController@current_salary')->name('hrms.salary_structure.current_salary');

    //// Salary Manage ////
    Route::resource('/salary-manage', 'SalaryController');
    Route::match(['get', 'post'], '/salary-manage', 'SalaryController@index')->name('hrms.salary_manage');
    Route::post('/salary-manage/store', 'SalaryController@store')->name('hrms.salary_manage.store');
    Route::match(['get', 'post'], '/salary-manage/delete/{id}', 'SalaryController@destroy')
        ->where(['id'=>'[0-9]+'])->name('hrms.salary_manage.delete');
    Route::get('salary-manage/{id}/view', 'SalaryController@show')->name('hrms.salary_manage.view');
    Route::post('salary-details', 'SalaryController@fetch_salary_details')->name('hrms.salary_manage.salary_details');
    Route::get('create/salary', 'SalaryController@create_salary')->name('hrms.create_salary');
    Route::get('create/salary-overview', 'SalaryController@create_salary_overview')->name('hrms.create.salary_overview');
    // Structure //
    Route::get('filter/pay-slip', 'SalaryController@filter_pay_slip')->name('hrms.filter_pay_slip');
    Route::match(['get', 'post'], '/pay-slip', 'SalaryController@pay_slip')->name('hrms.pay_slip');

    //// Basic Salary Manage ////
    Route::resource('/basic-salary', 'BasicSalaryController');
    Route::match(['get', 'post'], '/basic-salary', 'BasicSalaryController@index')->name('hrms.baisc_salary');
    Route::post('/basic-salary/store', 'BasicSalaryController@store')->name('hrms.baisc_salary.store');
    Route::match(['get', 'post'], '/basic-salary/delete/{id}', 'BasicSalaryController@destroy')
        ->where(['id'=>'[0-9]+'])->name('hrms.baisc_salary.delete');
    Route::get('basic-salary/{id}/view', 'BasicSalaryController@show')->name('hrms.baisc_salary.view');
    Route::post('basic-salary/grade-salary', 'BasicSalaryController@grade_salary')->name('hrms.baisc_salary.grade_salary');


    //// Salary Sheets ////
    Route::get('salary-sheet', 'SalarySheetsController@single_salary_sheet')->name('hrms.salary_sheet');
    // Route::get('salary-sheets', 'SalarySheetsController@salary_sheets');
    Route::match(['get', 'post'], '/salary-sheets', 'SalarySheetsController@salary_sheets')->name('hrms.salary_sheets');
    Route::get('filter-date', 'SalarySheetsController@filter_date')->name('hrms.filter_date');
    Route::get('timewise-salaries', 'SalarySheetsController@fetch_timewise_salaries')->name('hrms.timewise_salaries');
    Route::get('single-salary', 'SalarySheetsController@view_single_salary_page')->name('hrms.single_salary');

    //// Salary Increment ////
    Route::resource('/salary-increment', 'IncrementController');
    Route::match(['get', 'post'], '/salary-increment', 'IncrementController@index')->name('hrms.salary_increment');
    Route::post('/salary-increment/store', 'IncrementController@store')->name('hrms.salary_increment.store');
    Route::match(['get', 'post'], '/salary-increment/delete/{id}', 'IncrementController@destroy')
        ->where(['id'=>'[0-9]+'])->name('hrms.salary_increment.delete');
    Route::post('salary-increment/update', 'IncrementController@update')->name('hrms.salary_increment.update');
    Route::post('salary-increment/step', 'IncrementController@get_step_salary')->name('hrms.salary_increment.step');
    Route::get('bulk-increment', 'IncrementController@bulk_increment')->name('hrms.bulk_increment');
    Route::get('bulk/increment-overview', 'IncrementController@bulk_increment_overview')->name('hrms.bulk.increment_overview');

    //// Loan ////
    Route::resource('/loan', 'LoansController');
    Route::match(['get', 'post'], '/loan', 'LoansController@index')->name('hrms.loan');
    Route::post('/loan/store', 'LoansController@store')->name('hrms.loan.store');
    Route::match(['get', 'post'], '/loan/delete/{id}', 'LoansController@destroy')
        ->where(['id'=>'[0-9]+'])->name('hrms.loan.delete');
    Route::get('loan/{id}/view', 'LoansController@show')->name('hrms.loan.view');

    //// Loan Manage ////
    Route::resource('/loan-manage', 'LoanManageController');
    Route::match(['get', 'post'], '/loan-manage', 'LoanManageController@index')->name('hrms.loan_manage');
    Route::post('/loan-manage/store', 'LoanManageController@store')->name('hrms.loan_manage.store');
    Route::match(['get', 'post'], '/loan-manage/delete/{id}', 'LoanManageController@destroy')
        ->where(['id'=>'[0-9]+'])->name('hrms.loan_manage.delete');
    Route::get('loan-manage/{id}/view', 'LoanManageController@show')->name('hrms.loan_manage.view');
    Route::post('loan-manage/update', 'LoanManageController@update')->name('hrms.loan_manage.update');
    Route::post('loan-manage/loan-details', 'LoanManageController@fetch_loan_details')->name('hrms.loan_manage.loan_details');
    Route::post('loan-manage/installment-no', 'LoanManageController@fetch_installment_no')->name('hrms.loan_manage.installment_no');
    Route::post('loan-manage/paid-amount', 'LoanManageController@fetch_paid_amount')->name('hrms.loan_manage.paid_amount');

    //// Overtime ////
    Route::resource('/overtime', 'OvertimeController');
    Route::match(['get', 'post'], '/overtime', 'OvertimeController@index')->name('hrms.overtime');
    Route::post('/overtime/store', 'OvertimeController@store')->name('hrms.overtime.store');
    Route::match(['get', 'post'], '/overtime/delete/{id}', 'OvertimeController@destroy')
        ->where(['id'=>'[0-9]+'])->name('hrms.overtime.delete');
    Route::get('overtime/{id}/view', 'OvertimeController@show')->name('hrms.overtime.view');

    //// Report ////
    Route::match(['get', 'post'], '/report/category-page', 'ReportsController@category_total_salary')->name('hrms.report.category_page');
    Route::get('/report/category-salaries', 'ReportsController@category_time')->name('hrms.report.category_time');
    
    Route::get('report/increment-page', 'ReportsController@increment_page')->name('hrms.report.increment_page');
    Route::match(['get', 'post'], 'report/increment', 'ReportsController@increment')->name('hrms.report.increment');

    Route::match(['get', 'post'], '/report/deduction-list', 'ReportsController@monthly_deduction_list')->name('hrms.report.deduction_list');
    Route::get('/report/deduction-time', 'ReportsController@deduction_time')->name('hrms.report.deduction_time');

    Route::get('report/insert-category', 'ReportsController@insert_category')->name('hrms.report.insert_category');
    Route::get('/report/category-wise-deduction', 'ReportsController@category_wise_deduction')->name('hrms.report.category_wise_deduction');

    Route::get('report/employee-income-tax', 'ReportsController@insert_employee_for_income_tax')->name('hrms.report.employee_income_tax'); 
    Route::match(['get', 'post'], '/report/income-tax', 'ReportsController@employee_income_tax')->name('hrms.report.income_tax');

    Route::get('report/employee-allowance-details', 'ReportsController@insert_employee_for_allowance_details')->name('hrms.report.employee_allowance_details');
    Route::get('report/allowance-details', 'ReportsController@allowance_details')->name('hrms.report.allowance_details');

    Route::get('report/festival', 'ReportsController@filter_festival')->name('hrms.report.festival');
    Route::get('report/festival-bonus', 'ReportsController@festival_bonus')->name('hrms.report.festival_bonus');

    //// Festival Bonus ////
    Route::get('festival-bonus', 'FestivalBonusController@fetch_festivals')->name('hrms.festival_bonus');
    Route::get('festival-bonus/create', 'FestivalBonusController@make_festival_bonus')->name('hrms.festival_bonus.store');
    Route::get('bonus-overview', 'FestivalBonusController@bonus_overview')->name('hrms.bonus.overview');
    Route::get('festival-bonus/details/{id}/{year}', 'FestivalBonusController@see_details')->name('hrms.festival_bonus.details');

    //// HR report ////
    // Employee //
    Route::get('hr/report/page', 'HRReportController@hr_report_page')->name('hrms.hr.report_page');
    Route::get('hr/report', 'HRReportController@make_hr_report')->name('hrms.hr.report');
    // District //
    Route::get('hr/report/district', 'HRReportController@get_district')->name('hrms.hr.report.district');
    Route::get('hr/report/by-district', 'HRReportController@by_district')->name('hrms.hr.report.by_district');
    // Religion //
    Route::get('hr/report/religion', 'HRReportController@get_religion')->name('hrms.hr.report.religion');
    Route::get('hr/report/by-religion', 'HRReportController@by_religion')->name('hrms.hr.report.by_religion');
    // Gender //
    Route::get('hr/report/gender', 'HRReportController@get_gender')->name('hrms.hr.report.gender');
    Route::get('hr/report/by-gender', 'HRReportController@by_gender')->name('hrms.hr.report.by_gender');
    // Designation //
    Route::get('hr/report/designation', 'HRReportController@get_designation')->name('hrms.hr.report.designation');
    Route::get('hr/report/by-designation', 'HRReportController@by_designation')->name('hrms.hr.report.by_designation');
    // Unit //
    Route::get('hr/report/unit', 'HRReportController@get_unit')->name('hrms.hr.report.unit');
    Route::get('hr/report/by-unit', 'HRReportController@by_unit')->name('hrms.hr.report.by_unit');
    // Section //
    Route::get('hr/report/section', 'HRReportController@get_section')->name('hrms.hr.report.section');
    Route::get('hr/report/by-section', 'HRReportController@by_section')->name('hrms.hr.report.by_section');
    // Type //
    Route::get('hr/report/type', 'HRReportController@get_type')->name('hrms.hr.report.type');
    Route::get('hr/report/by-type', 'HRReportController@by_type')->name('hrms.hr.report.by_type');
    // Blood Group //
    Route::get('hr/report/blood-group', 'HRReportController@get_blood_group')->name('hrms.hr.report.blood_group');
    Route::get('hr/report/by-blood-group', 'HRReportController@by_blood_group')->name('hrms.hr.report.by_blood_group');
    // PRL //
    Route::get('hr/report/prl', 'HRReportController@get_prl')->name('hrms.hr.report.prl');
    Route::get('hr/report/by-prl', 'HRReportController@by_prl')->name('hrms.hr.report.by_prl');
    //// HR report end ////

    //// Loan Report Start ////
    Route::get('loan/report/employee', 'LoanReportsController@insert_employee_for_loan_details')->name('hrms.report.loan_employee_details');
    Route::get('loan/report/loan-details', 'LoanReportsController@loan_details')->name('hrms.report.loan_details');

    ///// Hotel Statement /////
    Route::resource('/sales-statement', 'SalesStatementController');
    Route::match(['get', 'post'], '/sales-statement', 'SalesStatementController@index')->name('hotels.sales_statement');
    Route::post('/sales-statement/store', 'SalesStatementController@store')->name('hotels.sales_statement.store');
    Route::match(['get', 'post'], '/sales-statement/delete/{id}', 'SalesStatementController@destroy')
        ->where(['id'=>'[0-9]+'])->name('hotels.sales_statement.delete');
    Route::get('sales-statement/{id}/view', 'SalesStatementController@show')->name('hotels.sales_statement.view');
    Route::post('sales-statement/update', 'SalesStatementController@update')->name('hotels.sales_statement.update');



    //// Ajax Route ////
    Route::post('/hrm/grade-salary', 'EmployeesController@get_gradewise_salary')->name('hrms.employee.grade_salary');

});
