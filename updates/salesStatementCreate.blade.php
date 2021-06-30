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

      <div class="row">

        <div class="col-md-9">
          <form method="post" action="{{url($bUrl.'/store')}}" enctype="multipart/form-data">
            @csrf
            {!! validation_errors($errors) !!}
           
            <div class="form-group row pb-1"  style="padding-left: 10px;">
                <label for="employee" class="pr-2">Room</label>
                <button type="button" class="btn btn-sm btn-info" id="addMoreRoom">Add
                  More</button>
            </div>
            <div class="form-group row pr-2" style="padding-left: 10px;">
              <table class="table" id="roomTable">
                <thead class="border-right border-left">
                  <tr>
                    <th scope="col" class="text-center">Index</th>
                    <th scope="col" class="text-center">Value</th>
                  </tr>
                </thead>
                <tbody id="roombody">
                  <tr id="roomRow">
                    <td width="30%">
                      <input name="room_index[]" id="room_index0" class="form-control">
                    </td>
                    <td class="text-center">
                      <input name="room_value[]" id="room_value0" class="form-control">
                    </td>
                    <td>

                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="form-group row pb-1" style="padding-left: 10px;">
              <label class="pr-2">Sale</label>
              <button type="button" class="btn btn-sm btn-info" id="addMoreSale">Add
                More</button>
            </div>

            <div class="form-group row pr-2" style="padding-left: 10px;">
              <table class="table" id="saleTable">
                <thead class="border-right border-left">
                  <tr>
                    <th scope="col" class="text-center">Index</th>
                    <th scope="col" class="text-center">Value</th>
                    <th scope="col" class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody id="salebody">
                  <tr id="saleRow">

                    <td width="30%">
                      <input name="sale_index[]" id="sale_index0" class="form-control">
                    </td>
                    <td class="text-center">
                      <input name="sale_value[]" id="sale_value0" class="form-control">
                    </td>
                    <td>

                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="form-group row pb-1" style="padding-left: 10px;">
              <label class="pr-2">Sale Others</label>
              <button type="button" class="btn btn-sm btn-info" id="addMoreSaleOthers">Add
                More</button>
            </div>

            <div class="form-group row pr-2" style="padding-left: 10px;">
              <table class="table" id="saleOthersTable">
                <thead class="border-right border-left">
                  <tr>
                    <th scope="col" class="text-center">Index</th>
                    <th scope="col" class="text-center">Value</th>
                    <th scope="col" class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody id="saleOthersBody">
                  <tr id="saleOthersRow">

                    <td width="30%">
                      <input name="other_index[]" id="other_index0" class="form-control">
                    </td>
                    <td class="text-center">
                      <input name="other_value[]" id="other_value0" class="form-control">
                    </td>
                    <td>

                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            

            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Sales Date</label>
              <div class="col-sm-8">
                <input name="sales_date" type="text" class="form-control datepicker"
                  autocomplete="off"  placeholder="YY-MM-DD" value="{{ old('sales_date') }}">
              </div>
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>

          </form>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
  </div>

</section>
<!-- /.content -->
@endsection

@push('plugin')
<script src="{{url('backend/plugins/tinymce/tinymce.min.js')}}"></script>
@endpush

@push('js')
<script>


//// Room ////
var j = 0;
$(document).ready(function() {
  $('#addMoreRoom').on('click', function() {

    var vl = $('#code'+j).val(); 

    if(vl == 0) {
      alert("First insert the value");
    } else {
      j++;
      var extChild =
        "<tr id='roomRow'><td width='30%'><input name='room_index[]' id='room_index" +
        j + "' class='form-control'></td><td class='text-center'><input name='room_value[]' id='room_value" + j +
        "' class='form-control'></td><td><button id='removeRoomRow' type='button' class='removeRoomRow btn btn-sm btn-danger'><i class='fa fa-minus-circle'></i></button></td></tr>";
      $("#roomTable #roombody").append(extChild);
    }
    
  });
});

$(document).on('click', '#removeRoomRow', function() {
  $(this).closest('#roomRow').remove();
});
//// Room End ////

//// Sale ////
var k = 0;
$(document).ready(function() {
  $('#addMoreSale').on('click', function() {

    var dval = $('#sale_index'+k).val(); 

    if(dval == 0) {
      alert("First insert the value");
    } else {
      k++;
      var extChild =
        "<tr id='saleRow'><td width='30%'><input name='sale_index[]' id='sale_index" +
        k + "' class='form-control'></td><td class='text-center'><input name='sale_value[]' id='sale_value" + k +
        "' class='form-control'></td><td><button id='removesaleRow' type='button' class='removesaleRow btn btn-sm btn-danger'><i class='fa fa-minus-circle'></i></button></td></tr>";
      $("#saleTable #salebody").append(extChild);
    }
    
  });
});

$(document).on('click', '#removesaleRow', function() {
  $(this).closest('#saleRow').remove();
});

//// Sale End ////

//// Sale Others ////
var l = 0;
$(document).ready(function() {
  $('#addMoreSaleOthers').on('click', function() {

    var oval = $('#other_index'+l).val(); 

    if(oval == 0) {
      alert("First insert the value");
    } else {
      l++;
      var extChild =
        "<tr id='saleOthersRow'><td width='30%'><input name='other_index[]' id='other_index" +
        l + "' class='form-control'></td><td class='text-center'><input name='other_value[]' id='other_value" + l +
        "' class='form-control'></td><td><button id='removesaleOthersRow' type='button' class='removesaleOthersRow btn btn-sm btn-danger'><i class='fa fa-minus-circle'></i></button></td></tr>";
      $("#saleOthersTable #saleOthersBody").append(extChild);
    }
    
  });
});

$(document).on('click', '#removesaleOthersRow', function() {
  $(this).closest('#saleOthersRow').remove();
});

//// Sale Others End ////

$(function() {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
@include('layouts.form_script')
@endpush
