<style>
    .brand-link{
        white-space: initial !important;
    }
</style>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link top_title">
        <span class="w-100"><img style="margin: 0 auto; max-height:40px " class="d-block" src="{{url($logo)}}"></span>
        <p class="brand-text font-weight-light text-center">Bangladesh Parjantan Corporation (BPC)</p>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
{{--        <div class="user-panel mt-3 pb-3 mb-3 d-flex">--}}
{{--            <div class="image">--}}
{{--                <img src="{{url('backend')}}/images/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">--}}
{{--            </div>--}}
{{--            <div class="info">--}}
{{--                <a href="#" class="d-block">{{Sentinel::getUser()->full_name}} ({{Sentinel::getUser()->roles[0]->name}})</a>--}}
{{--            </div>--}}
{{--        </div>--}}

        <!-- SidebarSearch Form -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->
            <!-- Sidebar Menu -->


    @if (session()->has('_hotel_id'))
        @include('halls::layouts.sidebar_hall')
    @elseif (Session::get('_module') === 'hms')
        <!--Hotel Module-->
            @include('halls::layouts.sidebar_hall_admin')
        @else
            @include('layouts.sidebar_admin')
        @endif

    </div>
    <!-- /.sidebar -->
</aside>
