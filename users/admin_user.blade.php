@extends("master_home")
@section("content")
    <section class="content">
        <div class="container-fluid">
            <div class="userprofile">
                <div class="userprofile-info">
                    <div class="userprofile-img">
                        <img src="{{url('backend')}}/images/user1-128x128.jpg">
                    </div>

                    <h3>{{$objData->full_name}}</h3>
                    <p>{{$objData->role->roleName->name}}</p>
                </div>
                <div class="userprofile-contacts">
                    <ul>
                        <li><i class="fas fa-phone-alt"></i> <span>01928287363</span></li>
                        <li><i class="fas fa-envelope"></i> <span>{{$objData->email}}</span></li>
                        <li><i class="fas fa-map-marker-alt"></i> <span> Dhaka , Bangladesh</span></li>
                        <li><i class="fas fa-clock"></i> <span>{{$objData->last_login}}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
