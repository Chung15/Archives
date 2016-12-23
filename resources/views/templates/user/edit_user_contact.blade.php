@extends('master')

	@section('content')

		{{ Form::model($adress,['method'=>'PATCH', 'action' => ['AdressController@update', $adress->id]]) }}
			<div class = 'form-group'>
					    {{ Form:: label('city', 'City:') }}

					    {{ Form:: text('city', null, ['class'=> 'form-control']) }}
			    	</div>
			    	<div class = 'form-group'>
					    {{ Form:: label('street', 'street:') }}

					    {{ Form:: text('street', null, ['class'=> 'form-control']) }}
			    	</div>
			    	<div class = 'form-group'>
					    {{ Form:: label('zip', 'Zip:') }}

					    {{ Form:: text('zip', null, ['class'=> 'form-control']) }}
			    	</div>
			    	<div class = 'form-group'>
					    {{ Form:: label('phone', 'phone:') }}

					    {{ Form:: text('phone', null, ['class'=> 'form-control']) }}
			    	</div>
			    	 <div class="form-group">
							{{ Form::submit('save', ['class' => 'btn btn-primary btn-sm pull-right btn-success form_control']) }}
				   
					</div>
					<div class="form-group">
							{{ Form::submit('cancel', ['class' => 'btn btn-primary btn-sm btn-danger form_control']) }}
				   
					</div>
		{{ Form::close() }}
		@endsection