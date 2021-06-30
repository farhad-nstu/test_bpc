@push('css')
<!-- new added -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
  <!-- Default box -->
  <div class="row">
    <div class="col-4">
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Salary Structure</p>

          <form action="{{url('hrms/salary-structure/store')}}" method="post">
            @csrf
            {!! validation_errors($errors) !!}

            <div class="input-group mb-3">
              <label for="employee_id" class="col-sm-12 col-form-label">Employee <code>*</code></label>
              <select id="employee_id" name="employee_id" class="form-control" style="border-right: 1px solid gray;">
                <option value="">Select Employee</option>
                @foreach($employees as $employee)
                <option value="{{$employee->employee_bpc_id}}">
                  {{$employee->employee_name}}({{ $employee->employee_bpc_id }})</option>
                @endforeach
              </select>
            </div>

            <div id="checkChild">
              <div class="text-center pb-2"><button type="button" class="btn btn-sm btn-info" id="addMoreRule">Add
                  More</button></div>
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
                    <tr id="ruleRow">

                      <td class="text-center">
                        <select name="rule_id[]" onchange="get_rules_detail(this.value)" id="rule_id"
                          class="form-control">
                          <option value="">Select Rule</option>
                          @foreach($rules as $rule)
                          <option value="{{ $rule->rules_id }}">{{ $rule->rules_name }}</option>
                          @endforeach
                        </select>
                      </td>

                      <td width="30%">
                        <input name="code[]" id="code0" class="form-control">
                      </td>
                      <td class="text-center">
                        <input name="amount[]" id="amount0" class="form-control">
                      </td>
                      <td>

                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="input-group mb-3">
              <label for="structure_frequency" class="col-sm-12 col-form-label">Structure Frequency</label>
              <select id="structure_frequency" name="structure_frequency" class="form-control"
                style="border-right: 1px solid gray;">
                <option value="">Select Frequency</option>
                <option value="Monthly">Monthly</option>
                <option value="Half_Yearly">Half Yearly</option>
                <option value="Yearly">Yearly</option>
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
                <th>Rule</th>
                <th style="width: 40px">Action</th>
              </tr>
            </thead>
            <tbody>
              @if (!empty($allData))
              @foreach($allData as $key=>$data)
              <tr>
                <td>{{++$key}}</td>
                <td>
                  @foreach($employees as $employee)
                  @if($employee->employee_bpc_id == $data->employee_id)
                  {{$employee->employee_name}}
                  @endif
                  @endforeach
                </td>
                <td>{{$data->employee_id}}</td>
                <td>
                  @foreach($rules as $rule)
                  @if($rule->rules_id == $data->rule_id)
                  {{$rule->rules_name}}
                  @endif
                  @endforeach
                </td>


                <td class="text-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-outline-info">
                      <a data-toggle="modal" data-target="#windowmodal"
                        href="{{url($bUrl.'/'.$data->structure_id.'/view')}}"><i class="fa fa-table"></i> </a>
                    </button>

                    <button type="button" class="btn btn-outline-info dropdown-toggle dropdown-hover dropdown-icon"
                      data-toggle="dropdown">
                    </button>
                    <div class="dropdown-menu" role="menu" style="">
                      <a class="dropdown-item" data-toggle="modal" data-target="#windowmodal"
                        href="{{url($bUrl.'/'.$data->structure_id.'/edit')}}"><i class="fa fa-edit"></i> Edit</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" id="action" data-toggle="modal" data-target="#windowmodal"
                        href="{{url($bUrl.'/delete/'.$data->structure_id)}}"><i class="fa fa-trash"></i> Delete</a>
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

var j = 0;
$(document).ready(function() {
  $('#addMoreRule').on('click', function() {
    j++;
    console.log(j);
    var i = $("#ruleTable #ruleTbody input").length + 1;
    console.log(i);
    var extChild =
      "<tr id='ruleRow'><td class='text-center'><select name='rule_id[]' onchange='get_rules_detail(this.value)' id='rule_id' class='form-control'><option>Select Rule</option>@foreach($rules as $rule)<option value='{{ $rule->rules_id }}'>{{ $rule->rules_name }}</option>@endforeach</select></td><td width='30%'><input name='code[]' id='code" +
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
</script>

@endpush