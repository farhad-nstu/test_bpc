@php 
use SujalPatel\IntToEnglish\IntToEnglish;
@endphp 
@push('css')
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
<!-- Main content -->
<section class="container-fluid position-absolute">
  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="font-weight-bold"> Pay and Allowances bill for the month of {{ date('F, Y', strtotime(date('Y-m') )) }}</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
      </div>
    </div>

    <div class="card-body" id="">

      <div class="col-md-12 mt-4">

        <div class="row">
          <div class="col-md-12">

            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>SL</th>
                  <th class="text-center">Name</th>
                  <th class="text-center">Designation</th>
                  <th class="text-center">GPF No</th>
                  <th class="text-center">NID</th>
                  <th class="text-center">Basic</th>
                  @foreach($addRules as $addRule)
                  <th class="text-center">{{ $addRule->rules_code }}</th>
                  @endforeach
                  <th class="text-center">Gross Total</th>
                  <th class="text-center">GPF Contr.</th>
                  @foreach($deducRules as $deducRule)
                  <th class="text-center">{{ $deducRule->rules_code }}</th>
                  @endforeach
                  @foreach($loans as $loan)
                  <th class="text-center">{{ $loan->loan_code }} loan</th>
                  @endforeach
                  <th class="text-center">D-Total</th>
                  <th class="text-center">Net Total</th>
                  <th class="text-center">Sign</th>

                </tr>
              </thead>
              <tbody>
                @if ($queryData->count() > 0)
                @foreach($queryData as $data)

                  @php

                    $query = Modules\Hrms\Entities\HrmsSalary::where('employee_id',
                            $data->employee_bpc_id)->where('salary_date', date('Y-m'))->first();

                    $loanManagesData = Modules\Hrms\Entities\HrmsLoanManage::where('employee_id',
                            $data->employee_bpc_id)->get();
                    foreach($loanManagesData as $loanManageData){
                      if(substr($loanManageData->loan_date, 0 , 7) == date('Y-m')) {
                        $loanManages = json_decode($loanManageData->loans);
                      }
                    }

                    if(!empty($query)) {
                      $salaryAllowance = json_decode($query->salary_addition_details);
                      $salaryDeduction = json_decode($query->salary_deductiontion_details);
                      $grossTotal = $query->salary_total_addition + $data->employee_basic_salary;
                      $gpf = ($data->employee_basic_salary * 10) / 100;
                      $totalDeduction = $query->salary_total_deductiontion + $gpf + array_sum($loanManages->loan_amount);
                      $totalSalary = $data->employee_basic_salary + $query->salary_total_addition - $totalDeduction;
                                      

                  @endphp

                <tr>
                  <td class="text-center">{{ $loop->index + 1 }}</td>
                  <td class="text-center">
                    {{ $data->employee_name }} (ID-{{ $data->employee_bpc_id }})
                  </td>
                  <td class="text-center">
                    @php
                      $designation = Modules\Hrms\Entities\HrmsDesignation::where('desg_id',
                      $data->employee_designation)->pluck('desg_title')->first();
                    @endphp
                    {{ $designation }}
                  </td>
                  <td class="text-center"></td>
                  <td class="text-center">{{ $data->employee_nid }}</td>
                  <td class="text-center">{{ $data->employee_basic_salary }}</td>

                  @foreach($addRules as $addRule)
                    @if(in_array($addRule->rules_code, $salaryAllowance->code))
                      <td class="text-center">{{ $addRule->rules_amount }}</td>
                    @else
                      <td class="text-center">0</td>
                    @endif
                  @endforeach

                  <td class="text-center">{{ $grossTotal }}</td>
                  <td class="text-center">{{ $gpf }}</td>

                  @foreach($deducRules as $deducRule)
                    @if(in_array($deducRule->rules_code, $salaryDeduction->deductionCode))
                      <td class="text-center">{{ $deducRule->rules_amount }}</td>
                    @else 
                      <td class="text-center">0</td>
                    @endif
                  @endforeach

                  @foreach($loans as $loan)
                    @if(in_array($loan->loan_code, $loanManages->loan_code))
                      <td class="text-center">{{ $loan->loan_amount }}</td>
                    @else 
                      <td class="text-center">0</td>
                    @endif
                  @endforeach

                  <td class="text-center">{{ $totalDeduction }}</td>
                  <td class="text-center">{{ $totalSalary }}</td>
                  <td class="text-center"></td>

                </tr>
                @php } @endphp 
                @endforeach

                @else

                <tr>
                  <td colspan="5">There is nothing found.</td>
                </tr>

                @endif
              </tbody>
            </table>

          </div>

        </div><!-- /row -->


      </div>

    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      Salary Sheet
    </div>
    <!-- /.card-footer-->
  </div>
  <!-- /.card -->
</section>
<!-- /.content -->
@endsection