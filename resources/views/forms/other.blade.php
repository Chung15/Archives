@extends('master')

	@section('content')
		
		@if(isset($other))
			{{ Form::model($other,['method'=>'PATCH', 'action' => ['OtherController@update', $other->id]]) }}
		@if(Session::has('message'))
    <h2 style="color: green"><i class="fa fa-star"></i>{{Session::get('message')}}</h2>
@endif

		<div class="formTitles"><strong>Редактировать другое</strong></div>			
				<div class = "row">
					<div class = "col-md-3"></div>
					<div class = "col-md-6">
						<div class = 'form-group'>
						    {{ Form:: label('name', 'Тема:') }}

						    {{ Form:: text('name', null, ['class'=> 'form-control']) }}
				    	</div>

				   		<div class = 'form-group control-panel'>
					        {{ Form:: label('description', 'Описание:') }}
					    
					        {{ Form:: textarea('description', null, ['class'=> 'form-control']) }}
				        </div>
				        <div class = 'form-group control-panel'>
					        {{ Form:: label('other_link', 'Ссылка:') }}
					    
					        {{ Form::text('other_link', null, ['class'=> 'form-control']) }}
				        </div>
				         <div>
								{{ Form::submit('сохранить', ['class' => 'btn btn-primary btn-sm pull-right btn-success form_control']) }}
				   
						</div>
						<div>
								{{ Form::submit('отметить', ['class' => 'btn btn-primary btn-sm btn-danger form_control']) }}
				   
						</div>
			       </div>
				</div>
			
		@else
		
			{{ Form::open(['url' => 'saveOther']) }}

				<div class="formTitles"><strong>Другое</strong></div>
					<hr/>
					<div class = "row">
						<div class = "col-md-3"></div>
						<div class = "col-md-6">
							<div class = 'form-group'>
							    {{ Form:: label('name', 'Тема:') }}

							    {{ Form:: text('name', null, ['class'=> 'form-control']) }}
					    	</div>

					   		<div class = 'form-group control-panel'>
						        {{ Form:: label('description', 'Описание:') }}
						    
						        {{ Form:: textarea('description', null, ['class'=> 'form-control']) }}
					        </div>
					        <div class = 'form-group control-panel'>
					        {{ Form:: label('other_link', 'Ссылка:') }}
					    
					        {{ Form:: text('other_link', null, ['class'=> 'form-control']) }}
				        </div>
					        <div>
								{{ Form::submit('submit', ['class' => 'btn btn-primary form_control']) }}
				   
							</div>
						</div>
						<div class = "col-md-3"></div>
					</div>
		@endif
		


			{{ Form::close() }}
@endsection