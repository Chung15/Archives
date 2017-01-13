@extends('master')

	@section('content')
		<div class="panel panel-default">
				 
			<div class="panel-heading">
				    <h6 class="panel-title"><label>Тема:</label> {{ $topic->title}}</h6>
				  </div>
				  <div class="panel-body">
				     <table class="table table-striped table-user-information">

					    <tr><td><label>Тип диплома:</label> {{ $topic->type }}</td></tr>
					    <tr><td> <label>Имя студента:</label> {{ $topic->student_name }}</td></tr>
					    <tr><td><label>Группа студента:</label> {{ $topic->student_group}}</td></tr>
					    <tr><td> <label>Год:</label> {{ $topic->academic_year }}</td></tr>
			    	
				   </table>
				  </div>
				   @if( (Auth::check() AND (Auth::User()->id === $user->id)) OR (Auth::check() AND (Auth::User()->isAdmin === 1) ))
					  <div class="panel-footer">
					  	<div class="row">
					   		<div class="col-md-2">
					   		{{ Form::model($topic,['method'=>'DELETE', 'action' => ['TopicsController@destroy', $topic->id]]) }}
					            {{ Form::hidden('_method', 'DELETE') }}
					           
					            {{ Form::submit('удалить', array('class' => 'btn btn-small btn-danger')) }}
					        {{ Form::close() }}
					        </div>
					  		<div class="col-md-8"></div>
					  		<div class="col-md-2">
					   			
					   			<a class="btn btn-small btn-info pull-right" href="{{ URL::to('/topic/' . $topic->id . '/edit') }}">редактировать</a>
					   		</div>
					   	</div>
					  </div>
					@endif

				</div>
	@endsection