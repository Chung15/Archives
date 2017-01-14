@extends('master')

    @section('title')
     Archives
    @endsection

    @section('content')
    	@include('templates.user.archives.archives_main_content')
    	<div class="col-md-1"></div>
    	
		<div class="row">
			<div class="col-md-7">
				<table class="table table-hover archiveViews">
					<h2>Публикации</h2>

					@foreach($publications as $publication)

				    	<tr>
				    		<div class="row">
					    		<td class="col-md-10">{{ $publication->title }}
					    			<p><a class="btn" href="{{  action('PublicationController@show', [$publication->id]) }}">подробнее »</a></p>
					    		</td>
					    		
					    		 @if( (Auth::check() AND (Auth::User()->id === $user->id)) OR (Auth::check() AND (Auth::User()->isAdmin === 1) ))
						    		<td class="col-md-1"><a href="{{ action('PublicationController@edit', [$publication->id]) }}" class="glyphicon glyphicon-pencil default"></a></td>
						    		<td>
							    		{{ Form::model( $publication,['method'=>'DELETE', 'action' => ['PublicationController@destroy', $publication->id]]) }}
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