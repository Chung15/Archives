@extends('master')

	@section('content')
		@if(isset($child))
			{{ Form::model($child, ['method'=>'PATCH', 'action' => ['ChildController@update', $child->id]]) }}
			<div><strong>Children</strong></div>
			<hr/>
			<div class = "row">
				<div class = "col-md-2"></div>
				<div class = "col-md-6">

		   		<div class = "col-md-6">
		   			<div class = 'form-group'>
					    {{ Form:: label('firstname', 'Firstame:') }}

					    {{ Form:: text('firstname', null, ['class'=> 'form-control']) }}
			    	</div>
			    	<div class = 'form-group'>
					    {{ Form:: label('lastname', 'Lastname:') }}

					    {{ Form:: text('lastname', null, ['class'=> 'form-control']) }}
			    	</div>
			    	<div class = 'form-group'>
					    {{ Form:: label('patronymic', 'Patronymic:') }}

					    {{ Form:: text('patronymic', null, ['class'=> 'form-control']) }}
			    	</div>
			    	<div class = 'form-group control-panel'>
					        {{ Form:: label('dateOfBirth', 'Date of birth:') }}
					    
					        {{ Form:: text('dateOfBirth', null, ['class'=> 'form-control date']) }}
				    </div>
				    <div class = 'form-group control-panel'>
					        {{ Form:: label('child_link', 'Link:') }}
					    
					        {{ Form:: text('child_link', null, ['class'=> 'form-control']) }}
				        </div>


			         <div class="form-group">
							{{ Form::submit('save', ['class' => 'btn btn-primary btn-sm pull-right btn-success form_control']) }}
				   
					</div>
					<div class="form-group">
							{{ Form::submit('cancel', ['class' => 'btn btn-primary btn-sm btn-danger form_control']) }}
				   
					</div>
	
			{{ Form::close() }}

		@else

		{{ Form::open(['url' => 'saveChildren']) }}
			<div><strong>Children</strong></div>
			<hr/>
			<div class = "row">
				<div class = "col-md-2"></div>
				<div class = "col-md-6">

		   		<div class = "col-md-6">
		   			<div class = 'form-group'>
					    {{ Form:: label('firstname', 'Firstame:') }}

					    {{ Form:: text('firstname', null, ['class'=> 'form-control']) }}
			    	</div>
			    	<div class = 'form-group'>
					    {{ Form:: label('lastname', 'Lastname:') }}

					    {{ Form:: text('lastname', null, ['class'=> 'form-control']) }}
			    	</div>
			    	<div class = 'form-group'>
					    {{ Form:: label('patronymic', 'Patronymic:') }}

					    {{ Form:: text('patronymic', null, ['class'=> 'form-control']) }}
			    	</div>
			    	<div class = 'form-group control-panel'>
					        {{ Form:: label('dateOfBirth', 'Date of birth:') }}
					    
					        {{ Form:: text('dateOfBirth', null, ['class'=> 'form-control date']) }}
				        </div>
				    <div class = 'form-group control-panel'>
					        {{ Form:: label('child_link', 'Link:') }}
					    
					        {{ Form:: text('child_link', null, ['class'=> 'form-control']) }}
				        </div>

			        <div class= 'form-group control-panel'>
			        	{{ Form::submit('Save child', ['class' => 'btn btn-primary']) }}
			        </div>

			{{ Form::close() }}

			@endif

			    @endsection

	