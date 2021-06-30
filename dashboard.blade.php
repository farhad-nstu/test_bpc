@extends('master_home')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h3 class="mb-3">Welcome to {{$title}}</h3>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-6 mb-3">
                    <a href="{{url('hotels/reservations')}}" class="hotel-btn-single">
                        <p><span class="flaticon-calendar"></span></p>
                        <h3>Guest Reservations</h3>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-6 mb-3">
                    <a href="{{url('hotels/guest-registrations')}}" class="hotel-btn-single">
                        <p><span class="flaticon-writing"></span></p>
                        <h3>Guest Registration</h3>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-6 mb-3">
                    <a href="{{url('hotels/rooms')}}" class="hotel-btn-single">
                        <p><span class="flaticon-hotel"></span></p>
                        <h3>Manage Room</h3>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-6 mb-3">
                    <a href="{{url('hotels/room-prices')}}" class="hotel-btn-single">
                        <p><span class="flaticon-price-tag-1"></span></p>
                        <h3>Room Price</h3>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-6 mb-3">
                    <a href="{{url('hotels/house-keeping')}}" class="hotel-btn-single">
                        <p><span class="flaticon-vacuum-cleaner"></span></p>
                        <h3>House Keeping</h3>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-6 mb-3">
                    <a href="{{url('hotels/guest-type-discount')}}" class="hotel-btn-single">
                        <p><span class="flaticon-discount"></span></p>
                        <h3>Guest Type Discount</h3>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-6 mb-3">
                    <a href="{{url('hotels/payment-discount')}}" class="hotel-btn-single">
                        <p><span class="flaticon-pay"></span></p>
                        <h3>Payment Type Discount</h3>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
