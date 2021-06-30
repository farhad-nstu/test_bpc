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

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" /> -->

@endpush
 
@extends("master_home")
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

    <form method="get" action="{{url($pageUrl.'/by-prl')}}">
      <div class="card-body">
        <div class="col-md-11">
          {!! validation_errors($errors) !!}

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Date From <code>*</code></label>
            <div class="col-sm-4">
              <input onchange="enable_to_date()" class="form-control dateOfBirth" name="from_date" id="from_date"
                type="text" autocomplete="off" placeholder="YY-MM-DD" value="{{ old('from_date') }}">
            </div>

            <label class="col-sm-2 col-form-label">To <code>*</code></label>
            <div class="col-sm-4">
              <input class="form-control" onchange="check_date()" name="to_date" id="to_date"
                type="text" autocomplete="off" placeholder="YY-MM-DD" readonly value="{{ old('to_date') }}">
            </div>
          </div>

        </div>
      </div>
    <!-- /.card-body -->
      <div class="card-footer">
        <div class="col-md-11">
          <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-4">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>     
        </div>      
      </div>
    <!-- /.card-footer-->
    </form>
  </div>
  <!-- /.card -->
</section>
<!-- /.content -->
@endsection

@push('plugin')
<script src="{{url('backend/plugins/tinymce/tinymce.min.js')}}"></script>
@endpush

@push('js')

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous"></script> -->

<script>
$(function() {
  $('[data-toggle="tooltip"]').tooltip()
})

  // $('#from_date').datepicker({

  //   format: "yyyy-mm-dd",
  //   autoclose: true,
  //   orientation: "bottom",
  //   endDate: "today"

  // });

  // function enable_to_date(){

  //   $("#to_date").prop( "readonly", false);
    
  //   $('#to_date').datepicker({
  //     format: "yyyy-mm-dd",
  //     autoclose: true,
  //     orientation: "bottom",
  //     startDate: $('#from_date').val(),
  //     endDate: "today"

  //   });

  // }

  function enable_to_date(){

    $("#to_date").prop( "readonly", false);

    var date = new Date($('#from_date').val())
    date.setDate(date.getDate() + 1)

    $('#to_date').datepicker({
      showAnim: "slide",
      changeMonth: true,
      changeYear: true,
      dateFormat: 'yy-mm-dd',
      yearRange: "-80:+0",
      minDate: date,
      maxDate: '0'
    });   

    if($('#to_date').val()) {
      if($("#from_date").val() >= $('#to_date').val()) {
        alert("Please insert valid date!");
        $("#from_date").val("");
      }
    }

  }

  function check_date() {
    if($("#to_date").val() <= $('#from_date').val()) {
      alert("Please insert valid date!");
      $("#to_date").val("");
    }
  }

</script>
@include('layouts.form_script')
@endpush