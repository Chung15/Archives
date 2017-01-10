@extends('master')

	@section('content')


		 @if($errors->any())
     		 <ul class="alert alert-danger">
          		<li>invalid file format, only pdf allowed</li>
       		 @foreach($errors as $error)
          		<li>{{$error}}</li>
        	@endforeach
      		</ul>
    	@endif

		@if(isset($publication))
			{{ Form::model($publication,['method'=>'PATCH', 'action' => ['PublicationController@update', $publication->id], 'enctype' => 'multipart/form-data']) }}
			
				<div class="formTitles"><strong> Редактировать публикации</strong></div>
				<hr/>
				<div class = "row">
					<div class = "col-md-3"></div>
					<div class = "col-md-6">
						<div class = 'form-group'>
						    {{ Form:: label('type', 'Тип:') }}

						    {{ Form:: select('type', ['стаття ' => 'стаття' ,'монографія ' => 'монографія','підручник' => 'підручник','навч. посібник' => 'навч. посібник','методична розробка' =>'методична розробка','тези доповіді' =>'тези доповіді'], ['class'=> 'form-control']) }}
				    	</div>


						<div class = 'form-group'>
						    {{ Form:: label('title', 'Название:') }}

						    {{ Form:: text('title', null, ['class'=> 'form-control']) }}
				    	</div>


				        <div class = 'form-group'>
						    {{ Form:: label('specialisation',  'Специальность:') }}

						    {{ Form:: text('specialisation', null, ['class'=> 'form-control']) }}
				    	</div>
				    	
				        <div class = 'form-group'>
						    {{ Form:: label('journal', 'Журнал:') }}

						    {{ Form:: text('journal', null, ['class'=> 'form-control']) }}
				    	</div>

				   		<div class = 'form-group control-panel'>
					        {{ Form:: label('published-on', 'Опубликована в:') }}
					    
					        {{ Form:: text('published_on', null, ['class'=> 'form-control', 'id' => 'month'])  }}
				        </div>
				    	<div class = 'form-group control-panel'>
					        {{ Form:: label('description', 'Описание:') }}
					    
					        {{ Form:: textarea('description', null, ['class'=> 'form-control']) }}
				        </div>

						<div class = 'form-group control-panel'>
						    {{ Form:: label('publication_file', 'Скачать файл:') }}

						    {{ Form:: file('publication_file', null, ['class'=> 'form-control']) }}
				    	</div>
				         <div>
								{{ Form::submit('сохранить', ['class' => 'btn btn-primary btn-sm pull-right btn-success form_control']) }}
				   
						</div>
						<div>
								{{ Form::submit('отметить', ['class' => 'btn btn-primary btn-sm btn-danger form_control']) }}
				   
						</div>

					</div>
					<div class = "col-md-3"></div>
				</div>


		{{ Form::close() }}

	@else


		{{ Form::open(['url'=>'savePub', 'enctype' => 'multipart/form-data']) }}

			<div class="formTitles"><strong>Публикация</strong></div>
				<hr/>
				<div class = "row">
					<div class = "col-md-3"></div>
					<div class = "col-md-6">
						<div class = 'form-group'>
						    {{ Form:: label('type', 'Тип:') }}

						    {{ Form:: select('type', ['стаття ' => 'стаття' ,'монографія ' => 'монографія','підручник' => 'підручник','навч. посібник' => 'навч. посібник','методична розробка' =>'методична розробка','тези доповіді' =>'тези доповіді'], ['class'=> 'form-control']) }}
				    	</div>


						<div class = 'form-group'>
						    {{ Form:: label('title', 'Название:') }}

						    {{ Form:: text('title', null, ['class'=> 'form-control']) }}
				    	</div>


				        <div class = 'form-group'>
						    {{ Form:: label('specialisation',  'Специальность:') }}

						    {{ Form:: text('specialisation', null, ['class'=> 'form-control']) }}
				    	</div>
				    	
				        <div class = 'form-group'>
						    {{ Form:: label('journal', 'журнал:') }}

						    {{ Form:: text('journal', null, ['class'=> 'form-control']) }}
				    	</div>

				   		<div class = 'form-group control-panel'>
					        {{ Form:: label('published-on', 'Опубликована в:') }}
					    
					        {{ Form:: text('published_on', null, ['class'=> 'form-control', 'id' => 'month'])  }}
				        </div>
				    	<div class = 'form-group control-panel'>
					        {{ Form:: label('description', 'Описание:') }}
					    
					        {{ Form:: textarea('description', null, ['class'=> 'form-control']) }}
				        </div>

						<div class = 'form-group control-panel'>
						    {{ Form:: label('publication_file', 'Скачать файл:') }}
							<!-- <input type="file" name="publication_file" class ="form-group control" > -->
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