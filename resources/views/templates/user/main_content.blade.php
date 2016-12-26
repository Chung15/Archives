<div class="row">
	<div class = "col-md-6">
			<div class="row">
				<div class="profile_picture col-md-4">
					<div class="row">
					@if(isset($user->profile_picture))
						<img class="img-circle" src="{{ $user->profile_picture}}" " height="200" width="200"/>
					@else
						<img class="img-rounded" src="/images/user-logo.png">
					@endif

						  <form method="POST" action="{{ url('/profile/' .$user->id. '/profile_picture') }}" enctype="multipart/form-data">
						  {{ csrf_field() }}
						  
						 @if((Auth::check()) AND (Auth::User()->id === $user->id))
							  Change picture<i class="pull-right fa fa-camera fa-2x" id="uploadImg"></i>
							  	<input type="file" name="profile_picture" class="hidden" id="inputUploadImg">
							  	<div class="form-group hidden" id="imgUploadBtn">
							  		<button type="cancel" name="cancel" value="cancel">Cancel</button>
							  		<button type="submit" name="submit" value="submit">Submit</button>
							  		
							  	</div>
						 @endif
						  </form>

					</div>
					<hr class="divider" />
					
					<div class="row">@include('templates.user.user_left_sidebar')</div>
					
				</div>
				<div class="col-md-8">
					<div class="panel ">
	            <div class="panel-heading">
	            	  <div class="panel-body" id="userProfileInfo">

	            	  
							<table class="table table-striped table-user-information">
								<tbody>
									<tr><td>Firstname: {{ $user->firstname }} </td></tr>
									<tr><td> Patronymic: {{ $user->patronymic }} </td></tr>
									<tr><td> Lastname: {{ $user->lastname }} </td></tr>
									<tr><td> INN: {{ $user->INN }} </td></tr>
									<tr><td> Passport №: {{ $user->passport_number }} </td></tr>
									<tr><td> Link: {{ $user->passport_link }} </td></tr>
									<tr><td> Birthdate: {{ $user->dateOfBirth }} </td></tr>
									<tr><td> Marital status: {{ $user->maritalStatus}} </td></tr>
										
								</tbody>
							</table>
								  @if((Auth::check()) AND (Auth::User()->id === $user->id))
									<a class="btn btn-primary pull-right btn-xs" href="{{ URL::to('/' . Auth::user()->id . '/edit') }}" id="editProfile">edit profile</a>

									<button class="btn btn-primary pull-left btn-xs" data-toggle="modal" data-target="#myModal" id="updatePassword">update password
									</button> 
									<div>
										@include('templates.user.update_password')
									</div>

								@endif


						</div>
				</div>
			</div>
				</div>
			</div>
				

			
	 		
	</div>
	@include('templates.user.aside_content')

</div>
