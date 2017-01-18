<div class="row">
	<div class = "col-md-6">
			<div class="row">
				<div class="profile_picture col-md-4">
					<div class="row">
					@if($user->profile_picture)
						<img class="img-circle" src="{{ $user->profile_picture }}" height="200" width="200"/>
					@else
						<img class="img-circle" src="/images/user-logo.png" height="200" width="200">
					@endif

						  
						  {{ Form::open(['url' => '/profile/' .$user->id. '/profile_picture' , 'enctype' => 'multipart/form-data']) }}
			
						 @if((Auth::check()) AND (Auth::User()->id === $user->id))
							  <i class="pull-right fa fa-camera fa-2x" id="uploadImg" data-toggle="tooltip" data-placement="left" title="Change picture"></i>
							  	<input type="file" name="profile_picture" class="hidden" id="inputUploadImg">
							  	<div class="form-group hidden" id="imgUploadBtn">
							  		<a class="btn btn-primary btn-sm" type="submit" id="cancelbtn" name="cancel" value="cancel" href=" {{ action('UserController@cancelImg', [$user->id]) }}">Отмета</a>
							  		<button href="" class="btn btn-primary btn-sm" type="submit" name="submit" value="submit">Отправить</button>
							  	</div>
						 @endif
						  {{ Form::close() }}
						  

					</div>
					<hr class="divider" />
					
					<div class="row">@include('templates.user.user_left_sidebar')</div>
					
				</div>
				<div class="col-md-8">
					<div class="panel ">
	            <div class="panel-heading panel-default">
	            <strong><h4>Общая информация</h4></strong>	
				</div>
	            	  <div class="panel-body" id="userProfileInfo">

	            	  
							<table class="table table-striped table-user-information">
								<tbody>
									<tr><td> <label>Фаимлия:</label> {{ $user->lastname }} </td></tr>
									<tr><td> <label>Имя:</label> {{ $user->firstname }} </td></tr>
									<tr><td> <label>Очества:</label> {{ $user->patronymic }} </td></tr>
									<tr><td> <label>ИНН:</label> {{ $user->INN }} </td></tr>
									<tr><td> <label>Паспорт №:</label> {{ $user->passport_number }} </td></tr>
									<tr><td> <label>Кем выдан:</label> {{ $user->passport_given }} </td></tr>
									<tr><td> <label>Когда выдан:</label> {{ $user->passport_date }} </td></tr>
									<tr><td> <label>Паспорт-ссылка:</label> <a href="{{ $user->passport_link }}" target="_blank">{{ $user->passport_link }}</a> </td></tr>
									<tr><td> <label>Дата рождения:</label> {{ $user->dateOfBirth }} </td></tr>
									<tr><td> <label>Семеное положение:</label> {{ $user->maritalStatus}} </td></tr>
										
								</tbody>
							</table>

								  @if( (Auth::check() AND (Auth::User()->id === $user->id)) OR (Auth::check() AND (Auth::User()->isAdmin === 1) ))
									<a class="btn btn-primary pull-right btn-xs" href="{{ URL::to('/profile/' . $user->id . '/edit') }}" id="editProfile">редактировать</a>
								  @endif

									<!-- admin cannot edit user password -->
									@if((Auth::check()) AND (Auth::User()->id === $user->id))

									<button class="btn btn-primary pull-left btn-xs" data-toggle="modal" data-target="#myModal" id="updatePassword">Обновить пароль
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
	@include('templates.user.aside_content')

</div>
