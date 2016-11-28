@extends('master')
	
	@section('pageHeader')
		@include('templates.headerLoggedIn')
	@endsection

	@section('content')


		{{ Form::open() }}

			<div> <strong>Qualification(training)</strong></div>
				<hr/>
				<div class = "row">
					<div class = "col-md-3"></div>
					<div class = "col-md-6">

				   		<div class = 'form-group control-panel'>
					        {{ Form:: label('desc', 'Start:') }}
					    
					        {{ Form:: date('date', \Carbon\Carbon::now()) }}
				        </div>
				        <div class = 'form-group control-panel'>
					        {{ Form:: label('desc', 'End:') }}
					    
					        {{ Form:: date('date', \Carbon\Carbon::now()) }}
				        </div>

				        <div class = 'form-group'>
						    {{ Form:: label('spec', 'topic:') }}

						    {{ Form:: text('spec', null, ['class'=> 'form-control']) }}
				    	</div>
				    	<div class = 'form-group control-panel'>
					        {{ Form:: label('desc', 'Description:') }}
					    
					        {{ Form:: textarea('desc', null, ['class'=> 'form-control']) }}
				        </div>

				        <div>
							{{ Form::submit('submit', ['class' => 'btn btn-primary form_control']) }}
			   
						</div>
					</div>
					<div class = "col-md-3"></div>
				</div>


		{{ Form::close() }}
	@endsection