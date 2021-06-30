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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" />

@endpush
 
@extends("master_home")
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

        <form method="get" action="{{url($pageUrl.'/allowance-details')}}">

          {!! validation_errors($errors) !!}

          <div class="form-group row">
            <label for="employee" class="col-sm-2 col-form-label">Employee <code>*</code></label>
            <div class="col-sm-10">
              <select name="employee_id" id="employee_id" class="form-control select2">
                <option value="">Select Employee</option>
                @foreach($employees as $employee)
                  <option value="{{$employee->employee_bpc_id}}"  {{ (old('employee_id') == $employee->employee_bpc_id) ? 'selected': '' }}> {{$employee->employee_name}}(ID-{{$employee->employee_bpc_id}}) </option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="form-group row">

            <label class="col-sm-2 col-form-label">From Date <code>*</code></label>
            <div class="col-sm-4">
              <input onchange="enable_to_date()" class="form-control" name="from_date" id="from_date"
                type="text" autocomplete="off" placeholder="YY-MM-DD" value="{{ old('from_date') }}">
            </div>

            <label class="col-sm-2 col-form-label">To Date <code>*</code></label>
            <div class="col-sm-4">
              <input class="form-control" name="to_date" id="to_date"
                type="text" autocomplete="off" placeholder="YY-MM-DD" readonly value="{{ old('to_date') }}" onchange="check_date()">
            </div>

          </div>

      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <div class="col-md-11">
        <div class="row"> 
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous"></script>

<script>
  $(function() {
    $('[data-toggle="tooltip"]').tooltip()
  })

  var x = new Date();
  x.setDate(1);
  x.setMonth(x.getMonth()-1);


  $('#from_date').datepicker({

    format: "yyyy-mm-dd",
    autoclose: true,
    orientation: "bottom",
    endDate: x,

  });

  var xTo = new Date();
  xTo.setDate(-1);
  xTo.setMonth(xTo.getMonth());

  function enable_to_date(){

    $("#to_date").prop( "readonly", false);
    
    $('#to_date').datepicker({
      format: "yyyy-mm-dd",
      autoclose: true,
      orientation: "bottom",
      startDate: $('#from_date').val(),
      endDate: xTo,
    });

    if($('#to_date').val()) {
      if($("#from_date").val() >= $('#to_date').val()) {
        alert("Please insert valid date!");
        $("#from_date").val("");
      }
    }

  }

  function check_date() {
    if($("#to_date").val() <= $('#from_date').val()) {
      alert("Please insert valid date!");
      $("#to_date").val("");
    }
  }

</script>
@include('layouts.form_script')
@endpush