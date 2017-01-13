@extends('master')

	@section('content')

		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h6 class="panel-title">{{ $diploma->diploma_type }}</h6>
		  </div>
		  <div class="panel-body">
		  <table class="table table-striped table-user-information">
		  		<tr><td>Другое: {{ $diploma->other_diploma }}</td></tr>
			    <tr><td>Seria №: {{ $diploma->seria_number }}</td></tr>
			    <tr><td>Thesis topic: {{ $diploma->thesis_topic }}</td></tr>
			    <tr><td> Specialisation: {{ $diploma->specialization }}</td></tr>
			    <tr><td>Department: {{ $diploma->department}}</td></tr>
			    <tr><td>University: {{ $diploma->university}}</td></tr>
			    <tr><td>Year: {{ $diploma->year }}</td></tr>
			    <tr><td>Link: <a href="{{ $diploma->diploma_link }}" target="_blank">{{ $diploma->diploma_link }}</a></td></tr>
	    	
		   </table>
		  </div>
		   @if( (Auth::check() AND (Auth::User()->id === $user->id)) OR (Auth::check() AND (Auth::User()->isAdmin === 1) ))
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