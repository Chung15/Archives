@extends('master')
	@section('content')
<div class="row">
		<div class="col-md-8">
			<fieldset>
    		<legend>Edit profile</legend>
    			{{ Form::model($user,['method'=>'PATCH', 'action' => ['UserController@update', $user->id]]) }}
			<hr/>
		
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
			    	<div class = 'form-group'>
					    {{ Form:: label('INN', 'INN:') }}

					    {{ Form:: text('INN', null, ['class'=> 'form-control']) }}
			    	</div>
			    	<div class = 'form-group'>
					    {{ Form:: label('passport_number', 'passport_number:') }}

					    {{ Form:: text('passport_number', null, ['class'=> 'form-control']) }}
			    	</div>
				    <div class = 'form-group control-panel'>
					        {{ Form:: label('passport_link', 'Link:') }}
					    
					        {{ Form:: text('passport_link', null, ['class'=> 'form-control']) }}
				        </div>
			    	<div class = 'form-group control-panel'>
					        {{ Form:: label('dateOfBirth', 'Date of birth:') }}
					    
					        {{ Form:: text('dateOfBirth', null, ['class'=> 'form-control date']) }}
				    </div>
				    <div class="form-group {{ $errors->has('gender') ? ' has-error' : '' }}">
										     <label for="gender" class="col-md-4 control-label">
										        Gender</label>
										     <div class="col-md-8 ">
										       <label>
										          <input type="radio" name="gender" value="male" checked="true">
										             Male
										          </label>
										       <label>
										          <input type="radio" name="gender" value="female">
										          Female
										       </label>
										     </div>
										 </div>

				    <div class = 'form-group'>
					    {{ Form:: label('maritalStatus', 'maritalStatus:') }}

					    {{ Form:: select('maritalStatus', ['Single' => 'Single', 'Married' => 'Married', 'Divorced' => 'Divorced', 'widow' =>'Widow(er)'], [ 'class' => 'form-control', 'multiple']) }}
			    	</div>
			    	<div class = 'form-group control-panel'>
					        {{ Form:: label('email', 'Email:') }}
					    
					        {{ Form:: email('email', null, ['class'=> 'form-control ']) }}
				    </div>

			         <div class="form-group">
							{{ Form::submit('save', ['class' => 'btn btn-primary btn-sm pull-right btn-success form_control']) }}
				   
					</div>
					<div class="form-group">
							{{ Form::submit('cancel', ['class' => 'btn btn-primary btn-sm btn-danger form_control']) }}
				   
					</div>
	
			{{ Form::close() }}

	@endsection