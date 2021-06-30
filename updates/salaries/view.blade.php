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

        <button type="button" class="btn btn-tool" >
          <a href="{{url($bUrl.'/'.$objData->salary_id.'/edit')}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit</a>
          <a href="{{url($bUrl)}}" class="btn btn-info btn-sm"><i class="mdi mdi-plus"></i> <i
                class="fa fa-arrow-left"></i> Back</a>
        </button>
      </div>
    </div>

    <div class="card-body">
      <div class="col-md-11">

        @php
        $salaryObjData = json_decode(getValue('salary_addition_details', $objData));
        $salaryData = array ($salaryObjData);

        $salaryDeducObjData = json_decode(getValue('salary_deductiontion_details', $objData));
        $salaryDeducData = array ($salaryDeducObjData);
        @endphp

        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <label class="col-sm-4">Employee</label>
              <div class="col-sm-8">
                @foreach($employees as $employee)
                @if($employee->employee_bpc_id == getValue('employee_id', $objData))
                {{ $employee->employee_name }}(ID-{{ $employee->employee_bpc_id }})
                @endif
                @endforeach
              </div>
            </div>

            <div class="row">
              <label class="col-sm-4">Category</label>
              <div class="col-sm-8">
                @foreach($categories as $category)
                  @if($category->category_id == getValue('category', $objData))
                    {{ $category->category_name }}
                  @endif
                @endforeach
              </div>
            </div>

            <div class="row">
              <label class="col-sm-4">Total Allowance</label>
              <div class="col-sm-8">
                {{ getValue('salary_total_addition', $objData) }}
              </div>
            </div>

            <div class="row">
              <label class="col-sm-4">Total Deduction</label>
              <div class="col-sm-8">
                {{ getValue('salary_total_deductiontion', $objData) }}
              </div>
            </div>

            <div class="row">
              <label class="col-sm-4">Total</label>
              <div class="col-sm-8">
                {{ getValue('salary_total', $objData) }}
              </div>
            </div>

            <div class="row">
              <label class="col-sm-4">Date Of Salary Issue</label>
              <div class="col-sm-8">
                {{ date('F Y', strtotime(getValue('salary_date', $objData))) }}
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <label><u>Addition</u></label>
                @for($j = 0; $j < count($salaryData[0]->rule_id); $j++)
                <div class="row">
                  <label class="col-sm-6">{{ $salaryData[0]->code[$j] }}</label>
                  <div class="col-sm-6">
                    {{ $salaryData[0]->amount[$j] }}
                  </div>
                </div>
                @endfor
              </div>
              <div class="col-md-6">
                <label><u>Deduction</u></label>
                @for($j = 0; $j < count($salaryDeducData[0]->deductionRule_id); $j++)
                <div class="row">
                  <label class="col-sm-6">{{ $salaryDeducData[0]->deductionCode[$j] }}</label>
                  <div class="col-sm-6">
                    {{ $salaryDeducData[0]->deductionAmount[$j] }}
                  </div>
                </div>
                @endfor
              </div>
            </div>

          </div>
          <div class="col-md-6">

            <div class="row">
              <label class="col-sm-3">Description</label>
              <div class="col-sm-9">
                {!! getValue('salary_description', $objData) !!}
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /.content -->

@endsection

@push('js')

@include('layouts.form_script')
@endpush