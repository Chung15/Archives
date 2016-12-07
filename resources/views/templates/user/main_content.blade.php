<div class="row">
	<div class = "col-md-6">
			<div class="row">
				<div class="profile_picture col-md-4">
					<div class="row"><img src="images/user_picture.jpg"></div>
					<hr class="divider" />
					
					<div class="row">@include('templates.user.user_left_sidebar')</div>
					
				</div>
				<div class="col-md-8">
					<div class="panel ">
	            <div class="panel-heading">
	            	  <div class="panel-body">
							<table class="table table-striped table-user-information">
								<tbody>
									<tr><td>Firstname: {{ $user->firstname }} </td><td><i class="glyphicon glyphicon-pencil"></i></td></tr>
									<tr><td> Patronymic: {{ $user->patronymic }} </td><td><i class="glyphicon glyphicon-pencil"></i></tr>
									<tr><td> Lastname: {{ $user->lastname }} </td><td><i class="glyphicon glyphicon-pencil"></i></tr>
									<tr><td> INN: {{ $user->INN }} </td><td><i class="glyphicon glyphicon-pencil"></i></tr>
									<tr><td> Email:{{ $user->email }} </td><td><i class="glyphicon glyphicon-pencil"></i></tr>
									<tr><td> Birthdate: {{ $user->dateOfBirth }} </td><td><i class="glyphicon glyphicon-pencil"></i></tr>
									<tr><td> Marital status: {{ $user->maritalStatus}} </td><td><i class="glyphicon glyphicon-pencil"></i></tr>
										
								</tbody>
							</table>
								<button class="btn btn-primary pull-right btn-xs">edit profile</button>
						</div>
				</div>
			</div>
				</div>
			</div>
				

			
	 		
	</div>
	@include('templates.user.aside_content')

</div>
