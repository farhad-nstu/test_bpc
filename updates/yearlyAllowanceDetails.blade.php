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
        </div>

        <div class="col-md-6 text-right">
          <button type="button" class="btn btn-tool">
            
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <div class="col-md-11">

        <h6 class="text-center font-weight-bold">Date: @php echo date('Y/m/d'); @endphp </h6>        
        <br>
        <h5 class="text-center font-weight-bold">Sub: Salary allowance details in the sector</h5>
        <br>
        <h6 class="text-center font-weight-bold">Duration: {{ $from }} To {{ $to }}</h6>        

        <div class="container">

          <div>
            <h6 class="font-weight-bold">Name: {{ $salaries[0]->employee_name }}</h6> 
            <h6 class="font-weight-bold">Designation: {{ $salaries[0]->desg_title }}</h6>
            <h6 class="font-weight-bold">ID/GPF No: {{ $salaries[0]->employee_id }}</h6>
            <h6 class="font-weight-bold">Workplace: </h6>
          </div>
          <br>

          <div class="row">
            <div class="col-md-1">SI No</div>
            <div class="col-md-4">Sector</div>
            <div class="col-md-2">Unit Taka</div>
            <div class="col-md-2">Details</div>
            <div class="col-md-3">Total</div>
          </div>

          <div class="row">
            <div class="col-md-1">1</div>
            <div class="col-md-4">Basic Salary</div>
            <div class="col-md-2">{{ $salaries[0]->employee_basic_salary }}</div>
            @php 

              $totalBasic = $salaries[0]->employee_basic_salary * $months;
            
              $festivalBonus = Modules\Hrms\Entities\HrmsFestivalBonus::where('festival_id', '!=', 6)
                              ->where('employee_id', $salaries[0]->employee_id)
                              ->whereBetween('date', [$from, $to])
                              ->sum('festival_bonus');

              $toalTaxable = $totalBasic + $festivalBonus;

            @endphp 
            <div class="col-md-2">{{ $totalBasic }}</div>
            <div class="col-md-3">{{ $totalBasic }}</div>
          </div>

          <div class="row">
            <div class="col-md-1">2</div>
            <div class="col-md-4">Festival Bonus(2 Pax)</div>
            <div class="col-md-2"></div>
            <div class="col-md-2">{{ $festivalBonus }}</div>
            <div class="col-md-3">{{ $festivalBonus }}</div>
          </div>

          <div class="row pb-2">
            <div class="col-md-1"></div>
            <div class="col-md-4"><b>Total Taxable Taka:</b></div>
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
            <div class="col-md-3"><b>{{ $toalTaxable }}</b></div>
          </div>

          @php 
            $totalAdd = 0;
            $si = 3;
          @endphp 

          @for($i = 0; $i < count($allAllowance); $i++)
            <div class="row">
              <div class="col-md-1">{{ $si }}</div>
              <div class="col-md-4">{{ $allAllowance[$i] }}</div>
              <div class="col-md-2">{{ $allAllowanceAmount[$i] }}</div>
              <div class="col-md-2">{{ $allAllowanceAmount[$i] * $months }}</div>
              <div class="col-md-3">{{ $allAllowanceAmount[$i] * $months }}</div>
            </div> 
            @php 
              $totalAdd = $totalAdd + ($allAllowanceAmount[$i] * $months);
              $si++;
            @endphp 
          @endfor 

          <div class="row pb-2">
            <div class="col-md-1"></div>
            <div class="col-md-4"><b>Total Taka (Income):</b></div>
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
            <div class="col-md-3"><b>{{ $totalAdd }}</b></div>
          </div>

          @php 
            $totalDeduc = 0;
          @endphp 

          @for($j = 0; $j < count($allDeduction); $j++)
            <div class="row">
              <div class="col-md-1">{{ $si }}</div>
              <div class="col-md-4">{{ $allDeduction[$j] }}</div>
              <div class="col-md-2">{{ $allDeductionAmount[$j] }}</div>
              <div class="col-md-2">{{ $allDeductionAmount[$j] * $months }}</div>
              <div class="col-md-3">{{ $allDeductionAmount[$j] * $months }}</div>
            </div> 
            @php 
              $totalDeduc = $totalDeduc + ($allDeductionAmount[$j] * $months);
              $si++;
            @endphp 
          @endfor 

          <div class="row pb-2">
            <div class="col-md-1"></div>
            <div class="col-md-4"><b>Total Taka (Deduction):</b></div>
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
            <div class="col-md-3"><b>{{ $totalDeduc }}</b></div>
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
$(function() {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
@include('layouts.form_script')
@endpush