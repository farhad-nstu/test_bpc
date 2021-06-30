
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

        <form method="post" action="{{url($bUrl.'/update')}}" enctype="multipart/form-data">
          @csrf

          {!! validation_errors($errors) !!}

          {!! validation_errors($errors) !!}
          @if (Session::get('danger'))
          <div style="background-color: red; width: 40%;" class="alert alert-success alert-dismissible fade show" role="alert">
            <strong class="text-primary">{{  Session::get('danger')  }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>      
          @endif

          <input type="hidden" value="{{ getValue($tableID, $objData) }}" id="id" name="{{ $tableID }}">

          <div class="row">

            <div class="col-md-6">

              <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="employee_bpc_id">Employee ID<code>*</code></label>
                <div class="col-sm-9">
                  <input value="{{getValue('employee_bpc_id', $objData)}}" name="employee_bpc_id" id="employee_bpc_id" type="text" class="form-control">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="employee_name">Name<code>*</code></label>
                <div class="col-sm-9">
                  <input value="{{getValue('employee_name', $objData)}}" name="employee_name" id="employee_name"
                    type="text" class="form-control">
                </div>
              </div>

              <div class="form-group row">
                <label for="employee_district" class="col-sm-3 col-form-label">District <code>*</code>
                </label>
                <div class="col-sm-9">
                  <select name="employee_district" id="employee_district" class="form-control">
                    @if(!empty($districts))
                    @foreach($districts as $district)
                    <option {{ (getValue('employee_district',$objData) == $district->district_id)? 'selected':'' }}
                      value="{{ $district->district_id }}">{{ $district->district_name }}</option>
                    @endforeach
                    @endif
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="employee_unit" class="col-sm-3 col-form-label">Unit<code>*</code>
                </label>
                <div class="col-sm-9">
                  <select name="employee_unit" id="employee_unit" class="form-control">
                    @if(!empty($units))
                    @foreach($units as $unit)
                    <option {{ (getValue('employee_unit',$objData) == $unit->unit_id)? 'selected':'' }}
                      value="{{ $unit->unit_id }}">{{ $unit->unit_title }}</option>
                    @endforeach
                    @endif
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="employee_birth_date" class="col-sm-3 col-form-label">Date Of Birth<code>*</code></label>
                <div class="col-sm-4">
                  <input value="{{getValue('employee_birth_date',$objData)}}" name="employee_birth_date" type="text"
                    class="form-control datepicker" autocomplete="off">
                </div>
              </div>

              <div class="form-group row">
                <label for="employee_payscale_grade" class="col-sm-3 col-form-label">Payscale Grade<code>*</code>
                </label>
                <div class="col-sm-9">
                  <select onchange="take_gradewise_salary(this.value)" name="employee_payscale_grade" id="employee_payscale_grade" class="form-control">
                    @if(!empty($payscaleGrades))
                    @foreach($payscaleGrades as $payscaleGrade)
                    <option {{ (getValue('employee_payscale_grade',$objData) == $payscaleGrade->payscale_grad_no)? 'selected':'' }} value="{{ $payscaleGrade->payscale_grad_no }}">{{ $payscaleGrade->payscale_grad_no }}</option>
                    @endforeach
                    @endif
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="employee_posting">Posting<code>*</code></label>
                <div class="col-sm-9">
                  <input value="{{getValue('employee_posting', $objData)}}" name="employee_posting"
                    id="employee_posting" type="text" class="form-control">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="employee_rank">Ranking<code>*</code></label>
                <div class="col-sm-9">
                  <input value="{{getValue('employee_rank', $objData)}}" name="employee_rank" id="employee_rank"
                    type="text" class="form-control">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="employee_location">Location</label>
                <div class="col-sm-9">
                  <input value="{{getValue('employee_location', $objData)}}" name="employee_location"
                    id="employee_location" type="text" class="form-control">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="employee_cadre">Cadre</label>
                <div class="col-sm-9">
                  <input value="{{getValue('employee_cadre', $objData)}}" name="employee_cadre" id="employee_cadre"
                    type="text" class="form-control">
                </div>
              </div>

              <div class="form-group row">
                <label for="employee_cadre_date" class="col-sm-3 col-form-label">Date Of Cadre</label>
                <div class="col-sm-4">
                  <input value="{{getValue('employee_cadre_date',$objData)}}" name="employee_cadre_date" type="text"
                    class="form-control datepicker" autocomplete="off">
                </div>
              </div>

              <div class="form-group row">
                <label for="employee_sex" class="col-sm-3 col-form-label">Sex <code>*</code>
                </label>
                <div class="col-sm-9">
                  <select name="employee_sex" onchange="formValidation('employee_sex')" id="employee_sex"
                    class="form-control">
                    <option value="">Select Sex</option>
                    <option {{(getValue('employee_sex',$objData) == "Male")? 'selected':''}} value="Male">Male</option>
                    <option {{(getValue('employee_sex',$objData) == "Female")? 'selected':''}} value="Female">Female
                    </option>
                    <option {{(getValue('employee_sex',$objData) == "Other")? 'selected':''}} value="Other">Other
                    </option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-form-label ml-2" for="employee_marital_state">Marital
                  Status<code>*</code></label><br><br>

                <div class="form-check mx-2 mt-2">
                  @if(getValue('employee_marital_state', $objData) == 1)
                  <input class="form-check-input" type="checkbox" name="employee_marital_state"
                    onclick="check_spouse(1)" value="1" id="flexCheckChecked" checked>
                  @else
                  <input class="form-check-input" type="checkbox" name="employee_marital_state"
                    onclick="check_spouse(1)" value="1" id="flexCheckChecked">
                  @endif
                  <label class="form-check-label" for="flexCheckDefault">
                    Unmarried
                  </label>
                </div>

                <div class="form-check mt-2">
                  @if(getValue('employee_marital_state', $objData) == 2)
                  <input class="form-check-input" type="checkbox" name="employee_marital_state"
                    onclick="check_spouse(2)" value="2" id="flexCheckDefault" checked>
                  @else
                  <input class="form-check-input" type="checkbox" name="employee_marital_state"
                    onclick="check_spouse(2)" value="2" id="flexCheckDefault">
                  @endif
                  <label class="form-check-label" for="flexCheckChecked">
                    Married
                  </label>
                </div>


              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="employee_mobile">Mobile No</label>
                <div class="col-sm-9">
                  <input value="{{getValue('employee_mobile', $objData)}}" name="employee_mobile" id="employee_mobile"
                    type="text" class="form-control">
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
                <label for="employee_department" class="col-sm-3 col-form-label">Department<code>*</code>
                </label>
                <div class="col-sm-9">
                  <select name="employee_department" id="employee_department" class="form-control">
                    @if(!empty($departments))
                    @foreach($departments as $department)
                    <option {{ (getValue('employee_department',$objData) == $department->dpt_id)? 'selected':'' }}
                      value="{{ $department->dpt_id }}">{{ $department->dpt_title }}</option>
                    @endforeach
                    @endif
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="employee_designation" class="col-sm-3 col-form-label">Designation
                  <code>*</code></label>
                <div class="col-sm-9">
                  <select name="employee_designation" id="employee_designation" class="form-control">
                    @if(!empty($designations))
                    @foreach($designations as $designation)
                    <option {{ (getValue('employee_designation',$objData) == $designation->desg_id)? 'selected':'' }}
                      value="{{ $designation->desg_id }}">{{ $designation->desg_title }}</option>
                    @endforeach
                    @endif
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="employee_basic_salary" class="col-sm-3 col-form-label">Basic Salary<code>*</code>
                </label>
                <div id="basicSalary" class="col-sm-9">
                  <select name="employee_basic_salary" id="employee_basic_salary" class="form-control">
                    @foreach($employeeSalaries as $employeeSalary)
                    <option {{ (getValue('employee_basic_salary',$objData) == $employeeSalary->payscale_step_salary)? 'selected':'' }} value="{{ $employeeSalary->payscale_step_salary }}">{{ $employeeSalary->payscale_step_salary }}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="employee_prl_date" class="col-sm-3 col-form-label">PRL Date</label>
                <div class="col-sm-4">
                  <input value="{{getValue('employee_prl_date',$objData)}}" name="employee_prl_date" type="text"
                    class="form-control datepicker">
                </div>
              </div>

              <div class="form-group row">
                <label for="employee_join_date" class="col-sm-3 col-form-label">Date Of Joining<code>*</code></label>
                <div class="col-sm-9">
                  <input value="{{getValue('employee_join_date',$objData)}}" name="employee_join_date" type="text"
                    class="form-control datepicker">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="employee_batch">Batch</label>
                <div class="col-sm-9">
                  <input value="{{getValue('employee_batch', $objData)}}" name="employee_batch" id="employee_batch"
                    type="text" class="form-control">
                </div>
              </div>

              <div class="form-group row">
                <label for="employee_confirm_g_o_date" class="col-sm-3 col-form-label">Confirm G.O. Date</label>
                <div class="col-sm-4">
                  <input value="{{getValue('employee_confirm_g_o_date',$objData)}}" name="employee_confirm_g_o_date"
                    type="text" class="form-control datepicker">
                </div>
              </div>

              <div class="form-group row">
                <label for="employee_religion" class="col-sm-3 col-form-label">Religion <code>*</code>
                </label>
                <div class="col-sm-9">
                  <select name="employee_religion" id="employee_religion" class="form-control">
                    @if(!empty($religions))
                    @foreach($religions as $religion)
                    <option {{(getValue('employee_religion',$objData) == $religion->id)? 'selected':''}}
                      value="{{ $religion->id }}">{{ $religion->name }}</option>
                    @endforeach
                    @endif
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="employee_email">Email<code>*</code></label>
                <div class="col-sm-9">
                  <input value="{{getValue('employee_email', $objData)}}" name="employee_email" id="employee_email"
                    type="text" class="form-control">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="employee_nid">NID<code>*</code></label>
                <div class="col-sm-9">
                  <input value="{{getValue('employee_nid', $objData)}}" name="employee_nid" id="employee_nid" type="text" class="form-control">
                </div>
              </div>

            </div>
          </div>

          <div class="form-group row">
            <label for="employee_present_address" class="col-sm-3 col-form-label">Present Address<code>*</code></label>
            <div class="col-sm-9">
              <textarea name="employee_present_address" id="employee_present_address" class="form-control"
                placeholder="Enter ..."
                style="margin-top: 0px; margin-bottom: 0px; height: 150px;">{{getValue('employee_present_address',$objData)}}</textarea>
            </div>
          </div>

          <div class="form-group row">
            <label for="employee_permanent_address" class="col-sm-3 col-form-label">Permanent Address</label>
            <div class="col-sm-9">
              <textarea name="employee_permanent_address" id="employee_permanent_address" class="form-control" rows="2"
                placeholder="Enter ..."
                style="margin-top: 0px; margin-bottom: 0px; height: 150px;">{{getValue('employee_permanent_address',$objData)}}</textarea>
            </div>
          </div>
          <br>

          <!-- Spouse Information -->
          @if(!empty(getValue('employee_spouse', $objData)))
          <div id="checkSpouse">
            <div>
              <h4>Spouse Information(If have)</h4>
            </div>
            <div class="row">

              @php
              $spouseJsonData = getValue('employee_spouse', $objData);
              $spouseObjectData = json_decode($spouseJsonData);
              $spouseData = (array) $spouseObjectData;
              @endphp


              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label" for="spouse_name">Spouse Name</label>
                  <div class="col-sm-9">
                    <input value="{{ $spouseData['spouse_name'] }}" name="spouse_name" id="spouse_name" type="text"
                      class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label" for="spouse_occup">Spouse Occupation</label>
                  <div class="col-sm-9">
                    <input value="{{ $spouseData['spouse_occup'] }}" name="spouse_occup" id="spouse_occup" type="text"
                      class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label" for="spouse_desg">Spouse Designation</label>
                  <div class="col-sm-9">
                    <input value="{{ $spouseData['spouse_desg'] }}" name="spouse_desg" id="spouse_desg" type="text"
                      class="form-control">
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label for="spouse_dist" class="col-sm-3 col-form-label">Home District
                  </label>
                  <div class="col-sm-9">
                    <select name="spouse_dist" id="spouse_dist" class="form-control">
                      @if(!empty($districts))
                      @foreach($districts as $district)
                      <option {{($spouseData['spouse_dist'] == $district->district_id)? 'selected':''}}
                        value="{{ $district->district_id }}">{{ $district->district_name }}</option>
                      @endforeach
                      @endif
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label" for="spouse_org">Organization</label>
                  <div class="col-sm-9">
                    <input value="{{ $spouseData['spouse_org'] }}" name="spouse_org" id="spouse_org" type="text"
                      class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label" for="spouse_loc">Location</label>
                  <div class="col-sm-9">
                    <input value="{{ $spouseData['spouse_loc'] }}" name="spouse_loc" id="spouse_loc" type="text"
                      class="form-control">
                  </div>
                </div>
              </div>

            </div>
          </div>
          @endif
          <!-- Spouse Information End -->

          <!-- Child Information Start -->
          @if(!empty(getValue('employee_children', $objData)))
          <div id="checkChild">
            <div>
              <h4>Child Information</h4>
            </div>
            <div class="text-center pb-2"><button type="button" class="btn btn-sm btn-info" id="addMoreChild">Add
                More</button></div>
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
                  @php
                  $childJsonData = getValue('employee_children', $objData);
                  $childObjectData = json_decode($childJsonData);
                  $childData = (array) $childObjectData;
                  @endphp
                  @if(is_array($childData['child_name']))
                  @for($i = 0; $i < count($childData['child_name']); $i++) <tr id="myChildRow">
                    <td>
                      <input value="{{ $childData['child_name'][$i] }}" name="child_name[]" id="child_name" type="text"
                        class="form-control">
                    </td>
                    <td>
                      <input value="{{ $childData['child_birth'][0] }}" name="child_birth[]" type="text"
                        class="form-control datepicker">
                    </td>
                    <td>
                      <select name="child_sex[]" onchange="formValidation('child_sex')" id="child_sex"
                        class="form-control">
                        <option value="">Select Sex</option>
                        <option {{($childData['child_sex'][$i] == "Male")? 'selected':''}} value="Male">Male</option>
                        <option {{($childData['child_sex'][$i] == "Female")? 'selected':''}} value="Female">Female
                        </option>
                        <option {{($childData['child_sex'][$i] == "Other")? 'selected':''}} value="Other">Other</option>
                      </select>
                    </td>
                    <td>
                      <button id="removeChildRow" type="button" class="removeChildRow btn btn-sm btn-info"><i
                          class="fa fa-minus-circle"></i></button>
                    </td>
                    </tr>
                    @endfor
                    @else
                    <tr id="myChildRow">
                      <td class="text-center">
                        <input value="{{ $childData['child_name'] }}" name="child_name[]" id="child_name" type="text"
                          class="form-control">
                      </td>
                      <td class="text-center">
                        <input value="{{ $childData['child_birth'] }}" name="child_birth[]" id="child_birth" type="date"
                          class="form-control">
                      </td>
                      <td class="text-center">
                        <select name="child_sex[]" id="child_sex"
                          class="form-control">
                          <option value="">Select Sex</option>
                          <option {{($childData['child_sex'] == "Male")? 'selected':''}} value="Male">Male</option>
                          <option {{($childData['child_sex'] == "Female")? 'selected':''}} value="Female">Female
                          </option>
                          <option {{($childData['child_sex'] == "Other")? 'selected':''}} value="Other">Other</option>
                        </select>
                      </td>
                      <td>
                        <button id="removeChildRow" type="button" class="removeChildRow btn btn-sm btn-info"><i
                            class="fa fa-minus-circle"></i></button>
                      </td>
                    </tr>
                    @endif
                </tbody>
              </table>
            </div>
          </div>
          @endif
          <!-- Child Information End -->

          <!-- Language Information Start -->
          @if(!empty(getValue('employee_language', $objData)))
          <div id="checkLanguage">
            <div>
              <h4>Language Information</h4>
            </div>
            <div class="text-center pb-2"><button type="button" class="btn btn-sm btn-info" id="addMoreLang">Add
                More</button></div>
            <div class="row">
              @php
              $langJsonData = getValue('employee_language', $objData);
              $langObjectData = json_decode($langJsonData);
              $langData = (array) $langObjectData;
              @endphp
              <table class="table" id="langTable">
                <thead>
                  <tr>
                    <th scope="col" class="text-center">Language</th>
                    <th scope="col" class="text-center">Read</th>
                    <th scope="col" class="text-center">Write</th>
                    <th scope="col" class="text-center">Speak</th>
                    <th scope="col" class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody id="langTbody">

                  @if(is_array($langData['lang_name']))

                  @for($i = 0; $i < count($langData['lang_name']); $i++) <tr id="myLangRow">
                    <td width="30%">
                      @if(!empty($langData['lang_name'][$i]))
                      <select name="lang_name[]" id="lang_name" class="form-control">
                        <option value="">Select Language</option>
                        <option {{($langData['lang_name'][$i] == "Bangla")? 'selected':''}} value="Bangla">Bangla
                        </option>
                        <option {{($langData['lang_name'][$i] == "English")? 'selected':''}} value="English">English
                        </option>
                        <option {{($langData['lang_name'][$i] == "Arabic")? 'selected':''}} value="Arabic">Arabic
                        </option>
                        <option {{($langData['lang_name'][$i] == "Hindi")? 'selected':''}} value="Hindi">Hindi</option>
                        <option {{($langData['lang_name'][$i] == "Japanese")? 'selected':''}} value="Japanese">Japanese
                        </option>
                      </select>
                      @else
                      <select name="lang_name[]" id="lang_name" class="form-control">
                        <option value="">Select Language</option>
                        <option value="Bangla">Bangla</option>
                        <option value="English">English</option>
                        <option value="Arabic">Arabic</option>
                        <option value="Hindi">Hindi</option>
                        <option value="Japanese">Japanese</option>
                      </select>
                      @endif
                    </td>

                    <td class="text-center">
                      @if(!empty($langData['readLang'][$i]))
                      <input class="form-check-input"
                        style="position: relative; margin-left: 0; width: 20px; height: 20px;" type="checkbox"
                        name="readLang[]" {{($langData['readLang'][$i] == "Y")? 'checked':''}}
                        value="{{ $langData['readLang'][$i] }}" id="readLang">
                      @else
                      <input class="form-check-input"
                        style="position: relative; margin-left: 0; width: 20px; height: 20px;" type="checkbox"
                        name="readLang[]" value="Y" id="readLang">
                      @endif
                    </td>
                    <td class="text-center">
                      @if(!empty($langData['writeLang'][$i]))
                      <input class="form-check-input"
                        style="position: relative; margin-left: 0; width: 20px; height: 20px;" type="checkbox"
                        name="writeLang[]" {{($langData['writeLang'][$i] == "Y")? 'checked':''}}
                        value="{{ $langData['writeLang'][$i] }}" id="writeLang">
                      @else
                      <input class="form-check-input"
                        style="position: relative; margin-left: 0; width: 20px; height: 20px;" type="checkbox"
                        name="writeLang[]" value="Y" id="writeLang">
                      @endif
                    </td>
                    <td class="text-center">
                      @if(!empty($langData['speakLang'][$i]))
                      <input class="form-check-input"
                        style="position: relative; margin-left: 0; width: 20px; height: 20px;" type="checkbox"
                        name="speakLang[]" {{($langData['speakLang'][$i] == "Y")? 'checked':''}}
                        value="{{ $langData['speakLang'][$i] }}" id="speakLang">
                      @else
                      <input class="form-check-input"
                        style="position: relative; margin-left: 0; width: 20px; height: 20px;" type="checkbox"
                        name="speakLang[]" value="Y" id="speakLang">
                      @endif
                    </td>
                    <td>

                    </td>
                    </tr>
                    @endfor
                    @else
                    <tr id="myLangRow">
                      <td width="30%">
                        @if(!empty($langData['lang_name']))
                        <select name="lang_name[]" onchange="formValidation('lang_name')" id="lang_name"
                          class="form-control">
                          <option value="">Select Language</option>
                          <option {{($langData['lang_name'] == "Bangla")? 'selected':''}} value="Bangla">Bangla</option>
                          <option {{($langData['lang_name'] == "English")? 'selected':''}} value="English">English
                          </option>
                          <option {{($langData['lang_name'] == "Arabic")? 'selected':''}} value="Arabic">Arabic</option>
                          <option {{($langData['lang_name'] == "Hindi")? 'selected':''}} value="Hindi">Hindi</option>
                          <option {{($langData['lang_name'] == "Japanese")? 'selected':''}} value="Japanese">Japanese
                          </option>
                        </select>
                        @else
                        <select name="lang_name[]" id="lang_name" class="form-control">
                          <option value="">Select Language</option>
                          <option value="Bangla">Bangla</option>
                          <option value="English">English</option>
                          <option value="Arabic">Arabic</option>
                          <option value="Hindi">Hindi</option>
                          <option value="Japanese">Japanese</option>
                        </select>
                        @endif
                      </td>
                      <td class="text-center">
                        @if(!empty($langData['readLang']))
                        <input class="form-check-input"
                          style="position: relative; margin-left: 0; width: 20px; height: 20px;" type="checkbox"
                          name="readLang[]" {{($langData['readLang'] == "Y")? 'checked':''}}
                          value="{{ $langData['readLang'] }}" id="readLang">
                        @else
                        <input class="form-check-input"
                          style="position: relative; margin-left: 0; width: 20px; height: 20px;" type="checkbox"
                          name="readLang[]" value="Y" id="readLang">
                        @endif
                      </td>
                      <td class="text-center">
                        @if(!empty($langData['writeLang']))
                        <input class="form-check-input"
                          style="position: relative; margin-left: 0; width: 20px; height: 20px;" type="checkbox"
                          name="writeLang[]" {{($langData['writeLang'] == "Y")? 'checked':''}}
                          value="{{ $langData['writeLang']}} " id="writeLang">
                        @else
                        <input class="form-check-input"
                          style="position: relative; margin-left: 0; width: 20px; height: 20px;" type="checkbox"
                          name="writeLang[]" value="Y" id="writeLang">
                        @endif
                      </td>
                      <td class="text-center">
                        @if(!empty($langData['speakLang']))
                        <input class="form-check-input"
                          style="position: relative; margin-left: 0; width: 20px; height: 20px;" type="checkbox"
                          name="speakLang[]" {{($langData['speakLang'] == "Y")? 'checked':''}}
                          value="{{ $langData['speakLang'] }}" id="speakLang">
                        @else
                        <input class="form-check-input"
                          style="position: relative; margin-left: 0; width: 20px; height: 20px;" type="checkbox"
                          name="speakLang[]" value="Y" id="speakLang">
                        @endif
                      </td>
                      <td>

                      </td>
                    </tr>
                    @endif
                </tbody>
              </table>
            </div>
          </div>
          @endif
          <!-- Language Information End -->

          <!-- Educational Information Start -->
          @if(!empty(getValue('employee_education', $objData)))
          <div id="checkEducation">
            <div>
              <h4>Educational Information</h4>
            </div>
            <div class="text-center pb-2"><button type="button" class="btn btn-sm btn-info" id="addMore">Add
                More</button></div>
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
                  @php
                  $educationJsonData = getValue('employee_education', $objData);
                  $educationObjectData = json_decode($educationJsonData);
                  $educationData = (array) $educationObjectData;
                  @endphp
                  @if(is_array($educationData['ins_name']))
                  @for($i = 0; $i < count($educationData['ins_name']); $i++) <tr id="myRow">
                    <td>
                      <input value="{{ $educationData['ins_name'][$i] }}" name="ins_name[]" id="ins_name" type="text"
                        class="form-control">
                    </td>
                    <td>
                      <input value="{{ $educationData['subject'][$i] }}" name="subject[]" id="subject" type="text"
                        class="form-control">
                    </td>
                    <td>
                      <input value="{{ $educationData['degree'][$i] }}" name="degree[]" id="degree" type="text"
                        class="form-control">
                    </td>
                    <td>
                      <input value="{{ $educationData['passing_year'][$i] }}" name="passing_year[]" id="passing_year"
                        type="text" class="form-control">
                    </td>
                    <td>
                      <input value="{{ $educationData['result'][$i] }}" name="result[]" id="result" type="text"
                        class="form-control">
                    </td>
                    <td>
                      <button id="removeRow" type="button" class="removeRow btn btn-sm btn-info"><i
                          class="fa fa-minus-circle"></i></button>
                    </td>
                    </tr>
                    @endfor
                    @else
                    <tr id="myRow">
                      <td>
                        <input value="{{ $educationData['ins_name'] }}" name="ins_name[]" id="ins_name" type="text"
                          class="form-control">
                      </td>
                      <td>
                        <input value="{{ $educationData['subject'] }}" name="subject[]" id="subject" type="text"
                          class="form-control">
                      </td>
                      <td>
                        <input value="{{ $educationData['degree'] }}" name="degree[]" id="degree" type="text"
                          class="form-control">
                      </td>
                      <td>
                        <input value="{{ $educationData['passing_year'] }}" name="passing_year[]" id="passing_year"
                          type="text" class="form-control">
                      </td>
                      <td>
                        <input value="{{ $educationData['result'] }}" name="result[]" id="result" type="text"
                          class="form-control">
                      </td>
                      <td>
                        <button id="removeRow" type="button" class="removeRow btn btn-sm btn-info"><i
                            class="fa fa-minus-circle"></i></button>
                      </td>
                    </tr>
                    @endif
                </tbody>
              </table>
            </div>
          </div>
          @endif
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

@if(getValue('employee_marital_state', $objData) == 2)
$("#checkSpouse").show();
$("#checkChild").show();
@else
$("#checkSpouse").hide();
$("#checkChild").hide();
@endif

function check_spouse(spouseVal) {
  if (spouseVal == 2) {
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
$(document).ready(function() {
  $('#addMoreChild').on('click', function() {
    childCount++;
    $('#myChildRow')
      .eq(0)
      .clone()
      .show()
      .find("input").val("").end()
      .insertAfter("#myChildRow:last-child");
  });
});

$(document).on('click', '#removeChildRow', function() {
  if (childCount >= 1) {
    childCount--;
    $(this).closest('#myChildRow').remove();
  }
});

//// Educational Part ////
var cnt = 0;
$(document).ready(function() {

  $('#addMore').on('click', function() {
    cnt++;
    $('#myRow')
      .eq(0)
      .clone()
      .show()
      .find("input").val("").end()
      .insertAfter("#myRow:last-child");

  });
});

$(document).on('click', '#removeRow', function() {

  if (cnt >= 1) {
    cnt--;
    $(this).closest('#myRow').remove();
  }

});

/// Add new Lang Row
$(document).ready(function() {
  $('#addMoreLang').on('click', function() {
    var markup =
      "<tr id='myLangRow'><td><select name='lang_name[]' id='lang_name'  class='form-control' ><option value=''>Select Language</option><option value='Bangla'>Bangla</option><option value='English'>English</option><option value='Arabic'>Arabic</option><option value='Hindi'>Hindi</option><option value='Japanese'>Japanese</option></select></td> <td style='text-align:center'><input class='form-check-input' style='width: 20px; height: 20px;' type='checkbox' name='readLang[]' value='Y'  id='readLang'></td><td style='text-align:center'><input class='form-check-input' style='width: 20px; height: 20px;' type='checkbox' name='writeLang[]' value='Y'  id='writeLang'></td><td style='text-align:center'><input class='form-check-input' style='width: 20px; height: 20px;' type='checkbox' name='speakLang[]' value='Y'  id='speakLang'></td><td style='text-align:center'><button id='removeLangRow' type='button' class='removeLangRow btn btn-sm btn-info'><i class='fa fa-minus-circle'></i></button></td></tr>";
    $("#langTable #langTbody").append(markup);
  });
});

$(document).on('click', '#removeLangRow', function() {
  $(this).closest('#myLangRow').remove();
});

//// Get grade wise Salary ///
  function take_gradewise_salary(grade){
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      type: "post",
      url : '{{url("hrms/hrm/grade-salary")}}',
      data: {
        grade: grade,
      },
      success:function(data) {
        $('#basicSalary').empty().html(data);
      }
    });
  }

</script>
@include('layouts.form_script')
@endpush