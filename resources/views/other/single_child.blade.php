@extends('master')

	@section('content')
		<div class="panel panel-default">
				 
				  <div class="panel-body">
				     <table class="table table-striped table-user-information">

					    <tr><td>Firstname: {{ $child->firstname }}</td></tr>
					    <tr><td>Patronymic: {{ $child->patronymic }}</td></tr>
					    <tr><td>Lastname: {{ $child->lastname }}</td></tr>
					    <tr><td>Birth date: {{ $child->dateOfBirth }}</td></tr>
					     <tr><td>Link: <a href="{{ $child->child_link }}" target="_blank">{{ $child->child_link }}</a></td></tr>
					    
			    	
				   </table>
				  </div>
				   @if( (Auth::check() AND (Auth::User()->id === $user->id)) OR (Auth::check() AND (Auth::User()->isAdmin === 1) ))
					  <div class="panel-footer">
					  	<div class="row">
					   		<div class="col-md-2">
					   		{{ Form::model($child,['method'=>'DELETE', 'action' => ['ChildController@destroy', $child->id]]) }}
					            {{ Form::hidden('_method', 'DELETE') }}
					           
					            {{ Form::submit('delete', array('class' => 'btn btn-small btn-danger')) }}
					        {{ Form::close() }}
					        </div>
					  		<div class="col-md-8"></div>
					  		<div class="col-md-2">
					   			
					   			<a class="btn btn-small btn-info pull-right" href="{{ URL::to('/child/' . $child->id . '/edit') }}">Edit</a>
					   		</div>
					   	</div>
					  </div>
					@endif

				</div>
	@endsection