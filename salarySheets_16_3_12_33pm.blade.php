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
      <h2 class="card-title"> {!! $page_icon !!} &nbsp; {{ $title }} </h2>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>

        <button type="button" class="btn btn-tool">
          
        </button>
      </div>
    </div>

    <div class="card-body" id="">


      <div class="col-md-10">

        <form action="{{url($bUrl)}}" method="get" class="form-inline">

          <div class="form-row">
            <div class="col">
              <input type="text" name="filter" value="{{ $filter ?? '' }}" placeholder="Filter by employee id name..."
                class="form-control float-left search_input" />
            </div>


            <div class="col">


            </div>

            <div class="row">
              <div class="col">
                <input type="submit" class="btn btn-primary" value="Filter" />
                &nbsp;<a class="btn btn-default" href="{{ url($bUrl) }}"> Reset </a>
              </div>
            </div>


          </div>


        </form>

        <div class="col">

          @if( !empty( Request::query() ) )

          @if( array_key_exists( 'filter', Request::query() ) )

          Showing results for

          @if(!empty($filter) )
          '{{ $filter }}'
          @endif

          @endif

          @endif

        </div>


      </div>




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
                @if ($allData->count() > 0)
                @foreach($allData as $query)

                  @php
                    
                    $data = Modules\Hrms\Entities\HrmsEmployee::where('employee_bpc_id', $query->employee_id)->select('employee_bpc_id', 'employee_name', 'employee_designation', 'employee_nid', 'employee_basic_salary')->first();

                    $employeeLoans = Modules\Hrms\Entities\HrmsLoanManage::where('employee_id',
                            $query->employee_id)->get();

                    $salaryAllowance = json_decode($query->salary_addition_details);
                    $salaryDeduction = json_decode($query->salary_deductiontion_details);
                    $grossTotal = $query->salary_total_addition + $data->employee_basic_salary;
                    $gpf = ($data->employee_basic_salary * 10) / 100;
                    $totalDeduction = $query->salary_total_deductiontion + $gpf;
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

                  

                  @php $loanAmount = 0; @endphp 
                  @foreach($loans as $loan)
                    @for($i = 0; $i < count($employeeLoans); $i++)
                      @if($loan->loan_id == $employeeLoans[$i]->loan_id)
                        @php
                          $amountInterest = ($employeeLoans[$i]->amount*$employeeLoans[$i]->interest) / 100;
                          $payableAmount = $employeeLoans[$i]->amount + $amountInterest;
                          $monthlyPayableAmount = $payableAmount / $employeeLoans[$i]->installment;
                          $loanAmount = $loanAmount + $monthlyPayableAmount;
                            echo "<td class='text-center'>".$monthlyPayableAmount."</td>"; 
                            break; 
                        @endphp 
                      @else 
                        @if($i == count($employeeLoans)-1)
                          @php echo "<td class='text-center'>"."0"."</td>"; break; @endphp 
                        @endif 
                      @endif 
                    @endfor 
                  @endforeach

                  <td class="text-center">{{ $totalDeduction + $loanAmount }}</td>
                  <td class="text-center">{{ $totalSalary - $loanAmount }}</td>
                  <td class="text-center"></td>

                </tr>

                @endforeach

                @else

                <tr>
                  <td colspan="5">There is nothing found.</td>
                </tr>

                @endif
              </tbody>
            </table>
          </div>


          <div class="col-md-3">
            <form action="{{ url($bUrl) }}" method="post" class="form-inline">
              @csrf
              <div class="form-row">
                <div class="col">
                  <select class="form-control" name="per_page" id="per_page" class="form-control">

                    <option value=""> Per page </option>
                    @php
                    $perPageRecords = [10,20,30,40,50];
                    @endphp
                    @foreach ($perPageRecords as $p)
                    <option value="{{ $p }}" {{ session('per_page') == $p ? 'selected' : '' }}>
                      {{ $p }}</option>
                    @endforeach;

                  </select>
                </div>
                <!--/form-row-->

              </div>


            </form>
          </div>


          <div class="col-md-9">
            <div class="pagination_table">
              {!! $allData->render() !!}
            </div>
          </div>


        </div><!-- /row -->


      </div>




      <!-- Modal -->
      <div class="modal fade" id="windowmodal" tabindex="-1" role="dialog" aria-labelledby="windowmodal"
        aria-hidden="true">
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






    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      {{$title}}
    </div>
    <!-- /.card-footer-->
  </div>
  <!-- /.card -->
</section>
<!-- /.content -->
@endsection

@push('js')


<script>
$(document).ready(function() {


  $('#per_page').on('change', function() {

    $.ajax({
      type: 'POST',
      url: '{{ url($bUrl) }}',
      data: $(this).serialize(),
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function(data) {
        window.location.href = '{{ url($bUrl) }}';
      }
    });


  });

});
</script>

@endpush