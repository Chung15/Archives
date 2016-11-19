<!-- <div class="container"> -->
	<div class="row">
		<div class="col-md-6">
		<form class="form-horizontal">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">
						Panel title
					</h3>
				</div>
				<div class="panel-body">
				<!--	<form class="form-horizontal"> -->
				
						
						<div class="form-group">
						     <label for="firstname" class="col-md-4 control-label" required>
						       First Name</label>
						     <div class="col-md-8">
						          <input type="text" class="form-control" name="firstname" id="inputfirstname" placeholder="Enter First Name..." />
						     </div>
    					</div>
    					<div class="form-group">
						     <label for="lastname" class="col-md-4 control-label">
						       Last Name</label>
						     <div class="col-md-8">
						          <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter Last Name..." />
						     </div>
    					</div>
    					<div class="form-group">
						     <label for="patronymic" class="col-md-4 control-label">
						       Patronymic</label>
						     <div class="col-md-8">
						          <input type="text" class="form-control" name="patronymic" id="patronymic" placeholder="Enter Patronymic..." />
						     </div>
    					</div>
    					<div class="form-group">
						     <label for="INN" class="col-md-4 control-label">
						       INN</label>
						     <div class="col-md-8">
						          <input type="text" class="form-control" name="INN" id="INN" placeholder="Enter your INN..." />
						     </div>
    					</div>
    					<div class="form-group">
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
						 <div class="form-group">
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
						
    					
    					<!-- <div class="form-group">
						     <label for="dateOfBirth" class="col-md-4 control-label">
						       Date of Birth</label>
						     <div class="col-md-8">
						          <input type="date" class="form-control" name="dateOfBirth" id="dateOfBirth" placeholder="Enter birth date..." />
						     </div>
    					</div>
    					 -->
						 <div class="form-group">
						     <label for="gender" class="col-md-4 control-label">
						        Gender</label>
						     <div class="col-md-8 ">
						       <label>
						          <input type="radio" name="gender">
						             Male
						          </label>
						       <label>
						          <input type="radio" name="gender">
						          Female
						       </label>
						     </div>
						 </div>
						<div class="form-group">
						    <label for="maritalStatus" class="col-md-4 control-label"> Marital status</label>
						    <div class="col-md-8">
						      <div class="row">
						        <div class="col-md-5">
						          <select class="form-control" name="maritalStatus">
						            
						             <option selected value="">Single</option>
						             <option value="">Married</option>
						             <option value="">Divorced</option>
						             <option value="">Widow(er)</option>
						          </select>
						        </div>
						        <div class="col-md-3">
						           
						        </div>
						        <div class="col-md-4">
						           
						        </div>
						     </div>
						   </div>
						 </div>
						

						 
						 <div class="form-group">
						     <label for="email" class="col-md-4 control-label">
						        E-mail</label>
						     <div class="col-md-8">
						          <input type="text" class="form-control" name="email" id="email" placeholder="Enter E-mail......"></input>
						     </div>
						</div>
						<div class="form-group">
						     <label for="phone" class="col-md-4 control-label">
						         Phone</label>
						     <div class="col-md-8">
						       <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone......"></input>
						     </div>
						</div>
						<div class="form-group">
						     <label for="street" class="col-md-4 control-label">
						         Street/N°</label>
						     <div class="col-md-8">
						       <input type="text" class="form-control" name="street" id="street" placeholder="Enter street......"></input>
						     </div>
						</div>
						<div class="form-group">
						     <label for="city" class="col-md-4 control-label">
						         City/Zip code</label>
						     <div class="col-md-5">
						       <input type="text" class="form-control" name="city" id="city" placeholder="Enter City......"></input>

						     </div>
						     <div class="col-md-3">
						       <input type="text" class="form-control" name="zip" id="zip" placeholder="Enter zip......"></input>
						       
						     </div>
						</div>
						 <!-- <div class="form-group">
						    <label for="picture" class = "col-md-4 control-label" >Picture</label>
						    <input type="file" id="picture" class="col-md-8">
  						</div> -->
						  <!-- Password-->
						<div class="form-group">
						     <label for="password" class="col-md-4 control-label">
						        Password</label>
						     <div class="col-md-8">
						        <input type="password" name="password" class="form-control" value="" required>
						     </div>
						</div>
						<div class="form-group">
						     <label for="confirmPassword" class="col-md-4 control-label">
						       Confirm Password</label>
						     <div class="col-md-8">
						         <input type="password" name="confirmPassword" class="form-control" value="">
						     </div>
						</div>
						<div class="form-group">
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

				</div>
				<div class="panel-footer">
					<div class="form-group">
						     <div class="col-md-4  pull-right">
						         <input type="submit" name="submit" value="submit" class="btn btn-default">
						          <input type="submit" name="cancel" value="cancel" class="btn btn-default">
						     </div>
						     <!--<div class="col-md-6">
						         <input type="submit" name="cancel" value="cancel" class="btn btn-default">
						     </div>-->
					</div>

				</div>
			</form>
			</div>
		</div>
	</div>
<!--</div> -->
