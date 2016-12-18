<div class="row">
	<div class = "col-md-6">
			<div class="row">
				<div class="profile_picture col-md-4">
					<div class="row"><img src="images/user-logo.png"></div>
					<hr class="divider" />
					
					<div class="row">@include('templates.user.user_left_sidebar')</div>
					
				</div>
				<div class="col-md-8">
					<div class="panel ">
	            <div class="panel-heading">
	            	  <div class="panel-body">
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
									<button class="btn btn-primary pull-right btn-xs">edit profile</button>
								@endif

						</div>
				</div>
			</div>
				</div>
			</div>
				

			
	 		
	</div>
	@include('templates.user.aside_content')

</div>
