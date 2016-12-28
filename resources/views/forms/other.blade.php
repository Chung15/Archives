@extends('master')

	@section('content')
		@if (session()->has('flash_notification.message'))
		    <div class="alert alert-{{ session('flash_notification.level') }}">
		        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

		        {!! session('flash_notification.message') !!}
		    </div>
		@endif
		
		@if(isset($other))
			{{ Form::model($other,['method'=>'PATCH', 'action' => ['OtherController@update', $other->id]]) }}
				
				<div class = "row">
					<div class = "col-md-3"></div>
					<div class = "col-md-6">
						<div class = 'form-group'>
						    {{ Form:: label('name', 'Name:') }}

						    {{ Form:: text('name', null, ['class'=> 'form-control']) }}
				    	</div>

				   		<div class = 'form-group control-panel'>
					        {{ Form:: label('description', 'Description:') }}
					    
					        {{ Form:: textarea('description', null, ['class'=> 'form-control']) }}
				        </div>
				        <div class = 'form-group control-panel'>
					        {{ Form:: label('other_link', 'Link:') }}
					    
					        {{ Form::text('other_link', null, ['class'=> 'form-control']) }}
				        </div>
				         <div>
								{{ Form::submit('save', ['class' => 'btn btn-primary btn-sm pull-right btn-success form_control']) }}
				   
						</div>
						<div>
								{{ Form::submit('cancel', ['class' => 'btn btn-primary btn-sm btn-danger form_control']) }}
				   
						</div>
			       </div>
				</div>
			
		@else
		
			{{ Form::open(['url' => 'saveOther']) }}

				<div>Add an other information</div>
					<hr/>
					<div class = "row">
						<div class = "col-md-3"></div>
						<div class = "col-md-6">
							<div class = 'form-group'>
							    {{ Form:: label('name', 'Name:') }}

							    {{ Form:: text('name', null, ['class'=> 'form-control']) }}
					    	</div>

					   		<div class = 'form-group control-panel'>
						        {{ Form:: label('description', 'Description:') }}
						    
						        {{ Form:: textarea('description', null, ['class'=> 'form-control']) }}
					        </div>
					        <div class = 'form-group control-panel'>
					        {{ Form:: label('other_link', 'Link:') }}
					    
					        {{ Form:: text('other_link', null, ['class'=> 'form-control']) }}
				        </div>
					        <div>
								{{ Form::submit('submit', ['class' => 'btn btn-primary form_control']) }}
				   
							</div>
						</div>
						<div class = "col-md-3"></div>
					</div>
		@endif
		


			{{ Form::close() }}
@endsection