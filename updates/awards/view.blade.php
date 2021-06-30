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
      <label class="col-sm-3 col-form-label text-right">Award</label>
      <span class="col-sm-9 col-form-label">
        {{$objData->award_title}}
      </span>
      <label class="col-sm-3 col-form-label text-right">Ground</label>
      <span class="col-sm-9 col-form-label">
        {{$objData->award_ground}}
      </span>
      <label class="col-sm-3 col-form-label text-right">Date OF Achievement</label>
      <span class="col-sm-9 col-form-label">
        {{$objData->award_date}}
      </span>
    </div>
    <div class="form-group row">

    </div>
  </div>
  <div class="modal-footer">
    <button type="button" data-reload="true" class="btn btn-secondary dismiss" data-dismiss="modal">Close</button>
  </div>

  @include('layouts.footer_script')