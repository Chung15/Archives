<div class="row headerMenu">
		<div class="col-md-12">
			<div class="row ">
				<div class="col-md-4">
					
					<img src="/images/dnu-logo.png" width="60" height="60">
				
				</div>
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<ul class="list-inline">
						@if(Auth::check())

							<li>
								Welcome {{ Auth::User()->firstname }}
							</li>
							<li>
								<a href="{{ url('logout') }}"
	                                onclick="event.preventDefault();
	                                     document.getElementById('logout-form').submit();">|Logout
	                            </a>

	                            <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
	                                {{ csrf_field() }}
	                            </form>
							</li>
							<li>
								<a class="fa fa-question-circle" aria-hidden="true" href="{{ url('help') }}">
	                            </a>
							</li>
							
						@else
							<li>
								<a href="{{ url('login') }}">|Login
	                            </a>

	                           
							</li>

							<li>
								<a href="{{ url('register') }}">|Register
	                            </a>
							</li>
							<li>
								<a class="fa fa-question-circle" aria-hidden="true" href="{{ url('help') }}">
	                            </a>
							</li>
						@endif
					</ul>
				</div>
			</div>

			<ul class="nav nav-tabs">
				<li class="active">
					<a href="{{  url('/') }}">Home</a>
				</li>
				
				@if(Auth::check())
					
					<li> <a href="{{  url('/profile/'.Auth::user()->id) }}">Profile</a> </li>
				
					<li class="">
						<a href="{{ url('/profile/'.Auth::user()->id .'/archives') }}">Archives</a>
					</li>
					
					<li class="dropdown pull-right">
					 <a href="#" data-toggle="dropdown" class="dropdown-toggle">Forms<strong class="caret"></strong></a>
					<ul class="dropdown-menu">
						<li>
							<a href="{{  url('diploma') }}">Diploma</a>
						</li>
						<li>
							<a href="{{  url('academicTitle') }}">Academic title</a>
						</li>
						<li>
							<a href="{{  url('academicDegree') }}">Academic degree</a>
						</li>

						<li>
							<a href="{{  url('child') }}">Children</a>
						</li>
						<li>
							<a href="{{  url('leave') }}">Leave</a>
						</li>
						<li>
							<a href="{{  url('training') }}">Training</a>
						</li>
						<li>
							<a href="{{  url('publications') }}">Publications</a>
						</li>
						<li>
							<a href="{{  url('topics') }}">Thesis_topics</a>
						</li>
						<li class="divider">
						</li>
						<li>
							<a href="{{  url('other') }}">Other </a>
						</li>
					</ul>
				</li>

				@endif
				
			</ul>
			<div class="simple">
			</div>
		</div>
</div>