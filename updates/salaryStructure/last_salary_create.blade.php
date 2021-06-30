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

        <button type="button" class="btn btn-tool">
            <a href="{{url($bUrl)}}" class="btn btn-info btn-sm"><i class="mdi mdi-plus"></i> <i
                class="fa fa-arrow-left"></i> Back</a>
          </button>
      </div>
    </div>

    <form method="post" action="{{url($bUrl.'/update')}}">
      @csrf

      <div class="card-body">
        <div class="col-md-11">
            
          {!! validation_errors($errors) !!}

          <input type="hidden" value="{{ getValue($tableID, $objData) }}" id="id" name="{{ $tableID }}">

          <div class="form-group row">
            <label for="employee" class="col-sm-3 col-form-label">Employee <code>*</code></label>
            <div class="col-sm-9">
              <select name="employee_id" onchange="get_current_salary(this.value)" id="employee_id" class="form-control select2">
                <option value="">Select Employee</option>
                @if (!empty($employees))
                @foreach($employees as $employee)
                <option {{($employee->employee_bpc_id == getValue('employee_id',$objData))? 'selected':''}}
                  value="{{$employee->employee_bpc_id}}">{{$employee->employee_name}}(ID-{{$employee->employee_bpc_id}})
                </option>
                @endforeach
                @endif
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="employee" class="col-sm-3 col-form-label">Category <code>*</code></label>
            <div class="col-sm-9">
              <select name="category" id="category" class="form-control">
                <option value="">Select Category</option>
                @foreach($categories as $category)
                <option {{($category->category_id == getValue('category',$objData))? 'selected':''}} value="{{$category->category_id}}">
                  {{$category->category_name}}
                </option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="current_salary" class="col-sm-3 col-form-label">Current Basic </label>
            <div class="col-sm-3">
              <input name="current_salary" id="current_salary" class="form-control" value="{{ getValue('current_salary',$objData) }}" readonly>
            </div>
            <label for="active_salary" class="col-sm-2 col-form-label">Active Basic </label>
            <div class="col-sm-4">
              <input name="active_salary" id="active_salary" class="form-control" value="{{ getValue('active_salary',$objData) }}">
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

              @php
              $structureJsonData = getValue('structure_addition', $objData);
              $structureObjectData = json_decode($structureJsonData);
              $structureData = (array) $structureObjectData;
              @endphp
              
              @if(is_array($structureData['rule_id']))                  
              @for($i = 0; $i < count($structureData['rule_id']); $i++) 
                <tr id="ruleRow">
                  <td>
                    <select name="rule_id[]" onchange="get_rules_detail(this.value, `{{ $i }}`)" id="rule_id"
                      class="form-control text-center">
                      @foreach($additionRules as $rule)
                      <option {{($structureData['rule_id'][$i] == $rule->rules_id)? 'selected':''}} value="{{ $rule->rules_id }}">{{ $rule->rules_name }}</option>
                      @endforeach
                    </select>
                  </td>

                  <td>
                    <input value="{{ $structureData['code'][$i] }}" name="code[]" id="code{{ $i }}" class="form-control text-center">
                  </td>

                  <td>
                    <input value="{{ $structureData['amount'][$i] }}" name="amount[]" id="amount{{ $i }}" class="form-control text-center">
                  </td>
                  <td>
                    @if($i != 0)
                    <button id='removeRuleRow' type='button' class='removeRuleRow btn btn-sm btn-danger'><i class='fa fa-minus-circle'></i></button>
                    @endif
                  </td>
                </tr>
              @endfor
              @else
              <tr id="ruleRow">
                  <td>
                    <select name="rule_id[]" onchange="get_rules_detail(this.value)" id="rule_id"
                      class="form-control text-center">
                      @foreach($additionRules as $rule)
                      <option {{($structureData['rule_id'] == $rule->rules_id)? 'selected':''}} value="{{ $rule->rules_id }}">{{ $rule->rules_name }}</option>
                      @endforeach
                    </select>
                  </td>

                  <td>
                    <input value="{{ $structureData['code'] }}" name="code[]" id="code0" class="form-control text-center">
                  </td>

                  <td>
                    <input value="{{ $structureData['amount'] }}" name="amount[]" id="amount0" class="form-control text-center">
                  </td>
                  <td>

                  </td>
                </tr>
              @endif

              </tbody>
            </table>
          </div>

          <div class="form-group row pb-1"  style="padding-left: 10px;">
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

              @php
              $structureDeducJsonData = getValue('structure_deduction', $objData);
              $structureDeducObjectData = json_decode($structureDeducJsonData);
              $structureDeducData = (array) $structureDeducObjectData;
              @endphp
              
              @if(is_array($structureDeducData['deductionRule_id']))                  
              @for($i = 0; $i < count($structureDeducData['deductionRule_id']); $i++) 
                <tr id="deductionRuleRow">
                  <td>
                    <select name="deductionRule_id[]" onchange="get_deduc_rules_detail(this.value, `{{ $i }}`)" id="deductionRule_id"
                      class="form-control text-center">
                      @foreach($deductionRules as $rule)
                      <option {{($structureDeducData['deductionRule_id'][$i] == $rule->rules_id)? 'selected':''}} value="{{ $rule->rules_id }}">{{ $rule->rules_name }}</option>
                      @endforeach
                    </select>
                  </td>

                  <td>
                    <input value="{{ $structureDeducData['deductionCode'][$i] }}" name="deductionCode[]" id="deductionCode{{ $i }}" class="form-control text-center">
                  </td>

                  <td>
                    <input value="{{ $structureDeducData['deductionAmount'][$i] }}" name="deductionAmount[]" id="deductionAmount{{ $i }}" class="form-control text-center">
                  </td>

                  <td>
                    @if($i != 0)
                    <button id='removedeductionRuleRow' type='button' class='btn btn-sm btn-danger'><i class='fa fa-minus-circle'></i></button>
                    @endif
                  </td>
                </tr>
              @endfor
              @else
              <tr id="deductionRuleRow">
                  <td>
                    <select name="deductionRule_id[]" onchange="get_deduc_rules_detail(this.value)" id="deductionRule_id"
                      class="form-control text-center">
                      @foreach($additionRules as $rule)
                      <option {{($structureDeducData['deductionRule_id'] == $rule->rules_id)? 'selected':''}} value="{{ $rule->rules_id }}">{{ $rule->rules_name }}</option>
                      @endforeach
                    </select>
                  </td>

                  <td>
                    <input value="{{ $structureDeducData['deductionCode'] }}" name="deductionCode[]" id="deductionCode0" class="form-control text-center">
                  </td>

                  <td>
                    <input value="{{ $structureDeducData['deductionAmount'] }}" name="deductionAmount[]" id="deductionAmount0" class="form-control text-center">
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
                @for($i = 1; $i <= 30; $i++)
                  <option {{ (getValue('partial_day',$objData) == $i)? 'selected':'' }} value="{{ $i }}">{{ $i }}</option>
                @endfor 
              </select>
            </div>
            <label for="structure_frequency" class="col-sm-2 col-form-label">Structure Frequency</label>
            <div class="col-sm-4">
              <select id="structure_frequency" name="structure_frequency" class="form-control"
                style="border-right: 1px solid gray;">
                <option value="">Select Frequency</option>
                <option {{(getValue('structure_frequency',$objData) == 'Monthly')? 'selected':''}} value="Monthly">
                  Monthly
                </option>
                <option {{(getValue('structure_frequency',$objData) == 'Half_Yearly')? 'selected':''}}
                  value="Half_Yearly">Half Yearly</option>
                <option {{(getValue('structure_frequency',$objData) == 'Yearly')? 'selected':''}} value="Yearly">Yearly
                </option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="salary_status" class="col-sm-3 col-form-label">Salary Status <code>*</code></label>
            <div class="col-sm-9">
              <select name="salary_status" id="salary_status" class="form-control">
                <option {{ (getValue('salary_status',$objData) == 'Active') ? 'selected':'' }} value="Active">Active</option>
                <option {{ (getValue('salary_status',$objData) == 'Inactive') ? 'selected':'' }} value="Inactive">Inactive</option>
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
              <button type="submit" class="btn btn-primary">Update</button>&nbsp;&nbsp;
              <a href="{{url($bUrl)}}" class="btn btn-warning">Cancel</a>
            </div>
          </div>
        </div>
      </div>

    </form>

  </div>
