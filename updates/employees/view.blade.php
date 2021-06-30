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
  <!-- Default box -->
  
  <div class="card">

    <div class="card-header">
      <h2 class="card-title"> {!! $page_icon !!} &nbsp; {{ $title }} </h2>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>

        <button type="button" class="btn btn-tool">
          <a href="{{url($bUrl.'/'.$objData->employee_id.'/edit')}}" class="btn btn-info btn-sm"><i class="mdi mdi-plus"></i>
              <i class="fa fa-edit"></i> Edit</a>
          <a href="{{url($bUrl)}}" class="btn btn-info btn-sm"><i class="mdi mdi-plus"></i> <i
                class="fa fa-arrow-left"></i> Back</a>
        </button>

      </div>
    </div>

    <div class="card-body">

      <div class="col-md-11">
        <div class="ml-5">
          <h5 class="font-weight-bold my-3"><u>GENERAL INFORMATION</u></h5>
        </div>
        <div class="row ml-5">

          <div class="col-md-7 pl-0">

            <div class="form-group row">
              <label for="h_name" class="col-sm-4 font-weight-bold h6">Employee ID</label>
              <div class="col-sm-8">
                {{ getValue('employee_bpc_id', $objData) }}
              </div>
            </div>

            <div class="form-group row">
              <label for="h_name" class="col-sm-4 font-weight-bold h6">Name</label>
              <div class="col-sm-8">
                {{ strtoupper(getValue('employee_name', $objData)) }}
              </div>
            </div>

            <div class="form-group row">
              <label for="h_name" class="col-sm-4 font-weight-bold h6">Mother Name</label>
              <div class="col-sm-8">
                {{ getValue('employee_mother_name', $objData) }}
              </div>
            </div>

            <div class="form-group row">
              <label for="h_name" class="col-sm-4 font-weight-bold h6">Working Place</label>
              <div class="col-sm-8">
              @if(getValue('working_place', $objData) == 'commercial_unit')
                Commercial Unit 
              @elseif(getValue('working_place', $objData) == 'head_office')
                Head Office
              @endif 
              </div>
            </div>           

            <div class="form-group row">
              <label for="h_name" class="col-sm-4 font-weight-bold h6">Date Of Birth</label>
              <div class="col-sm-8">
                {{ getValue('employee_birth_date', $objData) }}
              </div>
            </div>

            <div class="form-group row">
              <label for="h_name" class="col-sm-4 font-weight-bold h6">Payscale Grade</label>
              <div class="col-sm-8">
                Grade-{{ getValue('employee_payscale_grade', $objData) }}
              </div>
            </div>

            <div class="form-group row">
              <label for="h_name" class="col-sm-4 font-weight-bold h6">Posting</label>
              <div class="col-sm-8">
                {{ getValue('employee_posting', $objData) }}
              </div>
            </div>

            @if(! empty(getValue('employee_rank', $objData)))
              <div class="form-group row">
                <label for="h_name" class="col-sm-4 font-weight-bold h6">Ranking</label>
                <div class="col-sm-8">
                  {{ getValue('employee_rank', $objData) }}
                </div>
              </div>
            @else 
              <div class="form-group row">
                <label for="h_name" class="col-sm-4 font-weight-bold h6">Seniority</label>
                <div class="col-sm-8">
                  {{ getValue('employee_seniority', $objData) }}
                </div>
              </div>
            @endif 

            <div class="form-group row">
              <label for="h_name" class="col-sm-4 font-weight-bold h6">Location</label>
              <div class="col-sm-8">
                {{ getValue('employee_location', $objData) }}
              </div>
            </div>

            <div class="form-group row">
              <label for="h_name" class="col-sm-4 font-weight-bold h6">Cadre</label>
              <div class="col-sm-8">
                {{ getValue('employee_cadre', $objData) }}
              </div>
            </div>

            <div class="form-group row">
              <label for="h_name" class="col-sm-4 font-weight-bold h6">Date Of Cadre</label>
              <div class="col-sm-8">
                {{ getValue('employee_release_date', $objData) }}
              </div>
            </div>

            <div class="form-group row">
              <label for="h_name" class="col-sm-4 font-weight-bold h6">Sex</label>
              <div class="col-sm-8">
                {{ getValue('employee_sex', $objData) }}
              </div>
            </div>

            <div class="form-group row">
              <label for="h_name" class="col-sm-4 font-weight-bold h6">Mobile</label>
              <div class="col-sm-8">
                {{ getValue('employee_mobile', $objData) }}
              </div>
            </div>

            <div class="form-group row">
              <label for="h_name" class="col-sm-4 font-weight-bold h6">Marital Status</label>
              <div class="col-sm-8">
                {{(getValue('employee_marital_state', $objData) == 1)? 'Unmarried':'Married'}}
              </div>
            </div>

            <div class="form-group row">
              <label for="h_name" class="col-sm-4 font-weight-bold h6">Blood Group</label>
              <div class="col-sm-8">
                {{ getValue('blood_group', $objData) }}
              </div>
            </div>

          </div>

          <div class="col-md-5">

            <div class="form-group row">
              <label for="h_name" class="col-sm-4 font-weight-bold h6">Employee Type</label>
              <div class="col-sm-8">
                {{ getValue('employee_type', $objData) }}
              </div>
            </div>

            <div class="form-group row">
              <label for="h_name" class="col-sm-4 font-weight-bold h6">Father Name</label>
              <div class="col-sm-8">
                {{ getValue('employee_father_name', $objData) }}
              </div>
            </div>

            <div class="form-group row">
              <label for="h_name" class="col-sm-4 font-weight-bold h6">District</label>
              <div class="col-sm-8">
                @foreach($districts as $district)
                {{ (getValue('employee_district', $objData) == $district->district_id)? $district->district_name:'' }}
                @endforeach
              </div>
            </div>

            @if(! empty(getValue('employee_unit', $objData)))
              <div class="form-group row">
                <label for="h_name" class="col-sm-4 font-weight-bold h6">Unit</label>
                <div class="col-sm-8">
                  @foreach($units as $unit)
                  {{ (getValue('employee_unit', $objData) == $unit->unit_id)? $unit->unit_title:'' }}
                  @endforeach
                </div>
              </div>
            @else 
              <div class="form-group row">
                <label for="h_name" class="col-sm-4 font-weight-bold h6">Section</label>
                <div class="col-sm-8">
                  @foreach($departments as $department)
                  {{ (getValue('employee_district', $objData) == $department->dpt_id)? $department->dpt_title:'' }}
                  @endforeach
                </div>
              </div>
            @endif 

            <div class="form-group row">
              <label for="h_name" class="col-sm-4 font-weight-bold h6">Designation</label>
              <div class="col-sm-8">
                @foreach($designations as $designation)
                {{ (getValue('employee_designation', $objData) == $designation->desg_id)? $designation->desg_title:'' }}
                @endforeach
              </div>
            </div>
            
            <div class="form-group row">
              <label for="h_name" class="col-sm-4 font-weight-bold h6">PRL/LPR Date</label>
              <div class="col-sm-8">
                {{ getValue('employee_prl_date', $objData) }}
              </div>
            </div>

            <div class="form-group row">
              <label for="h_name" class="col-sm-4 font-weight-bold h6">Basic Salary</label>
              <div class="col-sm-8">
                {{ getValue('employee_basic_salary', $objData) }}
              </div>
            </div>

            <div class="form-group row">
              <label for="h_name" class="col-sm-4 font-weight-bold h6">Joining Date</label>
              <div class="col-sm-8">
                {{ getValue('employee_join_date', $objData) }}
              </div>
            </div>

            <div class="form-group row">
              <label for="h_name" class="col-sm-4 font-weight-bold h6">Batch</label>
              <div class="col-sm-8">
                {{ getValue('employee_batch', $objData) }}
              </div>
            </div>

            <div class="form-group row">
              <label for="h_name" class="col-sm-4 font-weight-bold h6">G O Date</label>
              <div class="col-sm-8">
                {{ getValue('employee_confirm_g_o_date', $objData) }}
              </div>
            </div>

            <div class="form-group row">
              <label for="h_name" class="col-sm-4 font-weight-bold h6">Religion</label>
              <div class="col-sm-8">
                @foreach($religions as $religion)
                {{ (getValue('employee_religion', $objData) == $religion->id)? $religion->name:'' }}
                @endforeach
              </div>
            </div>

            <div class="form-group row">
              <label for="h_name" class="col-sm-4 font-weight-bold h6">Email</label>
              <div class="col-sm-8">
                {{ getValue('employee_email', $objData) }}
              </div>
            </div>

            <div class="form-group row">
              <label for="h_name" class="col-sm-4 font-weight-bold h6">NID</label>
              <div class="col-sm-8">
                {{ getValue('employee_nid', $objData) }}
              </div>
            </div>

            <div class="form-group row">
              <label for="h_name" class="col-sm-4 font-weight-bold h6">Identification Mark</label>
              <div class="col-sm-8">
                {{ getValue('identification_mark', $objData) }}
              </div>
            </div>

          </div>

        </div>

        <!-- Address Dispaly -->
        <div class="row ml-5">
          <div class="col-md-7 pl-0">
            <div>
              <h6 class="font-weight-bold"><u>Present Address</u></h6>
            </div>
            <div class="form-group row">
              <div class="col-sm-9">
                {!!getValue('employee_present_address',$objData)!!}
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div>
              <h6 class="font-weight-bold"><u>Permanent Address</u></h6>
            </div>
            <div class="form-group row">
              <div class="col-sm-9">
                {!!getValue('employee_permanent_address',$objData)!!}
              </div>
            </div>
          </div>
        </div>
        <!-- Address Display End -->

        <!-- Spouse Information Dispaly -->
        @php
          $spouseJsonData = getValue('employee_spouse', $objData);
          $spouseObjectData = json_decode($spouseJsonData);
          $spouseData = (array) $spouseObjectData;
        @endphp

        @if(! empty($spouseData['spouse_name'][0]))
        <div class="ml-5 mt-4">
          <h5 class="font-weight-bold"><u>SPOUSE INFORMATION</u></h5>
        </div>
        <div class="row mt-3 ml-5">
          
          <table class="table">
            <thead>
              <tr>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Name</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">NID</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Occupation</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Designation</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">District</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Organization</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Location</th>
              </tr>
            </thead>
            <tbody>
              @if(is_array($spouseData['spouse_name']))
              @for($i = 0; $i < count($spouseData['spouse_name']); $i++) <tr id="mySpouseRow">
                <td class="pl-0">{{ $spouseData['spouse_name'][$i] }}</td>
                <td class="pl-0">{{ $spouseData['spouse_nid'][$i] }}</td>
                <td class="pl-0">{{ $spouseData['spouse_occup'][$i] }}</td>
                <td class="pl-0">{{ $spouseData['spouse_desg'][$i] }}</td>
                <td class="pl-0">
                @foreach($districts as $district)
                  @if($district->district_id == $spouseData['spouse_dist'][$i])
                  {{ $district->district_name }}
                  @endif 
                @endforeach
                </td>
                <td class="pl-0">{{ $spouseData['spouse_org'][$i] }}</td>
                <td class="pl-0">{{ $spouseData['spouse_loc'][$i] }}</td>
                </tr>
                @endfor
                @else
                <tr id="myChildRow">
                  <td class="pl-0">{{ $spouseData['spouse_name'] }}</td>
                  <td class="pl-0">{{ $spouseData['spouse_nid'] }}</td>
                  <td class="pl-0">{{ $spouseData['spouse_occup'] }}</td>
                  <td class="pl-0">{{ $spouseData['spouse_desg'] }}</td>
                  <td class="pl-0">
                  @foreach($districts as $district)
                    @if($district->district_id == $spouseData['spouse_dist'])
                    {{ $district->district_name }}
                    @endif 
                  @endforeach
                  </td>
                  <td class="pl-0">{{ $spouseData['spouse_org'] }}</td>
                  <td class="pl-0">{{ $spouseData['spouse_loc'] }}</td>
                </tr>
                @endif
            </tbody>
          </table>
        </div>
        @endif
        <!-- Spouse Information Dispaly End -->

        <!-- Child Information Dispaly -->
        @php
          $childJsonData = getValue('employee_children', $objData);
          $childObjectData = json_decode($childJsonData);
          $childData = (array) $childObjectData;
        @endphp

        @if(! empty($childData['child_name'][0]))
        <div class="ml-5 mt-4">
          <h5 class="font-weight-bold"><u>CHILDREN INFORMATION</u></h5>
        </div>
        <div class="row mt-3 ml-5">
          
          <table class="table">
            <thead>
              <tr>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Name</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Date of Birth</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Gender</th>
              </tr>
            </thead>
            <tbody>
              @if(is_array($childData['child_name']))
              @for($i = 0; $i < count($childData['child_name']); $i++) <tr id="myChildRow">
                <td class="pl-0">{{ $childData['child_name'][$i] }}</td>
                <td class="pl-0">{{ $childData['child_birth'][$i] }}</td>
                <td class="pl-0">{{ $childData['child_sex'][$i] }}</td>
                </tr>
                @endfor
                @else
                <tr id="myChildRow">
                  <td class="pl-0">{{ $childData['child_name'] }}</td>
                  <td class="pl-0">{{ $childData['child_birth'] }}</td>
                  <td class="pl-0">{{ $childData['child_sex'] }}</td>
                </tr>
                @endif
            </tbody>
          </table>
        </div>
        @endif
        <!-- Child Information Dispaly End -->

        <!-- Languages Information Dispaly -->
        @php
          $langJsonData = getValue('employee_language', $objData);
          $langObjectData = json_decode($langJsonData);
          $langData = (array) $langObjectData;
        @endphp

        @if(! empty($langData['lang_name'][0]))
        <div class="ml-5 mt-3">
          <h5 class="font-weight-bold"><u>OFFICER'S LANGUAGE INFORMATION</u></h5>
        </div>
        <div class="row mt-3 ml-5">

          <table class="table">
            <thead>
              <tr>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Language</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Read</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Write</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Speak</th>
              </tr>
            </thead>
            <tbody>
              @if(is_array($langData['lang_name']))

              @for($i = 0; $i < count($langData['lang_name']); $i++) <tr id="myChildRow">
                <td class="pl-0">{{ $langData['lang_name'][$i] }}</td>
                @if(!empty($langData['readLang'][$i]))
                <td class="pl-1">{{ $langData['readLang'][$i] }}</td>
                @else
                <td class="pl-1">No</td>
                @endif
                @if(!empty($langData['writeLang'][$i]))
                <td class="pl-1">{{ $langData['writeLang'][$i] }}</td>
                @else
                <td class="pl-1">No</td>
                @endif
                @if(!empty($langData['speakLang'][$i]))
                <td class="pl-1">{{ $langData['speakLang'][$i] }}</td>
                @else
                <td class="pl-1">No</td>
                @endif
                </tr>
                @endfor
                @else
                <tr id="myChildRow">
                  @if(!empty($langData['lang_name']))
                  <td class="pl-1">{{ $langData['lang_name'] }}</td>
                  @endif
                  @if(!empty($langData['readLang']))
                  <td class="pl-1">{{ $langData['readLang'] }}</td>
                  @else
                  <td class="pl-1">No</td>
                  @endif
                  @if(!empty($langData['writeLang']))
                  <td class="pl-1">{{ $langData['writeLang'] }}</td>
                  @else
                  <td class="pl-1">No</td>
                  @endif
                  @if(!empty($langData['speakLang']))
                  <td class="pl-1">{{ $langData['speakLang'] }}</td>
                  @else
                  <td class="pl-1">No</td>
                  @endif
                </tr>
                @endif
            </tbody>
          </table>
        </div>
        @endif
        <!-- Languages Information Dispaly End -->

        <!-- Educational Information Dispaly -->
        @php
          $educationJsonData = getValue('employee_education', $objData);
          $educationObjectData = json_decode($educationJsonData);
          $educationData = (array) $educationObjectData;
        @endphp

        @if(! empty($educationData['ins_name'][0]))
        <div class="ml-5 mt-3">
          <h5 class="font-weight-bold"><u>EDUCATIONAL QUALIFICATION</u></h5>
        </div>
        <div class="row mt-3 ml-5">

          <table class="table">
            <thead>
              <tr>
                <th style="padding-left: 0px !important;">Institute</th>
                <th style="padding-left: 0px !important;">Subject</th>
                <th style="padding-left: 0px !important;">Degree</th>
                <th style="padding-left: 0px !important;">Passing Year</th>
                <th style="padding-left: 0px !important;">Result</th>
              </tr>
            </thead>
            <tbody>
              @if(is_array($educationData['ins_name']))
              @for($i = 0; $i < count($educationData['ins_name']); $i++) <tr id="myChildRow">
                <td class="pl-0">{{ $educationData['ins_name'][$i] }}</td>
                <td class="pl-0">{{ $educationData['subject'][$i] }}</td>
                <td class="pl-0">{{ $educationData['degree'][$i] }}</td>
                <td class="pl-0">{{ $educationData['passing_year'][$i] }}</td>
                <td class="pl-0">{{ $educationData['result'][$i] }}</td>
                </tr>
                @endfor
                @else
                <tr id="myChildRow">
                  <td class="pl-0">{{ $educationData['ins_name'] }}</td>
                  <td class="pl-0">{{ $educationData['subject'] }}</td>
                  <td class="pl-0">{{ $educationData['degree'] }}</td>
                  <td class="pl-0">{{ $educationData['passing_year'] }}</td>
                  <td class="pl-0">{{ $educationData['result'] }}</td>
                </tr>
                @endif
            </tbody>
          </table>
        </div>
        @endif
        <!-- Educational Information Dispaly End -->

        <!-- Training -->
        @php
          $localTarinings = Modules\Hrms\Entities\HrmsTraining::where('employee_id', getValue('employee_bpc_id',
          $objData))->where('train_type', 'Local')->get();

          $foreignTarinings = Modules\Hrms\Entities\HrmsTraining::where('employee_id', getValue('employee_bpc_id',
          $objData))->where('train_type', 'Foreign')->get();
          @endphp
        @if(count($localTarinings) > 0)
        <div class="ml-5 mt-3">
          <h5 class="font-weight-bold"><u>LOCAL TRAINING</u></h5>
        </div>
        <div class="row mt-3 ml-5">
          <table class="table">
            <thead>
              <tr>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Course Title</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Instituion</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">From</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">To</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Grade</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Position</th>
              </tr>
            </thead>
            <tbody>
              @foreach($localTarinings as $localTarining) <tr id="myChildRow">
                <td class="pl-0" style="width: 30%;">{{ $localTarining->course_title }}</td>
                <td class="pl-0">{{ $localTarining->institute }}</td>
                <td class="pl-0">{{ $localTarining->from_date }}</td>
                <td class="pl-0">{{ $localTarining->to_date }}</td>
                <td class="pl-0">{{ $localTarining->grade }}</td>
                <td class="pl-0">{{ $localTarining->position }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        @endif
        @if(count($foreignTarinings) > 0)
        <div class="ml-5 mt-3">
          <h5 class="font-weight-bold"><u>Foreign TRAINING</u></h5>
        </div>
        <div class="row mt-3 ml-5">
          <table class="table">
            <thead>
              <tr>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Course Title</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Instituion</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Country</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">From</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">To</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Grade</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Position</th>
              </tr>
            </thead>
            <tbody>
              @foreach($foreignTarinings as $foreignTarining) <tr id="myChildRow">
                <td class="pl-0" style="width: 30%; ">{{ $foreignTarining->course_title }}</td>
                <td class="pl-0">{{ $foreignTarining->institute }}</td>
                @foreach($countries as $country)
                @if($country->id == $foreignTarining->country_id)
                <td class="pl-0">{{ $country->nicename }}</td>
                @endif
                @endforeach
                <td class="pl-0">{{ $foreignTarining->from_date }}</td>
                <td class="pl-0">{{ $foreignTarining->to_date }}</td>
                <td class="pl-0">{{ $foreignTarining->grade }}</td>
                <td class="pl-0">{{ $foreignTarining->position }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        @endif
        <!-- Training End -->

        <!-- Abroad Posting -->
        @php
        $abroadPostingS = Modules\Hrms\Entities\HrmsPosting::where('employee_id', getValue('employee_bpc_id',
        $objData))->where('is_abroad', 1)->get();
        @endphp
        @if(count($abroadPostingS) > 0)
        <div class="ml-5 mt-3">
          <h5 class="font-weight-bold"><u>POSTING ABROAD</u></h5>
        </div>
        <div class="row mt-3 ml-5">
          <table class="table">
            <thead>
              <tr>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Post</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Organization</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Country</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">From</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">To</th>
              </tr>
            </thead>
            <tbody>
              @foreach($abroadPostingS as $abroadPosting) <tr id="myChildRow">
                <td class="pl-0" style="width: 30%;">{{ $abroadPosting->posting_title }}</td>
                <td class="pl-0">{{ $abroadPosting->posting_org }}</td>
                @foreach($countries as $country)
                @if($country->id == $abroadPosting->country_id)
                <td class="pl-0">{{ $country->nicename }}</td>
                @endif
                @endforeach
                <td class="pl-0">{{ $abroadPosting->posting_from }}</td>
                <td class="pl-0">{{ $abroadPosting->posting_to }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        @endif
        <!-- Posting Abroad End -->

        <!-- Publication -->
        @php
          $publications = Modules\Hrms\Entities\HrmsPublication::where('employee_id', getValue('employee_bpc_id',
          $objData))->get();
        @endphp

        @if(count($publications) > 0)
        <div class="ml-5 mt-3">
          <h5 class="font-weight-bold"><u>PUBLICATION</u></h5>
        </div>
        <div class="row mt-3 ml-5">
          <table class="table">
            <thead>
              <tr>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Type</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Description</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Date</th>
              </tr>
            </thead>
            <tbody>
              @foreach($publications as $publication) <tr id="myChildRow">
                <td class="pl-0" style="width: 20%;">{{ $publication->publication_type }}</td>
                <td class="pl-0" style="width: 30%;">{{ $publication->publication_desc }}</td>
                <td class="pl-0" style="width: 20%;">{{ $publication->publication_date }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        @endif
        <!-- Publication End -->

        <!-- Award Start -->
        @php
          $awards = Modules\Hrms\Entities\HrmsAward::where('employee_id', getValue('employee_bpc_id', $objData))->get();
        @endphp

        @if(count($awards) > 0)
        <div class="ml-5 mt-3">
          <h5 class="font-weight-bold"><u>HONOURS AND AWARD</u></h5>
        </div>
        <div class="row mt-3 ml-5">
          <table class="table">
            <thead>
              <tr>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Title Of Award</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Ground</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Date</th>
              </tr>
            </thead>
            <tbody>
              @foreach($awards as $award) <tr id="myChildRow">
                <td class="pl-0" style="width: 30%;">{{ $award->award_title }}</td>
                <td class="pl-0" style="width: 30%;">{{ $award->award_ground }}</td>
                <td class="pl-0" style="width: 20%;">{{ $award->award_date }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        @endif
        <!-- Award End -->

        <!-- Promotion Start -->
        @php
          $promotions = Modules\Hrms\Entities\HrmsPromotion::where('employee_id', getValue('employee_bpc_id',
          $objData))->get();
        @endphp

        @if(count($promotions) > 0)
        <div class="ml-5 mt-3">
          <h5 class="font-weight-bold"><u>PROMOTION PARTICULARS</u></h5>
        </div>
        <div class="row mt-3 ml-5">
          <table class="table">
            <thead>
              <tr>
                <th style="padding-left: 0px !important; padding-right: 0px !important; width: 20%;">Rank</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important; width: 20%;">Date of Promotion</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important; width: 15%;">Date of G. O</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important; width: 25%;">Nature Of Promotion</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important; width: 20%;">Pay Scale</th>
              </tr>
            </thead>
            <tbody>
              @foreach($promotions as $promotion)
              <tr>
                <td class="pl-0" style="width: 20%;">{{ $promotion->promot_rank }}</td>
                <td class="pl-0" style="width: 20%;">{{ $promotion->promot_date }}</td>
                <td class="pl-0" style="width: 15%;">{{ $promotion->promot_g_o_date }}</td>
                <td class="pl-0" style="width: 25%;">{{ $promotion->promot_nature }}</td>
                @foreach($payscaleGrades as $payscaleGrade)
                @if($payscaleGrade->payscale_grad_no == $promotion->promot_pay_scale)
                <td class="pl-0" style="width: 20%;">
                  {{ $payscaleGrade->payscale_salary_min }}-{{ $payscaleGrade->payscale_salary_max }}/-</td>
                @endif
                @endforeach
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        @endif
        <!-- Promotion End -->

        <!-- Disciplinary Action Start -->
        @php
          $disciplinaryActions = Modules\Hrms\Entities\HrmsDisciplinaryAction::where('employee_id',
          getValue('employee_bpc_id', $objData))->get();
        @endphp

        @if(count($disciplinaryActions) > 0)
        <div class="ml-5 mt-3">
          <h5 class="font-weight-bold"><u>DISCIPLINARY ACTIONS/CRIMINAL PROSECUTION</u></h5>
        </div>
        <div class="row mt-3 ml-5">
          <table class="table">
            <thead>
              <tr>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Nature Of Offence</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Punishment</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Date</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Remarks</th>
              </tr>
            </thead>
            <tbody>
              @foreach($disciplinaryActions as $disciplinaryAction)
              <tr>
                <td class="pl-0">{{ $disciplinaryAction->nature_of_offense }}</td>
                <td class="pl-0">{{ $disciplinaryAction->punishment }}</td>
                <td class="pl-0">{{ $disciplinaryAction->dis_date }}</td>
                <td class="pl-0">{{ $disciplinaryAction->remarks }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        @endif
        <!-- Disciplinary Action End -->

        <!-- Posting Start -->
        @php
          $postings = Modules\Hrms\Entities\HrmsPosting::where('employee_id', getValue('employee_bpc_id',
          $objData))->where('is_abroad', NULL)->get();
        @endphp

        @if(count($postings) > 0)
        <div class="ml-5 mt-3">
          <h5 class="font-weight-bold"><u>POSTING RECORDS</u></h5>
        </div>
        <div class="row mt-3 ml-5">
          <table class="table">
            <thead>
              <tr>
                <th style="padding-left: 0px !important; padding-right: 0px !important; width: 20%;">Post</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important; width: 25%;">Thana/Organization</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">District/Location</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">From</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">To</th>
                <th style="padding-left: 0px !important; padding-right: 0px !important;">Pay Scale</th>
              </tr>
            </thead>
            <tbody>
              @foreach($postings as $posting)
              <tr>
                <td class="pl-0" style="width: 20%;">{{ $posting->posting_title }}</td>
                <td class="pl-0" style="width: 25%;">{{ $posting->posting_org }}</td>
                @foreach($districts as $district)
                  @if($posting->district_id == $district->district_id)
                  <td class="pl-0">{{ $district->district_name }}</td>
                  @endif
                @endforeach
                <td class="pl-0">{{ $posting->posting_from }}</td>
                <td class="pl-0">{{ $posting->posting_to }}</td>
                @foreach($payscaleGrades as $payscaleGrade)
                @if($payscaleGrade->payscale_grad_no == $posting->posting_pay_scale)
                <td class="pl-0">
                  {{ $payscaleGrade->payscale_salary_min }}-{{ $payscaleGrade->payscale_salary_max }}/-</td>
                @endif
                @endforeach
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        @endif
        <!-- Posting End -->


      </div>
      <!-- /.card-body -->

    </div>
    </form>
    <!-- /.card -->
</section>
<!-- /.content -->

@endsection



@push('js')

@include('layouts.form_script')
@endpush