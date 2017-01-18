@extends('master')

	@section('content')

		@include('help')
			<div class="row">
				<div class="col-md-1"></div>

				<div class="col-md-8">
					<h4 class="formTitles">Instructions</h4>

						<div class="panel-group" id="accordionCollapse" role="tablist" aria-multiselectable="true">
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="headingUn">
						      <h4 class="panel-title">
						        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseUn" aria-expanded="true" aria-controls="collapseUn">
						          Registration
						        </a>
						      </h4>
						    </div>
						    <div id="collapseUn" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingUn">
						      <div class="panel-body">
							      <ul>
							      	<li>All fields in the form are required. Failing to fill one of the fields does not allow access to the app nor create a user profile</li>
							      	<li>For passport data, you can choose wether yu want to add a link or not. The link should be the scan copy of your original passport, located in your Google Disc(Recommended), or in any othersecured online  cloud</li>

							      </ul>

						      </div>
					    	</div>
						  </div>
					    </div>

					    <div class="panel-group" id="accordionCollapse" role="tablist" aria-multiselectable="true">
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="headingDeux">
						      <h4 class="panel-title">
						        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseDeux" aria-expanded="true" aria-controls="collapseDeux">
						          Profile
						        </a>
						      </h4>
						    </div>
						    <div id="collapseDeux" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingDeux">
						      <div class="panel-body">
						      	<ul>
						      		<li>
						      			You can add a profile picture by cliking on the icon <i class="fa fa-camera"></i>
						      			<p> After choosing the picture you have to click submit for the picture to be updated.</p>
						      		</li>
						      		<li>
						      			You can edit you personal and contact info by clicking on the button edit.
						      			<p> You can also update your password by clicking on the button 'update password'. This will open a modal window where you have to enter your old password and the new one. After saving changes, you are looged out of the application so as to login with the new password.</p>
						      		</li>
						      		<li>
						      			The section bar on the left side of your profile displays the last updates of the specified fields.
						      			You can directly edit or delete any information form there by clicking on icons.
						      		</li>
						      	</ul>


						      </div>
					    	</div>
						  </div>
					    </div>

					     <div class="panel-group" id="accordionCollapse" role="tablist" aria-multiselectable="true">
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="headingTrois">
						      <h4 class="panel-title">
						        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTrois" aria-expanded="true" aria-controls="collapseTrois">
						          Forms
						        </a>
						      </h4>
						    </div>
						    <div id="collapseTrois" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTrois">
						      <div class="panel-body">
						      <ul>
						      	<li>
						      		The application has 9 forms. each one of them recollect specific information. 
						      		<p>
						      		 - Diploma
						      		 - Academic title
						      		 - Academic degree
						      		 - Children
						      		 - Leaves
						      		 - Trainings
						      		 - Publications
						      		 - Diploma thesis topics
						      		 -Other
						      		 </p>
						      		for all of the forms, you may choose to add a link from your google disc or not.
						      	</li>
						      </ul>

						      </div>
					    	</div>
						  </div>
					    </div>
					    <div class="panel-group" id="accordionCollapse" role="tablist" aria-multiselectable="true">
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="headingQuatre">
						      <h4 class="panel-title">
						        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseQuatre" aria-expanded="true" aria-controls="collapseQuatre">
						          Archives
						        </a>
						      </h4>
						    </div>
						    <div id="collapseQuatre" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingQuatre">
						      <div class="panel-body">


						      </div>
					    	</div>
						  </div>
					    </div>

				</div>
				<div class="col-md-1"></div>
			</div>
		
	@stop
