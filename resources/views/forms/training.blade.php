@extends('master')
	
	@section('pageHeader')
		@include('templates.headerLoggedIn')
	@endsection

	@section('content')


		{{ Form::open(['url' => 'saveTraining']) }}

			<div> <strong>Qualification(training)</strong></div>
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
					        {{ Form:: label('start_date', 'Start:') }}
					    
					        {{ Form:: text('start_date', null, ['class' => 'date']) }}
				        </div>
				        <div class = 'form-group control-panel'>
					        {{ Form:: label('end_date', 'End:') }}
					    
					        {{ Form:: text('end_date', null, ['class' => 'date']) }}
				        </div>


				        <div>
							{{ Form::submit('submit', ['class' => 'btn btn-primary form_control']) }}
			   
						</div>
					</div>
					<div class = "col-md-3"></div>
				</div>


		{{ Form::close() }}
	@endsection