</section>
<!-- /.content -->
@endsection

@push('plugin')
<script src="{{url('backend/plugins/tinymce/tinymce.min.js')}}"></script>
@endpush

@push('js')
<script>
var j = {{ count($structureData['rule_id']) }};
// console.log(j);
$(document).ready(function() {
  $('#addMoreRule').on('click', function() {
    j++;
    var extChild =
      "<tr id='ruleRow'><td><select name='rule_id[]' onchange='get_rules_detail(this.value)' id='rule_id' class='form-control text-center'><option>Select Rule</option>@foreach($additionRules as $rule)<option value='{{ $rule->rules_id }}'>{{ $rule->rules_name }}</option>@endforeach</select></td><td><input name='code[]' id='code" +
      j + "' class='form-control text-center'></td><td><input name='amount[]' id='amount" + j +
      "' class='form-control text-center'></td><td><button id='removeRuleRow' type='button' class='removeRuleRow btn btn-sm btn-danger'><i class='fa fa-minus-circle'></i></button></td></tr>";
    $("#ruleTable #ruleTbody").append(extChild);
  });
});

$(document).on('click', '#removeRuleRow', function() {
  $(this).closest('#ruleRow').remove();
});

var addCount = {{ count($structureData['rule_id']) }};

function get_rules_detail(ruleId, si) {
  // alert("si is "+si+"j is "+j);
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
    },
    success: function(data) {
      if(si < j){
        $("#code" + si).val(data.code);
        $("#amount" + si).val(data.amount);

      } else if(j > addCount)  {
        $("#code" + j).val(data.code);
        $("#amount" + j).val(data.amount);
      }
      
    }
  });
}

