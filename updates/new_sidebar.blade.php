
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<style>

</style>

<nav class="mt-2">

  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->


    <li class="nav-item">
      <a href="{{url('hrms/dashboard')}}" class="nav-link {{activeMenu(1, '')}}">
        <i class="nav-icon fas fa-tachometer-alt col-md-2"></i>
        <p class="col-md-10">Dashboard</p>
      </a>
    </li>

		<!-- Employee Management Start -->
    @if(session('_module') == 'hrms')
      
      @if (Sentinel::hasAccess(['hrms.employee.hrm']))
        <li class="nav-item">
          <a href="{{url('hrms/employee')}}" class="nav-link {{ (request()->is('hrms/employee*')) ? 'active' : '' }}">
            <i class="nav-icon fas fa-user-alt col-md-2"></i>
            <p>Employee List</p>
          </a>
        </li>
      @endif 

      @if (Sentinel::hasAccess(['hrms.posting']))            
        <li class="nav-item">
          <a href="{{url('hrms/posting')}}" class="nav-link {{ (request()->is('hrms/posting*')) ? 'active' : '' }}">
            <i class="nav-icon fas fa-exchange-alt col-md-2"></i>
            <p>Posting</p>
          </a>
        </li>
      @endif 

      @if (Sentinel::hasAccess(['hrms.training']))
        <li class="nav-item">
          <a href="{{url('hrms/training')}}" class="nav-link {{ (request()->is('hrms/training*')) ? 'active' : '' }}">
            <i class="nav-icon fas fa-train col-md-2"></i>
            <p>Training</p>
          </a>
        </li>
      @endif 

      @if (Sentinel::hasAccess(['hrms.award']))
        <li class="nav-item">
          <a href="{{url('hrms/award')}}" class="nav-link {{ (request()->is('hrms/award*')) ? 'active' : '' }}">
            <i class="nav-icon fas fa-award col-md-2"></i>
            <p>Award</p>
          </a>
        </li>
      @endif 

      @if (Sentinel::hasAccess(['hrms.disciplinary-action']))
        <li class="nav-item">
          <a href="{{url('hrms/disciplinary-action')}}" class="nav-link {{ (request()->is('hrms/disciplinary-action*')) ? 'active' : '' }}">
            <i class="nav-icon fab fa-creative-commons-by col-md-2"></i>
            <p>Disciplinary Action</p>
          </a>
        </li>
      @endif 

      @if (Sentinel::hasAccess(['hrms.promotion']))
        <li class="nav-item">
          <a href="{{url('hrms/promotion')}}" class="nav-link {{ (request()->is('hrms/promotion*')) ? 'active' : '' }}">
            <i class="nav-icon fas fa-chart-line col-md-2"></i>
            <p>Promotion</p>
          </a>
        </li>
      @endif 

      @if (Sentinel::hasAccess(['hrms.publication']))
        <li class="nav-item">
          <a href="{{url('hrms/publication')}}" class="nav-link {{ (request()->is('hrms/publication*')) ? 'active' : '' }}">
            <i class="nav-icon fas fa-book col-md-2"></i>
            <p>Publication</p>
          </a>
        </li>
      @endif 

      @if (Sentinel::hasAccess(['hrms.bank']))
        <li class="nav-item">
          <a href="{{url('hrms/bank')}}" class="nav-link {{ (request()->is('hrms/bank*')) ? 'active' : '' }}">
            <i class="nav-icon fas fa-university col-md-2"></i>
            <p>Employee Bank</p>
          </a>
        </li>
      @endif 


      <!-- HR Report Start -->
      @if (Sentinel::hasAnyAccess(['hrms.hr.report_page', 'hrms.hr.report.district', 'hrms.hr.report.religion', 'hrms.hr.report.gender', 'hrms.hr.report.designation', 'hrms.hr.report.unit', 'hrms.hr.report.section', 'hrms.hr.report.type', 'hrms.hr.report.blood_group', 'hrms.hr.report.prl']))
        <li class="nav-item {{menuOpen(1, '')}}">
          <a href="#" class="nav-link {{ (request()->is('hrms/hr/report/page*')) || (request()->is('hrms/hr/report/district*')) || (request()->is('hrms/hr/report/religion*')) || (request()->is('hrms/hr/report/gender*'))
          || (request()->is('hrms/hr/report/designation*')) || (request()->is('hrms/hr/report/unit*')) || (request()->is('hrms/hr/report/section*')) || (request()->is('hrms/hr/report/type*'))
          || (request()->is('hrms/hr/report/blood-group*')) || (request()->is('hrms/hr/report/prl*')) ? 'active' : '' }}">
            <i class="fas fa-file col-md-2"></i>
            <p class="col-md-10">HR Reports<i class="right fas fa-angle-down"></i> </p>
          </a>

          <ul class="nav nav-treeview">

            @if (Sentinel::hasAccess(['hrms.hr.report_page']))
            <li class="nav-item">
              <a href="{{url('hrms/hr/report/page')}}" class="nav-link {{ (request()->is('hrms/hr/report/page*')) ? 'active' : '' }}">
                <i class="fas fa-circle"></i>
                <p>Employee Report</p>
              </a>
            </li>
            @endif

            @if (Sentinel::hasAccess(['hrms.hr.report.district']))
            <li class="nav-item">
              <a href="{{url('hrms/hr/report/district')}}" class="nav-link {{ (request()->is('hrms/hr/report/district*')) ? 'active' : '' }}">
                <i class="fas fa-circle"></i>
                <p>By District</p>
              </a>
            </li>
            @endif

            @if (Sentinel::hasAccess(['hrms.hr.report.religion']))
            <li class="nav-item">
              <a href="{{url('hrms/hr/report/religion')}}" class="nav-link {{ (request()->is('hrms/hr/report/religion*')) ? 'active' : '' }}">
                <i class="fas fa-circle"></i>
                <p>By Religion</p>
              </a>
            </li>
            @endif

            @if (Sentinel::hasAccess(['hrms.hr.report.gender']))
            <li class="nav-item">
              <a href="{{url('hrms/hr/report/gender')}}" class="nav-link {{ (request()->is('hrms/hr/report/gender*')) ? 'active' : '' }}">
                <i class="fas fa-circle"></i>
                <p>By Gender</p>
              </a>
            </li>
            @endif

            @if (Sentinel::hasAccess(['hrms.hr.report.designation']))
            <li class="nav-item">
              <a href="{{url('hrms/hr/report/designation')}}" class="nav-link {{ (request()->is('hrms/hr/report/designation*')) ? 'active' : '' }}">
                <i class="fas fa-circle"></i>
                <p>By Designation</p>
              </a>
            </li>
            @endif

            @if (Sentinel::hasAccess(['hrms.hr.report.unit']))
            <li class="nav-item">
              <a href="{{url('hrms/hr/report/unit')}}" class="nav-link {{ (request()->is('hrms/hr/report/unit*')) ? 'active' : '' }}">
                <i class="fas fa-circle"></i>
                <p>By unit</p>
              </a>
            </li>
            @endif

            @if (Sentinel::hasAccess(['hrms.hr.report.section']))
            <li class="nav-item">
              <a href="{{url('hrms/hr/report/section')}}" class="nav-link {{ (request()->is('hrms/hr/report/section*')) ? 'active' : '' }}">
                <i class="fas fa-circle"></i>
                <p>By Section</p>
              </a>
            </li>
            @endif

            @if (Sentinel::hasAccess(['hrms.hr.report.type']))
            <li class="nav-item">
              <a href="{{url('hrms/hr/report/type')}}" class="nav-link {{ (request()->is('hrms/hr/report/type*')) ? 'active' : '' }}">
                <i class="fas fa-circle"></i>
                <p>By Type</p>
              </a>
            </li>
            @endif

            @if (Sentinel::hasAccess(['hrms.hr.report.blood_group']))
            <li class="nav-item">
              <a href="{{url('hrms/hr/report/blood-group')}}" class="nav-link {{ (request()->is('hrms/hr/report/blood-group*')) ? 'active' : '' }}">
                <i class="fas fa-circle"></i>
                <p>By Blood Group</p>
              </a>
            </li>
            @endif

            @if (Sentinel::hasAccess(['hrms.hr.report.prl']))
            <li class="nav-item">
              <a href="{{url('hrms/hr/report/prl')}}" class="nav-link {{ (request()->is('hrms/hr/report/prl*')) ? 'active' : '' }}">
                <i class="fas fa-circle"></i>
                <p>By PRL</p>
              </a>
            </li>
            @endif

          </ul>
        </li>
      @endif
      <!-- HR Report End -->

      <!--  HR Configuration Start -->
      @if (Sentinel::hasAnyAccess(['hrms.designation', 'hrms.unit', 'hrms.department', 'hrms.overtime']))
        <li class="nav-item {{menuOpen(1, '')}}">
          <a href="#" class="nav-link {{ (request()->is('hrms/designation*')) || (request()->is('hrms/unit*')) || (request()->is('hrms/department*')) ? 'active' : '' }}">
            <i class="fas fa-cog col-md-2"></i>
            <p class="col-md-10">HR Configuration<i class="right fas fa-angle-down"></i> </p>
          </a>
          <ul class="nav nav-treeview">

          @if (Sentinel::hasAccess(['hrms.designation']))
            <li class="nav-item">
              <a href="{{url('hrms/designation')}}" class="nav-link {{ (request()->is('hrms/designation*')) ? 'active' : '' }}">
                <i class="fas fa-circle"></i>
                <p>Designation</p>
              </a>
            </li>
          @endif 

          @if (Sentinel::hasAccess(['hrms.unit']))
            <li class="nav-item">
              <a href="{{url('hrms/unit')}}" class="nav-link {{ (request()->is('hrms/unit*')) ? 'active' : '' }}">
                <i class="fas fa-circle"></i>
                <p>Unit</p>
              </a>
            </li>
          @endif 
          
          @if (Sentinel::hasAccess(['hrms.department']))
            <li class="nav-item">
              <a href="{{url('hrms/department')}}" class="nav-link {{ (request()->is('hrms/department*')) ? 'active' : '' }}">
                <i class="fas fa-circle"></i>
                <p>Department</p>
              </a>
            </li>
          @endif 

          @if (Sentinel::hasAccess(['hrms.overtime']))
            <li class="nav-item">
              <a href="{{url('hrms/overtime')}}" class="nav-link {{ (request()->is('hrms/overtime*')) ? 'active' : '' }}">
                <i class="fas fa-circle"></i>
                <p>Overtime</p>
              </a>
            </li>
          @endif 
            
          </ul>
        </li>
      @endif 
      <!-- HR Configuration End -->
      @endif
		<!-- Employee Management End -->
    

    <!-- Payroll Sectionn Start -->
    @if(session('_module') == 'payroll')

      <!-- Salary Start -->
      @if (Sentinel::hasAccess(['hrms.salary-manage']))
        <li class="nav-item">
          <a href="{{url('hrms/salary-manage')}}" class="nav-link {{ (request()->is('hrms/salary-manage*')) ? 'active' : '' }}">
            <i class="fas fa-file-alt col-md-2"></i>
            <p>Create Salary</p>
          </a>
        </li>
      @endif 

      @if (Sentinel::hasAccess(['hrms.filter_pay_slip']))
        <li class="nav-item">
          <a href="{{url('hrms/filter/pay-slip')}}" class="nav-link {{ (request()->is('hrms/filter/pay-slip*')) ? 'active' : '' }}">
            <i class="fas fa-file-alt col-md-2"></i>
            <p>Pay Slip</p>
          </a>
        </li>
      @endif 

      @if (Sentinel::hasAccess(['hrms.salary-structure']))
        <li class="nav-item">
          <a href="{{url('hrms/salary-structure')}}" class="nav-link {{ (request()->is('hrms/salary-structure*')) ? 'active' : '' }}">
            <i class="fas fa-file-alt col-md-2"></i>
            <p>Salary Structure</p>
          </a>
        </li>
      @endif 

      @if (Sentinel::hasAccess(['hrms.salary-increment']))
        <li class="nav-item">
          <a href="{{url('hrms/salary-increment')}}" class="nav-link {{ (request()->is('hrms/salary-increment*')) ? 'active' : '' }}">
            <i class="fas fa-file-alt col-md-2"></i>
            <p>Salary Increment</p>
          </a>
        </li>
      @endif 

      @if (Sentinel::hasAccess(['hrms.baisc-salary']))
        <li class="nav-item">
          <a href="{{url('hrms/basic-salary')}}" class="nav-link {{ (request()->is('hrms/basic-salary*')) ? 'active' : '' }}">
            <i class="fas fa-file-alt col-md-2"></i>
            <p>Basic Salary</p>
          </a>
        </li>
      @endif 



      <!-- @if (Sentinel::hasAnyAccess(['hrms.loan', 'hrms.loan_manage']))
        <li class="nav-item {{menuOpen(1, '')}}">
          <a href="#" class="nav-link {{ (request()->is('hrms/basic-salary*')) || (request()->is('hrms/filter/pay-slip*')) || (request()->is('hrms/salary-increment*')) || (request()->is('hrms/salary-manage*')) || (request()->is('hrms/salary-structure*')) ? 'active' : '' }}">
          <i class="fas fa-file-alt col-md-2"></i>
            <p class="col-md-10">Payroll<i class="right fas fa-angle-down"></i> </p>
          </a>
          <ul class="nav nav-treeview">

          </ul>
        </li>
      @endif  -->

      <!-- Salary End -->

      <!-- Loan Start -->
      @if (Sentinel::hasAnyAccess(['hrms.loan', 'hrms.loan-manage']))
        <li class="nav-item {{menuOpen(1, '')}}">
          <a href="#" class="nav-link {{ (request()->is('hrms/loan*')) || (request()->is('hrms/loan-manage*')) ? 'active' : '' }}">
            <i class="fas fa-file-invoice-dollar col-md-2"></i>
            <p class="col-md-10">Loan<i class="right fas fa-angle-down"></i> </p>
          </a>
          <ul class="nav nav-treeview">

            @if (Sentinel::hasAccess(['hrms.loan']))
            <li class="nav-item">
              <a href="{{url('hrms/loan')}}" class="nav-link {{ (request()->is('hrms/loan*')) ? 'active' : '' }}">
                <i class="fas fa-circle"></i>
                <p>Loan</p>
              </a>
            </li>
            @endif 

            @if (Sentinel::hasAccess(['hrms.loan-manage']))
            <li class="nav-item">
              <a href="{{url('hrms/loan-manage')}}" class="nav-link {{ (request()->is('hrms/loan-manage*')) ? 'active' : '' }}">
                <i class="fas fa-circle"></i>
                <p>Loan Manage</p>
              </a>
            </li>
            @endif 

          </ul>
        </li>
      @endif 
      <!-- Loan End -->

      <!-- Festival Bonus Start -->
      @if (Sentinel::hasAnyAccess(['hrms.festival_bonus']))
        <li class="nav-item {{menuOpen(1, '')}}">
          <a href="#" class="nav-link {{ (request()->is('hrms/festival-bonus*')) ? 'active' : '' }}">
          <i class="fas fa-star col-md-2"></i>
            <p class="col-md-10">Bonus<i class="right fas fa-angle-down"></i> </p>
          </a>
          <ul class="nav nav-treeview">

          @if (Sentinel::hasAccess(['hrms.festival_bonus']))
            <li class="nav-item">
              <a href="{{url('hrms/festival-bonus')}}" class="nav-link {{ (request()->is('hrms/festival-bonus*')) ? 'active' : '' }}">
                <i class="fas fa-circle"></i>
                <p>Manage Bonus</p>
              </a>
            </li>
          @endif 

          </ul>
        </li>
      @endif 
      <!-- Festival Bonus End -->      

      <!-- Payroll Report Start -->
      @if (Sentinel::hasAnyAccess(['hrms.single_salary', 'hrms.filter_date', 'hrms.report.category_page', 'hrms.report.increment_page', 'hrms.report.deduction_list', 'hrms.report.insert_category', 'hrms.report.employee_income_tax', 'hrms.report.employee_allowance_details', 'hrms.report.festival']))
        <li class="nav-item {{menuOpen(1, '')}}">
          <a href="#" class="nav-link {{ (request()->is('hrms/single-salary*')) || (request()->is('hrms/filter-date*')) || (request()->is('hrms/report/category-salaries*')) || (request()->is('hrms/report/increment-page*')) || (request()->is('hrms/hrms/report/deduction-time*'))
          || (request()->is('hrms/report/insert-category*')) || (request()->is('hrms/report/employee-income-tax*')) || (request()->is('hrms/report/employee-allowance-details*')) || (request()->is('hrms/report/festival*')) ? 'active' : '' }}">
            <i class="fas fa-file col-md-2"></i>
            <p class="col-md-10">Reports<i class="right fas fa-angle-down"></i> </p>
          </a>

          <ul class="nav nav-treeview">

            @if (Sentinel::hasAccess(['hrms.single_salary']))
            <li class="nav-item">
              <a href="{{url('hrms/single-salary')}}" class="nav-link {{ (request()->is('hrms/single-salary*')) ? 'active' : '' }}">
                <i class="fas fa-circle"></i>
                <p>Single Salary</p>
              </a>
            </li>
            @endif 

            @if (Sentinel::hasAccess(['hrms.filter_date']))
            <li class="nav-item">
              <a href="{{url('hrms/filter-date')}}" class="nav-link {{ (request()->is('hrms/filter-date*')) ? 'active' : '' }}">
                <i class="fas fa-circle"></i>
                <p>Time Wise Salary</p>
              </a>
            </li>
            @endif 

            @if (Sentinel::hasAccess(['hrms.report.category_page']))
            <li class="nav-item">
              <a href="{{url('hrms/report/category-salaries')}}" class="nav-link {{ (request()->is('hrms/report/category-salaries*')) ? 'active' : '' }}">
                <i class="fas fa-circle"></i>
                <p>Category</p>
              </a>
            </li>
            @endif 

            @if (Sentinel::hasAccess(['hrms.report.increment_page']))
            <li class="nav-item">
              <a href="{{url('hrms/report/increment-page')}}" class="nav-link {{ (request()->is('hrms/report/increment-page*')) ? 'active' : '' }}">
                <i class="fas fa-circle"></i>
                <p>Increment</p>
              </a>
            </li>
            @endif 

            @if (Sentinel::hasAccess(['hrms.report.deduction_list']))
            <li class="nav-item">
              <a href="{{url('hrms/report/deduction-time')}}" class="nav-link {{ (request()->is('hrms/report/deduction-time*')) ? 'active' : '' }}">
                <i class="fas fa-circle"></i>
                <p>Monthly Deduction</p>
              </a>
            </li>
            @endif 

            @if (Sentinel::hasAccess(['hrms.report.insert_category']))
            <li class="nav-item">
              <a href="{{url('hrms/report/insert-category')}}" class="nav-link {{ (request()->is('hrms/report/insert-category*')) ? 'active' : '' }}">
                <i class="fas fa-circle"></i>
                <p>Find Deduction</p>
              </a>
            </li>
            @endif 

            @if (Sentinel::hasAccess(['hrms.report.employee_income_tax']))
            <li class="nav-item">
              <a href="{{url('hrms/report/employee-income-tax')}}" class="nav-link {{ (request()->is('hrms/report/employee-income-tax*')) ? 'active' : '' }}">
                <i class="fas fa-circle"></i>
                <p>Income Tax</p>
              </a>
            </li>
            @endif 

            @if (Sentinel::hasAccess(['hrms.report.employee_allowance_details']))
            <li class="nav-item">
              <a href="{{url('hrms/report/employee-allowance-details')}}" class="nav-link {{ (request()->is('hrms/report/employee-allowance-details*')) ? 'active' : '' }}">
                <i class="fas fa-circle"></i>
                <p>Allowance Details</p>
              </a>
            </li>
            @endif 

            @if (Sentinel::hasAccess(['hrms.report.festival']))
            <li class="nav-item">
              <a href="{{url('hrms/report/festival')}}" class="nav-link {{ (request()->is('hrms/report/festival*')) ? 'active' : '' }}">
                <i class="fas fa-circle"></i>
                <p>Festival Bonus</p>
              </a>
            </li>
            @endif 

            
          </ul>
        </li>
      @endif 
      <!-- Payroll Report End -->

      <!-- Loan Report Start -->
      @if (Sentinel::hasAnyAccess(['hrms.report.loan_employee_details']))
        <li class="nav-item {{menuOpen(1, '')}}">
          <a href="#" class="nav-link {{ (request()->is('hrms/loan/report/employee*')) ? 'active' : '' }}">
            <i class="fas fa-file col-md-2"></i>
            <p class="col-md-10">Loan Reports<i class="right fas fa-angle-down"></i> </p>
          </a>
          <ul class="nav nav-treeview">

          @if (Sentinel::hasAccess(['hrms.report.loan_employee_details']))
            <li class="nav-item">
              <a href="{{url('hrms/loan/report/employee')}}" class="nav-link {{ (request()->is('hrms/loan/report/employee*')) ? 'active' : '' }}">
                <i class="fas fa-circle"></i>
                <p>Loan Sheet</p>
              </a>
            </li>
          @endif 
            
          </ul>
        </li>
      @endif 
      <!-- Loan Report End -->

      <!-- Payroll Configuration Start -->
      @if (Sentinel::hasAnyAccess(['hrms.salary_rules', 'hrms.salary_category', 'hrms.festival']))
        <li class="nav-item {{menuOpen(1, '')}}">
          <a href="#" class="nav-link {{ (request()->is('hrms/salary-rules*')) || (request()->is('hrms/salary-category*')) || (request()->is('hrms/festival*')) ? 'active' : '' }}">
            <i class="fas fa-cog col-md-2"></i>
            <p class="col-md-10">Configuration<i class="right fas fa-angle-down"></i> </p>
          </a>

          <ul class="nav nav-treeview">

            @if (Sentinel::hasAccess(['hrms.salary_rules']))
            <li class="nav-item">
              <a href="{{url('hrms/salary-rules')}}" class="nav-link {{ (request()->is('hrms/salary-rules*')) ? 'active' : '' }}">
                <i class="fas fa-circle"></i>
                <p>Salary Rules</p>
              </a>
            </li>
            @endif 

            @if (Sentinel::hasAccess(['hrms.salary_category']))
            <li class="nav-item">
              <a href="{{url('hrms/salary-category')}}" class="nav-link {{ (request()->is('hrms/salary-category*')) ? 'active' : '' }}">
                <i class="fas fa-circle"></i>
                <p>Salary Catagory</p>
              </a>
            </li>
            @endif 

            @if (Sentinel::hasAccess(['hrms.festival']))
            <li class="nav-item">
              <a href="{{url('hrms/festival')}}" class="nav-link {{ (request()->is('hrms/festival*')) ? 'active' : '' }}">
                <i class="fas fa-circle"></i>
                <p>Festival</p>
              </a>
            </li>
            @endif 
            
          </ul>
        </li>
      @endif 
		  <!-- Payroll Configuration End -->

    @endif
    <!-- Payroll Section End -->

    @if (Sentinel::getUser()->roles[0]->name == 'admin')
    <li class="nav-item">
      <a href="{{route('home.hotel.out')}}" class="nav-link">
        <i class="nav-icon fas fa-backward col-md-2"></i>
        <p class="col-md-10">Go back</p>
      </a>
    </li>
    @endif


    <li class="nav-item">
      <a href="{{route('sys.auth.logout')}}" class="nav-link">
        <i class="nav-icon fas fa-user-alt col-md-2"></i>
        <p class="col-md-10">Logout</p>
      </a>
    </li>
  </ul>

</nav>
<!-- /.sidebar-menu -->
