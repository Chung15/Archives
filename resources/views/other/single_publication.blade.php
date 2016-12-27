@extends('master')

	@section('content')
		<div class="panel panel-default">
				 
				  <div class="panel-body">
				     <table class="table table-striped table-user-information">

					    <tr><td>{{ $publication->type }}</td></tr>
					    <tr><td>{{ $publication->title }}</td></tr>
					    <tr><td>{{ $publication->specialisation }}</td></tr>
					     <tr><td>{{ $publication->description }}</td></tr>
					     <tr><td>{{ $publication->journal }}</td></tr>
					     <tr><td>{{ $publication->published_on }}</td></tr>
					     <tr><td><a href="{{ $publication->publication_file }}">View pdf</a></td></tr>
					    
			    	
				   </table>
				  </div>
				   @if( (Auth::check() AND (Auth::User()->id === $user->id)) OR (Auth::check() AND (Auth::User()->isAdmin === 1) ))
					  <div class="panel-footer">
					  	<div class="row">
					   		<div class="col-md-2">
					   		{{ Form::model($publication,['method'=>'DELETE', 'action' => ['PublicationController@destroy', $publication->id]]) }}
					            {{ Form::hidden('_method', 'DELETE') }}
					           
					            {{ Form::submit('delete', array('class' => 'btn btn-small btn-danger')) }}
					        {{ Form::close() }}
					        </div>
					  		<div class="col-md-8"></div>
					  		<div class="col-md-2">
					   			
					   			<a class="btn btn-small btn-info pull-right" href="{{ URL::to('/publication/' . $publication->id . '/edit') }}">Edit</a>
					   		</div>
					   	</div>
					  </div>
					@endif

				</div>
	@endsection