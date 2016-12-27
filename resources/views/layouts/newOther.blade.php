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
					<h2>Other</h2>

					@foreach($others as $other)

				    	<tr>
				    		<div class="row">
					    		<td class="col-md-10">{{ $other->name }}
					    			<p><a class="btn" href="{{  action('OtherController@show', [$other->id]) }}">view details »</a></p>
					    		</td>
					    		
					    		 @if( (Auth::check() AND (Auth::User()->id === $user->id)) OR (Auth::check() AND (Auth::User()->isAdmin === 1) ))
						    		<td class="col-md-1"><a href="{{ action('OtherController@edit', [$other->id]) }}" class="glyphicon glyphicon-pencil default"></a></td>
						    		<td>
							    		{{ Form::model( $other,['method'=>'DELETE', 'action' => ['OtherController@destroy', $other->id]]) }}
						                    {{ Form::hidden('_method', 'DELETE') }}
						                    <button type="submit"><i class="glyphicon glyphicon-trash pull-right"></i></button>
						                    <!-- {{ Form::submit('delete', array('class' => 'btn btn-danger btn-xs glyphicon glyphicon-trash')) }} -->
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