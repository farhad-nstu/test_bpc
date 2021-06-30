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

    <div class="card-body">

      <div class="row">

        <div class="col-md-12">
          <form method="post" action="{{url($bUrl.'/store')}}" enctype="multipart/form-data">
            @csrf
            {!! validation_errors($errors) !!}

            <div class="form-group row">
              <label for="employee" class="col-sm-3 col-form-label">Employee <code>*</code></label>
              <div class="col-sm-9">
                <select name="employee_id" onchange="get_current_salary(this.value)" id="employee_id" class="form-control select2">
                  <option value="">Select Employee</option>
                  @foreach($employees as $employee)
                  <option value="{{$employee->employee_bpc_id}}">
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
                  <option value="{{$category->category_id}}">
                    {{$category->category_name}}
                  </option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="current_salary" class="col-sm-3 col-form-label">Current Basic </label>
              <div class="col-sm-9">
                <input name="current_salary" id="current_salary" class="form-control">
              </div>
            </div>

            <div class="form-group row">
              <label for="active_salary" class="col-sm-3 col-form-label">Active Basic </label>
              <div class="col-sm-9">
                <input name="active_salary" id="active_salary" class="form-control">
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
                    <th class="text-center">Condition</th>
                    <th class="text-center">Percentage</th>
                    <th class="text-center">Amount</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody id="ruleTbody">
                  <tr id="ruleRow">

                    <td>
                      <select name="rule_id[]" onchange="get_rules_detail(this.value)" id="rule_id"
                        class="form-control text-center">
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
                      <input name="condition[]" id="condition0" class="form-control text-center">
                    </td>

                    <td>
                      <input name="percentage[]" id="percentage0" class="form-control text-center">
                    </td>

                    <td>
                      <input name="amount[]" id="amount0" class="form-control text-center">
                    </td>

                    <td>

                    </td>
                  </tr>
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
                    <th class="text-center">Condition</th>
                    <th class="text-center">Percentage</th>
                    <th class="text-center">Amount</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody id="deductionRuleTbody">
                  <tr id="deductionRuleRow">

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
                      <input name="deductionCondition[]" id="deductionCondition0" class="form-control text-center">
                    </td>

                    <td>
                      <input name="deductionPercentage[]" id="deductionPercentage0" class="form-control text-center">
                    </td>

                    <td>
                      <input name="deductionAmount[]" id="deductionAmount0" class="form-control text-center">
                    </td>
                    <td>

                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="form-group row">
              <label for="partial_day" class="col-sm-3 col-form-label">Count Day </label>
              <div class="col-sm-9">
                <input name="partial_day" id="partial_day" class="form-control">
              </div>
            </div>            

            <div class="form-group row">
              <label for="salary_status" class="col-sm-3 col-form-label">Salary Status </label>
              <div class="col-sm-9">
                <select name="salary_status" id="salary_status" class="form-control">
                  <option value="">Select Status</option>
                  <option value="Active">Active</option>
                  <option value="Inactive">Inactive</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="structure_frequency" class="col-sm-3 col-form-label">Structure Frequency</label>
              <div class="col-sm-9">
                <select id="structure_frequency" name="structure_frequency" class="form-control"
                  style="border-right: 1px solid gray;">
                  <option value="">Select Frequency</option>
                  <option value="Monthly">Monthly</option>
                  <option value="Half_Yearly">Half Yearly</option>
                  <option value="Yearly">Yearly</option>
                </select>
              </div>
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>

</section>
<!-- /.content -->
@endsection

@push('plugin')
<script src="{{url('backend/plugins/tinymce/tinymce.min.js')}}"></script>
@endpush

@push('js')
<script>


//// Addition ////
var j = 0;
$(document).ready(function() {
  $('#addMoreRule').on('click', function() {

    var vl = $('#code'+j).val(); 

    if(vl == 0) {
      alert("First insert the value");
    } else {
      j++;
      var extChild =
        "<tr id='ruleRow'><td><select name='rule_id[]' onchange='get_rules_detail(this.value)' id='rule_id' class='form-control text-center'><option>Select Rule</option>@foreach($additionRules as $rule)<option value='{{ $rule->rules_id }}'>{{ $rule->rules_name }}</option>@endforeach</select></td><td><input name='code[]' id='code" +
        j + "' class='form-control text-center'></td><td><input name='condition[]' id='condition" +
        j + "' class='form-control text-center'></td><td><input name='percentage[]' id='percentage" +
        j + "' class='form-control text-center'></td><td><input name='amount[]' id='amount" + j +
        "' class='form-control text-center'></td><td><button id='removeRuleRow' type='button' class='removeRuleRow btn btn-sm btn-danger'><i class='fa fa-minus-circle'></i></button></td></tr>";
      $("#ruleTable #ruleTbody").append(extChild);
    }
    
  });
});

$(document).on('click', '#removeRuleRow', function() {
  $(this).closest('#ruleRow').remove();
});

function get_rules_detail(ruleId) {
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
      console.log(data);
      $("#code" + j).val(data.code);
      $("#condition" + j).val(data.condition);
      $("#percentage" + j).val(data.percentage);
      $("#amount" + j).val(data.amount);
    }
  });
}
//// Addition End ////

//// Deduction ////
var k = 0;
$(document).ready(function() {
  $('#addMoreDeductionRule').on('click', function() {

    var dval = $('#deductionCode'+k).val(); 

    if(dval == 0) {
      alert("First insert the value");
    } else {
      k++;
      var extChild =
        "<tr id='deductionRuleRow'><td><select name='deductionRule_id[]' onchange='get_deduc_rules_detail(this.value)' id='deductionRule_id' class='form-control text-center'><option>Select Rule</option>@foreach($deductionRules as $rule)<option value='{{ $rule->rules_id }}'>{{ $rule->rules_name }}</option>@endforeach</select></td><td><input name='deductionCode[]' id='deductionCode" +
        k + "' class='form-control text-center'></td><td><input name='deductionCondition[]' id='deductionCondition" +
        k + "' class='form-control text-center'></td><td><input name='deductionPercentage[]' id='deductionPercentage" +
        k + "' class='form-control text-center'></td><td><input name='deductionAmount[]' id='deductionAmount" + k +
        "' class='form-control text-center'></td><td><button id='removedeductionRuleRow' type='button' class='removedeductionRuleRow btn btn-sm btn-danger'><i class='fa fa-minus-circle'></i></button></td></tr>";
      $("#deductionRuleTable #deductionRuleTbody").append(extChild);
    }
    
  });
});

$(document).on('click', '#removedeductionRuleRow', function() {
  $(this).closest('#deductionRuleRow').remove();
});

function get_deduc_rules_detail(deducRuleId) {
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
      $("#deductionCode" + k).val(data.code);
      $("#deductionCondition" + k).val(data.condition); 
      $("#deductionPercentage" + k).val(data.percentage);
      $("#deductionAmount" + k).val(data.amount);
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