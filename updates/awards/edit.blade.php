@include('layouts.header')
<style type="text/css">
.alert {
  padding: 6px 10px;
  margin-top: 10px
}

.alert-warning {
  display: none;
}

.alert-success {
  display: none;
}

.alert-warning ul {
  margin-bottom: 0px !important;
}

.datepicker {
  z-index: 10000000000000000 !important;
  /* has to be larger than 1050 */
}
</style>


<form method="post" action="{{ url($bUrl.'/update') }}" id="edit">
  @csrf
  <div class="modal-content">
    <div class="modal-header">
      <input type="hidden" class="datepickerNone">
      <h4 class="modal-title" id="myModalLabel"> {{$title}} </h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
          aria-hidden="true">&times;</span></button>
    </div>
    <div class="modal-body">
      <div class="card-body">
        <div id="error_message"></div>
        <div class="alert alert-warning" role="alert">&nbsp;</div>
        <div class="alert alert-success" role="alert">&nbsp;</div>
        <div class="col-md-12 fbody">

          <input type="hidden" value="{{ getValue('award_id', $objData) }}" id="id" name="id">

          <div class="input-group mb-3">
            <label for="employee_id" class="col-sm-3 col-form-label">Employee <code>*</code></label>
            <select id="employee_id" name="employee_id" class="form-control">
              <option value="">Select Employee</option>
              @foreach($employees as $employee)
              <option {{(getValue('employee_id', $objData) == $employee->employee_bpc_id)?'selected':''}}
                value=" {{ $employee->employee_bpc_id }}">
                {{ $employee->employee_name }}({{ $employee->employee_bpc_id }})</option>
              @endforeach
            </select>
          </div>

          <div class="input-group mb-3">
            <label class="col-sm-3 col-form-label" for="award_title">Award Title<code>*</code></label>
            <input type="text" name="award_title" value="{{getValue('award_title', $objData) }}" id="award_title"
              class="form-control">
          </div>

          <div class="input-group mb-3">
            <label class="col-sm-3 col-form-label" for="award_ground">Ground</label>
            <input type="text" id="award_ground" name="award_ground" value="{{getValue('award_ground', $objData) }}"
              class="form-control">
          </div>

          <div class="input-group mb-3">
            <label for="award_date" class="col-sm-3 col-form-label">Award Date</label>
            <input type="text" name="award_date" value="{{getValue('award_date', $objData) }}"
              class="form-control datepicker">
          </div>


        </div>
      </div>
    </div>
    <div class="modal-footer">
      <button type="submit" id="submit" class="btn btn-primary">Update</button>&nbsp;&nbsp;
      <button type="button" data-reload="true" class="btn btn-secondary dismiss" data-dismiss="modal">Close</button>
    </div>
</form>


@include('layouts.footer_script')

<!-- new added -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- end -->

<script>
$(function() {

  $('form#edit').each(function() {
    $this = $(this);
    $this.find('#submit').on('click', function(event) {
      event.preventDefault();
      var str = $this.serialize();
      $.post('{{ url($bUrl."/update") }}', str, function(response) {
        if (response == 'success') {
          $this.find('.alert-success').html('Successfully Updated').hide().slideDown();
          $this.find('.fbody').hide();
          $('.alert-warning').hide();
        } else {
          var html = '<ul>'
          $.each(response, function(index, item) {
            html += '<li>' + item + '</li>'
          });
          html += '</ul>'
          $('.alert-warning').html(html).hide().slideDown();
          $('.alert-success').hide();
        }
      });

    });
  });




});
</script>