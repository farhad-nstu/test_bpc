<nav class="mt-2">

    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        @if(Sentinel::getUser()->inRole('hotelmanager') || Sentinel::getUser()->inRole('hoteladmin') || Sentinel::getUser()->inRole('admin') )
            @if (Sentinel::hasAccess(['hotel.home']))
        <li class="nav-item">
            <a href="{{route('hotel.home')}}" class="nav-link ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
        </li>
            @endif
            @if (Sentinel::hasAccess(['hotels.reservations.dashboard']))
        <li class="nav-item reservation_item">
            <a href="{{url('hotels/reservations_dashboard')}}" class="nav-link ">
                <i style="margin-left: -15px" class="flaticon-calendar reservations_icon"></i>
                <p>Reservations</p>
            </a>
        </li>
        @endif
            @if (Sentinel::hasAnyAccess(['hotels.reservations.dashboard','hotels.rooms','hotels.roomtypes','hotels.roomprices']))
        <li class="nav-item {{menuOpen(1, 'hotel-rooms')}}">
            <a href="{{url('hotels/reservations_dashboard')}}" class="nav-link ">
                <i class="fas fa-bed nav-icon"></i>
                <p>
                    Room Management
                    <i class="right fas fa-angle-down"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                @if (Sentinel::hasAccess(['hotels.rooms']))
                <li class="nav-item">
                    <a href="{{url('hotels/rooms')}}" class="nav-link ">
                        <i class="fas fa-circle"></i>
                        <p>Room Manage</p>
                    </a>
                </li>
                @endif
                    @if (Sentinel::hasAccess(['hotels.roomtypes']))
                <li class="nav-item">
                    <a href="{{url('hotels/room-types')}}" class="nav-link ">
                        <i class="fas fa-circle"></i>
                        <p>Room Category</p>
                    </a>
                </li>
                    @endif
                    @if (Sentinel::hasAccess(['hotels.roomprices']))
                <li class="nav-item">
                    <a href="{{url('hotels/room-prices')}}" class="nav-link ">
                        <i class="fas fa-circle"></i>
                        <p>Room Prices</p>
                    </a>
                </li>
                    @endif
            </ul>
        </li>
            @endif
                @if (Sentinel::hasAccess(['hotels.reports.dashboard']))
            <li class="nav-item">
                <a href="{{url('hotels/reports/dashboard')}}" class="nav-link ">
                    <i class="fas fa-table nav-icon"></i>
                    <p>Reports</p>
                </a>
            </li>
                @endif


                @if (Sentinel::hasAnyAccess(['hotel.home.id']))
        <li class="nav-item ">
            <a href="" class="nav-link ">
                <i class="fas fa-cog nav-icon"></i>
                <p>
                    Configurations
                    <i class="right fas fa-angle-down"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('hotels/hotel/'.session()->get('_hotel_id').'/edit')}}" class="nav-link ">
                        <i class="fas fa-circle"></i>
                        <p>Hotel Setting</p>
                    </a>
                </li>
            </ul>
        </li>
                @endif
        @else
        @endif
    </ul>

</nav>
<!-- /.sidebar-menu -->