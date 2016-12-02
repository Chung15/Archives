@extends('master')
	
	@section('pageHeader')
		@include('templates.headerLoggedIn')
	@endsection

	@section('content')

		{{ Form::open(['url' => 'saveTopic']) }}
		
			<div><strong>Thesis Topics</strong></div>
				<hr/>
				<div class = "row">
					<div class = "col-md-3"></div>
					<div class = "col-md-6">
						<!-- <div class = "form-group control-label">
						    {{ Form:: label('type', 'Type:') }}

						    {{ Form:: select('topics',['licence', 'bachelor', 'master', 'doctorat'], [ 'class' => 'form-control', 'multiple']) }}
				    	</div>
 -->
				   		<div class = 'form-group control-panel'>
					        {{ Form:: label('title', 'Title:') }}
					    
					        {{ Form:: text('title', null, ['class'=> 'form-control']) }}
				        </div>
				        <div class = 'form-group control-panel'>
					        {{ Form:: label('student_name', 'Student name:') }}
					    
					        {{ Form:: text('student_name', null, ['class'=> 'form-control']) }}
				        </div>
				        <div class = 'form-group control-panel'>
					        {{ Form:: label('student_group', 'Student group:') }}
					    
					        {{ Form:: text('student_group', null, ['class'=> 'form-control']) }}
				        </div>
				        <div class = 'form-group control-panel'>
					        {{ Form:: label('academic_year', 'Academic year:') }}
					    
					        {{ Form:: text('academic_year', null, ['class'=> 'form-control']) }}
				        </div>

				        <div>
							{{ Form::submit('submit', ['class' => 'btn btn-primary form_control']) }}
			   
						</div>
					</div>
					<div class = "col-md-3"></div>
				</div>
			{{ Form::close() }}
	
		@endsection
