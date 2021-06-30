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

        <button type="button" class="btn btn-tool" >
          <a href="{{url($bUrl)}}" class="btn btn-info btn-sm"><i class="mdi mdi-plus"></i> <i class="fa fa-arrow-left"></i> Back</a>
        </button>
      </div>
    </div>

    <div class="card-body">

      <div class="col-md-11">

        <form method="post" action="{{url($bUrl.'/store')}}" enctype="multipart/form-data">
          @csrf

          {!! validation_errors($errors) !!}

          <input type="hidden" value="{{ getValue($tableID, $objData) }}" id="id" name="{{ $tableID }}">

          <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="loan_title">Title <code>*</code></label>
            <div class="col-sm-9">
              <input name="loan_title" value="{{ getValue('loan_title', $objData) }}" id="loan_title"
                type="text" class="form-control">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="loan_code">Code</label>
            <div class="col-sm-9">
              <input name="loan_code" value="{{ getValue('loan_code', $objData) }}" id="loan_code" type="text"
                class="form-control">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="interest">Interest <code>*</code></label>
            <div class="col-sm-9">
              <input name="interest" value="{{ getValue('interest', $objData) }}" id="interest" type="text"
                class="form-control">
            </div>
          </div>

      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <div class="offset-md-2 col-sm-9">
        @if(empty(getValue($tableID, $objData)))
        <button type="submit" class="btn btn-primary">Save</button>&nbsp;&nbsp;
        @else 
        <button type="submit" class="btn btn-primary">Update</button>&nbsp;&nbsp;
        @endif
        <a href="{{url($bUrl)}}" class="btn btn-warning">Cancel</a>
      </div>
    </div>
    <!-- /.card-footer-->
  </div>
  </form>
  <!-- /.card -->
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

  @if(getValue('is_abroad', $objData) == 1)
  $("#addCountry").show();
  $("#addDistrict").hide();
  @else
  $("#addCountry").hide();
  $("#addDistrict").show();
  @endif
  var i = 0;

  function add_country_field() {
    @if(getValue('is_abroad', $objData) == 1)
      if(i%2 != 0){
        $("#addCountry").show();
        $("#addDistrict").hide();
      } else {
        $("#addCountry").hide();
        $("#addDistrict").show();
      }
    @else 
    if(i%2 == 0){
      $("#addCountry").show();
      $("#addDistrict").hide();
    } else {
      $("#addCountry").hide();
      $("#addDistrict").show();
    }
    @endif
    
    i++;
    
  }
</script>
@include('layouts.form_script')
@endpush