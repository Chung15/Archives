@extends('master')

	@section('pageHeader')
		@include('templates.headerLoggedIn')
	@endsection
	@section('content')

		{{ Form::open() }}
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
					    {{ Form:: label('name', 'Firstame:') }}

					    {{ Form:: text('name', null, ['class'=> 'form-control']) }}
			    	</div>
			    	<div class = 'form-group'>
					    {{ Form:: label('name', 'Lastame:') }}

					    {{ Form:: text('name', null, ['class'=> 'form-control']) }}
			    	</div>
			    	<div class = 'form-group'>
					    {{ Form:: label('name', 'Patronymic:') }}

					    {{ Form:: text('name', null, ['class'=> 'form-control']) }}
			    	</div>
			    	<div class = 'form-group control-panel'>
				        {{ Form:: label('desc', 'Birth date:') }}
				    
				        {{ Form:: date('date', \Carbon\Carbon::now()) }}
			        </div>
			        <hr/>
			        <div>child care leave</div>
			        <hr/>
			        <div class = 'form-group control-panel'>
				        {{ Form:: label('desc', 'start:') }}
				    
				        {{ Form:: date('date', \Carbon\Carbon::now()) }}
			        </div>
				        <div class = 'form-group control-panel'>
				        {{ Form:: label('desc', 'End:') }}
				    
				        {{ Form:: date('date', \Carbon\Carbon::now()) }}
			        </div>

			        <hr/>
			        <div>maternity leave</div>
			        <hr/>
			        <div class = 'form-group control-panel'>
				        {{ Form:: label('desc', 'start:') }}
				    
				        {{ Form:: date('date', \Carbon\Carbon::now()) }}
			        </div>
				        <div class = 'form-group control-panel'>
				        {{ Form:: label('desc', 'End:') }}
				    
				        {{ Form:: date('date', \Carbon\Carbon::now()) }}
			        </div>
			    @endsection

	
			{{ Form::close() }}

	