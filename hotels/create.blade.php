@push('css')
<style>
	#tooltip{position:absolute;right:-2%; top:25%; }
	#tooltip .fa{ font-size:14px; color:#666}
</style>

@endpush

@extends("hotels::reservations_master")
@section("content")
    <!-- Main content -->
    <section class="container">
        <!-- Default box -->

        
		

	<div class="row">
	  <div class="col-12 form-header">
		<div class="row">
			<div class="col-md-6">
				<h3>  {!! $page_icon !!} &nbsp; {{$title}}</h3>
			</div>

			<div class="col-md-6 text-right">
						<button type="button" class="btn btn-tool" >
							<a href="{{url($bUrl.'/'.$objData->h_id)}}" class="btn btn-info btn-sm"><i class="mdi mdi-plus"></i> <i class="fa fa-arrow-left"></i> Back</a>
						</button>
			</div>
		 </div>
		</div>
	</div>
		
		
		
		
		<div class="card">

            <div class="card-body">

			 <div class="col-md-11">

			 <form method="post" action="{{url($bUrl.'/store')}}" enctype="multipart/form-data" >
                    @csrf

					{!! validation_errors($errors) !!}

                    <input type="hidden"  value="{{ getValue($tableID, $objData) }}" id="id" name="{{ $tableID }}">


						<div class="form-group row">
							<label for="h_name" class="col-sm-3 col-form-label col-form-label-lg">Hotel Name<code>*</code></label>

							<div class="col-sm-9">
							<input type="text" value="{{ getValue('h_name', $objData) }}" name="h_name"  id="h_name"    class="form-control form-control-lg">

							 <span id="tooltip" data-toggle="tooltip" data-placement="right" title="Input Hotel Name"> <span class="fa fa-info-circle"></span> </span>
							</div>


						</div>



                            <div class="form-group row">
                                <label for="location" class="col-sm-3 col-form-label">Location <code>*</code>
								</label>


                                <div class="col-sm-9">
								<select name="district_id"   onchange="formValidation('location')" id="location"  class="form-control" >
                                    <option value="">Select</option>
                                    @if (!empty($districts))
                                        @foreach($districts as $district)
                                    <option {{($district->district_id == getValue('district_id',$objData))? 'selected':''}} value="{{$district->district_id}}">{{$district->district_name}}</option>
                                        @endforeach
                                    @endif
                                </select>

                               	</div>

                            </div>


                            <div class="form-group row">
                                <label for="h_contact" class="col-sm-3 col-form-label">Contact No<code>*</code></label>
								<div class="col-sm-4">
                                	<input value="{{getValue('h_contact',$objData)}}" name="h_contact" id="h_contact"   type="text" class="form-control" >

                            	</div>

                                <label for="h_fax" class="col-sm-2 col-form-label">Fax Number</label>
                                <div class="col-sm-3">
								<input value="{{getValue('h_fax', $objData)}}" name="h_fax" id="h_fax" type="text" class="form-control" >
                            	</div>

                       	 	</div>



                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="h_email">Email Address</label>
								<div class="col-sm-9">
                                <input value="{{getValue('h_email', $objData)}}" name="h_email" id="h_email" type="email" class="form-control" >
                            	</div>
                        	</div>



                         <div class="form-group row">
                                <label for="description" class="col-sm-3 col-form-label">Description<code>*</code></label>
								<div class="col-sm-9">
                                <textarea name="h_description" id="description"   class="form-control editor" rows="3" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; height: 172px;">{{getValue('h_description',$objData)}}</textarea>

                            </div>
                        </div>



                        <div class="form-group row">
                                <label for="h_facility" class="col-sm-3 col-form-label">Facility</label>
                                <div class="col-sm-9">
								<textarea name="h_facility" id="h_facility" class="form-control editor-min" rows="3" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; height: 172px;">{{getValue('h_facility',$objData)}}</textarea>
                            </div>
                        </div>



                            <div class="form-group row">
								<label class="col-sm-3 col-form-label" > </label>
                                <div class="custom-control custom-switch">
                                    <input {{(getValue('h_restaurant_status',$objData) ==1)? 'checked':''}}  value="1"  name="h_restaurant_status" type="checkbox" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1">Restaurant Available</label>
                                </div>
                            </div>




                            <div class="form-group row">
                                <label for="restaurant_name" class="col-sm-3 col-form-label">Restaurant Name</label>
								<div class="col-sm-9">
                                <input  value="{{getValue('h_restaurant_name', $objData)}}" name="h_restaurant_name" id="restaurant_name" type="text" class="form-control" >
                            	</div>
                        	</div>



                          <div class="form-group row">
                                <label for="capacity" class="col-sm-3 col-form-label">Capacity</label>
								<div class="col-sm-9">
                                	<input value="{{getValue('h_restaurant_capacity', $objData)}}" name="h_restaurant_capacity" id="capacity" type="text" class="form-control" >
								</div>
                           </div>







					</div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
				<div class="offset-md-2 col-sm-9">
					<button type="submit" class="btn btn-primary">Save</button>&nbsp;&nbsp;
					<a href="{{url($bUrl)}}"  class="btn btn-warning">Cancel</a>
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
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
@include('layouts.form_script')
@endpush


{"lang_name":["Bangla","English","Arabic"],"readLang":["Y",null,null],"writeLang":["Y",null,null],"speakLang":["Y",null]}