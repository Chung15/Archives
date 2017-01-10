@extends('master')

	@section('content')
		@include('templates.user.archives.archives_main_content')

<!-- <div class="col-md-4"></div> -->
  	<div class="col-md-8 singles">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h6 class="panel-title">{{ $other->name }}</h6>
		  </div>
		  <div class="panel-body">
		  	<table class="singleView">
			  	<tr><td>Description: {{ $other->description }}</td></tr>
			    <tr><td>Link: <a href="{{ $other->other_link }}" target="_blank">{{ $other->other_link }}</a></td></tr>
		    </table>
		    
		  </div>
		  
		   @if( (Auth::check() AND (Auth::User()->id === $user->id)) OR (Auth::check() AND (Auth::User()->isAdmin === 1) ))
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
	</div>
	<!-- <div class="col-md-2"></div> -->
		
	@stop
