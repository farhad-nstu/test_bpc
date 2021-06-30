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
          <a href="{{url($bUrl)}}" class="btn btn-info btn-sm"><i class="mdi mdi-plus"></i> <i class="fa fa-arrow-left"></i> Back</a>
        </button>
      </div>
    </div>

    <div class="card-body">

      <div class="col-md-11">

        <form method="post" action="{{url($bUrl.'/store')}}" enctype="multipart/form-data">
          @csrf

          {!! validation_errors($errors) !!}

          <input type="hidden" value="{{ getValue($tableID, $objData) }}" id="id" name="{{ $tableID }}">

          <div class="form-group row">
            <label for="employee" class="col-sm-3 col-form-label">Employee <code>*</code></label>
            <div class="col-sm-9">
              <select  onchange="get_current_data(this.value)" name="employee_id" id="employee_id" class="form-control select2">
                <option value="">Select Employee</option>
                @if (!empty($employees))
                @foreach($employees as $employee)
                <option {{($employee->employee_bpc_id == getValue('employee_id',$objData))? 'selected':''}}
                  value="{{$employee->employee_bpc_id}}">{{$employee->employee_name}}({{$employee->employee_bpc_id}})
                </option>
                @endforeach
                @endif
              </select>
            </div>
          </div>

            <div class="form-group row">
              <label class="col-sm-3 col-form-label" for="posting_title">Posting Title <code>*</code></label>
              <div class="col-sm-9">
                <select name="posting_title" id="posting_title" class="form-control">
                  <option>Select Designation</option>
                  @foreach($designations as $designation)
                  <option {{($designation->desg_id == getValue('posting_title',$objData))? 'selected':''}}
                    value="{{$designation->desg_id}}">{{ $designation->desg_title }}</option>
                  @endforeach
                </select>
                <small class="text-muted" id="present_designation"></small>
              </div>
            </div>

            

          <div class="form-group row" style="margin-bottom: .5rem;">
            <label class="col-sm-3 col-form-label">Department
              <code>*</code></label><br><br>

            <div class="col-sm-8 pt-2">
              <div class="row">
                <div class="form-check col-sm-3 pl-4">
                  <input class="form-check-input" onclick="get_unit_section(this.value)" type="radio" name="working_place" value="head_office" {{ (getValue('working_place',$objData) == 'head_office') ? 'checked':'' }} id="radio_head_office">
                  <label class="form-check-label" for="flexCheckDefault">
                    Head Office
                  </label>
                </div>

                <div class="form-check col-sm-3">
                  <input class="form-check-input" onclick="get_unit_section(this.value)" type="radio" name="working_place" value="commercial_unit" {{ (getValue('working_place',$objData) == 'commercial_unit') ? 'checked':'' }} id="radio_commercial_unit">
                  <label class="form-check-label" for="flexCheckChecked">
                    Commercial Unit
                  </label>
                </div>
              </div>
            </div>
            
          </div>

          <div id="head_office_section">
            <div class="form-group row">
              <label for="posting_section" class="col-sm-3 col-form-label">Section <code>*</code>
              </label>
              <div class="col-sm-9">
                <select name="posting_section" id="posting_section" class="form-control">
                  <option value="">Select Section</option>
                  @foreach($departments as $department)
                  <option value="{{ $department->dpt_id }}" {{ (getValue('posting_section', $objData) == $department->dpt_id) ? 'selected': '' }}>{{ $department->dpt_title }}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>

          <div id="commercial_unit" style="display: none;">
            <div class="form-group row">
              <label for="posting_unit" class="col-sm-3 col-form-label">Unit <code>*</code>
              </label>
              <div class="col-sm-9">
                <select name="posting_unit" id="posting_unit" class="form-control">
                  <option value="">Select Unit</option>
                  @foreach($units as $unit)
                  <option value="{{ $unit->unit_id }}" {{ (getValue('posting_unit', $objData) == $unit->unit_id) ? 'selected': '' }}>{{ $unit->unit_title }}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="location" class="col-sm-3 col-form-label">Grade <code>*</code></label>
            <div class="col-sm-9">
              <select name="posting_pay_scale" id="posting_pay_scale" class="form-control">
                <option value="">Select Grade</option>
                @if (!empty($payscaleGrades))
                @foreach($payscaleGrades as $payscaleGrade)
                <option {{($payscaleGrade->payscale_grad_no == getValue('posting_pay_scale',$objData))? 'selected':''}}
                  value="{{$payscaleGrade->payscale_grad_no}}">Grade-{{$payscaleGrade->payscale_grad_no}}</option>
                @endforeach
                @endif
              </select>
              <small class="text-muted" id="present_grade"></small>
            </div>
          </div>

          <div class="row">
            <div class="col-md-7">
              <div class="row">
                <label class="col-sm-5 col-form-label">Posting Date From <code>*</code></label>
                <input onchange="enable_to_date()" class="col-sm-6 form-control ml-3 mb-2" name="posting_from"
                  value="{{ getValue('posting_from', $objData) }}" type="text" autocomplete="off" placeholder="YY-MM-DD" id="posting_from">
              </div>
            </div>
            <div class="col-md-5">
              <div class="row pr-1">
                <label class="col-sm-3 col-form-label" for="posting_to">To</label>
                <input onchange="check_date()" class="col-sm-9 form-control" name="posting_to"
                  value="{{ getValue('posting_to', $objData) }}" type="text" autocomplete="off" placeholder="YY-MM-DD" id="posting_to" readonly>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-7">
              <div class="row">
              <div class="col-sm-5">
              <label class="col-form-label" for="is_abroad">Is Abroad ?</label></div>                
                <div class="col-sm-4 pl-3">
                  <input onclick="add_country_field()" name="is_abroad" style="width: 25px; height: 25px;"
                  type="checkbox" {{ ( getValue('is_abroad', $objData) == 1)? 'checked':'' }} value="1"
                  id="isAbroadCheck" class="form-control">
                </div>               
              </div>
            </div>
            <div class="col-md-5" id="addCountry">
              <div class="row">
              <label class="col-sm-3 col-form-label">Country</label>
              <select name="country_id" class="col-sm-9 form-control">
                <option value="">Select Country</option>
                @if (!empty($countries))
                @foreach($countries as $country)
                <option {{($country->id == getValue('country_id',$objData))? 'selected':''}}
                  value="{{$country->id}}">{{$country->nicename}}</option>
                @endforeach
                @endif
              </select>
              </div>
            </div>
            <div class="col-md-5" id="addDistrict">
              <div class="row">
                <label class="col-sm-3 col-form-label">Location/District</label>
                <select name="district_id" id="location" class="col-sm-9 form-control">
                  <option value="">Select District</option>
                  @if (!empty($districts))
                  @foreach($districts as $district)
                  <option {{($district->district_id == getValue('district_id',$objData))? 'selected':''}}
                    value="{{$district->district_id}}">{{$district->district_name}}</option>
                  @endforeach
                  @endif
                </select>
              </div>
            </div>
          </div>

      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <div class="offset-md-2 col-sm-9">
        @if(empty(getValue($tableID, $objData)))
        <button type="submit" class="btn btn-primary">Save</button>&nbsp;&nbsp;
        @else 
        <button type="submit" class="btn btn-primary">Update</button>&nbsp;&nbsp;
        @endif 
        <a href="{{url($bUrl)}}" class="btn btn-warning">Cancel</a>
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

    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
    theme: 'bootstrap4'
    })

  })

  function get_current_data(employee_id) {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      type: "post",
      url: '{{url("hrms/posting/current-grade")}}',
      data: {
        employee_id: employee_id,
      },
      success: function(data) {
        if(data.working_place == 'commercial_unit') {
          $("#radio_commercial_unit").prop("checked", true);
          $("#commercial_unit").show();
          $("#head_office_section").hide();
          $('#posting_unit option[value="'+data.employee_unit+'"]').attr('selected','selected');
          localStorage.setItem("unit", data.employee_unit);
        } else if(data.working_place == 'head_office') {
          $("#radio_head_office").prop("checked", true);
          $("#head_office_section").show();
          $("#commercial_unit").hide();
          $('#posting_section option[value="'+data.employee_department+'"]').attr('selected','selected');
          localStorage.setItem("unit", data.employee_department);
        }
        $('#posting_pay_scale option[value="'+data.employee_payscale_grade+'"]').attr('selected','selected');
        $('#posting_title option[value="'+data.employee_designation+'"]').attr('selected','selected');
        $('#present_designation').html('Current Designation: ' + data.desg_title);
        $('#present_grade').html('Current Grade: ' + data.employee_payscale_grade);
      }
    });
  }

  @if(getValue('is_abroad', $objData) == 1)
    $("#addCountry").show();
    $("#addDistrict").hide();
  @else
    $("#addCountry").hide();
    $("#addDistrict").show();
  @endif
  var i = 0;

  function add_country_field() {
    @if(getValue('is_abroad', $objData) == 1)
      if(i%2 != 0){
        $("#addCountry").show();
        $("#addDistrict").hide();
      } else {
        $("#addCountry").hide();
        $("#addDistrict").show();
      }
    @else 
    if(i%2 == 0){
      $("#addCountry").show();
      $("#addDistrict").hide();
    } else {
      $("#addCountry").hide();
      $("#addDistrict").show();
    }
    @endif
    
    i++;
    
  }

  $('#posting_from').datepicker({

    format: "yyyy-mm-dd",
    autoclose: true,
    orientation: "bottom",
    endDate: "today"

  });

  function enable_to_date(){

    $("#posting_to").prop( "readonly", false);
    
    $('#posting_to').datepicker({
      format: "yyyy-mm-dd",
      autoclose: true,
      orientation: "bottom",
      startDate: $('#posting_from').val(),
      endDate: "today"

    });   

  }

  function check_date() {
    if($("#posting_to").val() <= $('#posting_from').val()) {
      alert("Please insert valid date");
      $("#posting_to").val(" ");
    }
  }

  //// Section or Unit ////
  @if(! empty(getValue('posting_section', $objData)))
    $("#commercial_unit").hide();
    $("#head_office_section").show();
  @elseif(! empty(getValue('posting_unit', $objData)))
    $("#commercial_unit").show();
    $("#head_office_section").hide();
  @endif 

  function get_unit_section(unit_section) {
    if(unit_section == "head_office") {
      // let section = localStorage.setItem("unit", data.employee_department);
      $("#head_office_section").show();
      $("#commercial_unit").hide();
      $("#posting_unit").val('');
      // $('#posting_section option[value="'+section+'"]').attr('selected','selected');
    } else if(unit_section == "commercial_unit") {
      // let unit = localStorage.setItem("unit", data.employee_unit);
      $("#head_office_section").hide();
      $("#commercial_unit").show();
      $("#posting_section").val('');
      // $('#posting_unit option[value="'+unit+'"]').attr('selected','selected');
    }
  }
  //// Section or Unit end ////

</script>
@include('layouts.form_script')
@endpush