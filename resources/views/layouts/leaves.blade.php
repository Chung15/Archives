@extends('master')

    @section('title')
     Archives
    @endsection

    @section('content')
    	@include('templates.user.archives.archives_main_content')
    	<div class="col-md-1"></div>
		<div class="row">
			<div class="col-md-7">
				<table class="table table-striped table-hover">
					<h2>Leaves</h2>
					
					@foreach($leaves as $leave)
					

				    	<tr>
				    		<div class="row">
					    		<td class="col-md-10">{{ $leave->leave_type }}
					    			<p><a class="btn" href="{{  action('LeavesController@show', [$leave->id]) }}">view details »</a></p>
					    		</td>
					    		
					    		@if((Auth::check()) AND (Auth::User()->id === $user->id))
						    		<td class="col-md-1"><a href="{{ action('LeavesController@edit', [$leave->id]) }}" class="glyphicon glyphicon-pencil default"></a>
						    		</td>
						    		<td>
							    		{{ Form::model( $leave, ['method'=>'DELETE', 'action' => ['LeavesController@destroy', $leave->id]] ) }}
						                    {{ Form::hidden('_method', 'DELETE') }}
						                    <button type="submit"><i class="glyphicon glyphicon-trash pull-right"></i></button>
						 
						                {{ Form::close() }}
						    		</td>
						    	@endif
				    		</div>
				    		
				    	</tr>
				    
			    	@endforeach
			    
		    	</table>
			</div>
	
		</div>

    @endsection