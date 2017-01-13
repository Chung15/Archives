@extends('master')
	@section('content')
<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-5">
			<fieldset>
    		<legend>Редактировать профиль</legend>

    			{{ Form::model($user,['method'=>'PATCH', 'action' => ['UserController@update', $user->id]]) }}
			<br>
		
			    	<div class = 'form-group'>
					    {{ Form:: label('lastname', 'Фамилия:') }}

					    {{ Form:: text('lastname', null, ['class'=> 'form-control']) }}
			    	</div>
		   			<div class = 'form-group'>
					    {{ Form:: label('firstname', 'Имя:') }}

					    {{ Form:: text('firstname', null, ['class'=> 'form-control']) }}
			    	</div>
			    	<div class = 'form-group'>
					    {{ Form:: label('patronymic', 'Отчество:') }}

					    {{ Form:: text('patronymic', null, ['class'=> 'form-control']) }}
			    	</div>
			    	<div class = 'form-group'>
					    {{ Form:: label('INN', 'ИНН:') }}

					    {{ Form:: text('INN', null, ['class'=> 'form-control']) }}
			    	</div>
			    	<div class = 'form-group'>
					    {{ Form:: label('passport_number', 'Паспорт №:') }}

					    {{ Form:: text('passport_number', null, ['class'=> 'form-control']) }}
			    	</div>
			    	<div class = 'form-group'>
					    {{ Form:: label('passport_given', 'Кем выдан:') }}

					    {{ Form:: text('passport_given', null, ['class'=> 'form-control']) }}
			    	</div>
			    	<div class = 'form-group'>
					    {{ Form:: label('passport_date', 'Когда выдан:') }}

					    {{ Form:: text('passport_date', null, ['class'=> 'form-control']) }}
			    	</div>
				    <div class = 'form-group control-panel'>
					        {{ Form:: label('passport_link', 'Паспорт-ссылка:') }}
					    
					        {{ Form:: text('passport_link', null, ['class'=> 'form-control']) }}
				        </div>
			    	<div class = 'form-group control-panel'>
					        {{ Form:: label('dateOfBirth', 'Дата рождения:') }}
					    
					        {{ Form:: text('dateOfBirth', null, ['class'=> 'form-control date']) }}
				    </div>
				    <div class="form-group {{ $errors->has('gender') ? ' has-error' : '' }}">
										     <label for="gender" class="col-md-4 control-label">
										        Пол</label>
										     <div class="col-md-8 ">
										       <label>
										          <input type="radio" name="gender" value="male" checked="true">
										             муж.
										          </label>
										       <label>
										          <input type="radio" name="gender" value="female">
										          жен.
										       </label>
										     </div>
										 </div>

				    <div class = 'form-group'>
					    {{ Form:: label('maritalStatus', 'Семеное положение:') }}

					    {{ Form:: select('maritalStatus', ['single' => 'холостой(ая)', 'married' => 'в браке', 'divorced' => 'разведенный(ая)', 'widow' =>'вдова'], [ 'class' => 'form-control', 'multiple']) }}
			    	</div>
			    	<div class = 'form-group control-panel'>
					        {{ Form:: label('email', 'Электронный адрес:') }}
					    
					        {{ Form:: email('email', null, ['class'=> 'form-control ']) }}
				    </div>

			         <div class="form-group">
							{{ Form::submit('сохранить', ['class' => 'btn btn-primary btn-sm pull-right btn-success form_control']) }}
				   
					</div>
					<div class="form-group">
							{{ Form::submit('отметить', ['class' => 'btn btn-primary btn-sm btn-danger form_control']) }}
				   
					</div>
					</fieldset>
					
		</div>
					<div class="col-md-4"></div>
	</div>
	
			{{ Form::close() }}

	@endsection