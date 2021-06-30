<p>(a)&nbsp; NID No. {{ $employee->employee_nid }}</p>
<p>(b)&nbsp; Scale: {{ $employee->employee_basic_salary }}/- (Grade-{{ $employee->employee_payscale_grade }})</p>
<p>(c)&nbsp; G P F Deduction = {{ ($employee->employee_basic_salary * 10) / 100 }}/-</p>
<p>(d)&nbsp; Basic Pay = {{ $employee->employee_basic_salary }}/-</p>
<p>(e)&nbsp; Date Of Joining: {{ $employee->employee_join_date }} ({{ $designation->desg_title }})</p>
<p>(f)&nbsp; BPC Joining Date: {{ $employee->employee_confirm_g_o_date }}</p>
<p>(g)&nbsp;</p>
@php 
  $employeeLoans = Modules\Hrms\Entities\HrmsLoanManage::where('employee_id', $employee->employee_bpc_id)->get();
  $siWord = 104;
@endphp 
@foreach($employeeLoans as $employeeLoan)
  <p>( @php echo chr($siWord); echo "&nbsp;"; $loan = Modules\Hrms\Entities\HrmsLoan::where('loan_id', $employeeLoan->loan_id)->first(); @endphp ) 
    {{ $loan->loan_title }} Total Tk = {{ $employeeLoan->payableAmount }} 
    ({{ IntToEnglish::Int2Eng($employeeLoan->payableAmount) }}) 
    Installment Tk = {{ $employeeLoan->monthlyPayableAmount }}/-
    deduct from {{ date('F Y', strtotime($employeeLoan->loan_date)) }}
    Total Equal Kisti = {{ $employeeLoan->installment_no + 1 }}/{{ $employeeLoan->installment }}
    @php $siWord++; @endphp 
  </p>
@endforeach 