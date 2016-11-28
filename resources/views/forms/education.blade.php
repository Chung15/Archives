@extends('master')

	@section('pageHeader')
		@include('templates.headerLoggedIn')
	@endsection

	@section('content')
<div><strong>Education</strong></div>
		<hr/>
		<div class = "row">
			<div class = "col-md-2"></div>
				<div class = 'form-group control-panel'>
			<div class = "col-md-8">
			<div class="row">
					<!-- <div class = "row"> -->

						<div class="col-md-4">
							<div> <strong>Diplom:</strong> </div>
				        	<hr>
						        <div class = 'form-group control-panel'>
								        {{ Form:: label('serie',  'Serie/N:') }}
								    
								        {{ Form:: text('serie', null, ['class'=> 'form-control']) }}
						        </div>
						        <div class = 'form-group control-panel'>
								        {{ Form:: label('univ',  'University:') }}
								    
								        {{ Form:: text('serie', null, ['class'=> 'form-control']) }}
						        </div>
						        <div class = 'form-group control-panel'>
								        {{ Form:: label('serie',  'specialisation:') }}
								    
								        {{ Form:: text('serie', null, ['class'=> 'form-control']) }}
						        </div>
						        <div class = 'form-group control-panel'>
								        {{ Form:: label('serie',  'year:') }}
								    
								        {{ Form:: date('date', \Carbon\Carbon::now()) }}
						        </div>
					    </div>

						    <!-- <div class="col-md-4"></div> -->
				       	 		<!-- <div class= "row"> -->
					        	<div class = "col-md-4">
						    <div> <strong>Academic degree:</strong> </div>
					        	<hr>
					        	 <div class = 'form-group control-panel'>
									        {{ Form:: label('name',  'name:') }}
									    
									        {{ Form:: text('serie', null, ['class'=> 'form-control']) }}
							        </div>
							        <div class = 'form-group control-panel'>
									        {{ Form:: label('serie',  'diploma:') }}
									    
									        {{ Form:: text('serie', null, ['class'=> 'form-control']) }}
									        		<div class = 'form-group control-panel'>
												        {{ Form:: label('serie',  'specialisation:') }}
												    
												        {{ Form:: text('serie', null, ['class'=> 'form-control']) }}
							       					 </div>
											        <div class = 'form-group control-panel'>
													        {{ Form:: label('serie',  'year:') }}
													    
													        {{ Form:: date('date', \Carbon\Carbon::now()) }}
											        </div>
										        </div>
								        </div>


						       <!--  </div> -->


						        <!-- <div class= "row"> -->
					        	<div class = "col-md-4">
						    <div> <strong>Academic title:</strong> </div>
					        	<hr>
					        	 <div class = 'form-group control-panel'>
									        {{ Form:: label('name',  'name:') }}
									    
									        {{ Form:: text('serie', null, ['class'=> 'form-control']) }}
							        </div>
							        <div class = 'form-group control-panel'>
									        {{ Form:: label('serie',  'diploma:') }}
									    
									        {{ Form:: text('serie', null, ['class'=> 'form-control']) }}
									        		<div class = 'form-group control-panel'>
												        {{ Form:: label('serie',  'specialisation:') }}
												    
												        {{ Form:: text('serie', null, ['class'=> 'form-control']) }}
							       					 </div>
											        <div class = 'form-group control-panel'>
													        {{ Form:: label('serie',  'year:') }}
													    
													        {{ Form:: date('date', \Carbon\Carbon::now()) }}
											        </div>
										        </div>
								        </div>


						        <!-- </div> -->
						    </div>
		        </div>
		        </div>
		        <div class = "col-md-2"></div>
		        </div>

		     @endsection