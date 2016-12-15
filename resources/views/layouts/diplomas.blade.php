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
					<h2>Diplomas</h2>

					@foreach($diplomas as $diploma)

				    	<tr>
				    		<div class="row">
					    		<td class="col-md-10">{{ $diploma->diploma_type }}
					    			<p><a class="btn" href="{{  action('DiplomaController@show', [$diploma->id]) }}">view details »</a></p>
					    		</td>
					    		<td class="col-md-1"><a href="{{ action('DiplomaController@edit', [$diploma->id]) }}" class="glyphicon glyphicon-pencil default"></a></td>
					    		<td>
						    		{{ Form::model( $diploma, ['method'=>'DELETE', 'action' => ['DiplomaController@destroy', $diploma->id]] ) }}
					                    {{ Form::hidden('_method', 'DELETE') }}
					                    <button type="submit"><i class="glyphicon glyphicon-trash pull-right"></i></button>
					                    <!-- {{ Form::submit('delete', array('class' => 'btn btn-danger btn-xs glyphicon glyphicon-trash')) }} -->
					                {{ Form::close() }}
					    		</td>
				    		</div>
				    		
				    	</tr>
						
			    	@endforeach
		    	</table>
			</div>
	
		</div>

    @endsection