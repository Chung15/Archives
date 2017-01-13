@extends('master')

	@section('content')
		@if(isset($topic))
			{{ Form::model($topic, ['method'=>'PATCH', 'action' => ['TopicsController@update', $topic->id]]) }}
		
			<div class="formTitles"><strong>Редактировать темы</strong></div>
				<hr/>
				<div class = "row">
					<div class = "col-md-3"></div>
					<div class = "col-md-6">
						<div class = "form-group control-label">
						    {{ Form:: label('type', 'Тип:') }}

						    {{ Form:: select('type', ['Bachelor' => 'Бакалавр', 'Master' => 'Магитратура', 'Doctorat' => 'Аспирантура'], [ 'class' => 'form-control', 'multiple']) }}
				    	</div>

				   		<div class = 'form-group control-panel'>
					        {{ Form:: label('title', 'Тема:') }}
					    
					        {{ Form:: text('title', null, ['class'=> 'form-control']) }}
				        </div>
				        <div class = 'form-group control-panel'>
					        {{ Form:: label('student_name', 'Имя студента:') }}
					    
					        {{ Form:: text('student_name', null, ['class'=> 'form-control']) }}
				        </div>
				        <div class = 'form-group control-panel'>
					        {{ Form:: label('student_group', 'Группа студента:') }}
					    
					        {{ Form:: text('student_group', null, ['class'=> 'form-control']) }}
				        </div>
				        <div class = 'form-group control-panel'>
					        {{ Form:: label('academic_year', 'Год:') }}
					    
					        {{ Form:: text('academic_year', null, ['class'=> 'form-control year']) }}
				        </div>
				        <div class="form-group">
							{{ Form::submit('сохранить', ['class' => 'btn btn-primary btn-sm pull-right btn-success form_control']) }}
				   
					</div>
					<div class="form-group">
							{{ Form::submit('отметить', ['class' => 'btn btn-primary btn-sm btn-danger form_control']) }}
				   
					</div>
					</div>
					<div class = "col-md-3"></div>
				</div>
			{{ Form::close() }}
		@else

		{{ Form::open(['url' => 'saveTopic']) }}
		
			<div class="formTitles"><strong>Тема диплома</strong></div>
				<hr/>
				<div class = "row">
					<div class = "col-md-3"></div>
					<div class = "col-md-6">
						<div class = "form-group control-label">
						    {{ Form:: label('type', 'Тип:') }}

						   {{ Form:: select('type', ['Бакалавр' => 'Бакалавр', 'Магистратура' => 'Магистратура', 'Аспирантура' => 'Аспирантура'], [ 'class' => 'form-control', 'multiple']) }}
				    	</div>

				   		<div class = 'form-group control-panel'>
					        {{ Form:: label('title', 'Тема:') }}
					    
					        {{ Form:: text('title', null, ['class'=> 'form-control']) }}
				        </div>
				        <div class = 'form-group control-panel'>
					        {{ Form:: label('student_name', 'Имя студента:') }}
					    
					        {{ Form:: text('student_name', null, ['class'=> 'form-control']) }}
				        </div>
				        <div class = 'form-group control-panel'>
					        {{ Form:: label('student_group', 'Группа студента:') }}
					    
					        {{ Form:: text('student_group', null, ['class'=> 'form-control']) }}
				        </div>
				        <div class = 'form-group control-panel'>
					        {{ Form:: label('academic_year', 'Год:') }}
					    
					        {{ Form:: text('academic_year', null, ['class'=> 'form-control year']) }}
				        </div>

				        <div>
							{{ Form::submit('submit', ['class' => 'btn btn-primary form_control']) }}
			   
						</div>
					</div>
					<div class = "col-md-3"></div>
				</div>
			{{ Form::close() }}
		@endif
	
		@endsection
