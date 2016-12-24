@extends('master')

	@section('content')

		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h6 class="panel-title">{{ $diploma->diploma_type }}</h6>
		  </div>
		  <div class="panel-body">
		  <table class="table table-striped table-user-information">

			    <tr><td>{{ $diploma->seria_number }}</td></tr>
			    <tr><td>{{ $diploma->thesis_topic }}</td></tr>
			    <tr><td>{{ $diploma->specialization }}</td></tr>
			    <tr><td>{{ $diploma->department}}</td></tr>
			    <tr><td>{{ $diploma->university}}</td></tr>
			    <tr><td>{{ $diploma->year }}</td></tr>
	    	
		   </table>
		  </div>
		  @if((Auth::check()) AND (Auth::User()->id === $user->id))
			  <div class="panel-footer">
			  	<div class="row">
			   		<div class="col-md-2">
			   		{{ Form::model( $diploma,['method'=>'DELETE', 'action' => ['DiplomaController@destroy', $diploma->id]]) }}
			            {{ Form::hidden('_method', 'DELETE') }}
			           
			            {{ Form::submit('delete', array('class' => 'btn btn-small btn-danger')) }}
			        {{ Form::close() }}
			        </div>
			  		<div class="col-md-8"></div>
			  		<div class="col-md-2">
			   			
			   			<a class="btn btn-small btn-info pull-right" href="{{ URL::to('/diploma/' . $diploma->id . '/edit') }}">Edit</a>
			   		</div>
			   	</div>
			  </div>
			@endif

		</div>
		
	@stop