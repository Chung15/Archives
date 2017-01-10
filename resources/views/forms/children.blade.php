@extends('master')

	@section('content')
		@if(isset($child))
			{{ Form::model($child, ['method'=>'PATCH', 'action' => ['ChildController@update', $child->id]]) }}
			<div class="formTitles"><strong>Дети</strong></div>
			<hr/>
			<div class = "row">
				<div class = "col-md-2"></div>
				<div class = "col-md-6">

		   		<div class = "col-md-6">
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
			    	<div class = 'form-group control-panel'>
					        {{ Form:: label('dateOfBirth', 'Дата рождения:') }}
					    
					        {{ Form:: text('dateOfBirth', null, ['class'=> 'form-control date']) }}
				    </div>
				    <div class = 'form-group control-panel'>
					        {{ Form:: label('child_link', 'Ссылка:') }}
					    
					        {{ Form:: text('child_link', null, ['class'=> 'form-control']) }}
				        </div>


			         <div class="form-group">
							{{ Form::submit('сохранить', ['class' => 'btn btn-primary btn-sm pull-right btn-success form_control']) }}
				   
					</div>
					<div class="form-group">
							{{ Form::submit('отметить', ['class' => 'btn btn-primary btn-sm btn-danger form_control']) }}
				   
					</div>
				</div>
			</div>
	
			{{ Form::close() }}

		@else

		{{ Form::open(['url' => 'saveChildren']) }}
			<div class="formTitles"><strong>Дети</strong></div>
			<hr/>
			<div class = "row">
				<div class = "col-md-2"></div>
				<div class = "col-md-6">

		   		<div class = "col-md-6">
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
			    	<div class = 'form-group control-panel'>
					        {{ Form:: label('dateOfBirth', 'Дата рождения:') }}
					    
					        {{ Form:: text('dateOfBirth', null, ['class'=> 'form-control date']) }}
				        </div>
				    <div class = 'form-group control-panel'>
					        {{ Form:: label('child_link', 'Ссылка:') }}
					    
					        {{ Form:: text('child_link', null, ['class'=> 'form-control']) }}
				        </div>

			        <div class= 'form-group control-panel'>
			        	{{ Form::submit('сохранить', ['class' => 'btn btn-primary']) }}
			        </div>
	        	</div>
	        </div>

			{{ Form::close() }}

			@endif

			    @endsection

	