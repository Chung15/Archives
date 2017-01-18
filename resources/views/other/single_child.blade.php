@extends('master')

	@section('content')
		<div class="panel panel-default">
				 
				  <div class="panel-body">
				     <table class="table table-striped table-user-information">

					    <tr><td><label>Фамилия:</label> {{ $child->lastname }}</td></tr>
					    <tr><td><label>Имя:</label> {{ $child->firstname }}</td></tr>
					    <tr><td><label>Отчество:</label> {{ $child->patronymic }}</td></tr>
					    <tr><td><label>Дата рождения:</label> {{ $child->dateOfBirth }}</td></tr>
					     <tr><td><label>Ссылка:</label> <a href="{{ $child->child_link }}" target="_blank">{{ $child->child_link }}</a></td></tr>
					    
			    	
				   </table>
				  </div>
				   @if( (Auth::check() AND (Auth::User()->id === $user->id)) OR (Auth::check() AND (Auth::User()->isAdmin === 1) ))
					  <div class="panel-footer">
					  	<div class="row">
					   		<div class="col-md-2">
					   		{{ Form::model($child,['method'=>'DELETE', 'action' => ['ChildController@destroy', $child->id]]) }}
					            {{ Form::hidden('_method', 'DELETE') }}
					           
					            {{ Form::submit('удалить', array('class' => 'btn btn-small btn-danger')) }}
					        {{ Form::close() }}
					        </div>
					  		<div class="col-md-8"></div>
					  		<div class="col-md-2">
					   			
					   			<a class="btn btn-small btn-info pull-right" href="{{ URL::to('/child/' . $child->id . '/edit') }}">редактировать</a>
					   		</div>
					   	</div>
					  </div>
					@endif

				</div>
	@endsection