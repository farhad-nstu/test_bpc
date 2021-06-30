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

        <button type="button" class="btn btn-tool">
          <a class="btn btn-sm btn-info" href="{{ url('hrms/filter/pay-slip') }}"><i class="fa fa-arrow-left"></i> Back</a>
        </button>

      </div>
    </div>
    
    <div class="card-body">
      <div class="col-md-11">

        <div class="row">
          <div class="col-md-8">
            <h4 class="font-weight-bold">No. {{ $employeeSalaryStructure->issue_no }}</h4>
          </div>
          <div class="col-md-4">
            <h4 class="font-weight-bold">Date: {{ date('F Y', strtotime($employeeSalaryStructure->salary_date)) }} </h4>
          </div>          
        </div>

        <h3 class="text-center font-weight-bold">TO WHOM IT MAY CONCERN</h3>
        <div class="text-center">
          <h6 class=" font-weight-bold">This is to certify that {{ $employeeSalaryStructure->employee_name }}, {{ $employeeSalaryStructure->desg_title }}, GPF N0. {{ $employeeSalaryStructure->employee_id }} of Bangladesh </h6> 
          <h6 class=" font-weight-bold">Parjatan Corporation (BPC) is permanent employee of this organization.</h6>
          <h6 class=" font-weight-bold">His present salary structure is as follows:</h6>
        </div>

        <div class="row text-center">
          <div class="col-md-3"></div>
          <div class="col-md-2">Basic Pay</div>
          <div class="col-md-1">=</div>
          <div class="col-md-2">{{ $employeeSalaryStructure->employee_basic_salary }}</div>
          <div class="col-md-4"></div>
        </div>

        @php 
          $additions = json_decode($employeeSalaryStructure->salary_addition_details);
          $totalAdd = 0;
        @endphp
        @if($additions->rule_id[0] != null)
          @for($i = 0; $i < count($additions->rule_id); $i++)
            @php 
              $rule = Modules\Hrms\Entities\HrmsSalaryRules::where('rules_id', $additions->rule_id[$i])->select('rules_name')->first();
              $totalAdd = $totalAdd + $additions->amount[$i];
            @endphp 
            <div class="row text-center">
              <div class="col-md-3"></div>
              <div class="col-md-2">{{ $rule->rules_name }}</div>
              <div class="col-md-1">=</div>
              <div class="col-md-2">{{ $additions->amount[$i] }}</div>
              <div class="col-md-4"></div>
            </div>  
          @endfor
        @endif 
        <br>

        @php 
          $deductions = json_decode($employeeSalaryStructure->salary_deductiontion_details);
          $totalDeduc = 0;
          $gross = $employeeSalaryStructure->employee_basic_salary + $totalAdd;
          $gpf = ($employeeSalaryStructure->employee_basic_salary * 10) / 100;
        @endphp 

        <div class="row text-center">
          <div class="col-md-3"></div>
          <div class="col-md-2">Gross Salary</div>
          <div class="col-md-1">=</div>
          <div class="col-md-2">{{ $gross  }}</div>
          <div class="col-md-4"></div>
        </div>
        <br>

        <h5 class="text-center">Less Deductions</h5>

        <div class="row text-center">
          <div class="col-md-3"></div>
          <div class="col-md-2">GPF</div>
          <div class="col-md-1">=</div>
          <div class="col-md-2">{{ $gpf }}</div>
          <div class="col-md-4"></div>
        </div>

        @if($deductions->deductionRule_id[0] != null)
          @for($i = 0; $i < count($deductions->deductionRule_id); $i++)
            @php 
              $deducRule = Modules\Hrms\Entities\HrmsSalaryRules::where('rules_id', $deductions->deductionRule_id[$i])->select('rules_name')->first();
              $totalDeduc = $totalDeduc + $deductions->deductionAmount[$i];
            @endphp 
          
            <div class="row text-center">
              <div class="col-md-3"></div>
              <div class="col-md-2">{{ $deducRule->rules_name }}</div>
              <div class="col-md-1">=</div>
              <div class="col-md-2">{{ $deductions->deductionAmount[$i] }}</div>
              <div class="col-md-4"></div>
            </div>  
          @endfor
        @endif 
        <br>

        <div class="row text-center">
          <div class="col-md-3"></div>
          <div class="col-md-2">Net Payable</div>
          <div class="col-md-1">=</div>
          <div class="col-md-2">{{ $gross - $totalDeduc - $gpf }}</div>
          <div class="col-md-4"></div>
        </div>
        <br>

        <div>
          @php 
            $totalInWord = App\WordConversion::convert_number_to_words($gross - $totalDeduc - $gpf);
          @endphp
          <h5 class="font-weight-bold text-center">(Taka = {{ $totalInWord }})</h5>
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
$(function() {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
@include('layouts.form_script')
@endpush