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
					<h2>Children</h2>

					@foreach($children as $child)

				    	<tr>
				    		<div class="row">
					    		<td class="col-md-10">{{ $child->firstname }} {{ $child->patronymic }} {{ $child->lastname }} 
					    			<p><a class="btn" href="{{  action('ChildController@show', [$child->id]) }}">view details »</a></p>
					    		</td>
					    		<td class="col-md-1"><a href="{{ action('ChildController@edit', [$child->id]) }}" class="glyphicon glyphicon-pencil default"></a></td>
					    		<td>
						    		{{ Form::model($child, ['method'=>'DELETE', 'action' => ['ChildController@destroy', $child->id]] ) }}
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