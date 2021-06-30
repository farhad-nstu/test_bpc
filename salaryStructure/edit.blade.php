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

  <div class="row">
    <div class="col-12 form-header">
      <div class="row">
        <div class="col-md-6">
          <h3> {!! $page_icon !!} &nbsp; {{$title}}</h3>
        </div>

        <div class="col-md-6 text-right">
          <button type="button" class="btn btn-tool">
            <a href="{{url($bUrl)}}" class="btn btn-info btn-sm"><i class="mdi mdi-plus"></i> <i
                class="fa fa-arrow-left"></i> Back</a>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="card">

    <div class="card-body">

      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <form method="post" action="{{url($bUrl.'/update')}}">
            @csrf
            {!! validation_errors($errors) !!}

            <input type="hidden" value="{{ getValue($tableID, $objData) }}" id="id" name="{{ $tableID }}">

            <div class="form-group row">
              <label for="employee" class="col-sm-3 col-form-label">Employee <code>*</code></label>
              <div class="col-sm-9">
                <select name="employee_id" id="employee_id" class="form-control">
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

            <div id="checkChild">
              <div class="row pb-1">
                <div class="col">
                  <label for="employee" class="">Salary Rules <code>*</code></label>
                </div>
                <div class="col">
                  <button type="button" class="btn btn-sm btn-info" id="addMoreRule">Add
                  More</button>
                </div>
              </div>
              <div class="row">
                <table class="table" id="ruleTable">
                  <thead>
                    <tr>
                      <th scope="col" class="text-center">Rule</th>
                      <th scope="col" class="text-center">Code</th>
                      <th scope="col" class="text-center">Amount</th>
                      <th scope="col" class="text-center">Action</th>
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
                      <td class="text-center">
                        <select name="rule_id[]" onchange="get_rules_detail(this.value)" id="rule_id"
                          class="form-control">
                          @foreach($additionRules as $rule)
                          <option {{($structureData['rule_id'][$i] == $rule->rules_id)? 'selected':''}} value="{{ $rule->rules_id }}">{{ $rule->rules_name }}</option>
                          @endforeach
                        </select>
                      </td>

                      <td width="30%">
                        <input value="{{ $structureData['code'][$i] }}" name="code[]" id="code0" class="form-control">
                      </td>
                      <td class="text-center">
                        <input value="{{ $structureData['amount'][$i] }}" name="amount[]" id="amount0" class="form-control">
                      </td>
                      <td>
                        @if($i != 0)
                        <button id='removeRuleRow' type='button' class='removeRuleRow btn btn-sm btn-info'><i class='fa fa-minus-circle'></i></button>
                        @endif
                      </td>
                    </tr>
                  @endfor
                  @else
                  <tr id="ruleRow">
                      <td class="text-center">
                        <select name="rule_id[]" onchange="get_rules_detail(this.value)" id="rule_id"
                          class="form-control">
                          @foreach($additionRules as $rule)
                          <option {{($structureData['rule_id'] == $rule->rules_id)? 'selected':''}} value="{{ $rule->rules_id }}">{{ $rule->rules_name }}</option>
                          @endforeach
                        </select>
                      </td>

                      <td width="30%">
                        <input value="{{ $structureData['code'] }}" name="code[]" id="code0" class="form-control">
                      </td>
                      <td class="text-center">
                        <input value="{{ $structureData['amount'] }}" name="amount[]" id="amount0" class="form-control">
                      </td>
                      <td>

                      </td>
                    </tr>
                  @endif

                  </tbody>
                </table>
              </div>
            </div>

            <div id="checkDeduction">
              <div class="row pb-1">
                <div class="col">
                  <label class="">Deduction <code>*</code></label>
                </div>
                <div class="col">
                  <button type="button" class="btn btn-sm btn-info" id="addMoreDeductionRule">Add
                  More</button>
                </div>
              </div>
              <div class="row">
                <table class="table" id="deductionRuleTable">
                  <thead>
                    <tr>
                      <th scope="col" class="text-center">Rule</th>
                      <th scope="col" class="text-center">Code</th>
                      <th scope="col" class="text-center">Amount</th>
                      <th scope="col" class="text-center">Action</th>
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
                      <td class="text-center">
                        <select name="deductionRule_id[]" onchange="get_deduc_rules_detail(this.value)" id="deductionRule_id"
                          class="form-control">
                          @foreach($deductionRules as $rule)
                          <option {{($structureDeducData['deductionRule_id'][$i] == $rule->rules_id)? 'selected':''}} value="{{ $rule->rules_id }}">{{ $rule->rules_name }}</option>
                          @endforeach
                        </select>
                      </td>

                      <td width="30%">
                        <input value="{{ $structureDeducData['deductionCode'][$i] }}" name="deductionCode[]" id="deductionCode0" class="form-control">
                      </td>
                      <td class="text-center">
                        <input value="{{ $structureDeducData['deductionAmount'][$i] }}" name="deductionAmount[]" id="deductionAmount0" class="form-control">
                      </td>
                      <td>
                        @if($i != 0)
                        <button id='removedeductionRuleRow' type='button' class='btn btn-sm btn-info'><i class='fa fa-minus-circle'></i></button>
                        @endif
                      </td>
                    </tr>
                  @endfor
                  @else
                  <tr id="deductionRuleRow">
                      <td class="text-center">
                        <select name="deductionRule_id[]" onchange="get_deduc_rules_detail(this.value)" id="deductionRule_id"
                          class="form-control">
                          @foreach($additionRules as $rule)
                          <option {{($structureDeducData['deductionRule_id'] == $rule->rules_id)? 'selected':''}} value="{{ $rule->rules_id }}">{{ $rule->rules_name }}</option>
                          @endforeach
                        </select>
                      </td>

                      <td width="30%">
                        <input value="{{ $structureDeducData['deductionCode'] }}" name="deductionCode[]" id="deductionCode0" class="form-control">
                      </td>
                      <td class="text-center">
                        <input value="{{ $structureDeducData['deductionAmount'] }}" name="deductionAmount[]" id="deductionAmount0" class="form-control">
                      </td>
                      <td>

                      </td>
                    </tr>
                  @endif

                  </tbody>
                </table>
              </div>
            </div>

            <div class="input-group mb-3">
              <label for="structure_frequency" class="col-sm-12 col-form-label">Structure Frequency</label>
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

            <div class="text-center">
              <button type="submit" class="btn btn-sm btn-lg btn-primary">Update</button>
            </div>

          </form>
        </div>
        <div class="col-md-3"></div>
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
var j = 0;
$(document).ready(function() {
  $('#addMoreRule').on('click', function() {
    j++;
    console.log(j);
    var i = $("#ruleTable #ruleTbody input").length + 1;
    console.log(i);
    var extChild =
      "<tr id='ruleRow'><td class='text-center'><select name='rule_id[]' onchange='get_rules_detail(this.value)' id='rule_id' class='form-control'><option>Select Rule</option>@foreach($additionRules as $rule)<option value='{{ $rule->rules_id }}'>{{ $rule->rules_name }}</option>@endforeach</select></td><td width='30%'><input name='code[]' id='code" +
      j + "' class='form-control'></td><td class='text-center'><input name='amount[]' id='amount" + j +
      "' class='form-control'></td><td><button id='removeRuleRow' type='button' class='removeRuleRow btn btn-sm btn-info'><i class='fa fa-minus-circle'></i></button></td></tr>";
    $("#ruleTable #ruleTbody").append(extChild);
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
    },
    success: function(data) {
      console.log(data.rules_code);
      $("#code" + j).val(data.rules_code);
      $("#amount" + j).val(data.rules_amount);
      // $('#basicSalary').empty().html(data);
    }
  });
}

