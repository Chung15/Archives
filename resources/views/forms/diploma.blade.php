@extends('master')

	@section('content')

		@if(isset($diploma))
			<div class="row">
				{{ Form::model($diploma, ['method'=>'PATCH', 'action' => ['DiplomaController@update', $diploma->id]]) }}
						<div class="formTitles"><strong>Редактировать диплом</strong></div>
						<hr/>
							<div class = "col-md-2"></div>
							<div class="col-md-6">

									        {{ Form:: label('diploma_type',  'Тип:'), ['class' => 'control-label'] }}
					        		 <div class = 'form-group control-panel'>
									    
									        {{ Form:: select('diploma_type', ['Бакалавр' => 'Бакалавр', 'Магистратура' => 'Магистратура' , 'Аспирантира' =>'Аспирантира', 'other' =>'Другое'], ['class'=> 'form-control','multiple']) }}
							        </div>
							        <div class = 'form-group control-panel hidden' id=' otherField1'>
									        {{ Form:: label('other_diploma', 'другое:') }}
									    
									        {{ Form:: text('other_diploma', null, ['class'=> 'form-control']) }}
				        			</div>
							        <div class = 'form-group control-panel'>
									        {{ Form:: label('seria_number',  'Серияя/N:') }}
									    
									        {{ Form:: text('seria_number', null, ['class'=> 'form-control']) }}
							        </div>
							        <div class = 'form-group control-panel'>
									       {{ Form:: label('thesis_topic',  'Тема:') }}
									    
									       {{ Form:: text('thesis_topic', null, ['class'=> 'form-control']) }}
							        </div>
							         <div class = 'form-group control-panel'>
									        {{ Form:: label('specialization',  'Специальность:') }}
									    
									        {{ Form:: text('specialization', null, ['class'=> 'form-control']) }}
							        </div>
							        <div class = 'form-group control-panel'>
									        {{ Form:: label('department',  'Кафедра:') }}
									    
									        {{ Form:: text('department', null, ['class'=> 'form-control']) }}
							        </div>
							        <div class = 'form-group control-panel'>
									        {{ Form:: label('university',  'Вуз:') }}
									    
									        {{ Form:: text('university', null, ['class'=> 'form-control']) }}
							        </div>
							        <div class = 'form-group control-panel'>
									        {{ Form:: label('year',  'Год:') }}
									    
									        {{ Form:: text('year', null, ['class' => 'form-control year']) }}
							        </div>
							        <div class = 'form-group control-panel'>
									        {{ Form:: label('diploma_link',  'Ссылка:') }}
									    
									        {{ Form:: text('diploma_link', null, ['class' => 'form-control']) }}
							        </div>
							         <div>
								{{ Form::submit('сохранить', ['class' => 'btn btn-primary btn-sm pull-right btn-success form_control']) }}
				   
									</div>
									<div>
								{{ Form::submit('отметить', ['class' => 'btn btn-primary btn-sm btn-danger form_control']) }}
				   
									</div>
						    </div>

					        <div class = "col-md-4"></div>
		        	{{ Form:: close() }}
		    	</div>

		
		@else	

				<div class="row">
					{{ Form::open(['url' => 'saveDiploma']) }}
						<div class="formTitles"><strong>Диплом</strong></div>
						<hr/>
							<div class = "col-md-2"></div>
							<div class="col-md-6">

									        {{ Form:: label('diploma_type',  'Тип:'), ['class' => 'control-label'] }}
					        		 <div class = 'form-group control-panel'>
									    
									        {{ Form:: select('diploma_type', ['Бакалавр' => 'Бакалавр', 'Магистратура' => 'Магистратура' , 'Аспирантира' =>'Аспирантира', 'other' =>'Другое'], ['class'=> 'form-control','multiple']) }}
							        </div>
							        <div class = 'form-group control-panel hidden' id=' otherField1'>
									        {{ Form:: label('other_diploma', 'другое:') }}
									    
									        {{ Form:: text('other_diploma', null, ['class'=> 'form-control']) }}
				        			</div>
							        <div class = 'form-group control-panel'>
									        {{ Form:: label('seria_number',  'Серия/N:') }}
									    
									        {{ Form:: text('seria_number', null, ['class'=> 'form-control']) }}
							        </div>
							        <div class = 'form-group control-panel'>
									       {{ Form:: label('thesis_topic',  'Тема:') }}
									    
									       {{ Form:: text('thesis_topic', null, ['class'=> 'form-control']) }}
							        </div>
							         <div class = 'form-group control-panel'>
									        {{ Form:: label('specialization',  'Специальность:') }}
									    
									        {{ Form:: text('specialization', null, ['class'=> 'form-control']) }}
							        </div>
							        <div class = 'form-group control-panel'>
									        {{ Form:: label('department',  'Кафедра:') }}
									    
									        {{ Form:: text('department', null, ['class'=> 'form-control']) }}
							        </div>
							        <div class = 'form-group control-panel'>
									        {{ Form:: label('university',  'Вуз:') }}
									    
									        {{ Form:: text('university', null, ['class'=> 'form-control']) }}
							        </div>
							        <div class = 'form-group control-panel'>
									        {{ Form:: label('year',  'Год:') }}
									    
									        {{ Form:: text('year', null, ['class' => 'form-control year']) }}
							        </div>
							        <div class = 'form-group control-panel'>
									        {{ Form:: label('diploma_link',  'Ссылка:') }}
									    
									        {{ Form:: text('diploma_link', null, ['class' => 'form-control']) }}
							        </div>
							         <div class = 'form-group control-panel' >
											{{ Form::submit('submit', ['class' => 'btn btn-primary form_control']) }}
						   
									</div>
						    </div>

					        <div class = "col-md-4"></div>
		        	{{ Form:: close() }}
		    	</div>
    	@endif

			        
     @endsection