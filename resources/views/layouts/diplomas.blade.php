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
					<h2>Diplomas</h2>

					@foreach($diplomas as $diploma)

				    	<tr>
				    		<div class="row">
					    		@if($diploma->diploma_type === 'other')
					    		<td class="col-md-10">{{ $diploma->other_diploma}}
					    		@else
					    		<td class="col-md-10">{{ $diploma->diploma_type }}
					    		@endif
					    			<p><a class="btn" href="{{  action('DiplomaController@show', [$diploma->id]) }}">подробнее »</a></p>
					    		</td>
					    		 @if( (Auth::check() AND (Auth::User()->id === $user->id)) OR (Auth::check() AND (Auth::User()->isAdmin === 1) ))
						    		<td class="col-md-1"><a href="{{ action('DiplomaController@edit', [$diploma->id]) }}" class="glyphicon glyphicon-pencil default"></a></td>
						    		<td>
							    		{{ Form::model( $diploma, ['method'=>'DELETE', 'action' => ['DiplomaController@destroy', $diploma->id]] ) }}
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