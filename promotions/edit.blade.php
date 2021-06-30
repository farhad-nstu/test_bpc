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
  z-index: 1200 !important; /* has to be larger than 1050 */
}
</style>

<form method="post" action="{{ url($bUrl) }}" id="edit">
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
        <div class="col-md-12">
          <div id="error_message"></div>
          <div class="alert alert-warning" role="alert">&nbsp;</div>
          <div class="alert alert-success" role="alert">&nbsp;</div>
          <input type="hidden" value="{{ getValue('promot_id', $objData) }}" id="id" name="id">

          <div class="input-group mb-3">
            <label for="employee_id" class="col-sm-3 col-form-label">Employee <code>*</code></label>
            <select id="employee_id" name="employee_id" class="form-control">
              <option value="">Select Employee</option>
              @foreach($employees as $employee)
              <option {{(getValue('employee_id', $objData) == $employee->employee_bpc_id)?'selected':''}}
                value=" {{ $employee->employee_bpc_id }}"> {{ $employee->employee_name }}({{ $employee->employee_bpc_id }})</option>
              @endforeach
            </select>
          </div>

          <div class="input-group mb-3">
            <label class="col-sm-3 col-form-label" for="promot_nature">Nature Of Promotion<code>*</code></label>
            <input type="text" name="promot_nature" value="{{getValue('promot_nature', $objData) }}" id="promot_nature"
              class="form-control">
          </div>

          <div class="input-group mb-3">
            <label class="col-sm-3 col-form-label" for="promot_date">Date Of Promotion<code>*</code></label>
            <input type="text" name="promot_date" value="{{getValue('promot_date', $objData) }}"
              class="form-control datepicker">
          </div>

          <div class="input-group mb-3">
            <label class="col-sm-3 col-form-label" for="promot_rank">Ranking<code>*</code></label>
            <input type="text" name="promot_rank" value="{{getValue('promot_rank', $objData) }}" id="promot_rank"
              class="form-control">
          </div>

          <div class="input-group mb-3">
            <label class="col-sm-3 col-form-label" for="promot_g_o_date">Date Of Promotion G.O</label>
            <input type="text" name="promot_g_o_date" value="{{getValue('promot_g_o_date', $objData) }}"
              class="form-control datepicker">
          </div>

          <div class="input-group mb-3">
            <label for="promot_pay_scale" class="col-sm-3 col-form-label">Pay Scale <code>*</code></label>
            <select id="promot_pay_scale" name="promot_pay_scale" class="form-control">
              @if (!empty($payscaleGrades))
              @foreach($payscaleGrades as $payscaleGrade)
                <option {{($payscaleGrade->payscale_grad_no == getValue('promot_pay_scale',$objData))? 'selected':''}}
                    value="{{$payscaleGrade->payscale_grad_no}}">{{$payscaleGrade->payscale_grad_no}}</option>
              @endforeach
              @endif
            </select>
          </div>

        </div>
      </div>
    </div>
    <div class="modal-footer">
      <button type="submit" id="submit" class="btn btn-primary">Save</button>&nbsp;&nbsp;
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
      $.post('{{ url($bUrl) }}', str, function(response) {
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

  $(".datepicker" ).datepicker({
    changeMonth: true,
    changeYear: true,
    dateFormat: "yy-mm-dd",
    todayHighlight: true,
    container: '#windowmodal modal-body',
    // startDate: "01-01-2015",
    // endDate: "01-01-2020",
  });

});
</script>