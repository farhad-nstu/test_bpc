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

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">

            <div class="row">
              <div class="col-md-9">
                <form method="post" action="{{url($bUrl.'/update')}}">
                  @csrf
                  {!! validation_errors($errors) !!}

                  <input type="hidden" value="{{ getValue($tableID, $objData) }}" id="id" name="{{ $tableID }}">

                  <div class="form-group row">
                    <label for="employee" class="col-sm-3 col-form-label">Employee <loan_code>*</loan_code></label>
                    <div class="col-sm-9">
                      <select name="employee_id" id="employee_id" class="form-control">
                        <option value="">Select Employee</option>
                        @if (!empty($employees))
                        @foreach($employees as $employee)
                        <option {{($employee->employee_bpc_id == getValue('employee_id',$objData))? 'selected':''}}
                          value="{{$employee->employee_bpc_id}}">
                          {{$employee->employee_name}}(ID-{{$employee->employee_bpc_id}})
                        </option>
                        @endforeach
                        @endif
                      </select>
                    </div>
                  </div>

                  <div class="form-group row pb-1">
                    <div class="col">
                      <label class="">Loan <code>*</code></label>
                    </div>
                    <div class="col">
                      <button type="button" class="btn btn-sm btn-info" id="addMoreLoan">Add
                        More</button>
                    </div>
                  </div>
                  <div class="form-group row">
                    <table class="table" id="loanTable">
                      <thead>
                        <tr>
                          <th scope="col" class="text-center">Loan</th>
                          <th scope="col" class="text-center">Code</th>
                          <th scope="col" class="text-center">Amount</th>
                          <th scope="col" class="text-center">Action</th>
                        </tr>
                      </thead>
                      <tbody id="loanTbody">

                        @php
                        $loanJsonData = getValue('loans', $objData);
                        $loanObjectData = json_decode($loanJsonData);
                        $loanData = (array) $loanObjectData;
                        @endphp

                        @if(is_array($loanData['loan_id']))
                        @for($i = 0; $i < count($loanData['loan_id']); $i++) <tr id="loanRow">
                          <td class="text-center">
                            <select name="loan_id[]" onchange="get_rules_detail(this.value, `{{ $i }}`)" id="loan_id"
                              class="form-control">
                              @foreach($loans as $loan)
                              <option {{($loanData['loan_id'][$i] == $loan->loan_id)? 'selected':''}}
                                value="{{ $loan->loan_id }}">{{ $loan->loan_title }}</option>
                              @endforeach
                            </select>
                          </td>

                          <td width="30%">
                            <input value="{{ $loanData['loan_code'][$i] }}" name="loan_code[]" id="loan_code{{ $i }}"
                              class="form-control">
                          </td>
                          <td class="text-center">
                            <input value="{{ $loanData['loan_amount'][$i] }}" name="loan_amount[]"
                              id="loan_amount{{ $i }}" class="form-control">
                          </td>
                          <td>
                            @if($i != 0)
                            <button id='removeloanRow' type='button' class='removeloanRow btn btn-sm btn-info'><i
                                class='fa fa-minus-circle'></i></button>
                            @endif
                          </td>
                          </tr>
                          @endfor
                          @else
                          <tr id="loanRow">
                            <td class="text-center">
                              <select name="loan_id[]" onchange="get_rules_detail(this.value)" id="loan_id"
                                class="form-control">
                                @foreach($loans as $loan)
                                <option {{($loanData['loan_id'] == $loan->loan_id)? 'selected':''}}
                                  value="{{ $loan->loan_id }}">{{ $loan->loan_title }}</option>
                                @endforeach
                              </select>
                            </td>

                            <td width="30%">
                              <input value="{{ $loanData['loan_code'] }}" name="loan_code[]" id="loan_code0"
                                class="form-control">
                            </td>
                            <td class="text-center">
                              <input value="{{ $loanData['loan_amount'] }}" name="loan_amount[]" id="loan_amount0"
                                class="form-control">
                            </td>
                            <td>

                            </td>
                          </tr>
                          @endif

                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Date Of Loan Issue <code>*</code></label>
                            <div class="col-sm-9">
                              <input class="form-control datepicker" name="loan_date"
                                value="{{ getValue('loan_date', $objData) }}" type="text" autocomplete="off"
                                placeholder="YY-MM-DD">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                              <textarea name="description" id="description" class="form-control editor" rows="3"
                                placeholder="Enter ..."
                                style="margin-top: 0px; margin-bottom: 0px; height: 172px;">{{getValue('description',$objData)}}</textarea>
                            </div>
                          </div>

                      </tbody>
                    </table>
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
var j = {
  {
    count($loanData['loan_id'])
  }
};
// console.log(j);
$(document).ready(function() {
  $('#addMoreLoan').on('click', function() {
    j++;
    var extChild =
      "<tr id='loanRow'><td class='text-center'><select name='loan_id[]' onchange='get_rules_detail(this.value)' id='loan_id' class='form-control'><option>Select Rule</option>@foreach($loans as $rule)<option value='{{ $rule->rules_id }}'>{{ $rule->rules_name }}</option>@endforeach</select></td><td width='30%'><input name='loan_code[]' id='loan_code" +
      j + "' class='form-control'></td><td class='text-center'><input name='loan_amount[]' id='loan_amount" +
      j +
      "' class='form-control'></td><td><button id='removeloanRow' type='button' class='removeloanRow btn btn-sm btn-info'><i class='fa fa-minus-circle'></i></button></td></tr>";
    $("#loanTable #loanTbody").append(extChild);
  });
});

$(document).on('click', '#removeloanRow', function() {
  $(this).closest('#loanRow').remove();
});

function get_rules_detail(loanId, si) {
  // alert(si);
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
    type: "post",
    url: '{{url("hrms/loan-manage/loan-details")}}',
    data: {
      loanId: loanId,
    },
    success: function(data) {
      if (j > {
          {
            count($loanData['loan_id'])
          }
        }) {
        $("#loan_code" + j).val(data.rules_loan_code);
        $("#loan_amount" + j).val(data.rules_loan_amount);
      } else {
        $("#loan_code" + si).val(data.rules_loan_code);
        $("#loan_amount" + si).val(data.rules_loan_amount);
      }

    }
  });
}

$(function() {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
@include('layouts.form_script')
@endpush