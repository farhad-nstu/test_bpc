@push('css')
    <style>
        input.form-control.float-left.search_input{
            width: 250px;
        }
        ul.pagination{
            float: right; 
        }
    </style>
@endpush
@extends("hotels::reservations_master")
@section("content")
<!-- Main content -->
<section class="container">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
				<h2 class="card-title"> {!! $page_icon !!} &nbsp; {{ $title }} </h2>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>

                <button type="button" class="btn btn-tool" >
                    <a href="{{url($bUrl.'/create')}}" class="btn bg-gradient-info btn-sm custom_btn"><i class="mdi mdi-plus"></i> <i class="fa fa-plus-circle"></i> Add New </a>
                </button>
            </div>
        </div>

        <div class="card-body" id="">


            <div class="col-md-10">

                <form action="{{url($bUrl)}}" method="get"  class="form-inline">

                    <div class="form-row">
                        <div class="col">
						<input type="text" name="filter" value="{{ $filter ?? '' }}" placeholder="Filter by hotel name..." class="form-control float-left search_input"/>
						</div>


						<div class="col">
						<select class="form-control" name="location" id="by_loc" class="form-control">

						<option value=""> Select Location </option>
						@php $locationList = [] @endphp
						@foreach ($locations as $key => $loc)

							@php $locationList += [ $loc->district_id => $loc->district_name ] @endphp

							<option value="{{ $loc->district_id }}"  {{ ($location ?? '') == $loc->district_id ? 'selected' : '' }} >{{ $loc->district_name }}</option>
						@endforeach;

						</select>

						</div>

					 	<div class="col">
						<input  type="submit" class="btn btn-primary" value="Filter"/>
						&nbsp;<a class="btn btn-default" href="{{ url($bUrl) }}"> Reset </a>
						</div>


                    </div>


                </form>

			<div class="col">

			@if( !empty( Request::query() ) )

			 @if( array_key_exists( 'filter', Request::query() ) || array_key_exists( 'location', Request::query() ) )

				Showing results for

				@if(!empty($filter) )
					'{{ $filter }}'
				@endif

				@if(!empty($location) && isset($locationList[$location]) )
					@if(!empty($filter) )
						&amp;
					@endif
					location '{{ $locationList[$location] }}'
				@endif

			 @endif

			@endif

			</div>


            </div>




		<div class="col-md-12 mt-4">

			<div class="row">
				<div class="col-md-12">

			<table class="table table-bordered">
                <thead>
                <tr>
                    <th>SL</th>
					<th class="sort" data-row="name" id="name" >Hotel Name</th>
                    <th class="sort" data-row="location" id="location" >Location</th>
                    <th>Contact No</th>
                    <th class="text-center">Manage</th>
                </tr>
                </thead>
                <tbody>
                @if ($allData->count() > 0)

				@php
					$c = 1;
				@endphp

				@foreach ($allData as $data)
                    <tr>
                        <td>{{ $c+$serial }}</td>
						<td>{{ $data->h_name }}</td>
                        <td>{{ (!empty($data->districtName)) ? $data->districtName->district_name : '' }}</td>
                        <td>{{ $data->h_contact }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-outline-info">
									<a href="{{url($bUrl.'/'.$data->$tableID.'/view')}}"><i class="fa fa-table"></i> </a>
								</button>

                                <button type="button" class="btn btn-outline-info dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
                                </button>
                                <div class="dropdown-menu" role="menu" style="">
                                    <a class="dropdown-item" href="{{url($bUrl.'/'.$data->$tableID.'/edit')}}"><i class="fa fa-edit"></i> Edit</a>

                                    <div class="dropdown-divider"></div>

									<a class="dropdown-item" id="action" data-toggle="modal" data-target="#windowmodal" href="{{url($bUrl.'/delete/'.$data->$tableID)}}"><i class="fa fa-edit"></i> Delete</a>


                                    <form action="{{url($bUrl.'/'.$data->$tableID)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="dropdown-item sweet" type="submit"><i class="fa fa-trash"></i> Delete</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>

					@php
						$c++;
					@endphp

                @endforeach

				@else

					<tr> <td colspan="5">There is nothing found.</td> </tr>


				@endif
                </tbody>
            </table>
			</div>


			<div class="col-md-3" >
                <form action="{{ url($bUrl) }}" method="post"  class="form-inline">
				 @csrf
                    <div class="form-row">
						<div class="col">
						<select class="form-control" name="per_page" id="per_page" class="form-control">

						<option value=""> Per page </option>
							@php
								$perPageRecords = [2,5,15,20,30];
							@endphp
							@foreach ($perPageRecords as $p)
								<option value="{{ $p }}"  {{ session('per_page') == $p ? 'selected' : '' }} >{{ $p }}</option>
							@endforeach;

						</select>
						</div>	<!--/form-row-->

                    </div>


                </form>
			</div>


		 <div class="col-md-9">
			<div class="pagination_table">
                {!! $allData->render() !!}
            </div>
		 </div>


		 </div><!-- /row -->


	  </div>




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






        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            {{$title}}
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->
</section>
<!-- /.content -->
@endsection

@push('js')


<script>


	$(document).ready(function(){


		$('#per_page').on('change', function() {

		  $.ajax({
			 type:'POST',
			 url:'{{ url($bUrl) }}',
			 data: $( this ).serialize(),
			 headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			 success: function(data){
			 	window.location.href = '{{ url($bUrl) }}';
			 }
		  });


		});

	});
</script>

@endpush
