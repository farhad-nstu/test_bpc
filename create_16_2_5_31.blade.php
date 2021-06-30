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

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="employee_name">Employee Name<code>*</code></label>
                                <div class="col-sm-9">
                                    <input value="" name="employee_name"
                                        id="employee_name" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="employee_district">Employee District<code>*</code></label>
                                <div class="col-sm-9">
                                    <input value="" name="employee_district"
                                        id="employee_district" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="employee_birth_date" class="col-sm-3 col-form-label">Employee Birth Date<code>*</code></label>
                                <div class="col-sm-4">
                                    <input value="" name="employee_birth_date"
                                        id="employee_birth_date" type="date" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="employee_posting">Employee Posting<code>*</code></label>
                                <div class="col-sm-9">
                                    <input value="" name="employee_posting"
                                        id="employee_posting" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="employee_rank">Employee Ranking<code>*</code></label>
                                <div class="col-sm-9">
                                    <input value="" name="employee_rank"
                                        id="employee_rank" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="employee_location">Employee Location</label>
                                <div class="col-sm-9">
                                    <input value="" name="employee_location"
                                        id="employee_location" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="employee_cadre">Employee Cadre</label>
                                <div class="col-sm-9">
                                    <input value="" name="employee_cadre"
                                        id="employee_cadre" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="employee_cadre_date" class="col-sm-3 col-form-label">Cadre Date<code>*</code></label>
                                <div class="col-sm-4">
                                    <input value="" name="employee_cadre_date"
                                        id="employee_cadre_date" type="date" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="employee_sex" class="col-sm-3 col-form-label">Sex <code>*</code>
                                </label>
                                <div class="col-sm-9">
                                <select name="employee_sex"   onchange="formValidation('employee_sex')" id="employee_sex"  class="form-control" >
                                    <option value="">Select Sex</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
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
                                    <input value="" name="employee_mobile"
                                        id="employee_mobile" type="text" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="employee_father_name">Father Name</label>
                                <div class="col-sm-9">
                                    <input value="" name="employee_father_name"
                                        id="employee_father_name" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="employee_mother_name">Mother Name</label>
                                <div class="col-sm-9">
                                    <input value="" name="employee_mother_name"
                                        id="employee_mother_name" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="employee_designation">Designation</label>
                                <div class="col-sm-9">
                                    <input value="" name="employee_designation"
                                        id="employee_designation" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="employee_prl_date" class="col-sm-3 col-form-label">Employee PRL Date</label>
                                <div class="col-sm-4">
                                    <input value="" name="employee_prl_date"
                                        id="employee_prl_date" type="date" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="employee_join_date" class="col-sm-3 col-form-label">Join Date<code>*</code></label>
                                <div class="col-sm-4">
                                    <input value="" name="employee_join_date"
                                        id="employee_join_date" type="date" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="employee_batch">Batch</label>
                                <div class="col-sm-9">
                                    <input value="" name="employee_batch"
                                        id="employee_batch" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="employee_confirm_g_o_date" class="col-sm-3 col-form-label">Confirm G.O. Date</label>
                                <div class="col-sm-4">
                                    <input value="" name="employee_confirm_g_o_date"
                                        id="employee_confirm_g_o_date" type="date" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="employee_religion" class="col-sm-3 col-form-label">Religion <code>*</code>
                                </label>
                                <div class="col-sm-9">
                                <select name="employee_religion"   onchange="formValidation('employee_religion')" id="employee_religion"  class="form-control" >
                                    <option value="">Select Religion</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddhist">Buddhist</option>
                                    <option value="Khristan">Khristan</option>
                                    <option value="Other">Other</option>
                                </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="employee_email">Email<code>*</code></label>
                                <div class="col-sm-9">
                                    <input value="" name="employee_email"
                                        id="employee_email" type="text" class="form-control">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="form-group row">
                            <label for="employee_present_address" class="col-sm-3 col-form-label">Present Address<code>*</code></label>
                            <div class="col-sm-9">
                            <textarea name="employee_present_address" id="employee_present_address"   class="form-control" rows="2" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; height: 150px;"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                            <label for="employee_permanent_address" class="col-sm-3 col-form-label">Permanent Address</label>
                            <div class="col-sm-9">
                            <textarea name="employee_permanent_address" id="employee_permanent_address"   class="form-control" rows="2" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; height: 150px;"></textarea>
                        </div>
                    </div>
                    <br>
                    
                    <!-- Spouse Information Start -->
                    <div id="checkSpouse">
                        <div><h4>Spouse Information(If have)</h4></div>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="spouse_name">Spouse Name</label>
                                    <div class="col-sm-9">
                                        <input value="" name="spouse_name"
                                            id="spouse_name" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="spouse_occup">Spouse Occupation</label>
                                    <div class="col-sm-9">
                                        <input value="" name="spouse_occup"
                                            id="spouse_occup" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="spouse_desg">Spouse Designation</label>
                                    <div class="col-sm-9">
                                        <input value="" name="spouse_desg"
                                            id="spouse_desg" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="spouse_dist">Home Districet</label>
                                    <div class="col-sm-9">
                                        <input value="" name="spouse_dist"
                                            id="spouse_dist" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="spouse_org">Organization</label>
                                    <div class="col-sm-9">
                                        <input value="" name="spouse_org"
                                            id="spouse_org" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="spouse_loc">Location</label>
                                    <div class="col-sm-9">
                                        <input value="" name="spouse_loc"
                                            id="spouse_loc" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Spouse Information End -->

                    <!-- Child Information Start -->
                    <div id="checkChild">
                        <div><h4>Child Information</h4></div>
                        <div class="text-center pb-2"><button type="button" class="btn btn-sm btn-info" id="addMoreChild">Add More</button></div>
                        <div class="row">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">Name</th>
                                        <th scope="col" class="text-center">Birth Date</th>
                                        <th scope="col" class="text-center">Sex</th>
                                        <th scope="col" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="myChildRow">
                                        <td>
                                            <input value="" name="child_name[]" id="child_name" type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input name="child_birth[]" id="child_birth" type="date" class="form-control">
                                        </td>
                                        <td>
                                            <select name="child_sex[]"   onchange="formValidation('child_sex')" id="child_sex"  class="form-control" >
                                                <option value="">Select Sex</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </td>
                                        <td>
                                            <button id="removeChildRow" type="button" class="removeChildRow btn btn-sm btn-info"><i class="fa fa-minus-circle"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>                            
                        </div>
                    </div>
                    <!-- Child Information End -->
                    
                    <!-- Language Information Start -->
                    <div id="checkLanguage">
                        <div><h4>Language Information</h4></div>
                        <div class="text-center pb-2"><button type="button" class="btn btn-sm btn-info" id="addMoreLang">Add More</button></div>
                        <div class="row">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">Language</th>
                                        <th scope="col" class="text-center">Read</th>
                                        <th scope="col" class="text-center">Write</th>
                                        <th scope="col" class="text-center">Speak</th>
                                        <th scope="col" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="myLangRow">
                                        <td width="30%">       
                                            <select name="lang_name[]"   onchange="formValidation('lang_name')" id="lang_name"  class="form-control" >
                                                <option value="">Select Language</option>
                                                <option value="Bangla">Bangla</option>
                                                <option value="English">English</option>
                                                <option value="Arabic">Arabic</option>
                                                <option value="Hindi">Hindi</option>
                                                <option value="Japanese">Japanese</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <input class="form-check-input" style="position: relative; margin-left: 0; width: 30px; height: 30px;" type="checkbox" name="readLang[]" value="Y"  id="readLang">
                                        </td> 
                                        <td class="text-center">
                                            <!-- <input value="Y" name="writeLang[]" id="writeLang" type="checkbox" class="form-control"> -->
                                            <input class="form-check-input" style="position: relative; margin-left: 0; width: 30px; height: 30px;" type="checkbox" name="writeLang[]" value="Y"  id="writeLang">
                                        </td>
                                        <td class="text-center">
                                            <input class="form-check-input" style="position: relative; margin-left: 0; width: 30px; height: 30px;" type="checkbox" name="speakLang[]" value="Y"  id="speakLang">
                                        </td>
                                        <td>
                                            <button id="removeLangRow" type="button" class="removeLangRow btn btn-sm btn-info"><i class="fa fa-minus-circle"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>                            
                        </div>
                    </div>
                    <!-- Language Information End -->

                    <!-- Educational Information Start -->
                    <div id="checkEducation">
                        <div><h4>Educational Information</h4></div>
                        <div class="text-center pb-2"><button type="button" class="btn btn-sm btn-info" id="addMore">Add More</button></div>
                        <div class="row">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">Institute</th>
                                        <th scope="col" class="text-center">Subject</th>
                                        <th scope="col" class="text-center">Degree</th>
                                        <th scope="col" class="text-center">PassingYear</th>
                                        <th scope="col" class="text-center">Result</th>
                                        <th scope="col" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="myRow">
                                        <td>
                                            <input value="" name="ins_name[]" id="ins_name" type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input value="" name="subject[]" id="subject" type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input value="" name="degree[]" id="degree" type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input value="" name="passing_year[]" id="passing_year" type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input value="" name="result[]" id="result" type="text" class="form-control">
                                        </td>
                                        <td>
                                            <button id="removeRow" type="button" class="removeRow btn btn-sm btn-info"><i class="fa fa-minus-circle"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>                            
                        </div>
                    </div>
                    <!-- Educational Information End -->


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

    //// Child Part ////
    var childCount = 0;
    $(document).ready(function () {
        $('#addMoreChild').on('click', function () {
            childCount++;
            $('#myChildRow')
            .eq(0)
            .clone()
            .show()
            .find("input").val("").end()
            .insertAfter("#myChildRow:last-child");
        });
    });

    $(document).on('click', '#removeChildRow', function () {
        if(childCount >= 1){
            childCount--;
            $(this).closest('#myChildRow').remove();       
        }     
    });

    //// Educational Part ////
    var cnt = 0;
    $(document).ready(function () {

        $('#addMore').on('click', function () {
        cnt++;
        $('#myRow')
        .eq(0)
        .clone()
        .show()
            .find("input").val("").end() 
            .insertAfter("#myRow:last-child");

        });
    });

    $(document).on('click', '#removeRow', function () {

        if(cnt >= 1){
            cnt--;
            $(this).closest('#myRow').remove();       
        }     

    });

    //// Language Part ////
    var langCount = 0;
    $(document).ready(function () {

        $('#addMoreLang').on('click', function () {            
            langCount++;
            $('#myLangRow')
            .eq(0)
            .clone()
            .show()
            .find("input").val("").end()
            .insertAfter("#myLangRow:last-child");
        });
    });

    $(document).on('click', '#removeLangRow', function () {
        if(langCount >= 1){
            langCount--;
            $(this).closest('#myLangRow').remove();       
        }     
    });



// document.getElementById("checkSpouse").hide();
</script>
@include('layouts.form_script')
@endpush