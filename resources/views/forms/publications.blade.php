@extends('master')

	@section('content')

		@if(isset($publication))
			{{ Form::model($publication,['method'=>'PATCH', 'action' => ['PublicationController@update', $publication->id]]) }}
				<div><strong> Edit Publications</strong></div>
				<hr/>
				<div class = "row">
					<div class = "col-md-3"></div>
					<div class = "col-md-6">
						<div class = 'form-group'>
						    {{ Form:: label('type', 'Type:') }}

						    {{ Form:: select('type', ['стаття ' => 'стаття' ,'монографія ' => 'монографія','підручник' => 'підручник','навч. посібник' => 'навч. посібник','методична розробка' =>'методична розробка','тези доповіді' =>'тези доповіді'], ['class'=> 'form-control']) }}
				    	</div>


						<div class = 'form-group'>
						    {{ Form:: label('title', 'Title:') }}

						    {{ Form:: text('title', null, ['class'=> 'form-control']) }}
				    	</div>


				        <div class = 'form-group'>
						    {{ Form:: label('specialisation',  'Specialisation:') }}

						    {{ Form:: text('specialisation', null, ['class'=> 'form-control']) }}
				    	</div>
				    	
				    	<div class = 'form-group control-panel'>
					        {{ Form:: label('description', 'Description:') }}
					    
					        {{ Form:: textarea('description', null, ['class'=> 'form-control']) }}
				        </div>
				        <div class = 'form-group'>
						    {{ Form:: label('journal', 'journal:') }}

						    {{ Form:: text('journal', null, ['class'=> 'form-control']) }}
				    	</div>

				   		<div class = 'form-group control-panel'>
					        {{ Form:: label('published-on', 'Published on:') }}
					    
					        {{ Form:: text('published_on', null, ['class'=> 'form-control', 'id' => 'month'])  }}
				        </div>

						<div class = 'form-group control-panel'>
						    {{ Form:: label('publication_file', 'Upload file:') }}

						    {{ Form:: file('publication_file', null, ['class'=> 'form-control']) }}
				    	</div>
				         <div>
								{{ Form::submit('save', ['class' => 'btn btn-primary btn-sm pull-right btn-success form_control']) }}
				   
						</div>
						<div>
								{{ Form::submit('cancel', ['class' => 'btn btn-primary btn-sm btn-danger form_control']) }}
				   
						</div>

					</div>
					<div class = "col-md-3"></div>
				</div>


		{{ Form::close() }}

	@else


		{{ Form::open(['url'=>'savePub']) }}

			<div><strong>Publications</strong></div>
				<hr/>
				<div class = "row">
					<div class = "col-md-3"></div>
					<div class = "col-md-6">
						<div class = 'form-group'>
						    {{ Form:: label('type', 'Type:') }}

						    {{ Form:: select('type', ['стаття ' => 'стаття' ,'монографія ' => 'монографія','підручник' => 'підручник','навч. посібник' => 'навч. посібник','методична розробка' =>'методична розробка','тези доповіді' =>'тези доповіді'], ['class'=> 'form-control']) }}
				    	</div>


						<div class = 'form-group'>
						    {{ Form:: label('title', 'Title:') }}

						    {{ Form:: text('title', null, ['class'=> 'form-control']) }}
				    	</div>


				        <div class = 'form-group'>
						    {{ Form:: label('specialisation',  'Specialisation:') }}

						    {{ Form:: text('specialisation', null, ['class'=> 'form-control']) }}
				    	</div>
				    	
				    	<div class = 'form-group control-panel'>
					        {{ Form:: label('description', 'Description:') }}
					    
					        {{ Form:: textarea('description', null, ['class'=> 'form-control']) }}
				        </div>
				        <div class = 'form-group'>
						    {{ Form:: label('journal', 'journal:') }}

						    {{ Form:: text('journal', null, ['class'=> 'form-control']) }}
				    	</div>

				   		<div class = 'form-group control-panel'>
					        {{ Form:: label('published-on', 'Published on:') }}
					    
					        {{ Form:: text('published_on', null, ['class'=> 'form-control', 'id' => 'month'])  }}
				        </div>

						<div class = 'form-group control-panel'>
						    {{ Form:: label('publication_file', 'Upload file:') }}

						    {{ Form:: file('publication_file', null, ['class'=> 'form-control']) }}
				    	</div>
				        <div>
							{{ Form::submit('submit', ['class' => 'btn btn-primary form_control']) }}
			   
						</div>

					</div>
					<div class = "col-md-3"></div>
				</div>


		{{ Form::close() }}
	@endif

	@endsection