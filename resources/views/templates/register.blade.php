@extends('master')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<fieldset>
    		<legend>Регистрация</legend>

			
			<form class="form-horizontal" role="form" method="POST" action="{{ url('store') }}">
			{{ csrf_field() }}
							
	    					<div class="form-group {{ $errors->has('lastname') ? ' has-error' : '' }}">
							     <label for="lastname" class="col-md-4 control-label">
							       Фамиля</label>
							     <div class="col-md-8">
							          <input type="text" class="form-control" name="lastname" id="lastname" placeholder="введите Фамиля..." value="{{ old('lastname') }}" />
							           @if ($errors->has('lastname'))
							          	    <span class="help-block">
							          	        <strong>{{ $errors->first('lastname') }}</strong>
							          	    </span>
							          @endif

							     </div>
	    					</div>
							<div class="form-group {{ $errors->has('firstname') ? ' has-error' : '' }}">
							     <label for="firstname" class="col-md-4 control-label" required>
							       Имя</label>
							     <div class="col-md-8">
							          <input type="text" class="form-control" name="firstname" id="firstname" placeholder="введите имя..." value="{{ old('firstname') }}" required autofocus />
							          @if ($errors->has('firstname'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('firstname') }}</strong>
	                                    </span>
	                                @endif
							     </div>
	    					</div>

	    					<div class="form-group {{ $errors->has('patronymic') ? ' has-error' : '' }}">
							     <label for="patronymic" class="col-md-4 control-label">
							       Отчество</label>
							     <div class="col-md-8">
							          <input type="text" class="form-control" name="patronymic" id="patronymic" placeholder="введите отчество..." value="{{ old('patronymic') }}" />
							           @if ($errors->has('patronymic'))
							          	    <span class="help-block">
							          	        <strong>{{ $errors->first('patronymic') }}</strong>
							          	    </span>
							          @endif
							     </div>
	    					</div>

	    					<div class="form-group {{ $errors->has('INN') ? ' has-error' : '' }}">
							     <label for="INN" class="col-md-4 control-label">
							       ИНН</label>
							     <div class="col-md-8">
							          <input type="text" class="form-control" name="INN" id="INN" placeholder="введите ИНН..." value="{{ old('INN') }}" />
							           @if ($errors->has('INN'))
							          	    <span class="help-block">
							          	        <strong>{{ $errors->first('INN') }}</strong>
							          	    </span>
							          @endif
							     </div>
							</div>

					     	<div class="form-group {{ $errors->has('passport_number') ? ' has-error' : '' }}">
						     	<label for="passport_number" class="col-md-4 control-label">
						       	Паспорт №</label>
						       	<div class="col-md-8">
							       	<div class="row">
								     	<div class="col-md-5">
								          <input type="text" class="form-control" name="passport_number" id="passport_number" placeholder="введите паспорт серия/№ ..." value="{{ old('passport_number') }}"/>
								           @if ($errors->has('passport_number'))
								          	    <span class="help-block">
								          	        <strong>{{ $errors->first('passport_number') }}</strong>
								          	    </span>
								          @endif
							     		</div>
							     		<div class="col-md-3"></div>
							     		<div class="col-md-4"></div>
							     	</div>
						    	 </div>
						    </div>


					     	<div class="form-group {{ $errors->has('passport_given') ? ' has-error' : '' }}">
					     		<label for="passport_given" class="col-md-4 control-label">
						       	Кем выдан</label>
					     		<div class="col-md-8">
					     			<div class="row">
					     				<div class="col-md-5">
								       		<input type="text" class="form-control" name="passport_given" id="passport_given" placeholder="кем выдан..." value="{{ old('passport_given') }}"/>
									        @if ($errors->has('passport_given'))
									       	    <span class="help-block">
									       	        <strong>{{ $errors->first('passport_given') }}</strong>
									       	    </span>
									       @endif
						     			</div>
						     			<div class="col-md-3"></div>
						     			<div class="col-md-4"></div>
						     		</div>
						     	</div>
						    </div>

						    <div class="form-group {{ $errors->has('passport_given') ? ' has-error' : '' }}">
						     	<label for="passport_date" class="col-md-4 control-label">
						       	Когда выдан</label>
							     <div class="col-md-8">
							     	<div class="row">
							     		<div class="col-md-5">
									       <input type="text" class="form-control date " name="passport_date" id="passport_date" placeholder="когда выдан..." value="{{ old('passport_date') }}"/>
									        @if ($errors->has('passport_date'))
									       	    <span class="help-block">
									       	        <strong>{{ $errors->first('passport_date') }}</strong>
									       	    </span>
									       @endif

							    		</div>
							    		<div class="col-md-3"></div>
						     			<div class="col-md-4"></div>
							    	</div>
							    </div>

    						</div>

	    					<div class="form-group {{ $errors->has('passport_link') ? ' has-error' : '' }}">
							     <label for="passport_link" class="col-md-4 control-label">
							       Паспорт-ссылка</label>
							     <div class="col-md-8">
							          <input type="text" class="form-control" name="passport_link" id="passport_link" placeholder="введите ссылку к Паспорту..." value="{{ old('passport_link') }}"/>
							           @if ($errors->has('passport_link'))
							          	    <span class="help-block">
							          	        <strong>{{ $errors->first('passport_link') }}</strong>
							          	    </span>
							          @endif
							     </div>
	    					</div>
							
	    					
	    					<div class="form-group  {{ $errors->has('dateOfBirth') ? ' has-error' : '' }}">
							     <label for="dateOfBirth" class="col-md-4 control-label">
							       Дата рождения</label>
							     <div class="col-md-8">
							     	<div class="row">
							        	<div class="col-md-5">
							          		<input type="text" class="form-control date" name="dateOfBirth" id="datepicker" placeholder="введите дата рождения..."  value="{{ old('dateOfBirth') }}" />
							     		</div>
							     		<div class="col-md-3"></div>
							     		<div class="col-md-4"></div>
		    						</div>
		    					</div>
	    					</div>
	    					
							 <div class="form-group {{ $errors->has('gender') ? ' has-error' : '' }}">
							     <label for="gender" class="col-md-4 control-label">
							        Пол</label>
							     <div class="col-md-8 ">
							       <label>
							          <input type="radio" name="gender" value="male" checked="true">
							             Муж.
							          </label>
							       <label>
							          <input type="radio" name="gender" value="female">
							          Жен.
							       </label>
							     </div>
							 </div>
							<div class="form-group {{ $errors->has('maritalStatus') ? ' has-error' : '' }}">
							    <label for="maritalStatus" class="col-md-4 control-label"> Семейное положение</label>
							    <div class="col-md-8">
							      <div class="row">
							        <div class="col-md-5">
							          <select class="form-control" name="maritalStatus">
							             <option selected value="single">холостой(ая)</option>
							             <option value="married">в браке</option>
							             <option value="divorced">разведенный(ая)</option>
							             <option value="widow">вдова</option>
							          </select>
							        </div>
							        <div class="col-md-3">
							           
							        </div>
							        <div class="col-md-4">
							           
							        </div>
							     </div>
							   </div>
							 </div>
							
							 <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
							     <label for="email" class="col-md-4 control-label">
							        Электронный адрес </label>
							     <div class="col-md-8">
							          <input type="text" class="form-control" name="email" id="email" placeholder="введите эл. адрес..." value="{{ old('email') }}"/>
							           @if ($errors->has('email'))
							          	    <span class="help-block">
							          	        <strong>{{ $errors->first('email') }}</strong>
							          	    </span>
							          @endif
							     </div>
							</div>
							<div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
							     <label for="phone" class="col-md-4 control-label">
							         Телефон</label>
							     <div class="col-md-8">
							       <input type="text" class="form-control" name="phone" id="phone" placeholder="введите Телефон..." value="{{ old('phone') }}"/>
							        @if ($errors->has('phone'))
							       	    <span class="help-block">
							       	        <strong>{{ $errors->first('phone') }}</strong>
							       	    </span>
							       @endif
							     </div>
							</div>
							<div class="form-group {{ $errors->has('street') ? ' has-error' : '' }}">
							     <label for="street" class="col-md-4 control-label">
							         Улица/N°</label>
							     <div class="col-md-8">
							       <input type="text" class="form-control" name="street" id="street" placeholder="введите Улицу..." value="{{ old('street') }}"/>
							        @if ($errors->has('street'))
							       	    <span class="help-block">
							       	        <strong>{{ $errors->first('street') }}</strong>
							       	    </span>
							       @endif
							     </div>

							</div>

							<div class="form-group {{ $errors->has('city') ? ' has-error' : '' }}">
							     <label for="city" class="col-md-4 control-label">
							         Город/Почтовый индекс</label>
							     <div class="col-md-5">
							       <input type="text" class="form-control" name="city" id="city" placeholder="введите город..." value="{{ old('city') }}"/>
							        @if ($errors->has('city'))
							       	    <span class="help-block">
							       	        <strong>{{ $errors->first('city') }}</strong>
							       	    </span>
							       @endif

							     </div>
							     <div class="col-md-3">
							       <input type="text" class="form-control" name="zip" id="zip" placeholder="введите почт. индекс..." value="{{ old('zip') }}"/>
							        @if ($errors->has('zip'))
							       	    <span class="help-block">
							       	        <strong>{{ $errors->first('zip') }}</strong>
							       	    </span>
							       @endif
							     </div>
							</div>

							  <!-- Password-->
							<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
							     <label for="password" class="col-md-4 control-label">
							        Пароль</label>
							     <div class="col-md-8">
							        <input type="password" name="password" class="form-control" id="password" value="{{ old('password') }}" required>
							         @if ($errors->has('password'))
							        	    <span class="help-block">
							        	        <strong>{{ $errors->first('password') }}</strong>
							        	    </span>
							        @endif
							     </div>
							</div>
							<div class="form-group">
	                            <label for="password-confirm" class="col-md-4 control-label">Потвердить пароль</label>

	                            <div class="col-md-8">
	                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
	                            </div>
	                        </div>

							<div class="form-group {{ $errors->has('terms') ? ' has-error' : '' }}">
								<div class="col-md-6"></div>
							   <div class="col-md-6">
							        <div class="checkbox">
							          <label>
							             <input type="checkbox" value="1" name="terms" id="terms" required>
							             I agree to the Terms of Use
							          </label>
							        </div>
							        	<div class="row">
							        		<div class="col-md-2"></div>
							        		<a href="{{url('/help/terms')}}" target="_blank">terms of use</a>
							        	</div>
							    </div>
							 </div>

						<div class="form-group">
							     <div class="col-md-4  pull-right">
							         <input type="submit" name="cancel" value="cancel" class="btn btn-default">
							         <input type="submit" name="submit" value="submit" class="btn btn-primary" id="reg_submit">
							     </div>
						</div>
					</form>
				</fieldset>
			</div>
		</div>
		@endsection