//// Deduction ////
var k = 0;
$(document).ready(function() {
  $('#addMoreDeductionRule').on('click', function() {
    k++;
    var i = $("#deductionRuleTable #deductionRuleTbody input").length + 1;
    var extChild =
      "<tr id='deductionRuleRow'><td class='text-center'><select name='deductionRule_id[]' onchange='get_deduc_rules_detail(this.value)' id='deductionRule_id' class='form-control'><option>Select Rule</option>@foreach($deductionRules as $rule)<option value='{{ $rule->rules_id }}'>{{ $rule->rules_name }}</option>@endforeach</select></td><td width='30%'><input name='deductionCode[]' id='deductionCode" +
      k + "' class='form-control'></td><td class='text-center'><input name='deductionAmount[]' id='deductionAmount" + k +
      "' class='form-control'></td><td><button id='removedeductionRuleRow' type='button' class='btn btn-sm btn-info'><i class='fa fa-minus-circle'></i></button></td></tr>";
    $("#deductionRuleTable #deductionRuleTbody").append(extChild);
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
    },
    success: function(data) {
      $("#deductionCode" + k).val(data.rules_code);
      $("#deductionAmount" + k).val(data.rules_amount);
    }
  });
}

//// Deduction End ////

$(function() {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
@include('layouts.form_script')
@endpush