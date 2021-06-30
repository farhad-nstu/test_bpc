@push('css')
<style>
#tooltip {
  position: absolute;
  right: -2%;
  top: 25%;
}

#tooltip .fa {
  font-size: 14px;
  color: #666
}
</style>

<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw==" crossorigin="anonymous" />

@endpush

@extends("hrms::master")
@section("content")
<!-- Main content -->
<section class="container-fluid">

  <div class="row">
    <div class="col-12 form-header">
      <div class="row">
        <div class="col-md-6">
        </div>

        <div class="col-md-6 text-right">
          <button type="button" class="btn btn-tool">
            
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="card">

    <div class="card-body">

      <div class="col-md-11">

        <form method="get" action="{{url('hrms/pay-slip')}}">
          <!-- @csrf -->

          {!! validation_errors($errors) !!}

          <div class="form-group row">
            <label for="employee" class="col-sm-3 col-form-label">Employee <code>*</code></label>
            <div class="col-sm-9">
              <select name="employee_id" id="employee_id" class="form-control select2">
                <option value="">Select Employee</option>
                @foreach($employees as $employee)
                  <option value="{{$employee->employee_bpc_id}}"> {{$employee->employee_name}}(ID-{{$employee->employee_bpc_id}}) </option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="month_year" class="col-sm-3 col-form-label">Time <code>*</code></label>
            <div class="col-sm-9">
              <input type='text' name="month_year" placeholder="Enter Month and Year..."
                class="form-control" id="categoryDate" />
            </div>
          </div>

      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <div class="col-md-11">
        <div class="row"> 
          <div class="col-sm-3"></div>
          <div class="col-sm-9">
            <button type="submit" class="btn btn-primary">Submit</button>&nbsp;&nbsp;
          </div>
        </div>
      </div>
    </div>
    <!-- /.card-footer-->
  </div>
  </form>
  <!-- /.card -->
</section>
<!-- /.content -->
@endsection

@push('plugin')
<script src="{{url('backend/plugins/tinymce/tinymce.min.js')}}"></script>
@endpush

@push('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg==" crossorigin="anonymous"></script>

<script>

  $(function () {
    $('#categoryDate').datetimepicker({
        viewMode: 'years',
        format: 'YYYY-MM',
        maxDate : new Date(),
    });
  });

$(function() {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
@include('layouts.form_script')
@endpush