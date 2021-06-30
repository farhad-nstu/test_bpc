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
  <!-- Default box -->

  <div class="card">

    <div class="card-header">
      <h2 class="card-title"> {!! $page_icon !!} &nbsp; {{ $title }} </h2>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>

        <button type="button" class="btn btn-tool">
          <a href="{{url($bUrl.'/'.$objData->loan_manage_id.'/edit')}}" class="btn btn-info btn-sm"><i class="mdi mdi-plus"></i> <i class="fa fa-edit"></i> Edit</a>
          <a href="{{url($bUrl)}}" class="btn btn-info btn-sm"><i class="mdi mdi-plus"></i> <i
                class="fa fa-arrow-left"></i> Back</a>
        </button>
      </div>
    </div>

    <div class="card-body">
      <div class="col-md-11">
        <div class="row">
          <div class="col-md-6">

            <div class="row">
              <label class="col-sm-5">Employee</label>
              <div class="col-sm-7">
                @foreach($employees as $employee)
                @if($employee->employee_bpc_id == getValue('employee_id', $objData))
                {{ $employee->employee_name }}(ID-{{ $employee->employee_bpc_id }})
                @endif
                @endforeach
              </div>
            </div>

            <div class="row">
              <label class="col-sm-5">Loan</label>
              <div class="col-sm-7">
                @foreach($loans as $loan)
                @if($loan->loan_id == getValue('loan_id', $objData))
                {{ $loan->loan_title }}
                @endif
                @endforeach
              </div>
            </div>

            <div class="row">
              <label class="col-sm-5">Interest</label>
              <div class="col-sm-7">
                {{ getValue('interest', $objData) }}%
              </div>
            </div>

            <div class="row">
              <label class="col-sm-5">Total Installment</label>
              <div class="col-sm-7">
                {{ getValue('installment', $objData) }}
              </div>
            </div>

            <div class="row">
              <label class="col-sm-5">Monthly Installment</label>
              <div class="col-sm-7">
                {{ getValue('monthlyPayableAmount', $objData) }}
              </div>
            </div>

            <div class="row">
              <label class="col-sm-5">Paid Amount</label>
              <div class="col-sm-7">
                {{ getValue('paid_amount', $objData) }}
              </div>
            </div>

          </div>

          <div class="col-md-6">

            <div class="row">
              <label class="col-sm-5">Date Of Loan Issue</label>
              <div class="col-sm-7">
                {{ date('j F Y', strtotime(getValue('loan_date', $objData))) }}
              </div>
            </div>

            <div class="row">
              <label class="col-sm-5">Amount</label>
              <div class="col-sm-7">
                {{ getValue('amount', $objData) }}
              </div>
            </div>

            <div class="row">
              <label class="col-sm-5">Payable Amount</label>
              <div class="col-sm-7">
                {{ getValue('payableAmount', $objData) }}
              </div>
            </div>

            <div class="row">
              <label class="col-sm-5">Running Installment</label>
              <div class="col-sm-7">
                {{ getValue('installment_no', $objData) }}
              </div>
            </div>

            <div class="row">
              <label class="col-sm-5">Due Amount</label>
              <div class="col-sm-7">
                {{ getValue('rest_amount', $objData) }}
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<!-- /.content -->



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

@include('layouts.form_script')
@endpush