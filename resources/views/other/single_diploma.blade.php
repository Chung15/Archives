@extends('master')

	@section('content')

		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h6 class="panel-title">{{ $diploma->diploma_type }}</h6>
		  </div>
		  <div class="panel-body">
		  <table class="table table-striped table-user-information">
		  @if($diploma->diploma_type === 'other')
		  		<tr><td>Другое: {{ $diploma->other_diploma }}</td></tr>
		  @endif
			    <tr><td><label>Серия №:</label> {{ $diploma->seria_number }}</td></tr>
			    <tr><td><label>Тема:</label> {{ $diploma->thesis_topic }}</td></tr>
			    <tr><td><label>Спецификация:</label> {{ $diploma->specialization }}</td></tr>
			    <tr><td><label>Кафедра:</label> {{ $diploma->department}}</td></tr>
			    <tr><td><label>Вуз:</label> {{ $diploma->university}}</td></tr>
			    <tr><td><label>Год:</label> {{ $diploma->year }}</td></tr>
			    <tr><td><label>Ссылка:</label> <a href="{{ $diploma->diploma_link }}" target="_blank">{{ $diploma->diploma_link }}</a></td></tr>
	    	
		   </table>
		  </div>
		   @if( (Auth::check() AND (Auth::User()->id === $user->id)) OR (Auth::check() AND (Auth::User()->isAdmin === 1) ))
			  <div class="panel-footer">
			  	<div class="row">
			   		<div class="col-md-2">
			   		{{ Form::model( $diploma,['method'=>'DELETE', 'action' => ['DiplomaController@destroy', $diploma->id]]) }}
			            {{ Form::hidden('_method', 'DELETE') }}
			           
			            {{ Form::submit('удалить', array('class' => 'btn btn-small btn-danger')) }}
			        {{ Form::close() }}
			        </div>
			  		<div class="col-md-8"></div>
			  		<div class="col-md-2">
			   			
			   			<a class="btn btn-small btn-info pull-right" href="{{ URL::to('/diploma/' . $diploma->id . '/edit') }}">редактировать</a>
			   		</div>
			   	</div>
			  </div>
			@endif

		</div>
		
	@stop