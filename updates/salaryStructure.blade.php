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

    <form method="post" action="{{url($bUrl.'/store')}}" enctype="multipart/form-data">
      @csrf

      <div class="card-body">
        <div class="col-md-11">
          
          {!! validation_errors($errors) !!}

          <div class="form-group row">
            <label for="employee" class="col-sm-3 col-form-label">Employee <code>*</code></label>
            <div class="col-sm-9">
              <select name="employee_id" onchange="get_current_salary(this.value)" id="employee_id" class="form-control select2">
                <option value="">Select Employee</option>
                @foreach($employees as $employee)
                <option {{ (old('employee_id') == $employee->employee_bpc_id) ? 'selected': '' }} value="{{$employee->employee_bpc_id}}">
                  {{$employee->employee_name}}({{$employee->employee_bpc_id}})
                </option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="employee" class="col-sm-3 col-form-label">Category <code>*</code></label>
            <div class="col-sm-9">
              <select name="category" id="category" class="form-control">
                <option value="">Select Category</option>
                @foreach($categories as $category)
                <option {{ (old('category') == $category->category_id)?'selected':'' }} value="{{$category->category_id}}">
                  {{$category->category_name}}
                </option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="current_salary" class="col-sm-3 col-form-label">Current Basic </label>
            <div class="col-sm-3">
              <span class="text-muted text-danger" id="is_current_exists"></span>
              <input name="current_salary" id="current_salary" class="form-control" value="{{ old('current_salary') }}" readonly>
            </div>
            <label for="active_salary" class="col-sm-2 col-form-label">Active Basic </label>
            <div class="col-sm-4">
              <input name="active_salary" id="active_salary" class="form-control" value="{{ old('active_salary') }}">
            </div>
          </div>
          
          <div class="form-group row pb-1"  style="padding-left: 10px;">
              <label for="employee" class="pr-2">Addition</label>
              <button type="button" class="btn btn-sm btn-info" id="addMoreRule">Add
                More</button>
          </div>
          <div class="form-group row pr-2" style="padding-left: 10px;">
            <table class="table table-bordered" id="ruleTable">
              <thead class="border-right border-left">
                <tr>
                  <th class="text-center">Rule</th>
                  <th class="text-center">Code</th>
                  <th class="text-center">Amount</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody id="ruleTbody">

                @if(!empty(old('rule_id')))
                  @for($l = 0; $l < count(old('rule_id')); $l++)
                    <tr id="ruleRow{{ $l }}">

                      <td>
                        <select name="rule_id[]" onchange="get_rules_detail(this.value, `{{ $l }}`)" id="rule_id"
                          class="rule_id form-control text-center">
                          @foreach($additionRules as $rule)
                          <option {{ (old('rule_id')[$l] == $rule->rules_id) ? 'selected': '' }} value="{{ $rule->rules_id }}">{{ $rule->rules_name }}</option>
                          @endforeach
                        </select>
                      </td>

                      <td>
                        <input name="code[]" id="code{{ $l }}" class="form-control text-center" value="{{ old('code')[$l] }}">
                      </td>

                      <td>
                        <input name="amount[]" id="amount{{ $l }}" class="form-control text-center" value="{{ old('amount')[$l] }}">
                      </td>

                      <td>
                        <button id='removeRuleRow' type='button' class='removeRuleRow btn btn-sm btn-danger'><i class='fa fa-minus-circle'></i></button>
                      </td>
                    </tr>
                  @endfor
                @else 
                  <tr id="ruleRow0">
                    <td>
                      <select name="rule_id[]" onchange="get_rules_detail(this.value)" id="rule_id"
                        class="rule_id form-control text-center">
                        <option value="">Select Rule</option>
                        @foreach($additionRules as $rule)
                        <option value="{{ $rule->rules_id }}">{{ $rule->rules_name }}</option>
                        @endforeach
                      </select>
                    </td>

                    <td>
                      <input name="code[]" id="code0" class="form-control text-center">
                    </td>

                    <td>
                      <input name="amount[]" id="amount0" class="form-control text-center">
                    </td>

                    <td>

                    </td>
                  </tr>
                @endif 

              </tbody>
            </table>
          </div>

          <div class="form-group row pb-1" style="padding-left: 10px;">
            <label class="pr-2">Deduction</label>
            <button type="button" class="btn btn-sm btn-info" id="addMoreDeductionRule">Add
              More</button>
          </div>

          <div class="form-group row pr-2" style="padding-left: 10px;">
            <table class="table table-bordered" id="deductionRuleTable">
              <thead class="border-right border-left">
                <tr>
                  <th class="text-center">Rule</th>
                  <th class="text-center">Code</th>
                  <th class="text-center">Amount</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody id="deductionRuleTbody">
                @if(!empty(old('deductionRule_id')))
                  @for($k = 0; $k < count(old('deductionRule_id')); $k++)
                    <tr id="deductionRuleRow0">
                      <td>
                        <select name="deductionRule_id[]" onchange="get_deduc_rules_detail(this.value, `{{ $k }}`)" id="deductionRule_id"
                          class="form-control text-center">
                          @foreach($deductionRules as $rule)
                          <option {{ (old('deductionRule_id')[$k] == $rule->rules_id)?'selected':'' }} value="{{ $rule->rules_id }}">{{ $rule->rules_name }}</option>
                          @endforeach
                        </select>
                      </td>

                      <td>
                        <input name="deductionCode[]" id="deductionCode{{ $k }}" class="form-control text-center" value="{{ old('deductionCode')[$k] }}">
                      </td>

                      <td>
                        <input name="deductionAmount[]" id="deductionAmount{{ $k }}" class="form-control text-center" value="{{ old('deductionAmount')[$k] }}">
                      </td>
                      <td>
                        <button id='removedeductionRuleRow' type='button' class='removedeductionRuleRow btn btn-sm btn-danger'><i class='fa fa-minus-circle'></i></button>
                      </td>
                    </tr>
                  @endfor 
                @else 
                  <tr id="deductionRuleRow0">
                    <td>
                      <select name="deductionRule_id[]" onchange="get_deduc_rules_detail(this.value)" id="deductionRule_id"
                        class="form-control text-center">
                        <option value="">Select Rule</option>
                        @foreach($deductionRules as $rule)
                        <option value="{{ $rule->rules_id }}">{{ $rule->rules_name }}</option>
                        @endforeach
                      </select>
                    </td>

                    <td>
                      <input name="deductionCode[]" id="deductionCode0" class="form-control text-center">
                    </td>

                    <td>
                      <input name="deductionAmount[]" id="deductionAmount0" class="form-control text-center">
                    </td>
                    <td>

                    </td>
                  </tr>
                @endif 
              </tbody>
            </table>
          </div>

          <div class="form-group row">
            <label for="partial_day" class="col-sm-3 col-form-label">Count Day </label>
            <div class="col-sm-3">
              <select id="partial_day" name="partial_day" class="form-control"
                style="border-right: 1px solid gray;">
                <option value="">Select Partial Day</option>
                @for($i = 1; $i <= 31; $i++)
                  <option {{ (old('partial_day') == $i)?'selected':'' }} value="{{ $i }}">{{ $i }}</option>
                @endfor 
              </select>
            </div>
            <label for="structure_frequency" class="col-sm-2 col-form-label">Structure Frequency</label>
            <div class="col-sm-4">
              <select id="structure_frequency" name="structure_frequency" class="form-control"
                style="border-right: 1px solid gray;">
                <option value="">Select Frequency</option>
                <option {{ (old('structure_frequency') == 'Monthly')?'selected':'' }} value="Monthly">Monthly</option>
                <option {{ (old('structure_frequency') == 'Half_Yearly')?'selected':'' }} value="Half_Yearly">Half Yearly</option>
                <option {{ (old('structure_frequency') == 'Yearly')?'selected':'' }} value="Yearly">Yearly</option>
              </select>
            </div>
          </div>            

          <div class="form-group row">
            <label for="salary_status" class="col-sm-3 col-form-label">Salary Status <code>*</code></label>
            <div class="col-sm-9">
              <select name="salary_status" id="salary_status" class="form-control">
                <option value="">Select Status</option>
                <option {{ (old('salary_status') == 'Active')?'selected':'' }} value="Active">Active</option>
                <option {{ (old('salary_status') == 'Inactive')?'selected':'' }} value="Inactive">Inactive</option>
              </select>
            </div>
          </div>

        </div>
      </div>

      <div class="card-footer">
        <div class="col-md-11">
          <div class="form-group row">
            <div class="col-sm-3"></div>
            <div class="col-sm-9">
              <button type="submit" class="btn btn-primary">Save</button>
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
<script>


//// Addition ////
@if(! empty(old('rule_id')))
  var j = {{ count(old('rule_id')) }} - 1;
@else 
  var j = 0;
@endif 
$(document).ready(function() {
  $('#addMoreRule').on('click', function() {
    // alert(j);
    var vl = $('#code'+j).val(); 
    var employee = $("#employee_id").val();

    if(vl == 0 || employee == 0) {
      alert("Select employee or insert the value");
    } else {
      var m = $("#ruleTable #ruleTbody tr").length+1;
      alert(m);
      j++;
      var extChild =
        "<tr id='ruleRow"+j+"'><td><select name='rule_id[]' onchange='get_rules_detail(this.value)' id='rule_id' class='rule_id form-control text-center'><option>Select Rule</option>@foreach($additionRules as $rule)<option value='{{ $rule->rules_id }}'>{{ $rule->rules_name }}</option>@endforeach</select></td><td><input name='code[]' id='code" +
        j + "' class='form-control text-center'></td><td><input name='amount[]' id='amount" + j +
        "' class='form-control text-center'></td><td><button id='removeRuleRow' type='button' class='removeRuleRow btn btn-sm btn-danger'><i class='fa fa-minus-circle'></i></button></td></tr>";
      $("#ruleTable #ruleTbody").append(extChild);
    }
    
  });
});