//// Deduction ////
var k = {{ count($structureDeducData['deductionRule_id']) }};
$(document).ready(function() {
  $('#addMoreDeductionRule').on('click', function() {
    k++;
    var i = $("#deductionRuleTable #deductionRuleTbody input").length + 1;
    var extChild =
      "<tr id='deductionRuleRow'><td><select name='deductionRule_id[]' onchange='get_deduc_rules_detail(this.value)' id='deductionRule_id' class='form-control text-center'><option>Select Rule</option>@foreach($deductionRules as $rule)<option value='{{ $rule->rules_id }}'>{{ $rule->rules_name }}</option>@endforeach</select></td><td><input name='deductionCode[]' id='deductionCode" +
      k + "' class='form-control text-center'></td><td><input name='deductionAmount[]' id='deductionAmount" + k +
      "' class='form-control text-center'></td><td><button id='removedeductionRuleRow' type='button' class='btn btn-sm btn-danger'><i class='fa fa-minus-circle'></i></button></td></tr>";
    $("#deductionRuleTable #deductionRuleTbody").append(extChild);
  });
});

$(document).on('click', '#removedeductionRuleRow', function() {
  $(this).closest('#deductionRuleRow').remove();
});


var deducCount = {{ count($structureDeducData['deductionRule_id']) }};

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
      } else if(k > deducCount) {
        $("#deductionCode" + k).val(data.code);
        $("#deductionAmount" + k).val(data.amount);
      }
      
    }
  });
}

//// Deduction End ////

//// Get Grade Wise Salary ////
function get_current_salary(employee_id) {
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
      $("#current_salary").val(data.employee_basic_salary)
      // console.log(data.employee_basic_salary);
      // $("#scaleSalary").html("Salaryscale ("+data.max+"-"+data.min+")");
    }
  });
}

$(function() {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
@include('layouts.form_script')
@endpush