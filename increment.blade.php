<?php 
  use DB as DBS;
?>
@push('css')
<style>
input.form-control.float-left.search_input {
    width: 250px;
}

ul.pagination {
    float: right;
}
</style>
@endpush
@extends("hrms::master")
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

          </button>
      </div>
    </div>

    <div class="card-body" id="">

        <div class="col-md-10">

            <form action="{{url($bUrl.'/increment')}}" method="get" class="form-inline">

                <div class="form-row">
                    <div class="col">
                        <input type="text" name="filter" value="{{ $filter ?? '' }}"
                            placeholder="Filter by employee ID..." class="form-control float-left search_input" />
                    </div>


                    <div class="col">


                    </div>

                    <div class="row">
                        <div class="col">
                            <input type="submit" class="btn btn-primary" value="Filter" />
                            &nbsp;<a class="btn btn-default" href="{{ url($bUrl.'/increment') }}"> Reset </a>
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
                                <th>SL</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>GPF No</th>
                                <th>Present Scale</th>
                                <th>Work Station</th>
                                <th>Join Date</th>
                                <th>Basic</th>
                                <th>Increment Date</th>
                                <th>Increment Salary</th>
                                <th>Comments</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($allData->count() > 0)
                            @foreach($allData as $data)

                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $data->employee_name }}</td>
                                <td>{{ $data->desg_title }}</td>
                                <td>{{ $data->employee_bpc_id }}</td>
                                <td>{{ $data->payscale_salary_min }}-{{ $data->payscale_salary_max }}</td>
                                <td>Head Office</td>
                                <td>{{ $data->employee_join_date }}</td>
                                <td>{{ $data->employee_basic_salary }}</td>
                                <td>{{ $data->promot_date }}</td>
                                <td>{{ $data->increment_salary }}</td>
                                <td></td>
                            </tr>

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
                    <form action="{{ url($bUrl.'/increment') }}" method="post" class="form-inline">
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
            url: '{{ url($bUrl.' / increment ') }}',
            data: $(this).serialize(),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                window.location.href = '{{ url($bUrl.' / increment ') }}';
            }
        });


    });

});
</script>

@endpush