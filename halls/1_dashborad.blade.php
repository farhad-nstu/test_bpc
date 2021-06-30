@extends('halls::master_home')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h3 class="mb-3">Welcome to {{$title}}</h3>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-6 mb-3">
                    <a href="{{url('halls/reservations')}}" class="hotel-btn-single">
                        <p><span class="flaticon-calendar"></span></p>
                        <h3>Hall Reservations</h3>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-6 mb-3">
                    <a href="{{url('halls/registrations')}}" class="hotel-btn-single">
                        <p><span class="flaticon-writing"></span></p>
                        <h3>Hall Registrations</h3>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-6 mb-3">
                    <a href="{{url('halls/registration-list')}}" class="hotel-btn-single">
                        <p><span class="flaticon-hotel"></span></p>
                        <h3>Hall All Reservations</h3>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-6 mb-3">
                    <a href="{{url('hotels/guests')}}" class="hotel-btn-single">
                        <p><span class="flaticon-price-tag-1"></span></p>
                        <h3>All Guest</h3>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection