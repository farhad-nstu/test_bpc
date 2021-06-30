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
<section class="container">
    <!-- Default box -->




    <div class="row">
        <div class="col-12 form-header">
            <div class="row">
                <div class="col-md-6">
                    <h3> {!! $page_icon !!} &nbsp; {{$title}}</h3>
                </div>

                <div class="col-md-6 text-right">
                    <button type="button" class="btn btn-tool">
                        <a href="{{url($bUrl)}}" class="btn btn-info btn-sm"><i class="mdi mdi-plus"></i> <i
                                class="fa fa-arrow-left"></i> Back</a>
                    </button>
                </div>
            </div>
        </div>
    </div>




    <div class="card">

        <div class="card-body">

            <div class="col-md-11">

                <form method="post" action="{{url($bUrl.'/store')}}" enctype="multipart/form-data">
                    @csrf

                    {!! validation_errors($errors) !!}

                    <input type="hidden" value="{{ getValue($tableID, $objData) }}" id="id" name="{{ $tableID }}">

                    <div class="form-group row">
                        <label for="employee" class="col-sm-3 col-form-label">Employee <code>*</code></label>
                        <div class="col-sm-9">
                            <select name="employee_id" id="employee_id"  class="form-control" >
                                <option value="">Select Employee</option>
                                @if (!empty($employees))
                                    @foreach($employees as $employee)
                                <option {{($employee->employee_id == getValue('employee_id',$objData))? 'selected':''}} value="{{$employee->employee_id}}">{{$employee->employee_name}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="nature_of_offense">Nature Of Offense<code>*</code></label>
                        <div class="col-sm-9">
                            <input name="nature_of_offense" value="{{ getValue('nature_of_offense', $objData) }}"
                                id="nature_of_offense" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="punishment">Punishment</label>
                        <div class="col-sm-9">
                            <input name="punishment" value="{{ getValue('punishment', $objData) }}"
                                id="punishment" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="dis_date" class="col-sm-3 col-form-label">Disciplinary Date</label>
                        <div class="col-sm-4">
                            <input name="dis_date" value="{{ getValue('dis_date', $objData) }}"
                                id="dis_date" type="date" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                            <label for="remarks" class="col-sm-3 col-form-label">Present Address<code>*</code></label>
                            <div class="col-sm-9">
                            <textarea name="remarks" id="remarks"   class="form-control" rows="2" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; height: 150px;">{{ getValue('remarks', $objData) }}</textarea>
                        </div>
                    </div>

            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <div class="offset-md-2 col-sm-9">
                <button type="submit" class="btn btn-primary">Save</button>&nbsp;&nbsp;
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
</script>
@include('layouts.form_script')
@endpush