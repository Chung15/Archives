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
					<h2>Ученая степень</h2>

					
					@foreach($degrees as $degree)
					

				    	<tr>
				    		<div class="row">
					    		<td class="col-md-10">{{ $degree->academic_degree }}
					    			<p><a class="btn" href="{{  action('AcademicDegreeController@show', [$degree->id]) }}">подробнее »</a></p>
					    		</td>

					    		 @if( (Auth::check() AND (Auth::User()->id === $user->id)) OR (Auth::check() AND (Auth::User()->isAdmin === 1) ))
					    		<td class="col-md-1"><a href="{{ action('AcademicDegreeController@edit', [$degree->id]) }}" class="glyphicon glyphicon-pencil default"></a>
					    		</td>
					    		<td>
						    		{{ Form::model( $degree, ['method'=>'DELETE', 'action' => ['AcademicDegreeController@destroy', $degree->id]] ) }}
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