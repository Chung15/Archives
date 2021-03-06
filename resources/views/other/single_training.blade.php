
<!-- @extends('master') -->

	@section('content')
		
		<div class="panel panel-default">
				 
			<div class="panel-heading">
				    <h6 class="panel-title">{{ $training->topic}}</h6>
				  </div>
				  <div class="panel-body">
				     <table class="table table-striped table-user-information">

					    <tr><td><label>Описание:</label> {{ $training->description }}</td></tr>
					    <tr><td><label>Начало:</label> {{ $training->start_date }}</td></tr>
					    <tr><td><label>Конец:</label> {{ $training->end_date }}</td></tr>
					    <tr><td><label>Ссылка:</label> <a href="{{ $training->training_link }}" target="_blank">{{ $training->training_link }}</a></td></tr>
			    	
				   </table>
				  </div>
				   @if( (Auth::check() AND (Auth::User()->id === $user->id)) OR (Auth::check() AND (Auth::User()->isAdmin === 1) ))
					  <div class="panel-footer">
					  	<div class="row">
					   		<div class="col-md-2">
					   		{{ Form::model($training,['method'=>'DELETE', 'action' => ['TrainingController@destroy', $training->id]]) }}
					            {{ Form::hidden('_method', 'DELETE') }}
					           
					            {{ Form::submit('удалить', array('class' => 'btn btn-small btn-danger')) }}
					        {{ Form::close() }}
					        </div>
					  		<div class="col-md-8"></div>
					  		<div class="col-md-2">
					   			
					   			<a class="btn btn-small btn-info pull-right" href="{{ URL::to('/training/' . $training->id . '/edit') }}">редактировать</a>
					   		</div>
					   	</div>
					  </div>
				  @endif

				</div>
		
	@endsection