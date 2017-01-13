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
					<h2>Темы дипломов</h2>

					@foreach($topics as $topic)

				    	<tr>
				    		<div class="row">
					    		<td class="col-md-10">{{ $topic->title }}
					    			<p><a class="btn" href="{{  action('TopicsController@show', [$topic->id]) }}">подробнее »</a></p>
					    		</td>

					    		 @if( (Auth::check() AND (Auth::User()->id === $user->id)) OR (Auth::check() AND (Auth::User()->isAdmin === 1) ))
						    		<td class="col-md-1"><a href="{{ action('TopicsController@edit', [$topic->id]) }}" class="glyphicon glyphicon-pencil default"></a></td>
						    		<td>
							    		{{ Form::model($topic,['method'=>'DELETE', 'action' => ['TopicsController@destroy', $topic->id]]) }}
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