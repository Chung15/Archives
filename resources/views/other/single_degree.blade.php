@extends('master')

	@section('content')
		<div class="panel panel-default">
				  <div class="panel-heading">
				    <h6 class="panel-title">{{ $degree->academic_degree }}</h6>
				  </div>
				  <div class="panel-body">
				     <table class="table table-striped table-user-information">

					    <tr><td>{{ $degree->seria_number }}</td></tr>
					    <tr><td>{{ $degree->thesis_topic }}</td></tr>
					    <tr><td>{{ $degree->specialization }}</td></tr>
					    <tr><td>{{ $degree->year }}</td></tr>
			    	
				   </table>
				  </div>
				  <div class="panel-footer">
				  	<div class="row">
				   		<div class="col-md-2">
				   		{{ Form::model( $degree,['method'=>'DELETE', 'action' => ['AcademicDegreeController@destroy', $degree->id]]) }}
				            {{ Form::hidden('_method', 'DELETE') }}
				           
				            {{ Form::submit('delete', array('class' => 'btn btn-small btn-danger')) }}
				        {{ Form::close() }}
				        </div>
				  		<div class="col-md-8"></div>
				  		<div class="col-md-2">
				   			
				   			<a class="btn btn-small btn-info pull-right" href="{{ URL::to('/degree/' . $degree->id . '/edit') }}">Edit</a>
				   		</div>
				   	</div>
				  </div>

				</div>
	@endsection