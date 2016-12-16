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
					<h2>Degrees</h2>
					
					@foreach($degrees as $degree)
					

				    	<tr>
				    		<div class="row">
					    		<td class="col-md-10">{{ $degree->academic_degree }}
					    			<p><a class="btn" href="{{  action('AcademicDegreeController@show', [$degree->id]) }}">view details »</a></p>
					    		</td>
					    		<td class="col-md-1"><a href="{{ action('AcademicDegreeController@edit', [$degree->id]) }}" class="glyphicon glyphicon-pencil default"></a>
					    		</td>
					    		<td>
						    		{{ Form::model( $degree, ['method'=>'DELETE', 'action' => ['AcademicDegreeController@destroy', $degree->id]] ) }}
					                    {{ Form::hidden('_method', 'DELETE') }}
					                    <button type="submit"><i class="glyphicon glyphicon-trash pull-right"></i></button>
					 
					                {{ Form::close() }}
					    		</td>
				    		</div>
				    		
				    	</tr>
				    
			    	@endforeach
			    
		    	</table>
			</div>
	
		</div>

    @endsection