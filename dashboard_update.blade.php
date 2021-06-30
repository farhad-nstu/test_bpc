@extends('master_home')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h3 class="mb-3">Welcome to {{$title}}</h3>
                    <!-- <div class="c-panel-boxs"> -->
                        <div class="frontdesk-btn">

                            <a href="{{url('hrms/hrm')}}" class="frontdesk-btn-item">
                                <span class="flaticon-gift-list"></span>
                                <h3>Employee</h3>
                            </a>

                            <a href="{{url('hrms/loan')}}"class="frontdesk-btn-item">
                                <span class="flaticon-writing"></span>
                                <h3>Loan</h3>
                            </a>

                            <a href="{{url('hrms/salary-sheets')}}"class="frontdesk-btn-item">
                                <span class="flaticon-writing"></span>
                                <h3>Salary</h3>
                            </a>

                            <a href="{{url('hrms/report/category-page')}}"class="frontdesk-btn-item">
                                <span class="flaticon-writing"></span>
                                <h3>Reports</h3>
                            </a>

                            <a href="{{url('hrms/festival-bonus')}}"class="frontdesk-btn-item">
                                <span class="flaticon-gift-list"></span>
                                <h3>Festival Bonus</h3>
                            </a>

                        </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </section>
@endsection
@push('css')
    <style>
        p.from_error{
            position: absolute;
            bottom: -12px;
            left: 13px;
            color: red;
            font-size: 15px;
            background-color: #fff;
            padding: 0 5px;
        }
        .custom_control{
            margin-top: 37px;
        }
        img.img_search{
            height: 130px;
            width: 130px;
            margin-top: 14px;
        }
        .btn-app{
            font-size: 15px;
            height: 130px;
            width: 155px;
            padding: 15px;
            color: #138496;
            background: linear-gradient(140deg, rgba(231,231,231,1) 0%, rgba(231,231,231,1) 50%, rgba(241,241,241,1) 50%, rgba(241,241,241,1) 100%);
        }
        .btn-app>.fa, .btn-app>.fab, .btn-app>.fad, .btn-app>.fal, .btn-app>.far, .btn-app>.fas, .btn-app>.ion, .btn-app>.svg-inline--fa{
            font-size: 50px;
            color: #138496;
        }
        th.text-center.sorting {
            width: 200px;
        }


        .label_show{
            background-color: #e7eeff;
            width: 100%;
            padding: .375rem .75rem;
        }

        .show_form{
            border-radius: 5px !important;
            background-color: #f9fbff !important;
        }


        /*Room Status admin panel design*/
        .hotel-name button{
            border: 0;
            outline: 0;
            border-radius: 0;
            padding: 0px 10px;
            margin-top: 10px;
        }
        #table td, .table th{
            padding: 5px!important;
        }
        #table th{
            font-size: 12px!important;
        }
        .room-summary-table{
            border: 1px solid #ddd;
            padding: 10px;
            /*color: #fff!important;*/
        }
        .room-summary-table hr{
            padding: 0;
            margin: 0;
        }
        .status{
            display: inline-block;
            height: 15px;
            width: 20px;
            margin-left: 5px;
        }
        .room-status p{
            margin-right: 15px;
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        /*image form*/
        .img-holder{
            height: auto;
            width: 100px;
            display: flex;
        }
        .img-holder img{
            width: 100%;
            height: auto;
            border: 1px solid skyblue;
            padding: 7px;
            margin-right: 10px;
        }


        /*============== Control panel page design ==========*/
        .c-panel-boxs{
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        a.c-panel-box{
            text-decoration: none;
            height: 180px;
            width: 180px;
            padding: 20px;
            background: #fff;
            box-shadow: 0 2px 15px #ddd;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center
        }
        .c-panel-box img{
            width: 60px;
            margin: 0 auto;
        }
        .c-panel-box h3{
            font-size: 18px;
            margin-top: 10px;
            font-weight: 500;
        }
        .frontdesk-btn{display: flex;gap:10px;flex-wrap: wrap;}
        a.frontdesk-btn-item{text-decoration: none;display: inline-block;height: 160px;width: 160px;background: linear-gradient(to right, #fe9365, #feb798);text-align: center;display: flex;flex-direction: column;align-items: center;justify-content: center;color: #fff;transition: all .3s;padding: 5px;}
        a.frontdesk-btn-item:hover{margin-top: -5px;color: #fff;}
        a.frontdesk-btn-item:nth-child(2){background: linear-gradient(to right, #0ac282, #0df3a3);}
        a.frontdesk-btn-item:nth-child(3){background: linear-gradient(to right, #fe5d70, #fe909d);}
        a.frontdesk-btn-item:nth-child(4){background: linear-gradient(to right, #01a9ac, #01dbdf);}
        a.frontdesk-btn-item:nth-child(5){background: linear-gradient(to right, #BD95ED, #ddc7f7);}
        a.frontdesk-btn-item:nth-child(6){background: linear-gradient(to right, #e44998, #f1a4cc);}
        a.frontdesk-btn-item:nth-child(7){background: linear-gradient(to right, #01a9ac, #01dbdf);}
        a.frontdesk-btn-item:nth-child(8){background: linear-gradient(to right, #BD95ED, #ddc7f7);}
        a.frontdesk-btn-item:nth-child(9){background: linear-gradient(to right, #e44998, #f1a4cc);}
        a.frontdesk-btn-item:nth-child(10){background: linear-gradient(to right, #0ac282, #0df3a3);}
        a.frontdesk-btn-item:nth-child(11){background: linear-gradient(to right, #6883e6, #bcc8f3);}
        a.frontdesk-btn-item:nth-child(12){background: linear-gradient(to right, #fe5d70, #fe909d);}
        /*a.frontdesk-btn-item img{width: 40px;margin: 0 auto;}*/
        a.frontdesk-btn-item span{font-size: 40px;}
        a.frontdesk-btn-item span::before{margin: 0; font-size: 50px;}
        a.frontdesk-btn-item h3{font-size: 20px;}


        /*======== Dashboard Index page ========= */
        .dashboard-small-box{
            background: #fff;
            box-shadow: 0 2px 15px #ddd;
            padding: 15px 20px;
        }
        .dashboard-small-box .icon span i{
            font-size: 45px;
        }
        .dashboard-small-box-bottom{
            border-top: 1px solid #ddd;
        }
        .heading p{
            color: gray;
        }
        .dashboard-small-box-bottom a{
            text-decoration: none;
            color: gray;
            display: inline-block;
            margin-top: 5px;
            font-size: 14px;
        }
        .dashboard-small-box-bottom a i{
            color: #000;
        }

        /*========== Chart 1 =============*/
        .fullscreen{
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100vh;
            overflow: auto;
            z-index: 9999;
        }

        /*======== Transaction history ==========*/
        .media span i{
            padding: 7px;
            border-radius: 50%;
        }
        .bg-success-faded i{
            background: #eaf7ed;
        }
        .bg-info-faded i{
            background: #e3f5f8;
        }
        .bg-warning-faded i{
            background: #fff9ec;
        }
        .bg-secondary-faded i{
            background: #edeeef;
        }
    </style>
@endpush