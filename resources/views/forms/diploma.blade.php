@extends('master')

	@section('content')

		@if(isset($diploma))
			<div class="row">
				{{ Form::model($diploma, ['method'=>'PATCH', 'action' => ['DiplomaController@update', $diploma->id]]) }}
						<div class="formTitles"><strong>Diploma</strong></div>
						<hr/>
							<div class = "col-md-2"></div>
							<div class="col-md-6">

									        {{ Form:: label('diploma_type',  'Diploma type:'), ['class' => 'control-label'] }}
					        		 <div class = 'form-group control-panel'>
									    
									        {{ Form:: select('diploma_type', ['Бакалавр' => 'Бакалавр', 'Магистратура' => 'Магистратура' , 'Аспирантира' =>'Аспирантира', 'other' =>'Другое'], ['class'=> 'form-control','multiple']) }}
							        </div>
							        <div class = 'form-group control-panel hidden' id=' otherField1'>
									        {{ Form:: label('other_diploma', 'другое:') }}
									    
									        {{ Form:: text('other_diploma', null, ['class'=> 'form-control']) }}
				        			</div>
							        <div class = 'form-group control-panel'>
									        {{ Form:: label('seria_number',  'Serie/N:') }}
									    
									        {{ Form:: text('seria_number', null, ['class'=> 'form-control']) }}
							        </div>
							        <div class = 'form-group control-panel'>
									       {{ Form:: label('thesis_topic',  'Thesis Topic:') }}
									    
									       {{ Form:: text('thesis_topic', null, ['class'=> 'form-control']) }}
							        </div>
							         <div class = 'form-group control-panel'>
									        {{ Form:: label('specialization',  'Specialization:') }}
									    
									        {{ Form:: text('specialization', null, ['class'=> 'form-control']) }}
							        </div>
							        <div class = 'form-group control-panel'>
									        {{ Form:: label('department',  'Department:') }}
									    
									        {{ Form:: text('department', null, ['class'=> 'form-control']) }}
							        </div>
							        <div class = 'form-group control-panel'>
									        {{ Form:: label('university',  'University:') }}
									    
									        {{ Form:: text('university', null, ['class'=> 'form-control']) }}
							        </div>
							        <div class = 'form-group control-panel'>
									        {{ Form:: label('year',  'year:') }}
									    
									        {{ Form:: text('year', null, ['class' => 'form-control year']) }}
							        </div>
							        <div class = 'form-group control-panel'>
									        {{ Form:: label('diploma_link',  'Ссылка:') }}
									    
									        {{ Form:: text('diploma_link', null, ['class' => 'form-control']) }}
							        </div>
							         <div>
								{{ Form::submit('save', ['class' => 'btn btn-primary btn-sm pull-right btn-success form_control']) }}
				   
									</div>
									<div>
								{{ Form::submit('cancel', ['class' => 'btn btn-primary btn-sm btn-danger form_control']) }}
				   
									</div>
						    </div>

					        <div class = "col-md-4"></div>
		        	{{ Form:: close() }}
		    	</div>

		
		@else	

				<div class="row">
					{{ Form::open(['url' => 'saveDiploma']) }}
						<div class="formTitles"><strong>Diploma</strong></div>
						<hr/>
							<div class = "col-md-2"></div>
							<div class="col-md-6">

									        {{ Form:: label('diploma_type',  'Diploma type:'), ['class' => 'control-label'] }}
					        		 <div class = 'form-group control-panel'>
									    
									        {{ Form:: select('diploma_type', ['Бакалавр' => 'Бакалавр', 'Магистратура' => 'Магистратура' , 'Аспирантира' =>'Аспирантира', 'other' =>'Другое'], ['class'=> 'form-control','multiple']) }}
							        </div>
							        <div class = 'form-group control-panel hidden' id=' otherField1'>
									        {{ Form:: label('other_diploma', 'другое:') }}
									    
									        {{ Form:: text('other_diploma', null, ['class'=> 'form-control']) }}
				        			</div>
							        <div class = 'form-group control-panel'>
									        {{ Form:: label('seria_number',  'Serie/N:') }}
									    
									        {{ Form:: text('seria_number', null, ['class'=> 'form-control']) }}
							        </div>
							        <div class = 'form-group control-panel'>
									       {{ Form:: label('thesis_topic',  'Thesis Topic:') }}
									    
									       {{ Form:: text('thesis_topic', null, ['class'=> 'form-control']) }}
							        </div>
							         <div class = 'form-group control-panel'>
									        {{ Form:: label('specialization',  'Specialization:') }}
									    
									        {{ Form:: text('specialization', null, ['class'=> 'form-control']) }}
							        </div>
							        <div class = 'form-group control-panel'>
									        {{ Form:: label('department',  'Department:') }}
									    
									        {{ Form:: text('department', null, ['class'=> 'form-control']) }}
							        </div>
							        <div class = 'form-group control-panel'>
									        {{ Form:: label('university',  'University:') }}
									    
									        {{ Form:: text('university', null, ['class'=> 'form-control']) }}
							        </div>
							        <div class = 'form-group control-panel'>
									        {{ Form:: label('year',  'year:') }}
									    
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