$(document).on('click', '#removeRuleRow', function() {
  $(this).closest('#ruleRow'+j).remove();
  j--;
});


@if(! empty(old('rule_id')))
  var addCount = {{ count(old('rule_id')) }};
@else 
  var addCount = 0;
@endif

function get_rules_detail(ruleId, si) {
  // alert("si is "+si+" j is "+j);
  // alert("addcount is "+addCount+" j is "+j);
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
    type: "post",
    url: '{{url("hrms/salary-structure/rule-details")}}',
    data: {
      ruleId: ruleId,
      basic_salary: $("#current_salary").val(), 
      employee_id: $("#employee_id").val(),
    },
    success: function(data) {
        if(si < j) {
          alert("si "+si)
          $("#code" + si).val(data.code);
          $("#amount" + si).val(data.amount);
        } else if(j >= addCount) {
          alert("j "+j)
          $("#code" + j).val(data.code);
          $("#amount" + j).val(data.amount);
        }     
    }
  });
}
//// Addition End ////

//// Deduction ////
@if(! empty(old('deductionRule_id')))
  var k = {{ count(old('deductionRule_id')) }} - 1;
@else 
  var k = 0;
@endif 

$(document).ready(function() {
  $('#addMoreDeductionRule').on('click', function() {

    var dval = $('#deductionCode'+k).val(); 

    if(dval == 0) {
      alert("First insert the value");
    } else {
      k++;
      var extChild =
        "<tr id='deductionRuleRow"+k+"'><td><select name='deductionRule_id[]' onchange='get_deduc_rules_detail(this.value)' id='deductionRule_id' class='form-control text-center'><option>Select Rule</option>@foreach($deductionRules as $rule)<option value='{{ $rule->rules_id }}'>{{ $rule->rules_name }}</option>@endforeach</select></td><td><input name='deductionCode[]' id='deductionCode" +
        k + "' class='form-control text-center'></td><td><input name='deductionAmount[]' id='deductionAmount" + k +
        "' class='form-control text-center'></td><td><button id='removedeductionRuleRow' type='button' class='removedeductionRuleRow btn btn-sm btn-danger'><i class='fa fa-minus-circle'></i></button></td></tr>";
      $("#deductionRuleTable #deductionRuleTbody").append(extChild);
    }
    
  });
});

$(document).on('click', '#removedeductionRuleRow', function() {
  $(this).closest('#deductionRuleRow'+k).remove();
  k--;
});

@if(! empty(old('deductionRule_id')))
  var deducCount = {{ count(old('deductionRule_id')) }};
@else 
  var deducCount = 0;
@endif

function get_deduc_rules_detail(deducRuleId, dsi) {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
    type: "post",
    url: '{{url("hrms/salary-structure/deduc-rule-details")}}',
    data: {
      deducRuleId: deducRuleId,
      basic_salary: $("#current_salary").val(),
    },
    success: function(data) {
      if(dsi < k) {
        $("#deductionCode" + dsi).val(data.code);
        $("#deductionAmount" + dsi).val(data.amount);
      } else if(k >= deducCount) {
        $("#deductionCode" + k).val(data.code);
        $("#deductionAmount" + k).val(data.amount);
      }
    }
  });
}

//// Deduction End ////

//// Get Grade Wise Salary ////
function get_current_salary(employee_id) {
  // alert(j);
  // if(j >= 1) {
    for(var i = 0; i <= j; i++) {
      // $(".rule_id").val('');
      // $("#code0").val('');
      // $("#amount0").val('');
      $('#ruleRow'+i).remove();
    }
  // }

  for(var m = 0; m <= k; m++) {
      // $(".rule_id").val('');
      // $("#code0").val('');
      // $("#amount0").val('');
      $('#deductionRuleRow'+m).remove();
    }

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $.ajax({
    type: "post",
    url: '{{url("hrms/salary-structure/current-salary")}}',
    data: {
      employee_id: employee_id,
    },
    success: function(data) {
      if(data.employee_basic_salary == "") {
        $("#is_current_exists").html("Current salary is not found. Please insert cuurent salary first");
        $("#is_current_exists").css("color", "red");
        $("#current_salary").hide();
      }
      $("#current_salary").val(data.employee_basic_salary)
    }
  });
}

$(function() {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
@include('layouts.form_script')
@endpush