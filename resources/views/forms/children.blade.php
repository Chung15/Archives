@extends('master')

	@section('pageHeader')
		@include('templates.headerLoggedIn')
	@endsection
	@section('content')

<!-- array('action' => 'ChildController@create') -->
		{{ Form::open(['url' => 'saveChildren']) }}
			<div><strong>Children</strong></div>
			<hr/>
			<div class = "row">
				<div class = "col-md-2"></div>
				<div class = "col-md-6">

			   		<div class = 'form-group control-panel'>
			   			{{ Form::label('check', 'Do you have children?') }}
						{{ Form::radio('yes', 'value') }}
						{{ Form::radio('no', 'value') }}
			   		</div>
			   		<hr/>

		   		<div class = "col-md-6">
		   			<div class = 'form-group'>
					    {{ Form:: label('firstname', 'Firstame:') }}

					    {{ Form:: text('firstname', null, ['class'=> 'form-control']) }}
			    	</div>
			    	<div class = 'form-group'>
					    {{ Form:: label('lastname', 'Lastname:') }}

					    {{ Form:: text('lastname', null, ['class'=> 'form-control']) }}
			    	</div>
			    	<div class = 'form-group'>
					    {{ Form:: label('patronymic', 'Patronymic:') }}

					    {{ Form:: text('patronymic', null, ['class'=> 'form-control']) }}
			    	</div>
			    	<!-- <div class = 'form-group control-panel'>
				        {{ Form:: label('dateOfBirth', 'Birth date:') }}
				    
				        {{ Form:: date('dateOfBirth', \Carbon\Carbon::now()) }}

			        </div> -->


			       <!--  <hr/>
			        <div>leaves</div>
			        <hr/>
			        <div class = 'form-group control-panel'>
				        {{ Form:: label('desc', 'Type:') }}
				    
				        {{ Form:: select('leave_type',['child care', 'maternity leave'], [ 'class' => 'form-control', 'multiple']) }}
			        </div>
			        <div class = 'form-group control-panel'>
				        {{ Form:: label('desc', 'start:') }}
				    
				        {{ Form:: date('date', \Carbon\Carbon::now()) }}
			        </div>
				        <div class = 'form-group control-panel'>
				        {{ Form:: label('desc', 'End:') }}
				    
				        {{ Form:: date('date', \Carbon\Carbon::now()) }}
			        </div> -->

			        <div class= 'form-group control-panel'>
			        	{{ Form::submit('Save child', ['class' => 'btn']) }}
			        </div>
			    @endsection


	
			{{ Form::close() }}

	