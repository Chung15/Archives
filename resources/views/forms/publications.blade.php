@extends('master')

	@section('pageHeader')
		@include('templates.headerLoggedIn')
	@endsection

	@section('content')

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

				        				        
					       
				        

				       <!--  <div class="panel-group"> -->
				      		<h5> <strong> Authors:</strong></h5>
						    <div class="panel panel-default">
						      <!-- <div class="panel-heading">Authors</div> -->
						      <div class="panel-body">
						      <div class= "row">
						        		<div class="col-md-12">
										        {{ Form:: label('name', 'name:',  ['id' =>'authorLabel']) }}
						      			</div>
						       </div>
						      		<div class="row author_data" id="basicInput">

							      		<div  class="col-md-10">
								      		 <div class = 'form-group control-panel'>
										    
										        {{ Form:: text('name', null, ['class'=> 'form-control']) }}

							        		</div>
						        		</div>
						        		<div  class="col-md-2">
						        			<button type="button" class="btn btn-primary fa fa-minus-circle pull-right hidden removebtn" id= "removeButton" onclick="removeInputField(this)"> </button>
						        			 
						        		</div>
					        		</div>

					        		<!-- <div class="row" id="author_data">

							      		<div  class="col-md-10">
								      		 <div class = 'form-group control-panel'>
										    
										        {{ Form:: text('name', null, ['class'=> 'form-control']) }}

							        		</div>
						        		</div>
						        		<div  class="col-md-2">
						        			<button type="button" class="btn btn-primary fa fa-minus-circle pull-right" onclick="removeInputField()"> </button>
						        			 
						        		</div>
					        		</div> -->



					        		<hr/>
					        		<div class="row">
					        			<div class="col-md-10"></div>
					        			<div class="col-md-2">
					        				 <button type="button" class="btn btn-primary pull-right" id="addBtn" onclick="addInputField()">add author </button>
					        			 </div>
					        		</div>  
						      </div>
						       <!-- <div class="panel-footer">
						       		 <button type="button" class="btn btn-primary fa fa-plus-circle" onclick=""> </button>
						       </div> -->
						    </div>

						<!-- </div> -->


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
						    {{ Form:: label('place', 'place:') }}

						    {{ Form:: text('place', null, ['class'=> 'form-control']) }}
				    	</div>

				   		<div class = 'form-group control-panel'>
					        {{ Form:: label('published-on', 'Published on:') }}
					    
					        {{ Form:: text('published_on', null, ['class'=> 'form-control', 'id' => 'month'])  }}
				        </div>

				        <div>
							{{ Form::submit('submit', ['class' => 'btn btn-primary form_control']) }}
			   
						</div>
					</div>
					<div class = "col-md-3"></div>
				</div>


		{{ Form::close() }}

	@endsection