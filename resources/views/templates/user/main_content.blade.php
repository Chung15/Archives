<div class="row">
	<div class = "col-md-6">
			<div class="row">
				<div class="profile_picture col-md-4">
					<div class="row">
					@if(isset($user->profile_picture))
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
							  		<button href="" class="btn btn-primary btn-sm" type="submit" name="submit" value="submit">Submit</button>
							  	</div>
						 @endif
						  {{ Form::close() }}
						  

					</div>
					<hr class="divider" />
					
					<div class="row">@include('templates.user.user_left_sidebar')</div>
					
				</div>
				<div class="col-md-8">
					<div class="panel ">
	            <div class="panel-heading">
	            <strong><h4>Общая информация</h4></strong>	
				</div>
	            	  <div class="panel-body" id="userProfileInfo">

	            	  
							<table class="table table-striped table-user-information">
								<tbody>
									<tr><td> Имя: {{ $user->firstname }} </td></tr>
									<tr><td> Фаимлия: {{ $user->lastname }} </td></tr>
									<tr><td> Очества: {{ $user->patronymic }} </td></tr>
									<tr><td> ИНН: {{ $user->INN }} </td></tr>
									<tr><td> Паспорт №: {{ $user->passport_number }} </td></tr>
									<tr><td> Паспорт-ссылка: <a href="{{ $user->passport_link }}" target="_blank">{{ $user->passport_link }}</a> </td></tr>
									<tr><td> Дата рождения: {{ $user->dateOfBirth }} </td></tr>
									<tr><td> Семеное положение: {{ $user->maritalStatus}} </td></tr>
										
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
