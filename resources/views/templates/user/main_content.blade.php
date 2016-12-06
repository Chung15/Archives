<div class = "col-md-8">
	<h1>Main Content </h1>

		
 		<div class="panel panel-info">
            <div class="panel-heading">
            	  <div class="panel-body">
						<table class="table table-striped table-user-information">
							<tbody>
								<tr><td>Firstname: {{ $user->firstname }} </td></tr>
								<tr><td> Lastname: {{ $user->lastname }} </td></tr>
								<tr><td> Patronymic: {{ $user->patronymic }} </td></tr>
								<tr><td> Email:{{ $user->email }} </td></tr>
								<tr><td> Birthdate: {{ $user->dateOfBirth }} </td></tr>
								<tr><td> Marital status: {{ $user->maritalStatus}} </td></tr>
									
							</tbody>
						</table>
					</div>
			</div>
		</div>

</div>
