@extends('master')

	@section('content')
		<div class="panel panel-default">
				  <div class="panel-heading">
				    <h6 class="panel-title">{{ $title->academic_title }}</h6>
				  </div>
				  <div class="panel-body">
				     <table class="table table-striped table-user-information">

					    <tr><td>Seria №: {{ $title->seria_number }}</td></tr>
					    <tr><td>Thesis topic: {{ $title->thesis_topic }}</td></tr>
					    <tr><td>Specialisation field: {{ $title->specialization }}</td></tr>
					    <tr><td> Year: {{ $title->year }}</td></tr>
					    <tr><td>Link: <a href="{{ $title->title_link }}" target="_blank">{{ $title->title_link }}</a></td></tr>
			    	
			    	
				   </table>
				  </div>
				   @if( (Auth::check() AND (Auth::User()->id === $user->id)) OR (Auth::check() AND (Auth::User()->isAdmin === 1) ))
					  <div class="panel-footer">
					  	<div class="row">
					   		<div class="col-md-2">
					   		{{ Form::model( $title,['method'=>'DELETE', 'action' => ['AcademicTitleController@destroy', $title->id]]) }}
					            {{ Form::hidden('_method', 'DELETE') }}
					           
					            {{ Form::submit('delete', array('class' => 'btn btn-small btn-danger')) }}
					        {{ Form::close() }}
					        </div>
					  		<div class="col-md-8"></div>
					  		<div class="col-md-2">
					   			
					   			<a class="btn btn-small btn-info pull-right" href="{{ URL::to('/title/' . $title->id . '/edit') }}">Edit</a>
					   		</div>
					   	</div>
					  </div>
					@endif

				</div>
	@endsection