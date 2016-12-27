
<!-- @extends('master') -->

	@section('content')
		
		<div class="panel panel-default">
				 
			<div class="panel-heading">
				    <h6 class="panel-title">{{ $training->topic}}</h6>
				  </div>
				  <div class="panel-body">
				     <table class="table table-striped table-user-information">

					    <tr><td>Description: {{ $training->description }}</td></tr>
					    <tr><td>Start: {{ $training->start_date }}</td></tr>
					    <tr><td>End: {{ $training->end_date }}</td></tr>
					    <tr><td>End: {{ $training->training_link }}</td></tr>
			    	
				   </table>
				  </div>
				   @if( (Auth::check() AND (Auth::User()->id === $user->id)) OR (Auth::check() AND (Auth::User()->isAdmin === 1) ))
					  <div class="panel-footer">
					  	<div class="row">
					   		<div class="col-md-2">
					   		{{ Form::model($training,['method'=>'DELETE', 'action' => ['TrainingController@destroy', $training->id]]) }}
					            {{ Form::hidden('_method', 'DELETE') }}
					           
					            {{ Form::submit('delete', array('class' => 'btn btn-small btn-danger')) }}
					        {{ Form::close() }}
					        </div>
					  		<div class="col-md-8"></div>
					  		<div class="col-md-2">
					   			
					   			<a class="btn btn-small btn-info pull-right" href="{{ URL::to('/training/' . $training->id . '/edit') }}">Edit</a>
					   		</div>
					   	</div>
					  </div>
				  @endif

				</div>
		
	@endsection