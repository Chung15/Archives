

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
					<h2>Повышении квалификации</h2>

					@foreach($trainings as $training)

				    	<tr>
				    		<div class="row">
					    		<td class="col-md-10">{{ $training->topic }}
					    			<p><a class="btn" href="{{  action('TrainingController@show', [$training->id]) }}">подробнее »</a></p>
					    		</td>
					    		
					    		 @if( (Auth::check() AND (Auth::User()->id === $user->id)) OR (Auth::check() AND (Auth::User()->isAdmin === 1) ))
						    		<td class="col-md-1"><a href="{{ action('TrainingController@edit', [$training->id]) }}" class="glyphicon glyphicon-pencil default"></a></td>
						    		<td>
							    		{{ Form::model($training,['method'=>'DELETE', 'action' => ['TrainingController@destroy', $training->id]]) }}
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