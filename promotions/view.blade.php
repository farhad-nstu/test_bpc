@include('layouts.header')
<div class="modal-content">
  <div class="modal-header">
    <input type="hidden" class="datepickerNone">
    <h4 class="modal-title" id="myModalLabel"> {{$title}} </h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
        aria-hidden="true">&times;</span></button>
  </div>
  <div class="modal-body">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label text-right">Employee</label>
      <span class="col-sm-9 col-form-label">
        {{$objData->employee->employee_name}}
      </span>
      <label class="col-sm-3 col-form-label text-right">Nature Of Promotion</label>
      <span class="col-sm-9 col-form-label">
        {{$objData->promot_nature}}
      </span>
      <label class="col-sm-3 col-form-label text-right">Date Of Promotion</label>
      <span class="col-sm-9 col-form-label">
        {{$objData->promot_date}}
      </span>
      <label class="col-sm-3 col-form-label text-right">Promotion Rank</label>
      <span class="col-sm-9 col-form-label">
        {{$objData->promot_rank}}
      </span>
      <label class="col-sm-3 col-form-label text-right">Date Of Promotion G.O</label>
      <span class="col-sm-9 col-form-label">
        {{$objData->promot_g_o_date}}
      </span>
      <label class="col-sm-3 col-form-label text-right">Pay Scale</label>
      <span class="col-sm-9 col-form-label">
        @foreach($payscaleGrades as $payscaleGrade)
        @if($payscaleGrade->payscale_grad_no == $objData->promot_pay_scale)
        {{ $objData->promot_pay_scale }}&nbsp;&nbsp;Grade({{ $payscaleGrade->payscale_salary_min }}-{{ $payscaleGrade->payscale_salary_max }}/-)
        @endif
        @endforeach
      </span>
    </div>
    <div class="form-group row">

    </div>
  </div>
  <div class="modal-footer">
    <button type="button" data-reload="true" class="btn btn-secondary dismiss" data-dismiss="modal">Close</button>
  </div>

  @include('layouts.footer_script')