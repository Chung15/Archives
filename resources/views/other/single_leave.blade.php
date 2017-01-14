@extends('master')

	@section('content')
		<div class="panel panel-default">
				  <div class="panel-heading">
				    @if(isset($leave->other_leave) AND (!empty($leave->other_leave)))
				    	<h6 class="panel-title"><strong>{{ $leave->other_leave }}</strong></h6>	
				    @else
				    	 <h6 class="panel-title"><strong>{{ $leave->leave_type }}</strong></h6>
				    @endif
				  </div>
				  <div class="panel-body">
				     <table class="table table-striped table-user-information">

					    <tr>
					    	<p>	Преподаватель по именни {{$user->lastname}} {{$user->firstname}}  , находится в {{ $leave->leave_type }} c {{ $leave->start_date }} до {{ $leave->end_date }}
					    	 
					    	</p>
					    	<p> C таким комметариям: {{ $leave->comment }}.</p>

					    </tr>
			    	
				   </table>
				  </div>
				   @if( (Auth::check() AND (Auth::User()->id === $user->id)) OR (Auth::check() AND (Auth::User()->isAdmin === 1) ))
					  <div class="panel-footer">
					  	<div class="row">
					   		<div class="col-md-2">
					   		{{ Form::model( $leave,['method'=>'DELETE', 'action' => ['LeavesController@destroy', $leave->id]]) }}
					            {{ Form::hidden('_method', 'DELETE') }}
					           
					            {{ Form::submit('удалить', array('class' => 'btn btn-small btn-danger')) }}
					        {{ Form::close() }}
					        </div>
					  		<div class="col-md-8"></div>
					  		<div class="col-md-2">
					   			
					   			<a class="btn btn-small btn-info pull-right" href="{{ URL::to('/leave/' . $leave->id . '/edit') }}">редактировать</a>
					   		</div>
					   	</div>
					  </div>
					@endif

				</div>
	@endsection