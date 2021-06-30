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

  <div class="card">

    <div class="card-header">
      <h2 class="card-title"> {!! $page_icon !!} &nbsp; {{ $title }} </h2>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>

        <button type="button" class="btn btn-tool" >
          <a href="{{url($pageUrl)}}" class="btn btn-info btn-sm"><i class="mdi mdi-plus"></i> <i class="fa fa-arrow-left"></i> Back</a>
        </button>
      </div>
    </div>

    <div class="card-body">

      <div class="col-md-11">

        <form method="get" action="{{url('hrms/create/salary')}}">

          {!! validation_errors($errors) !!}

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Date Of Salary Issue <code>*</code></label>
            <div class="col-sm-9">
              <input class="form-control" name="salary_date"
                type="text" autocomplete="off" id="categoryDate" placeholder="YY-MM-DD">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Details</label>
            <div class="col-sm-4">
              <p class="form-control">Total Employee: {{ $totalEmployee }}</p>
              <p class="form-control">Total Basic Salary: {{ $totalBasic }}</p>
              <p class="form-control">Total Addition: {{ $totalAdd }}</p>
              <p class="form-control">Total Deduction: {{ $totalDeduc }}</p>
              <p class="form-control">Total Salary Would be Create: {{ $totalBasic + $totalAdd - $totalDeduc }}</p>
            </div>
          </div>

      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <div class="offset-md-2 col-sm-9">
        <button type="submit" class="btn btn-primary">Save</button>&nbsp;&nbsp;
        <a href="{{url($pageUrl)}}" class="btn btn-warning">Cancel</a>
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
$(function() {
  $('[data-toggle="tooltip"]').tooltip()
})

  $(function () {
    $('#categoryDate').datetimepicker({
        viewMode: 'years',
        format: 'YYYY-MM',
        maxDate : new Date(),
    });
  });

</script>
@include('layouts.form_script')
@endpush