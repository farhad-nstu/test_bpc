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

      <div class="col-md-11">
        
        <form method="post" action="{{url($bUrl.'/store')}}" enctype="multipart/form-data">
          @csrf
          {!! validation_errors($errors) !!}

          <div class="form-group row">
            <label for="employee" class="col-sm-3 col-form-label">Employee <code>*</code></label>
            <div class="col-sm-9">
              <select name="employee_id" id="employee_id" class="form-control select2">
                <option value="">Select Employee</option>
                @foreach($employees as $employee)
                <option value="{{$employee->employee_bpc_id}}">
                  {{$employee->employee_name}}(ID- {{$employee->employee_bpc_id}})
                </option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="employee" class="col-sm-3 col-form-label">Loan <code>*</code></label>
            <div class="col-sm-9">
              <select name="loan_id" onchange="get_loan_detail(this.value)" id="loan_id"
                class="form-control">
                <option value="">Select Loan</option>
                @foreach($loans as $loan)
                <option value="{{ $loan->loan_id }}">{{ $loan->loan_title }}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Interest</label>
            <div class="col-sm-9">
              <input class="form-control" name="interest" id="interest" readonly="readonly">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Date Of Loan Issue <code>*</code></label>
            <div class="col-sm-9">
              <input class="form-control datepicker" name="loan_date"
                  type="text" autocomplete="off"
                placeholder="YY-MM-DD">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Amount <code>*</code></label>
            <div class="col-sm-9">
              <input class="form-control" name="amount" id="amount"
                  type="text"
                placeholder="Enter Loan Amount">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Installment <code>*</code></label>
            <div class="col-sm-9">
              <input class="form-control" name="installment" onchange="get_relevant_no(this.value)"
                  type="text" id="installment"
                placeholder="Enter Installment">
            </div>
          </div>
          
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Installment No.</label>
            <div class="col-sm-9">
              <select onchange="get_paid_amount(this.value)" name="installment_no" class="form-control" id="installment_no">
                <option value="">Select Installment No</option>
                
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Paid Amount</label>
            <div class="col-sm-9">
              <input class="form-control" name="paid_amount" id="paid_amount" readonly="readonly">
            </div>
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>

        </form>
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

  function get_loan_detail(loanId) {
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
        $("#interest").val(data.interest);      
      }
    });
  }

  function get_relevant_no(installment_no){
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      type: "post",
      url: '{{url("hrms/loan-manage/installment-no")}}',
      data: {
        installment_no: installment_no,
      },
      success: function(data) {
        $('#installment_no').empty().html(data);     
      }
    });
  }

  function get_paid_amount(paid_installment){
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      type: "post",
      url: '{{url("hrms/loan-manage/paid-amount")}}',
      data: {
        paid_installment: paid_installment,
        installment: $("#installment").val(),
        interest: $("#interest").val(),
        amount: $("#amount").val()
      },
      success: function(data) {
        $('#paid_amount').val(data);       
      }
    });
  }

$(function() {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
@include('layouts.form_script')
@endpush