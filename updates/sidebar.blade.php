
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<style>

</style>

<nav class="mt-2">

  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

    @if(Sentinel::getUser()->roles[0]->name == 'manager' || Sentinel::getUser()->roles[0]->name == 'admin')
    <li class="nav-item">
      <a href="{{url('hrms/dashboard')}}" class="nav-link {{activeMenu(1, '')}}">
        <i class="nav-icon fas fa-tachometer-alt col-md-2"></i>
        <p class="col-md-10">Dashboard</p>
      </a>
    </li>

		<!-- Employee Management Start -->
    @if(session('_module') == 'hrms')
    <li class="nav-item">
      <a href="#" id="activeL" class="nav-link {{ (request()->is('hrms/hrm*')) || (request()->is('hrms/posting*')) || (request()->is('hrms/training*')) || (request()->is('hrms/award*')) || (request()->is('hrms/disciplinary-action*')) || (request()->is('hrms/promotion*')) || (request()->is('hrms/publication*')) ? 'active' : '' }}">
      <i class="fas fa-user-friends col-md-2"></i>
        <p class="col-md-10">HR Management<i class="right fas fa-angle-down"></i> </p>
      </a>

      <ul class="nav nav-treeview">

        <li class="nav-item">
          <a href="{{url('hrms/hrm')}}" class="nav-link {{ (request()->is('hrms/hrm*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Employee List</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('hrms/posting')}}" class="nav-link {{ (request()->is('hrms/posting*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Posting</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('hrms/training')}}" class="nav-link {{ (request()->is('hrms/training*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Training</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('hrms/award')}}" class="nav-link {{ (request()->is('hrms/award*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Award</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('hrms/disciplinary-action')}}" class="nav-link {{ (request()->is('hrms/disciplinary-action*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Disciplinary Action</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('hrms/promotion')}}" class="nav-link {{ (request()->is('hrms/promotion*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Promotion</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('hrms/publication')}}" class="nav-link {{ (request()->is('hrms/publication*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Publication</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('hrms/bank')}}" class="nav-link {{ (request()->is('hrms/bank*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Employee Bank</p>
          </a>
        </li>

      </ul>
    </li>
    @endif
		<!-- Employee Management End -->

    <!-- Salary Start -->
    @if(session('_module') == 'payroll')
    <li class="nav-item {{menuOpen(1, '')}}">
      <a href="#" class="nav-link {{ (request()->is('hrms/basic-salary*')) || (request()->is('hrms/salary-sheets*')) || (request()->is('hrms/salary-manage*')) || (request()->is('hrms/salary-structure*')) ? 'active' : '' }}">
      <i class="fas fa-file-alt col-md-2"></i>
        <p class="col-md-10">Payroll<i class="right fas fa-angle-down"></i> </p>
      </a>
      <ul class="nav nav-treeview">

        <li class="nav-item">
          <a href="{{url('hrms/salary-manage')}}" class="nav-link {{ (request()->is('hrms/salary-manage*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Create Salary</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('hrms/filter/pay-slip')}}" class="nav-link {{ (request()->is('hrms/filter/pay-slip*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Pay Slip</p>
          </a>
        </li>

        <!-- <li class="nav-item">
          <a href="{{url('hrms/salary-sheets')}}" class="nav-link {{ (request()->is('hrms/salary-sheets*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Salary Sheets</p>
          </a>
        </li> -->				

				<li class="nav-item">
          <a href="{{url('hrms/salary-structure')}}" class="nav-link {{ (request()->is('hrms/salary-structure*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Salary Structure</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('hrms/salary-increment')}}" class="nav-link {{ (request()->is('hrms/salary-increment*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Salary Increment</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('hrms/basic-salary')}}" class="nav-link {{ (request()->is('hrms/basic-salary*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Basic Salary</p>
          </a>
        </li>

      </ul>
    </li>
    @endif
    <!-- Salary End -->

    <!-- Loan Start -->
    @if(session('_module') == 'payroll')
		<li class="nav-item {{menuOpen(1, '')}}">
      <a href="#" class="nav-link {{ (request()->is('hrms/loan*')) ? 'active' : '' }}">
        <i class="fas fa-file-invoice-dollar col-md-2"></i>
        <p class="col-md-10">Loan<i class="right fas fa-angle-down"></i> </p>
      </a>
      <ul class="nav nav-treeview">

        <li class="nav-item">
          <a href="{{url('hrms/loan')}}" class="nav-link {{ (request()->is('hrms/loan*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Loan</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('hrms/loan-manage')}}" class="nav-link {{ (request()->is('hrms/loan-manage*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Loan Manage</p>
          </a>
        </li>

      </ul>
    </li>
    @endif
		<!-- Loan End -->

    <!-- Festival Bonus Start -->
    @if(session('_module') == 'payroll')
		<li class="nav-item {{menuOpen(1, '')}}">
      <a href="#" class="nav-link {{ (request()->is('hrms/festival-bonus*')) ? 'active' : '' }}">
      <i class="fas fa-star col-md-2"></i>
        <p class="col-md-10">Bonus<i class="right fas fa-angle-down"></i> </p>
      </a>
      <ul class="nav nav-treeview">

        <li class="nav-item">
          <a href="{{url('hrms/festival-bonus')}}" class="nav-link {{ (request()->is('hrms/festival-bonus*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Manage Bonus</p>
          </a>
        </li>

      </ul>
    </li>
    @endif
		<!-- Festival Bonus End -->

    <!-- HR Report Start -->
    @if(session('_module') == 'hrms')
    <li class="nav-item {{menuOpen(1, '')}}">
      <a href="#" class="nav-link {{ (request()->is('hrms/report/category-salaries*')) ? 'active' : '' }}">
        <i class="fas fa-file col-md-2"></i>
        <p class="col-md-10">HR Reports<i class="right fas fa-angle-down"></i> </p>
      </a>
      <ul class="nav nav-treeview">

        <li class="nav-item">
          <a href="{{url('hrms/hr/report/page')}}" class="nav-link {{ (request()->is('hrms/hr/report/page*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Employee Report</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('hrms/hr/report/district')}}" class="nav-link {{ (request()->is('hrms/hr/report/district*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>By District</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('hrms/hr/report/religion')}}" class="nav-link {{ (request()->is('hrms/hr/report/religion*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>By Religion</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('hrms/hr/report/gender')}}" class="nav-link {{ (request()->is('hrms/hr/report/gender*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>By Gender</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('hrms/hr/report/designation')}}" class="nav-link {{ (request()->is('hrms/hr/report/designation*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>By Designation</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('hrms/hr/report/unit')}}" class="nav-link {{ (request()->is('hrms/hr/report/unit*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>By unit</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('hrms/hr/report/section')}}" class="nav-link {{ (request()->is('hrms/hr/report/section*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>By Section</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('hrms/hr/report/type')}}" class="nav-link {{ (request()->is('hrms/hr/report/type*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>By Type</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('hrms/hr/report/blood-group')}}" class="nav-link {{ (request()->is('hrms/hr/report/blood-group*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>By Blood Group</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('hrms/hr/report/prl')}}" class="nav-link {{ (request()->is('hrms/hr/report/prl*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>By PRL</p>
          </a>
        </li>
        
      </ul>
    </li>
    @endif
    <!-- HR Report End -->

    <!-- Payroll Report Start -->
    @if(session('_module') == 'payroll')
    <li class="nav-item {{menuOpen(1, '')}}">
      <a href="#" class="nav-link {{ (request()->is('hrms/report/category-salaries*')) ? 'active' : '' }}">
        <i class="fas fa-file col-md-2"></i>
        <p class="col-md-10">Payroll Reports<i class="right fas fa-angle-down"></i> </p>
      </a>
      <ul class="nav nav-treeview">

        <li class="nav-item">
          <a href="{{url('hrms/single-salary')}}" class="nav-link {{ (request()->is('hrms/single-salary*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Single Salary</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('hrms/filter-date')}}" class="nav-link {{ (request()->is('hrms/filter-date*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Time Wise Salary</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('hrms/report/category-salaries')}}" class="nav-link {{ (request()->is('hrms/report/category-salaries*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Category</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('hrms/report/increment-page')}}" class="nav-link {{ (request()->is('hrms/report/increment-page*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Increment</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('hrms/report/deduction-time')}}" class="nav-link {{ (request()->is('hrms/report/deduction-time*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Monthly Deduction</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('hrms/report/insert-category')}}" class="nav-link {{ (request()->is('hrms/report/insert-category*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Find Deduction</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('hrms/report/employee-income-tax')}}" class="nav-link {{ (request()->is('hrms/report/employee-income-tax*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Income Tax</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('hrms/report/employee-allowance-details')}}" class="nav-link {{ (request()->is('hrms/report/employee-allowance-details*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Allowance Details</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('hrms/report/festival')}}" class="nav-link {{ (request()->is('hrms/report/festival*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Festival Bonus</p>
          </a>
        </li>
        
      </ul>
    </li>
    @endif
    <!-- Payroll Report End -->

    <!-- Payroll Report Start -->
    @if(session('_module') == 'payroll')
    <li class="nav-item {{menuOpen(1, '')}}">
      <a href="#" class="nav-link {{ (request()->is('hrms/loan/report/employee*')) ? 'active' : '' }}">
        <i class="fas fa-file col-md-2"></i>
        <p class="col-md-10">Loan Reports<i class="right fas fa-angle-down"></i> </p>
      </a>
      <ul class="nav nav-treeview">

        <li class="nav-item">
          <a href="{{url('hrms/loan/report/employee')}}" class="nav-link {{ (request()->is('hrms/loan/report/employee*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Loan Sheet</p>
          </a>
        </li>
        
      </ul>
    </li>
    @endif
    <!-- Loan Report End -->

		<!--  HR Configuration Start -->
    @if(session('_module') == 'hrms')
		<li class="nav-item {{menuOpen(1, '')}}">
      <a href="#" class="nav-link {{ (request()->is('hrms/designation*')) || (request()->is('hrms/unit*')) || (request()->is('hrms/department*')) ? 'active' : '' }}">
        <i class="fas fa-cog col-md-2"></i>
        <p class="col-md-10">HR Configuration<i class="right fas fa-angle-down"></i> </p>
      </a>
      <ul class="nav nav-treeview">

        <li class="nav-item">
          <a href="{{url('hrms/designation')}}" class="nav-link {{ (request()->is('hrms/designation*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Designation</p>
          </a>
        </li>

				<li class="nav-item">
          <a href="{{url('hrms/unit')}}" class="nav-link {{ (request()->is('hrms/unit*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Unit</p>
          </a>
        </li>

				<li class="nav-item">
          <a href="{{url('hrms/department')}}" class="nav-link {{ (request()->is('hrms/department*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Department</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('hrms/overtime')}}" class="nav-link {{ (request()->is('hrms/overtime*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Overtime</p>
          </a>
        </li>
        
      </ul>
    </li>
    @endif 
		<!-- HR Configuration End -->

    <!-- Payroll Configuration Start -->
    @if(session('_module') == 'payroll')
		<li class="nav-item {{menuOpen(1, '')}}">
      <a href="#" class="nav-link {{ (request()->is('hrms/salary-rules*')) || (request()->is('hrms/salary-category*')) || (request()->is('hrms/festival*')) ? 'active' : '' }}">
        <i class="fas fa-cog col-md-2"></i>
        <p class="col-md-10">Payroll Configuration<i class="right fas fa-angle-down"></i> </p>
      </a>
      <ul class="nav nav-treeview">

        <li class="nav-item">
          <a href="{{url('hrms/salary-rules')}}" class="nav-link {{ (request()->is('hrms/salary-rules*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Salary Rules</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('hrms/salary-category')}}" class="nav-link {{ (request()->is('hrms/salary-category*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Salary Catagory</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('hrms/festival')}}" class="nav-link {{ (request()->is('hrms/festival*')) ? 'active' : '' }}">
            <i class="fas fa-circle"></i>
            <p>Festival</p>
          </a>
        </li>
        
      </ul>
    </li>
    @endif
		<!-- Payroll Configuration End -->

    @if (Sentinel::getUser()->roles[0]->name == 'admin')
    <li class="nav-item">
      <a href="{{route('home.hotel.out')}}" class="nav-link">
        <i class="nav-icon fas fa-backward col-md-2"></i>
        <p class="col-md-10">Go back</p>
      </a>
    </li>
    @endif

    @else


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
