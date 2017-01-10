@extends('master')

	@section('content')
		@if(isset($training))
			{{ Form::model($training, ['method'=>'PATCH', 'action' => ['TrainingController@update', $training->id]]) }}
				<div class="formTitles"> <strong>Редактировать повышение информации</strong></div>
				<hr/>
				<div class = "row">
					<div class = "col-md-3"></div>
					<div class = "col-md-6">

				        <div class = 'form-group'>
						    {{ Form:: label('topic', 'Тема:') }}

						    {{ Form:: text('topic', null, ['class'=> 'form-control']) }}
				    	</div>
				        <div class = 'form-group control-panel'>
					        {{ Form:: label('training_link', 'Ссылка: ') }}
					    
					        {{ Form:: text('training_link', null, ['class' => 'form-control']) }}
				        </div>
				   		<div class = 'form-group control-panel'>
					        {{ Form:: label('start_date', 'Начало:') }}
					    
					        {{ Form:: text('start_date', null, ['class' => 'form-control date']) }}
				        </div>
				        <div class = 'form-group control-panel'>
					        {{ Form:: label('end_date', 'Конец: ') }}
					    
					        {{ Form:: text('end_date', null, ['class' => 'form-control date']) }}
				        </div>
				    	<div class = 'form-group control-panel'>
					        {{ Form:: label('description', 'Описание:') }}
					    
					        {{ Form:: textarea('description', null, ['class'=> 'form-control']) }}
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
		


			{{ Form::open(['url' => 'saveTraining']) }}

				<div class="formTitles"> <strong>Повышение информации</strong></div>
					<hr/>
					<div class = "row">
						<div class = "col-md-3"></div>
						<div class = "col-md-6">

					        <div class = 'form-group'>
							    {{ Form:: label('topic', 'Тема:') }}

							    {{ Form:: text('topic', null, ['class'=> 'form-control']) }}
					    	</div>
					        <div class = 'form-group control-panel'>
					        {{ Form:: label('training_link', 'Ссылка: ') }}
					    
					        {{ Form:: text('training_link', null, ['class' => 'form-control']) }}
				        </div>
					   		<div class = 'form-group control-panel'>
						        {{ Form:: label('start_date', 'Начало:') }}
						    
						        {{ Form:: text('start_date', null, ['class' => 'form-control date']) }}
					        </div>
					        <div class = 'form-group control-panel'>
						        {{ Form:: label('end_date', 'Конец: ') }}
						    
						        {{ Form:: text('end_date', null, ['class' => 'form-control date']) }}
					        </div>

					    	<div class = 'form-group control-panel'>
						        {{ Form:: label('description', 'Описание:') }}
						    
						        {{ Form:: textarea('description', null, ['class'=> 'form-control']) }}
					        </div>

					        <div class = 'form-group control-panel'>
								{{ Form::submit('submit', ['class' => 'btn btn-primary form_control']) }}
				   
							</div>
						</div>
						<div class = "col-md-3"></div>
					</div>


			{{ Form::close() }}
		@endif
	@endsection