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
<section class="container-fluid">
  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h2 class="card-title"> Salary Sheet </h2>
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
                  <th class="sort" data-row="name" id="name">Name</th>
                  <th >Designation</th>
                  <th>NID</th>
                  <th>Basic</th>
                  @foreach($addRules as $addRule)
                  <th>{{ $addRule->rules_code }}</th>
                  @endforeach
                  <th>Gross Total</th>
                  @foreach($deducRules as $deducRule)
                  <th>{{ $deducRule->rules_code }}</th>
                  @endforeach
                  <th>D-Total</th>
                  <th>Net Total</th>
                  
                </tr>
              </thead>
              <tbody>
                @if ($queryData->count() > 0)

                <tr>
                  <td>1</td>
                  <td>
                    {{ $queryData->employee_name }} ({{ $queryData->employee_bpc_id }})
                  </td>
                  <td>
                  @php 
                  $designation = Modules\Hrms\Entities\HrmsDesignation::where('desg_id', $queryData->employee_designation)->pluck('desg_title')->first();
                  @endphp
                  {{ $designation }}
                  </td>
                  <td>{{ $queryData->employee_nid }}</td>
                  <td>{{ $queryData->employee_basic_salary }}</td>
                  
                  @php                  
                    $query = Modules\Hrms\Entities\HrmsSalary::where('employee_id', $queryData->employee_bpc_id)->where('salary_date', date('Y-m'))->first();               
                    $salaryAllowance = json_decode($query->salary_addition_details);
                    $salaryDeduction = json_decode($query->salary_deductiontion_details);
                    $grossTotal = $query->salary_total_addition + $queryData->employee_basic_salary;
                  @endphp
                  @foreach($addRules as $addRule)
                    @for($j = 0; $j < count($salaryAllowance->rule_id); $j++)
                      @if($salaryAllowance->rule_id[$j] == $addRule->rules_id)
                        <td>{{ $addRule->rules_amount }}</td>                                        
                      @endif                                      
                    @endfor                 
                  @endforeach                   
                  
                  <td>{{ $grossTotal }}</td>

                  @foreach($deducRules as $deducRule)
                    @for($j = 0; $j < count($salaryDeduction->deductionRule_id); $j++)
                      @if($salaryDeduction->deductionRule_id[$j] == $deducRule->rules_id)
                        <td>{{ $deducRule->rules_amount }}</td>                                        
                      @endif                                      
                    @endfor                 
                  @endforeach  

                  <td>{{ $query->salary_total_deductiontion }}</td>
                  <td>{{ $query->salary_total }}</td>
                                   
                </tr>

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
