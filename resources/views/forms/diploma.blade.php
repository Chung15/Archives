@extends('master')

	@section('pageHeader')
		@include('templates.headerLoggedIn')
	@endsection

	@section('content')

		
		<!-- <div class = "row">
			<div class = "col-md-2"></div>
				<div class = 'form-group control-panel'>
					<div class = "col-md-8"> -->
				{{ Form::open(['url' => 'saveDiploma']) }}
					<div><strong>Diploma</strong></div>
						<div class="row">
							<div class = "col-md-2"></div>
							<div class="col-md-4">

					        		 <div class = 'form-group control-panel'>
									        {{ Form:: label('diploma_type',  'Diploma type:') }}
									    
									        {{ Form:: select('diploma_type', ['Bachelor'=> 'Bachelor', 'Master' => 'Master', 'Doctorat' =>'Doctorat'], ['class'=> 'form-control','multiple']) }}
							        </div>
							        <div class = 'form-group control-panel'>
									        {{ Form:: label('seria_number',  'Serie/N:') }}
									    
									        {{ Form:: text('seria_number', null, ['class'=> 'form-control']) }}
							        </div>
							        <div class = 'form-group control-panel'>
									       {{ Form:: label('thesis_topic',  'Thesis Topic:') }}
									    
									       {{ Form:: text('thesis_topic', null, ['class'=> 'form-control']) }}
							        </div>
							         <div class = 'form-group control-panel'>
									        {{ Form:: label('specialization',  'Specialization:') }}
									    
									        {{ Form:: text('specialization', null, ['class'=> 'form-control']) }}
							        </div>
							        <div class = 'form-group control-panel'>
									        {{ Form:: label('department',  'Department:') }}
									    
									        {{ Form:: text('department', null, ['class'=> 'form-control']) }}
							        </div>
							        <div class = 'form-group control-panel'>
									        {{ Form:: label('university',  'University:') }}
									    
									        {{ Form:: text('university', null, ['class'=> 'form-control']) }}
							        </div>
							        <div class = 'form-group control-panel'>
									        {{ Form:: label('year',  'year:') }}
									    
									        {{ Form:: text('year', null, ['class' => 'form-control year']) }}
							        </div>
							         <div class = 'form-group control-panel' >
											{{ Form::submit('submit', ['class' => 'btn btn-primary form_control']) }}
						   
									</div>
						    </div>

				    	</div>
	        	{{ Form:: close() }}
			        </div>
	        	</div>
		        <div class = "col-md-2"></div>
    	</div>

		     @endsection