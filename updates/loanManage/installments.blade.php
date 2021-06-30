<select name="installment_no" class="form-control" id="installment_no" onchange="get_paid_amount(this.value)">
  <option value="">Select Installment No</option>
  @foreach($installments as $installment)
  <option value="{{ $installment->installment_no }}">{{ $installment->installment_no }}</option>
  @endforeach
</select>