@extends('master')

    @section('title')
     Archives
    @endsection

    @section('content')
    	
		<div class="row">
			<div class="col-md-8">
				<table class="table table-striped table-hover">
					<h2>Titles</h2>

					@foreach($titles as $title)

				    	<tr>
				    		<div class="row">
					    		<td class="col-md-10">{{ $title->academic_title }}
					    			<p><a class="btn" href="{{  action('AcademicTitleController@show', [$title->id]) }}">view details »</a></p>
					    		</td>
					    		<td class="col-md-1"><a href="{{ action('AcademicTitleController@edit', [$title->id]) }}" class="glyphicon glyphicon-pencil default"></a></td>
					    		<td>
						    		{{ Form::model( $title, ['method'=>'DELETE', 'action' => ['AcademicTitleController@destroy', $title->id]] ) }}
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