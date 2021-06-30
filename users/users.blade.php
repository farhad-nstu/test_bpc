@extends("master_home")
@section("content")
    <section class="content">
        <!-- Default box -->
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body login-card-body">
                        <p class="login-box-msg">Register</p>

                        <form action="{{route('sys.auth.reg.user')}}" method="post">

                            {{csrf_field()}}
                            <div class="input-group mb-3">
                                <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Your Name">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <select id="hotel_id" name="hotel_id" class="form-control" >
                                    @if(session()->get('_hotel_id') == 0)
                                        @foreach(\Modules\Hotels\Entities\HotelList::get() as $hotel)
                                            <option value=" {{ $hotel->h_id }}"> {{ $hotel->h_name }}</option>
                                        @endforeach
                                    @else
                                        @foreach(\Modules\Hotels\Entities\HotelList::where('h_id',session()->get('_hotel_id'))->get() as $hotel)                                     <option value=" {{ $hotel->h_id }}"> {{ $hotel->h_name }}</option>
                                        @endforeach
                                    @endif


                                </select>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user-circle"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <select id="role" name="role" class="form-control" >
                                    @foreach(\App\Roles::get() as $role)
                                        <option value=" {{ $role->id }}"> {{ $role->name }}</option>
                                    @endforeach

                                </select>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user-circle"></span>
                                    </div>
                                </div>
                            </div>




                            <div class="row">
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-block">SignUp</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>



                    </div>
                    <!-- /.login-card-body -->
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title"> {!! $page_icon !!} &nbsp; {{ $title }} </h2>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Users Role</th>
                                    <th>Last Login</th>
                                    <th style="width: 40px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if (!empty($users))
                                @foreach($users as $key=>$user)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$user->full_name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{(!empty($user->role) && !empty($user->role->roleName))?$user->role->roleName->name:''}}</td>
                                    <td>{{$user->last_login}}</td>

                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-outline-info">
                                                <a data-toggle="modal" data-target="#windowmodal" href="{{url('system/core/user/show/'.$user->id)}}"><i class="fa fa-table"></i> </a>
                                            </button>

                                            <button type="button" class="btn btn-outline-info dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
                                            </button>
                                            <div class="dropdown-menu" role="menu" style="">
                                                <a class="dropdown-item" data-toggle="modal" data-target="#windowmodal" href="{{url('system/core/user/'.$user->id.'/edit')}}"><i class="fa fa-edit"></i> Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" id="action" data-toggle="modal" data-target="#windowmodal" href="{{url('system/core/user/delete/'.$user->id)}}"><i class="fa fa-trash"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="windowmodal" tabindex="-1" role="dialog" aria-labelledby="windowmodal" aria-hidden="true">
        <div class="modal-dialog modal-lg"  role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="windowmodal">&nbsp;</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="spinner-border"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
