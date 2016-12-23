@extends('master')

	@section('content')
		<div class="panel panel-default">
				  <div class="panel-heading">
				    <h6 class="panel-title">{{ $title->academic_title }}</h6>
				  </div>
				  <div class="panel-body">
				     <table class="table table-striped table-user-information">

					    <tr><td>{{ $title->seria_number }}</td></tr>
					    <tr><td>{{ $title->thesis_topic }}</td></tr>
					    <tr><td>{{ $title->specialization }}</td></tr>
					    <tr><td>{{ $title->year }}</td></tr>
					    <tr><td>{{ $title->title_link}}</td></tr>
			    	
			    	
				   </table>
				  </div>
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

				</div>
	@endsection