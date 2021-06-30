
@include('layouts.header')
<style type="text/css">
	.alert{ padding:6px 10px; margin-top:10px}
	.alert-warning{display:none;}
	.alert-success{display:none;}
	.alert-warning ul{
		margin-bottom: 0px !important;
	}
</style>
<form method="post" action="{{url('system/core/user/update')}}" enctype="multipart/form-data" id="edit">
	@csrf
	<div class="modal-content">
		<div class="modal-header">
			<input type="hidden" class="datepickerNone">
			<h4 class="modal-title" id="myModalLabel"> {{$title}} </h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		</div>
		<div class="modal-body">
			<div class="card-body">
				<div class="col-md-12">
					<div id="error_message"></div>
					<div class="alert alert-warning" role="alert">&nbsp;</div>
					<div class="alert alert-success" role="alert">&nbsp;</div>
					<input type="hidden"  value="{{ getValue('id', $objData) }}" id="id" name="id">
					<div class="input-group mb-3">
						<input type="text" name="full_name" value="{{getValue('full_name', $objData) }}" id="full_name" class="form-control" placeholder="Your Name">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="email" id="email" name="email" value="{{getValue('email', $objData) }}" class="form-control" placeholder="Email">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<select id="hotel_id" name="hotel_id" class="form-control" >
							@if(session()->get('_hotel_id') == 0)
								@foreach(\Modules\Hotels\Entities\HotelList::get() as $hotel)
									<option {{(getValue('hotel_id', $objData) == $hotel->h_id)?'':'selected'}}  value=" {{ $hotel->h_id }}"> {{ $hotel->h_name }}</option>
								@endforeach
							@else
								@foreach(\Modules\Hotels\Entities\HotelList::where('h_id',session()->get('_hotel_id'))->get() as $hotel)                                     <option value=" {{ $hotel->h_id }}"> {{ $hotel->h_name }}</option>
								@endforeach
							@endif
						</select>
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user-circle"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<select id="role" name="role" class="form-control" >
							@foreach(\App\Roles::get() as $role)
							<option {{($objData->role->role_id == $role->id )?'selected':''}} value=" {{ $role->id }}"> {{ $role->name }}</option>
							@endforeach
						</select>
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user-circle"></span>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button type="submit" id="submit" class="btn btn-primary">Save</button>&nbsp;&nbsp;
			<button type="button"  data-reload="true" class="btn btn-secondary dismiss" data-dismiss="modal">Close</button>
		</div>
</form>

@include('layouts.footer_script')

<script>
	$(function(){
		$('form#edit').each(function(){
			$this = $(this);
			$this.find('#submit').on('click', function(event){
				event.preventDefault();
				var str = $this.serialize();
				$.post('{{ url($bUrl) }}', str, function(response){
					if (response == 'success'){
						$this.find('.alert-success').html('Successfully Updated').hide().slideDown();
						$this.find('.fbody').hide();
						$('.alert-warning').hide();
					}else{
						var html = '<ul>'
						$.each(response, function(index, item) {
							html += '<li>'+item +'</li>'
						});
						html +='</ul>'
						$('.alert-warning').html(html).hide().slideDown();
						$('.alert-success').hide();
					}
				});

			});
		});
	});

</script>
