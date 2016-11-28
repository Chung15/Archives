@extends('master')
	
	@section('pageHeader')
		@include('templates.headerLoggedIn')
	@endsection

	@section('content')

		{{ Form::open() }}
		
			<div><strong>Thesis Topics</strong></div>
				<hr/>
				<div class = "row">
					<div class = "col-md-3"></div>
					<div class = "col-md-6">
						<div class = "form-group control-label">
						    {{ Form:: label('type', 'Type:') }}

						    {{ Form:: select('topics',['licence', 'bachelor', 'master', 'doctorat'], [ 'class' => 'form-control', 'multiple']) }}
				    	</div>

				   		<div class = 'form-group control-panel'>
					        {{ Form:: label('title', 'Title:') }}
					    
					        {{ Form:: text('title', null, ['class'=> 'form-control']) }}
				        </div>
				        <div class = 'form-group control-panel'>
					        {{ Form:: label('stud_name', 'Student_name:') }}
					    
					        {{ Form:: text('stud_name', null, ['class'=> 'form-control']) }}
				        </div>
				        <div class = 'form-group control-panel'>
					        {{ Form:: label('ac_year', 'Academic year:') }}
					    
					        {{ Form:: text('ac_year', null, ['class'=> 'form-control']) }}
				        </div>

				        <div>
							{{ Form::submit('submit', ['class' => 'btn btn-primary form_control']) }}
			   
						</div>
					</div>
					<div class = "col-md-3"></div>
				</div>
			{{ Form::close() }}
	
		@endsection
