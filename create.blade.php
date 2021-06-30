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

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="employee_name">Employee Name<code>*</code></label>
                                <div class="col-sm-9">
                                    <input value="{{getValue('employee_name', $objData)}}" name="employee_name"
                                        id="employee_name" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="employee_district">Employee District<code>*</code></label>
                                <div class="col-sm-9">
                                    <input value="{{getValue('employee_district', $objData)}}" name="employee_district"
                                        id="employee_district" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="employee_birth_date" class="col-sm-3 col-form-label">Employee Birth Date<code>*</code></label>
                                <div class="col-sm-4">
                                    <input value="{{getValue('employee_birth_date',$objData)}}" name="employee_birth_date"
                                        id="employee_birth_date" type="date" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="employee_posting">Employee Posting<code>*</code></label>
                                <div class="col-sm-9">
                                    <input value="{{getValue('employee_posting', $objData)}}" name="employee_posting"
                                        id="employee_posting" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="employee_rank">Employee Ranking<code>*</code></label>
                                <div class="col-sm-9">
                                    <input value="{{getValue('employee_rank', $objData)}}" name="employee_rank"
                                        id="employee_rank" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="employee_location">Employee Location</label>
                                <div class="col-sm-9">
                                    <input value="{{getValue('employee_location', $objData)}}" name="employee_location"
                                        id="employee_location" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="employee_cadre">Employee Cadre</label>
                                <div class="col-sm-9">
                                    <input value="{{getValue('employee_cadre', $objData)}}" name="employee_cadre"
                                        id="employee_cadre" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="employee_cadre_date" class="col-sm-3 col-form-label">Cadre Date<code>*</code></label>
                                <div class="col-sm-4">
                                    <input value="{{getValue('employee_cadre_date',$objData)}}" name="employee_cadre_date"
                                        id="employee_cadre_date" type="date" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="employee_sex">Employee Sex</label>
                                <div class="col-sm-9">
                                    <input value="{{getValue('employee_sex', $objData)}}" name="employee_sex"
                                        id="employee_sex" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label ml-2" for="employee_marital_state">Employee Marital Status<code>*</code></label><br><br>

                                <div class="form-check mx-2 mt-2">
                                    <input class="form-check-input" type="checkbox" name="employee_marital_state" onclick="check_spouse(1)" value="1"  id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Unmarried
                                    </label>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" name="employee_marital_state" onclick="check_spouse(2)" value="2"  id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Married
                                    </label>
                                </div>
                                
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="employee_mobile">Employee Mobile</label>
                                <div class="col-sm-9">
                                    <input value="{{getValue('employee_mobile', $objData)}}" name="employee_mobile"
                                        id="employee_mobile" type="text" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="employee_father_name">Father Name</label>
                                <div class="col-sm-9">
                                    <input value="{{getValue('employee_father_name', $objData)}}" name="employee_father_name"
                                        id="employee_father_name" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="employee_mother_name">Mother Name</label>
                                <div class="col-sm-9">
                                    <input value="{{getValue('employee_mother_name', $objData)}}" name="employee_mother_name"
                                        id="employee_mother_name" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="employee_designation">Designation</label>
                                <div class="col-sm-9">
                                    <input value="{{getValue('employee_designation', $objData)}}" name="employee_designation"
                                        id="employee_designation" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="employee_prl_date" class="col-sm-3 col-form-label">Employee PRL Date</label>
                                <div class="col-sm-4">
                                    <input value="{{getValue('employee_prl_date',$objData)}}" name="employee_prl_date"
                                        id="employee_prl_date" type="date" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="employee_join_date" class="col-sm-3 col-form-label">Join Date<code>*</code></label>
                                <div class="col-sm-4">
                                    <input value="{{getValue('employee_join_date',$objData)}}" name="employee_join_date"
                                        id="employee_join_date" type="date" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="employee_batch">Batch</label>
                                <div class="col-sm-9">
                                    <input value="{{getValue('employee_batch', $objData)}}" name="employee_batch"
                                        id="employee_batch" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="employee_confirm_g_o_date" class="col-sm-3 col-form-label">Confirm G.O Date</label>
                                <div class="col-sm-4">
                                    <input value="{{getValue('employee_confirm_g_o_date',$objData)}}" name="employee_confirm_g_o_date"
                                        id="employee_confirm_g_o_date" type="date" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="employee_religion">Religion</label>
                                <div class="col-sm-9">
                                    <input value="{{getValue('employee_religion', $objData)}}" name="employee_religion"
                                        id="employee_religion" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="employee_email">Email<code>*</code></label>
                                <div class="col-sm-9">
                                    <input value="{{getValue('employee_email', $objData)}}" name="employee_email"
                                        id="employee_email" type="text" class="form-control">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="form-group row">
                            <label for="employee_present_address" class="col-sm-3 col-form-label">Present Address<code>*</code></label>
                            <div class="col-sm-9">
                            <textarea name="employee_present_address" id="employee_present_address"   class="form-control editor" rows="3" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; height: 172px;">{{getValue('employee_present_address',$objData)}}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                            <label for="employee_permanent_address" class="col-sm-3 col-form-label">Permanent Address</label>
                            <div class="col-sm-9">
                            <textarea name="employee_permanent_address" id="employee_permanent_address"   class="form-control editor" rows="3" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; height: 172px;">{{getValue('employee_permanent_address',$objData)}}</textarea>
                        </div>
                    </div>
                    <br>

                    <div id="checkSpouse">
                        <div><h4>Spouse Information(If have)</h4></div>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="spouse_name">Spouse Name</label>
                                    <div class="col-sm-9">
                                        <input value="{{getValue('spouse_name', $objData)}}" name="spouse_name"
                                            id="spouse_name" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="spouse_occup">Spouse Occupation</label>
                                    <div class="col-sm-9">
                                        <input value="{{getValue('spouse_occup', $objData)}}" name="spouse_occup"
                                            id="spouse_occup" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="spouse_desg">Spouse Designation</label>
                                    <div class="col-sm-9">
                                        <input value="{{getValue('spouse_desg', $objData)}}" name="spouse_desg"
                                            id="spouse_desg" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="spouse_dist">Home Districet</label>
                                    <div class="col-sm-9">
                                        <input value="{{getValue('spouse_dist', $objData)}}" name="spouse_dist"
                                            id="spouse_dist" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="spouse_org">Organization</label>
                                    <div class="col-sm-9">
                                        <input value="{{getValue('spouse_org', $objData)}}" name="spouse_org"
                                            id="spouse_org" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="spouse_loc">Location</label>
                                    <div class="col-sm-9">
                                        <input value="{{getValue('spouse_loc', $objData)}}" name="spouse_loc"
                                            id="spouse_loc" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div id="checkChild">
                        <div><h4>Childs Information(If have)</h4></div>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="child_name">Child Name</label>
                                    <div class="col-sm-9">
                                        <input value="{{getValue('child_name', $objData)}}" name="child_name"
                                            id="child_name" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="child_birth" class="col-sm-3 col-form-label">Birth Date</label>
                                    <div class="col-sm-4">
                                        <input value="{{getValue('child_birth',$objData)}}" name="child_birth"
                                            id="child_birth" type="date" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="child_sex">Sex</label>
                                    <div class="col-sm-9">
                                        <input value="{{getValue('child_sex', $objData)}}" name="child_sex"
                                            id="child_sex" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div id="checkEducation">
                        <div><h4>Educational Information(If have)</h4></div>
                        <div class="text-center pb-2"><button type="button" class="btn btn-sm btn-info" id="addMore">Add More</button></div>
                        <div class="row" id="myRow">

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="ins_name">Institute Name</label>
                                    <div class="col-sm-9">
                                        <input value="" name="ins_name"
                                            id="ins_name" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="degree" class="col-sm-3 col-form-label">Degree</label>
                                    <div class="col-sm-9">
                                        <input value="" name="degree"
                                            id="degree" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="result" class="col-sm-3 col-form-label">Result</label>
                                    <div class="col-sm-9">
                                        <input value="" name="result"
                                            id="result" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="subject">Subject</label>
                                    <div class="col-sm-9">
                                        <input value="" name="subject"
                                            id="subject" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="passing_year">Passing Year</label>
                                    <div class="col-sm-9">
                                        <input value="" name="passing_year"
                                            id="passing_year" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

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

    $("#checkSpouse").hide();
    $("#checkChild").hide();

    function check_spouse(spouseVal){
        if(spouseVal == 2){
            $("#checkSpouse").show();
            $("#checkChild").show();
            $('#flexCheckDefault').prop('checked', true);
            $('#flexCheckChecked').prop('checked', false);
        } else {
            $("#checkSpouse").hide();
            $("#checkChild").hide();
            $('#flexCheckChecked').prop('checked', true);
            $('#flexCheckDefault').prop('checked', false);
        }
    }


    $(document).ready(function () {

        $('#addMore').on('click', function () {
        // cnt++;
        $('#myRow')
        .eq(0)
        .clone()
        .show()
            .find("input").val("").end() // ***
            .insertAfter("#myRow:last-child");

        });
    });



// document.getElementById("checkSpouse").hide();
</script>
@include('layouts.form_script')
@endpush