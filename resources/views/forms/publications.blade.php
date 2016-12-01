@extends('master')

	@section('pageHeader')
		@include('templates.headerLoggedIn')
	@endsection

	@section('content')

		{{ Form::open(['url'=>'processPub']) }}

			<div><strong>Publications</strong></div>
				<hr/>
				<div class = "row">
					<div class = "col-md-3"></div>
					<div class = "col-md-6">
						<div class = 'form-group'>
						    {{ Form:: label('type', 'Type:') }}

						    {{ Form:: select('type', ['Article','Monograph','Tutorial','Teach. manual','Methodical development','Abstracts'], null, ['class'=> 'form-control']) }}
				    	</div>
						<div class = 'form-group'>
						    {{ Form:: label('name', 'Name:') }}

						    {{ Form:: text('name', null, ['class'=> 'form-control']) }}
				    	</div>

				   		<!-- <div class = 'form-group control-panel'>
					        {{ Form:: label('desc', 'Date:') }}
					    
					        {{ Form:: date('date', \Carbon\Carbon::now()) }}
				        </div> -->
				        <div class = 'form-group'>
						    {{ Form:: label('place', 'place:') }}

						    {{ Form:: text('place', null, ['class'=> 'form-control']) }}
				    	</div>


				        <div class = 'form-group'>
						    {{ Form:: label('specialisation', 'Field of specialisation:') }}

						    {{ Form:: text('specialisation', null, ['class'=> 'form-control']) }}
				    	</div>
				    	<div class = 'form-group control-panel'>
					        {{ Form:: label('description', 'Description:') }}
					    
					        {{ Form:: textarea('description', null, ['class'=> 'form-control']) }}
				        </div>

				        <div>
							{{ Form::submit('submit', ['class' => 'btn btn-primary form_control']) }}
			   
						</div>
					</div>
					<div class = "col-md-3"></div>
				</div>


		{{ Form::close() }}

	@endsection