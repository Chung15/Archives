@extends('master')

	@section('content')

		{{ Form::model($adress,['method'=>'PATCH', 'action' => ['AdressController@update', $adress->id, $user->id]]) }}
			<div class = 'form-group'>
					    {{ Form:: label('city', 'Город:') }}

					    {{ Form:: text('city', null, ['class'=> 'form-control']) }}
			    	</div>
			    	<div class = 'form-group'>
					    {{ Form:: label('street', 'Улица:') }}

					    {{ Form:: text('street', null, ['class'=> 'form-control']) }}
			    	</div>
			    	<div class = 'form-group'>
					    {{ Form:: label('zip', 'Почтовый индекс:') }}

					    {{ Form:: text('zip', null, ['class'=> 'form-control']) }}
			    	</div>
			    	<div class = 'form-group'>
					    {{ Form:: label('phone', 'Телефон:') }}

					    {{ Form:: text('phone', null, ['class'=> 'form-control']) }}
			    	</div>
			    	 <div class="form-group">
							{{ Form::submit('сохранить', ['class' => 'btn btn-primary btn-sm pull-right btn-success form_control']) }}
				   
					</div>
					<div class="form-group">
							{{ Form::submit('отметить', ['class' => 'btn btn-primary btn-sm btn-danger form_control']) }}
				   
					</div>
		{{ Form::close() }}
		@endsection