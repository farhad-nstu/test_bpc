<nav class="mt-2">

    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        @if(Sentinel::getUser()->inRole('hotelmanager') || Sentinel::getUser()->inRole('hoteladmin') || Sentinel::getUser()->inRole('admin') )

        <li class="nav-item">
            <a href="{{route('hall.home')}}" class="nav-link ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
        </li>






            </ul>
        </li>


        @endif
    </ul>

</nav>
<!-- /.sidebar-menu -->





@include('layouts.header')
@include('layouts.top_bar')
@include('halls::layouts.sidebar_left')
@include('layouts.breadcrumb')
@yield('content')
@include('layouts.footer')