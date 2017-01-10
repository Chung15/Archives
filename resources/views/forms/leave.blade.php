@extends('master')

	@section('content')
			@if (session('status'))
			    <div class="alert alert-success">
			        {{ session('status') }}
			    </div>
			@endif

		@if(isset($leave))
			{{ Form::model($leave, ['method'=>'PATCH', 'action' => ['LeavesController@update', $leave->id]]) }}
		
			<div class="formTitles"><strong>Отпуск</strong></div>
				<hr/>
				<div class = "row">
					<div class = "col-md-3"></div>
					<div class = "col-md-6">
						<div class = "form-group control-label">
						    {{ Form:: label('leave_type', 'Вид:') }}

						    {{ Form:: select('leave_type', ['уход за ребенком' => 'уход за ребенком', 'отпуск' => 'отпуск', 'отпуск по болезни' => 'отпуск по болезни', 'other' => 'Другое'], [ 'class' => 'form-control', 'id' => 'selectField', 'multiple']) }}
				    	</div>

				   		<div class = 'form-group control-panel hidden' id= 'otherField'>
					        {{ Form:: label('other_leave', 'другое:') }}
					    
					        {{ Form:: text('other_leave', null, ['class'=> 'form-control']) }}
				        </div>
				        <div class = 'form-group control-panel'>
					        {{ Form:: label('start_date', 'Начало:') }}
					    
					        {{ Form:: text('start_date', null, ['class'=> 'form-control date']) }}
				        </div>
				        <div class = 'form-group control-panel'>
					        {{ Form:: label('end_date', 'Конец:') }}
					    
					        {{ Form:: text('end_date', null, ['class'=> 'form-control date']) }}
				        </div>
				        <div class = 'form-group control-panel'>
					        {{ Form:: label('comment', 'Комментарии:') }}
					    
					        {{ Form:: textarea('comment', null, ['class'=> 'form-control']) }}
				        </div>

				         <div class="form-group">
							{{ Form::submit('сохранить', ['class' => 'btn btn-primary btn-sm pull-right btn-success form_control']) }}
				   
					</div>
					<div class="form-group">
							{{ Form::submit('отметить', ['class' => 'btn btn-primary btn-sm btn-danger form_control']) }}
				   
					</div>
					</div>
					<div class = "col-md-3"></div>
				</div>
			{{ Form::close() }}
		@else


		{{ Form::open(['url' => 'saveLeave']) }}
		
			<div class="formTitles"><strong>Leaves</strong></div>
				<hr/>
				<div class = "row">
					<div class = "col-md-3"></div>
					<div class = "col-md-6">
						<div class = "form-group control-label">
						    {{ Form:: label('leave_type', 'Вид:') }}

						    {{ Form:: select('leave_type', ['уход за ребенком' => 'уход за ребенком', 'отпуск' => 'отпуск', 'отпуск по болезни' => 'отпуск по болезни', 'other' => 'Другое'], [ 'class' => 'form-control', 'multiple','id' => 'selectInput']) }}
				    	</div>

				   		<div class = 'form-group control-panel  hidden' id= 'otherField'>
					        {{ Form:: label('other_leave', 'другое:') }}
					    
					        {{ Form:: text('other_leave', null, ['class'=> 'form-control']) }}
				        </div>
				        <div class = 'form-group control-panel'>
					        {{ Form:: label('start_date', 'Начало:') }}
					    
					        {{ Form:: text('start_date', null, ['class'=> 'form-control date']) }}
				        </div>
				        <div class = 'form-group control-panel'>
					        {{ Form:: label('end_date', 'Конец:') }}
					    
					        {{ Form:: text('end_date', null, ['class'=> 'form-control date']) }}
				        </div>
				        <div class = 'form-group control-panel'>
					        {{ Form:: label('comment', 'Комментарии:') }}
					    
					        {{ Form:: textarea('comment', null, ['class'=> 'form-control']) }}
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
