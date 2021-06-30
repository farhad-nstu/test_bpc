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
                        <a href="{{url($bUrl.'/'.$objData->dis_act_id.'/edit')}}" class="btn btn-info"><i
                                class="mdi mdi-plus"></i> <i class="fa fa-edit"></i> Edit Posting</a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="col-md-11">

                <div class="form-group row">
                    <label for="h_name" class="col-sm-3 col-form-label col-form-label-lg">Title</label>
                    <div class="col-sm-9">
                        {{ $objData->employee->employee_name }}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="h_name" class="col-sm-3 col-form-label col-form-label-lg">Title</label>
                    <div class="col-sm-9">
                        {{ getValue('nature_of_offense', $objData) }}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="location" class="col-sm-3 col-form-label">Rank</label>
                    <div class="col-sm-9">
                        {{ getValue('punishment', $objData) }}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="location" class="col-sm-3 col-form-label">Date Of Posting</label>
                    <div class="col-sm-9">
                        {{ getValue('dis_date', $objData) }}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="location" class="col-sm-3 col-form-label">Pay Scale</label>
                    <div class="col-sm-9">
                        {{ getValue('remarks', $objData) }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- /.content -->



<!-- Modal -->
<div class="modal fade" id="windowmodal" tabindex="-1" role="dialog" aria-labelledby="windowmodal" aria-hidden="true">
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



@endsection



@push('js')

@include('layouts.form_script')
@endpush