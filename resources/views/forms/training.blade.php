@extends('master')

	@section('content')
		@if(isset($training))
			{{ Form::model($training, ['method'=>'PATCH', 'action' => ['TrainingController@update', $training->id]]) }}
				<div> <strong>Training</strong></div>
				<hr/>
				<div class = "row">
					<div class = "col-md-3"></div>
					<div class = "col-md-6">

				        <div class = 'form-group'>
						    {{ Form:: label('topic', 'topic:') }}

						    {{ Form:: text('topic', null, ['class'=> 'form-control']) }}
				    	</div>
				    	<div class = 'form-group control-panel'>
					        {{ Form:: label('description', 'Description:') }}
					    
					        {{ Form:: textarea('description', null, ['class'=> 'form-control']) }}
				        </div>
				        <div class = 'form-group control-panel'>
					        {{ Form:: label('training_link', 'Ссылка: ') }}
					    
					        {{ Form:: text('training_link', null, ['class' => 'form-control']) }}
				        </div>
				   		<div class = 'form-group control-panel'>
					        {{ Form:: label('start_date', 'Start:') }}
					    
					        {{ Form:: text('start_date', null, ['class' => 'date']) }}
				        </div>
				        <div class = 'form-group control-panel'>
					        {{ Form:: label('end_date', 'End: ') }}
					    
					        {{ Form:: text('end_date', null, ['class' => 'date']) }}
				        </div>


				         <div class="form-group">
							{{ Form::submit('save', ['class' => 'btn btn-primary btn-sm pull-right btn-success form_control']) }}
				   
					</div>
					<div class="form-group">
							{{ Form::submit('cancel', ['class' => 'btn btn-primary btn-sm btn-danger form_control']) }}
				   
					</div>
					</div>
					<div class = "col-md-3"></div>
				</div>


			{{ Form::close() }}

		@else
		


			{{ Form::open(['url' => 'saveTraining']) }}

				<div> <strong>Training</strong></div>
					<hr/>
					<div class = "row">
						<div class = "col-md-3"></div>
						<div class = "col-md-6">

					        <div class = 'form-group'>
							    {{ Form:: label('topic', 'topic:') }}

							    {{ Form:: text('topic', null, ['class'=> 'form-control']) }}
					    	</div>
					    	<div class = 'form-group control-panel'>
						        {{ Form:: label('description', 'Description:') }}
						    
						        {{ Form:: textarea('description', null, ['class'=> 'form-control']) }}
					        </div>
					        <div class = 'form-group control-panel'>
					        {{ Form:: label('training_link', 'Ссылка: ') }}
					    
					        {{ Form:: text('training_link', null, ['class' => 'form-control']) }}
				        </div>
					   		<div class = 'form-group control-panel'>
						        {{ Form:: label('start_date', 'Start:') }}
						    
						        {{ Form:: text('start_date', null, ['class' => 'date']) }}
					        </div>
					        <div class = 'form-group control-panel'>
						        {{ Form:: label('end_date', 'End: ') }}
						    
						        {{ Form:: text('end_date', null, ['class' => 'date']) }}
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