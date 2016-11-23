@extends('master')


	@section('pageHeader')

		@include('templates.header')
		
	@endsection
@section('content')

<!-- <div class="container"> -->
	<div class="row">
		<div class="col-md-8">
			<fieldset>
    		<legend>Register</legend>

			<!-- <div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						Panel title
					</h3>
				</div>
				<div class="panel-body"> -->
					<!-- <form class="form-horizontal" >  -->
				
		<form class="form-horizontal" role="form" method="POST" action="{{ url('processRegister') }}">
		{{ csrf_field() }}
						
						<div class="form-group {{ $errors->has('firstname') ? ' has-error' : '' }}">
						     <label for="firstname" class="col-md-4 control-label" required>
						       First Name</label>
						     <div class="col-md-8">
						          <input type="text" class="form-control" name="firstname" id="inputfirstname" placeholder="Enter First Name..." value="{{ old('firstname') }}" required autofocus />
						          @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
						     </div>
    					</div>
    					<div class="form-group {{ $errors->has('lastname') ? ' has-error' : '' }}">
						     <label for="lastname" class="col-md-4 control-label">
						       Last Name</label>
						     <div class="col-md-8">
						          <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter Last Name..." value="{{ old('lastname') }}" />
						           @if ($errors->has('lastname'))
						          	    <span class="help-block">
						          	        <strong>{{ $errors->first('lastname') }}</strong>
						          	    </span>
						          @endif

						     </div>
    					</div>

    					<div class="form-group {{ $errors->has('patronymic') ? ' has-error' : '' }}">
						     <label for="patronymic" class="col-md-4 control-label">
						       Patronymic</label>
						     <div class="col-md-8">
						          <input type="text" class="form-control" name="patronymic" id="patronymic" placeholder="Enter Patronymic..." value="{{ old('patronymic') }}" />
						           @if ($errors->has('patronymic'))
						          	    <span class="help-block">
						          	        <strong>{{ $errors->first('patronymic') }}</strong>
						          	    </span>
						          @endif
						     </div>
    					</div>
    					<div class="form-group {{ $errors->has('INN') ? ' has-error' : '' }}">
						     <label for="INN" class="col-md-4 control-label">
						       INN</label>
						     <div class="col-md-8">
						          <input type="text" class="form-control" name="INN" id="INN" placeholder="Enter your INN..." value="{{ old('INN') }}" />
						           @if ($errors->has('INN'))
						          	    <span class="help-block">
						          	        <strong>{{ $errors->first('INN') }}</strong>
						          	    </span>
						          @endif
						     </div>
    					</div>
    					<div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
						    <label for="title" class="col-md-4 control-label"> Title</label>
						    <div class="col-md-8">
						      <div class="row">
						        <div class="col-md-5">
						          <select class="form-control" name="title">
						            
						             <option selected value="">Lecturer</option>
						             <option value="">Doctor</option>
						             <option value="">Professor</option>
						          </select>
						        </div>
						        <div class="col-md-3">
						           
						        </div>
						        <div class="col-md-4">
						           
						        </div>
						     </div>
						   </div>
						 </div>
						 <div class="form-group {{ $errors->has('grade') ? ' has-error' : '' }}">
						    <label for="grade" class="col-md-4 control-label"> Grade</label>
						    <div class="col-md-8">
						      <div class="row">
						        <div class="col-md-5">
						          <select class="form-control" name="grade">
						            
						             <option selected value="">Junior</option>
						             <option value="">Assistant</option>
						             <option value="">Senior</option>
						          </select>
						        </div>
						        <div class="col-md-3">
						           
						        </div>
						        <div class="col-md-4">
						           
						        </div>
						     </div>
						   </div>
						 </div>
						
    					
    					<!-- <div class="form-group  {{ $errors->has('dateOfBirth') ? ' has-error' : '' }}">
						     <label for="dateOfBirth" class="col-md-4 control-label">
						       Date of Birth</label>
						     <div class="col-md-8">
						          <input type="date" class="form-control" name="dateOfBirth" id="dateOfBirth" placeholder="Enter birth date..."  value="{{ old('dateOfBirth') }}" />
						     </div>
    					</div>
    					 -->
						 <div class="form-group {{ $errors->has('gender') ? ' has-error' : '' }}">
						     <label for="gender" class="col-md-4 control-label">
						        Gender</label>
						     <div class="col-md-8 ">
						       <label>
						          <input type="radio" name="gender" value="{{ old('male') }}">
						             Male
						          </label>
						       <label>
						          <input type="radio" name="gender" value="{{ old('female') }}">
						          Female
						       </label>
						     </div>
						 </div>
						<div class="form-group {{ $errors->has('maritalStatus') ? ' has-error' : '' }}">
						    <label for="maritalStatus" class="col-md-4 control-label"> Marital status</label>
						    <div class="col-md-8">
						      <div class="row">
						        <div class="col-md-5">
						          <select class="form-control" name="maritalStatus">

						           
						             <option selected value="0">Single</option>
						             <option value="1" name="married">Married</option>
						             <option value="2">Divorced</option>
						             <option value="3">Widow(er)</option>
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
						        E-mail</label>
						     <div class="col-md-8">
						          <input type="text" class="form-control" name="email" id="email" placeholder="Enter E-mail......" value="{{ old('email') }}"></input>
						           @if ($errors->has('email'))
						          	    <span class="help-block">
						          	        <strong>{{ $errors->first('email') }}</strong>
						          	    </span>
						          @endif
						     </div>
						</div>
						<div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
						     <label for="phone" class="col-md-4 control-label">
						         Phone</label>
						     <div class="col-md-8">
						       <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone......" value="{{ old('phone') }}"></input>
						        @if ($errors->has('phone'))
						       	    <span class="help-block">
						       	        <strong>{{ $errors->first('phone') }}</strong>
						       	    </span>
						       @endif
						     </div>
						</div>
						<div class="form-group {{ $errors->has('street') ? ' has-error' : '' }}">
						     <label for="street" class="col-md-4 control-label">
						         Street/N°</label>
						     <div class="col-md-8">
						       <input type="text" class="form-control" name="street" id="street" placeholder="Enter street......" value="{{ old('street') }}"></input>
						        @if ($errors->has('street'))
						       	    <span class="help-block">
						       	        <strong>{{ $errors->first('street') }}</strong>
						       	    </span>
						       @endif
						     </div>

						</div>
						<div class="form-group {{ $errors->has('city') ? ' has-error' : '' }}">
						     <label for="city" class="col-md-4 control-label">
						         City/Zip code</label>
						     <div class="col-md-5">
						       <input type="text" class="form-control" name="city" id="city" placeholder="Enter City......" value="{{ old('city') }}"></input>
						        @if ($errors->has('city'))
						       	    <span class="help-block">
						       	        <strong>{{ $errors->first('city') }}</strong>
						       	    </span>
						       @endif

						     </div>
						     <div class="col-md-3">
						       <input type="text" class="form-control" name="zip" id="zip" placeholder="Enter zip......" value="{{ old('zip') }}"></input>
						        @if ($errors->has('zip'))
						       	    <span class="help-block">
						       	        <strong>{{ $errors->first('zip') }}</strong>
						       	    </span>
						       @endif

						       
						     </div>
						</div>
						 <!-- <div class="form-group">
						    <label for="picture" class = "col-md-4 control-label" >Picture</label>
						    <input type="file" id="picture" class="col-md-8">
  						</div> -->
						  <!-- Password-->
						<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
						     <label for="password" class="col-md-4 control-label">
						        Password</label>
						     <div class="col-md-8">
						        <input type="password" name="password" class="form-control" value="{{ old('password') }}" required>
						         @if ($errors->has('password'))
						        	    <span class="help-block">
						        	        <strong>{{ $errors->first('password') }}</strong>
						        	    </span>
						        @endif
						     </div>
						</div>
						<div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

						<!-- <div class="form-group">
						     <label for="confirmPassword" class="col-md-4 control-label">
						       Confirm Password</label>
						     <div class="col-md-8">
						         <input type="password" name="confirmPassword" class="form-control" value="">
						     </div>
						</div> -->

						<div class="form-group {{ $errors->has('terms') ? ' has-error' : '' }}">
							<div class="col-md-4"></div>
						   <div class="col-md-8">
						        <div class="checkbox">
						          <label>
						             <input type="checkbox" value="0" name="terms">
						             I agree to the Terms of Use
						          </label>
						        </div>
						    </div>
						 </div>

						  
				<!--	</form> -->

				<!-- </div> -->
				<!-- <div class="panel-footer"> -->
					<div class="form-group">
						     <div class="col-md-4  pull-right">
						         <input type="submit" name="submit" value="submit" class="btn btn-default">
						          <input type="submit" name="cancel" value="cancel" class="btn btn-default">
						     </div>
						     <!--<div class="col-md-6">
						         <input type="submit" name="cancel" value="cancel" class="btn btn-default">
						     </div>-->
					<!-- </div> -->

				</div>
				</form>
				</fieldset>
			</div>

			<div class="col-md-4"></div>
		</div>
		@endsection
	<!-- </div> -->
<!--</div> -->
