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
            <label for="employee" class="col-sm-3 col-form-label">Employee <code>*</code></label>
            <div class="col-sm-9">
              <select name="employee_id" id="employee_id" class="form-control select2" onchange="get_employee_details(this.value)">
                <option value="">Select Employee</option>
                @if (!empty($employees))
                @foreach($employees as $employee)
                <option {{($employee->employee_bpc_id == getValue('employee_id',$objData))? 'selected':''}}
                  value="{{$employee->employee_bpc_id}}">{{$employee->employee_name}}(ID-{{$employee->employee_bpc_id}})
                </option>
                @endforeach
                @endif
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Date Of Salary Issue <code>*</code></label>
            <div class="col-sm-9">
              <input class="form-control datepicker" name="salary_date" value="{{ getValue('salary_date', $objData) }}"
                type="text" autocomplete="off" placeholder="YY-MM-DD">
            </div>
          </div>

          @if(!empty(getValue($tableID, $objData)))
          <div class="row pb-3">
            <label class="col-sm-5 col-form-label">Do you want to update salary according to current salary structure ?</label>
            <div class="col-sm-1">
              <input class="form-check-input" style="width: 25px; height: 25px;" type="checkbox" name="is_update_salary" value="1">
            </div>
          </div>
          @endif

          <div class="form-group row">
            <label for="salary_description" class="col-sm-3 col-form-label">Description <code>*</code></label>
            <div class="col-sm-9">
              <textarea name="salary_description" id="salary_description" class="form-control" rows="3" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; height: 172px;">{{getValue('salary_description',$objData)}}</textarea>
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

  function get_employee_details(employee_id){
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      type: "post",
      url: '{{url("hrms/salary-details")}}',
      data: {
        employee_id: employee_id,
      },
      success: function(data) {
        console.log(data.employee_id);
        // document.getElementById("salary_description").value = data.employee_id;
        $('#salary_description').empty().val(data);
      }
    });
  }
</script>
@include('layouts.form_script')
@endpush