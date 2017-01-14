@extends('master')

	@section('content')
		<div class="panel panel-default">
				 
				  <div class="panel-body">
				     <table class="table table-striped table-user-information">

					    <tr><td><label>Тип:</label> {{ $publication->type }}</td></tr>
					    <tr><td><label>Название:</label> {{ $publication->title }}</td></tr>
					    <tr><td><label>Спецификация:</label> {{ $publication->specialisation }}</td></tr>
					     <tr><td><label>Описание:</label> {{ $publication->description }}</td></tr>
					     <tr><td><label>Журнал:</label>  {{ $publication->journal }}</td></tr>
					     <tr><td><label>Опубликовано в:</label> {{ $publication->published_on }}</td></tr>
					     <tr><td><a href="{{ $publication->publication_file }}" target="_blank">View pdf</a></td></tr>
					    
			    	
				   </table>
				  </div>
				   @if( (Auth::check() AND (Auth::User()->id === $user->id)) OR (Auth::check() AND (Auth::User()->isAdmin === 1) ))
					  <div class="panel-footer">
					  	<div class="row">
					   		<div class="col-md-2">
					   		{{ Form::model($publication,['method'=>'DELETE', 'action' => ['PublicationController@destroy', $publication->id]]) }}
					            {{ Form::hidden('_method', 'DELETE') }}
					           
					            {{ Form::submit('удалить', array('class' => 'btn btn-small btn-danger')) }}
					        {{ Form::close() }}
					        </div>
					  		<div class="col-md-8"></div>
					  		<div class="col-md-2">
					   			
					   			<a class="btn btn-small btn-info pull-right" href="{{ URL::to('/publication/' . $publication->id . '/edit') }}">редактировать</a>
					   		</div>
					   	</div>
					  </div>
					@endif

				</div>
	@endsection