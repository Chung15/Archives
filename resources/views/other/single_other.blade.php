@extends('master')

	@section('content')

		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h6 class="panel-title">{{ $other->name }}</h6>
		  </div>
		  <div class="panel-body">
		    {{ $other->description }}
		  </div>
		  
		  @if((Auth::check()) AND (Auth::User()->id === $user->id))
			  <div class="panel-footer">
			  	<div class="row">
			   		<div class="col-md-2">
			   		{{ Form::model( $other,['method'=>'DELETE', 'action' => ['OtherController@destroy', $other->id]]) }}
			            {{ Form::hidden('_method', 'DELETE') }}
			           
			            {{ Form::submit('delete', array('class' => 'btn btn-small btn-danger')) }}
			        {{ Form::close() }}
			        </div>
			  		<div class="col-md-8"></div>
			  		<div class="col-md-2">
			   			
			   			<a class="btn btn-small btn-info pull-right" href="{{ URL::to('/other/' . $other->id . '/edit') }}">Edit</a>
			   		</div>
			   	</div>
			  </div>
			@endif

		</div>
		
	@stop
