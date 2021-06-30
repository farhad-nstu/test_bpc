@extends('halls::master_home')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h3 class="mb-3">Welcome to {{$title}}</h3>
                </div>
{{--                <div class="col-xl-3 col-lg-4 col-md-4 col-6 mb-3">--}}
{{--                    <a href="{{url('hotels/front_desk/dashboard')}}" class="hotel-btn-single">--}}
{{--                        <p><span class="flaticon-city-hall"></span></p>--}}
{{--                        <h3>Front Office</h3>--}}
{{--                    </a>--}}
{{--                </div>--}}
                <div class="col-xl-3 col-lg-4 col-md-4 col-6 mb-3">
                    <a href="{{url('halls/reservations')}}" class="hotel-btn-single">
                        <p><span class="flaticon-calendar"></span></p>
                        <h3>Hall Reservations</h3>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-6 mb-3">
                    <a href="{{url('halls/registrations')}}" class="hotel-btn-single">
                        <p><span class="flaticon-writing"></span></p>
                        <h3>Hall Registration</h3>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-6 mb-3">
                    <a href="{{url('halls/rooms')}}" class="hotel-btn-single">
                        <p><span class="flaticon-hotel"></span></p>
                        <h3>Manage Hall Room</h3>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-6 mb-3">
                    <a href="{{url('halls/prices')}}" class="hotel-btn-single">
                        <p><span class="flaticon-price-tag-1"></span></p>
                        <h3>Hall Room Price</h3>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-6 mb-3">
                    <a href="{{url('halls/types')}}" class="hotel-btn-single">
                        <p><span class="flaticon-city-hall"></span></p>
                        <h3>Mange Hall Types</h3>
                    </a>
                </div>
{{--                <div class="col-xl-3 col-lg-4 col-md-4 col-6 mb-3">--}}
{{--                    <a href="{{url('hotels/guest-type-discount')}}" class="hotel-btn-single">--}}
{{--                        <p><span class="flaticon-discount"></span></p>--}}
{{--                        <h3>Guest Type Discount</h3>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-lg-4 col-md-4 col-6 mb-3">--}}
{{--                    <a href="{{url('hotels/payment-discount')}}" class="hotel-btn-single">--}}
{{--                        <p><span class="flaticon-pay"></span></p>--}}
{{--                        <h3>Payment Type Discount</h3>--}}
{{--                    </a>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
@endsection
