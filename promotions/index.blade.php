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
<section class="container-fluid">
  <div class="row">
    <div class="col-4">
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Employee Promotion</p>

          <form action="{{url('hrms/promotion/store')}}" method="post">

            @csrf

            {!! validation_errors($errors) !!}

            <div class="input-group mb-3">
              <label for="employee_id" class="col-sm-3 col-form-label">Employee <code>*</code></label>
              <select id="employee_id" name="employee_id" class="form-control" style="border-right: 1px solid gray;">
                <option value="">Select Employee</option>
                @foreach($employees as $employee)
                <option value="{{$employee->employee_bpc_id}}">
                  {{$employee->employee_name}}({{$employee->employee_bpc_id}})</option>
                @endforeach
              </select>
            </div>

            <div class="input-group mb-3">
              <label class="col-sm-3 col-form-label" for="promot_nature">Nature Of Promotion<code>*</code></label>
              <input type="text" name="promot_nature" id="promot_nature" class="form-control" style="border-right: 1px solid gray;">
            </div>

            <div class="input-group mb-3">
              <label class="col-sm-3 col-form-label" for="promot_date">Date Of Promotion<code>*</code></label>
              <input type="text" name="promot_date" class="form-control datepicker" style="border-right: 1px solid gray;">
            </div>

            <div class="input-group mb-3">
              <label class="col-sm-3 col-form-label" for="promot_rank">Promotion Rank<code>*</code></label>
              <input type="text" name="promot_rank" id="promot_rank" class="form-control" style="border-right: 1px solid gray;">
            </div>

            <div class="input-group mb-3">
              <label class="col-sm-3 col-form-label" for="promot_g_o_date">Date Of Promotion G.O</label>
              <input type="text" name="promot_g_o_date" class="form-control datepicker" style="border-right: 1px solid gray;">
            </div>

            <div class="input-group mb-3">
              <label for="location" class="col-sm-3 col-form-label">Grade<code>*</code></label>
                <select name="promot_pay_scale" class="form-control" style="border-right: 1px solid gray;">
                  <option value="">Select Grade</option>
                  @if (!empty($payscaleGrades))
                  @foreach($payscaleGrades as $payscaleGrade)
                    <option value="{{$payscaleGrade->payscale_grad_no}}">Grade-{{$payscaleGrade->payscale_grad_no}}</option>
                  @endforeach
                  @endif
                </select>
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-lg btn-primary">Save</button>
            </div>
          </form>

        </div>
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
                <th>Employee</th>
                <th>Employee ID</th>
                <th>Nature Of Promotion</th>
                <th style="width: 40px">Action</th>
              </tr>
            </thead>
            <tbody>
              @if (!empty($allData))
              @foreach($allData as $key=>$data)
              <tr>
                <td>{{++$key}}</td>
                <td>{{$data->employee->employee_name}}</td>
                <td>{{ $data->employee_id }}</td>
                <td>{{$data->promot_nature}}</td>

                <td class="text-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-outline-info">
                      <a data-toggle="modal" data-target="#windowmodal"
                        href="{{url($bUrl.'/'.$data->promot_id.'/view')}}"><i class="fa fa-table"></i> </a>
                    </button>

                    <button type="button" class="btn btn-outline-info dropdown-toggle dropdown-hover dropdown-icon"
                      data-toggle="dropdown">
                    </button>
                    <div class="dropdown-menu" role="menu" style="">
                      <a class="dropdown-item" data-toggle="modal" data-target="#windowmodal"
                        href="{{url($bUrl.'/'.$data->promot_id.'/edit')}}"><i class="fa fa-edit"></i> Edit</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" id="action" data-toggle="modal" data-target="#windowmodal"
                        href="{{url($bUrl.'/delete/'.$data->promot_id)}}"><i class="fa fa-trash"></i> Delete</a>
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