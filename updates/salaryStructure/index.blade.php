@push('css')
<style>
input.form-control.float-left.search_input {
  width: 250px;
}

ul.pagination {
  float: right;
}

table.table {
  display: inline-table;
}

@media only screen and (max-width: 767px) {
  table.table {
    display: block;
  }
}

</style>
@endpush
@extends("master_home")
@section("content")
<!-- Main content -->
<section class="container-fluid">
  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h2 class="card-title"> {!! $page_icon !!} &nbsp; {{ $title }} </h2>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>

        <button type="button" class="btn btn-tool">
          <a href="{{url($bUrl.'/create')}}" class="btn bg-gradient-info btn-sm custom_btn"><i class="mdi mdi-plus"></i>
            <i class="fa fa-plus-circle"></i> Add New </a>
        </button>
      </div>
    </div>

    <div class="card-body" id="">


      <div class="col-md-10">

        <form action="{{url($bUrl)}}" method="get" class="form-inline">

          <div class="form-row">
            <div class="col">
              <input type="text" name="filter" value="{{ $filter ?? '' }}" placeholder="Filter by employee name or id..."
                class="form-control float-left search_input" />
            </div>

            <div class="row">
              <div class="col">
                <input type="submit" class="btn btn-primary" value="Filter" />
                &nbsp;<a class="btn btn-default" href="{{ url($bUrl) }}"> Reset </a>
              </div>
            </div>


          </div>


        </form>

        <div class="col">

          @if( !empty( Request::query() ) )

          @if( array_key_exists( 'filter', Request::query() ) )

          Showing results for

          @if(!empty($filter) )
          '{{ $filter }}'
          @endif

          @endif

          @endif

        </div>


      </div>




      <div class="col-md-12 mt-4">

        <div class="row">
          <div class="col-md-12">

            <table class="table table-bordered table-responsive">
              <thead>
                <tr>
                  <th class="text-center" width="5%">SL</th>
                  <th class="sort" data-row="name" id="name" width="40%">Employee</th>
                  <th class="text-center" width="15%">Employee ID</th>
                  <th class="" width="25%">Category</th>
                  <th class="text-center" width="15%">Manage</th>
                </tr>
              </thead>
              <tbody>
                @if ($allData->count() > 0)

                @php
                $c = 1;
                @endphp

                @foreach ($allData as $data)
                <tr>
                  <td class="text-center" width="5%">{{ $c+$serial }}</td>
                  <td class="pl-1" width="40%">{{$data->employee_name}}</td>
                  <td class="text-center" width="15%">{{$data->employee_bpc_id}}</td>
                  <td class="pl-1" width="25%">{{$data->category_name}}</td>
                  <td class="text-center" width="15%">
                    <div class="btn-group">
                      <button type="button" class="btn btn-outline-info">
                        <a href="{{url($bUrl.'/'.$data->structure_id)}}"><i class="fa fa-table"></i> </a>
                      </button>

                      <button type="button" class="btn btn-outline-info dropdown-toggle dropdown-hover dropdown-icon"
                        data-toggle="dropdown">
                      </button>
                      <div class="dropdown-menu" role="menu" style="">
                        <a class="dropdown-item" href="{{url($bUrl.'/'.$data->structure_id.'/edit')}}"><i
                            class="fa fa-edit"></i> Edit</a>

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" id="action" data-toggle="modal" data-target="#windowmodal"
                          href="{{url($bUrl.'/delete/'.$data->structure_id)}}"><i class="fa fa-trash"></i> Delete</a>

                      </div>
                    </div>
                  </td>
                </tr>

                @php
                $c++;
                @endphp

                @endforeach

                @else

                <tr>
                  <td colspan="5">There is nothing found.</td>
                </tr>


                @endif
              </tbody>
            </table>
          </div>


          <div class="col-md-3">
            <form action="{{ url($bUrl) }}" method="post" class="form-inline">
              @csrf
              <div class="form-row">
                <div class="col">
                  <select class="form-control" name="per_page" id="per_page" class="form-control">

                    <option value=""> Per page </option>
                    @php
                    $perPageRecords = [30,40,50,60,70,80,100];
                    @endphp
                    @foreach ($perPageRecords as $p)
                    <option value="{{ $p }}" {{ session('per_page') == $p ? 'selected' : '' }}>
                      {{ $p }}</option>
                    @endforeach; 

                  </select>
                </div>
                <!--/form-row-->

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
      <div class="modal fade" id="windowmodal" tabindex="-1" role="dialog" aria-labelledby="windowmodal"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
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
$(document).ready(function() {


  $('#per_page').on('change', function() {

    $.ajax({
      type: 'POST',
      url: '{{ url($bUrl) }}',
      data: $(this).serialize(),
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function(data) {
        window.location.href = '{{ url($bUrl) }}';
      }
    });


  });

});
</script>

@endpush