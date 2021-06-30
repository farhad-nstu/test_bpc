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
							<a href="{{url($bUrl.'/'.$objData->h_id.'/edit')}}" class="btn btn-info"><i class="mdi mdi-plus"></i> <i class="fa fa-edit"></i> Edit Hotel</a>
						</button>
			</div>
		 </div>
		</div>
	</div>
		
		
		
		
		<div class="card">

            <div class="card-body">

			 <div class="col-md-11">







						<div class="form-group row">
							<label for="h_name" class="col-sm-3 col-form-label col-form-label-lg">Hotel Name</label>

							<div class="col-sm-9">
							{{ getValue('h_name', $objData) }}
							</div>

						</div>



                            <div class="form-group row">
                                <label for="location" class="col-sm-3 col-form-label">Location</label>


                                <div class="col-sm-9">
								
									{{ $objData->districtName->district_name }}

                               	</div>

                            </div>


                            <div class="form-group row">
                                <label for="h_contact" class="col-sm-3 col-form-label">Contact No</label>
								<div class="col-sm-4">{{getValue('h_contact',$objData)}}</div>

                                <label for="h_fax" class="col-sm-2 col-form-label">Fax Number</label>
								
                                <div class="col-sm-3">{{getValue('h_fax', $objData)}}</div>

                       	 	</div>



                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="h_email">Email Address</label>
								<div class="col-sm-9">
                                {{getValue('h_email', $objData)}}
                            	</div>
                        	</div>



                         <div class="form-group row">
                                <label for="description" class="col-sm-3 col-form-label">Description</label>
								<div class="col-sm-9">
                                {!!getValue('h_description',$objData)!!}

                            </div>
                        </div>



                        <div class="form-group row">
                                <label for="h_facility" class="col-sm-3 col-form-label">Facility</label>
                                <div class="col-sm-9">
								{!!getValue('h_facility',$objData)!!}
                            </div>
                        </div>




                      <div class="form-group row">

					  	<label for="h_images" class="col-sm-3 col-form-label">Hotel Images</label>

					  	<div class="col-sm-9">
							<div class="row">	


						@php
						if(!empty($objData->h_photo)){	
							if(preg_match('/|/', $objData->h_photo)){
								$p_image = explode('|', $objData->h_photo);									
								
									foreach($p_image as $img){
										
										echo '<div class="col-3"><img class="img-thumbnail" src="'.$img.'" /> <a href="'.url($bUrl.'/remove-picture?picture='.basename($img) ).'"> x </a> </div>';
									}								
							}else{
								 echo '<div class="col-3"><img src="'.$objData->h_photo.'" /> <a href="'.url($bUrl.'/remove-picture?picture='.basename($objData->h_photo) ).'">x </a></div>';
							}
						}else{
							echo "No Image Found.";
						}
						
						@endphp							
							
													
							
							</div>
                               
                           </div>
						
                       </div>
					   
					   
					    <div class="form-group row">

					  	<label for="h_images" class="col-sm-3 col-form-label"></label>

					  	<div class="col-sm-9"> 
							
							<a id="action" data-toggle="modal" class="btn btn-primary" data-target="#windowmodal" href="{{url($bUrl.'/picture/'.$objData->h_id)}}"> Add A New Image</a>
						</div>
						
                       </div>


					</div>
            </div>
            <!-- /.card-body -->

        </div>
        </form>
        <!-- /.card -->
    </section>
    <!-- /.content -->



<!-- Modal -->
<div class="modal fade" id="windowmodal" tabindex="-1" role="dialog" aria-labelledby="windowmodal" aria-hidden="true">
  <div class="modal-dialog modal-lg"  role="document">
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
