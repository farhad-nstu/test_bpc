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

  <div class="card">

    <div class="card-header">
      <h2 class="card-title"> {!! $page_icon !!} &nbsp; {{ $title }} </h2>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>

        <button type="button" class="btn btn-tool" >
          <a href="{{url($bUrl)}}" class="btn btn-info btn-sm"><i class="mdi mdi-plus"></i> <i class="fa fa-arrow-left"></i> Back</a>
        </button>
      </div>
    </div>

    <form method="post" action="{{url($bUrl.'/store')}}" enctype="multipart/form-data">
      @csrf

      <div class="card-body">

        {!! validation_errors($errors) !!}

        <input type="hidden" value="{{ getValue($tableID, $objData) }}" id="id" name="{{ $tableID }}">

        <div class="row">
          <div class="col-sm-6">

            <div class="form-group row">
              <label for="employee" class="col-sm-4 col-form-label">Employee <code>*</code></label>
              <div class="col-sm-8">
                <select name="employee_id" id="employee_id" class="form-control select2" style="width: 100%;">
                  <option value="">Select Employee</option>
                  @if (!empty($employees))
                  @foreach($employees as $employee)
                  <option {{($employee->employee_bpc_id == getValue('employee_id',$objData))? 'selected':''}}
                    value="{{$employee->employee_bpc_id}}">{{$employee->employee_name}}({{$employee->employee_bpc_id}})</option>
                  @endforeach
                  @endif
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-4 col-form-label" for="institute">Institute</label>
              <div class="col-sm-8">
                <input name="institute" value="{{ getValue('institute', $objData) }}" id="institute" type="text"
                  class="form-control">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Training Date From <code>*</code></label>
              <div class="col-sm-8">
                <input onchange="enable_to_date()" class="form-control" name="from_date" id="from_date"
                type="text" autocomplete="off" placeholder="YY-MM-DD" value="{{ getValue('from_date', $objData) }}">
              </div>
            </div> 

            <div class="form-group row">
              <label class="col-sm-4 col-form-label" for="position">Position</label>
              <div class="col-sm-8">
                <input name="position" value="{{ getValue('position', $objData) }}" id="position" type="text"
                  class="form-control">
              </div>
            </div>

            <div class="form-group row">
              <label for="train_type" class="col-sm-4 col-form-label">Training Type <code>*</code>
              </label>
              <div class="col-sm-8">
                <select onchange="add_country_field(this.value)" name="train_type" id="train_type" class="form-control">
                  <option value="">Select Type</option>
                  <option {{ ( getValue('train_type', $objData) == "Local")? 'selected':'' }} value="Local">Local</option>
                  <option {{ ( getValue('train_type', $objData) == "Foreign")? 'selected':'' }} value="Foreign">Foreign
                  </option>
                </select>
              </div>
            </div>

          </div>
          <div class="col-sm-6">

            <div class="form-group row">
              <label for="course_title" class="col-sm-4 col-form-label">Course Title <code>*</code></label>
              <div class="col-sm-8">
                <input type="text" value="{{ getValue('course_title', $objData) }}" name="course_title" id="course_title"
                  class="form-control">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-4 col-form-label" for="grade">Grade</label>
              <div class="col-sm-8">
                <input name="grade" value="{{ getValue('grade', $objData) }}" id="grade" type="text" class="form-control">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-4 col-form-label" for="to_date">To</label>
              <div class="col-sm-8">
                <input onchange="check_date()" class="form-control" name="to_date" id="to_date" value="{{ getValue('to_date', $objData) }}"
                type="text" autocomplete="off" placeholder="YY-MM-DD" readonly>
              </div>
            </div>

            <div class="form-group row">
              <label for="status" class="col-sm-4 col-form-label">Status <code>*</code>
              </label>
              <div class="col-sm-8">
                <select name="status" id="status" class="form-control">
                  <option value="">Select Type</option>
                  <option {{ ( getValue('status', $objData) == "Completed")? 'selected':'' }} value="Completed">Completed</option>
                  <option {{ ( getValue('status', $objData) == "Perticipated")? 'selected':'' }} value="Perticipated">Perticipated
                  </option>
                </select>
              </div>
            </div>

            <div class="form-group row" id="addCountry">
              <label class="col-sm-4 col-form-label">Country</label>
              <div class="col-sm-8">
                <select name="country_id" id="country_id" class="form-control">
                  <option value="">Select Country</option>
                  @foreach($countries as $country)
                  <option {{ ( getValue('country_id', $objData) == $country->id)? 'selected':'' }} value="{{ $country->id }}">{{ $country->nicename }}</option>
                  @endforeach
                </select>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="card-footer">
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group row">
              <div class="col-sm-4"></div>
              <div class="col-sm-8">
                @if(empty(getValue($tableID, $objData)))
                <button type="submit" class="btn btn-primary">Save</button>&nbsp;&nbsp;
                @else 
                <button type="submit" class="btn btn-primary">Update</button>&nbsp;&nbsp;
                @endif
                <a href="{{url($bUrl)}}" class="btn btn-warning">Cancel</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </form>
  </div>
</section>
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

@if(getValue('train_type', $objData) == "Foreign")
  $("#addCountry").show();
  @else
  $("#addCountry").hide();
  @endif

  function add_country_field(value) {
      if(value == 'Foreign'){
        $("#addCountry").show();
      } else {
        $("#addCountry").hide();
      }
  }

  $('#from_date').datepicker({

    format: "yyyy-mm-dd",
    autoclose: true,
    orientation: "bottom",
    endDate: "today"

  });

  function enable_to_date(){

    $("#to_date").prop( "readonly", false);
    
    $('#to_date').datepicker({
      format: "yyyy-mm-dd",
      autoclose: true,
      orientation: "bottom",
      startDate: $('#from_date').val(),
      endDate: "today"

    });   

  }

  function check_date() {
    if($("#to_date").val() <= $('#from_date').val()) {
      alert("Please insert valid date");
      // document.getElementById("to_date").value = " ";
      document.getElementById("to_date").reset();
      // $("#to_date").val(" ");
    }
  }

</script>
@include('layouts.form_script')
@endpush