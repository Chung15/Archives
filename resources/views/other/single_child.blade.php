@extends('master')

	@section('content')
		<div class="panel panel-default">
				 
				  <div class="panel-body">
				     <table class="table table-striped table-user-information">

					    <tr><td>{{ $child->firstname }}</td></tr>
					    <tr><td>{{ $child->patronymic }}</td></tr>
					    <tr><td>{{ $child->lastname }}</td></tr>
					    
			    	
				   </table>
				  </div>
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

				</div>
	@endsection