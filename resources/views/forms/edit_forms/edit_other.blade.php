@extends('master')

@section('content')

    <!-- <h1>Edit: {{ $other->name }}</h1> -->

    {{ Form::model( $other,['method'=>'PATCH', 'action' => ['OtherController@update', $other->id]]) }}
    
					<div class = "row">
						<div class = "col-md-3"></div>
						<div class = "col-md-6">
							<div class = 'form-group'>
							    {{ Form:: label('name', 'Name:') }}

							    {{ Form:: text('name', null, ['class'=> 'form-control']) }}
					    	</div>

					   		<div class = 'form-group control-panel'>
						        {{ Form:: label('description', 'Description:') }}
						    
						        {{ Form:: textarea('description', null, ['class'=> 'form-control']) }}
					        </div>
					        <div>
								{{ Form::submit('save', ['class' => 'btn btn-primary btn-sm pull-right btn-success form_control']) }}
				   
							</div>
							<div>
								{{ Form::submit('cancel', ['class' => 'btn btn-primary btn-sm btn-danger form_control']) }}
				   
							</div>
						</div>
						<div class = "col-md-3"></div>
					</div>

{{ Form::close() }}

@stop