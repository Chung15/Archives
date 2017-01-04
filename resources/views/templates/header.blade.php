<div class="row headerMenu">
		<div class="col-md-12">
			<div class="row ">
				<div class="col-md-4">
					
					<img src="/images/dnu-logo.png" width="60" height="60" id="logo">
					<strong id="appName">EOM ARCHIVER</strong>
				
				</div>
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<ul class="list-inline">
						@if(Auth::check())

							<li class="topmenu">
								<strong>Welcome {{ Auth::User()->firstname }}</strong>
							</li>
							<li>
								<a class="topmenu" href="{{ url('logout') }}"
	                                onclick="event.preventDefault();
	                                     document.getElementById('logout-form').submit();"><strong>|Logout</strong>
	                            </a>

	                            <form id="logout-form" action="{{ url('logout') }}" method="POST" class="hidden" ">
	                                {{ csrf_field() }}
	                            </form>
							</li>
							<li class="">
								<a class="fa fa-question-circle topmenu" aria-hidden="true" href="{{ url('help') }}">
	                            </a>
							</li>
							
						@else
							<li>
								<a class="topmenu" href="{{ url('login') }}">|Login
	                            </a>

	                           
							</li>

							<li>
								<a class="topmenu" href="{{ url('register') }}">|Register
	                            </a>
							</li>
							<li>
								<a class="fa fa-question-circle topmenu" aria-hidden="true" href="{{ url('help') }}">
	                            </a>
							</li>
						@endif
					</ul>
				</div>
			</div>

			<ul class="nav nav-tabs">
				<li class="menuli">
					<a href="{{  url('/') }}">Home</a>
				</li>
				
				@if(Auth::check())
					
					<li class="menuli"> <a href="{{  url('/profile/'.Auth::user()->id) }}">Profile</a> </li>
				
					<li class="menuli">
						<a href="{{ url('/profile/'.Auth::user()->id .'/archives') }}">Archives</a>
					</li>
					
					<li class="dropdown pull-right menuli">
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
							<a href="{{  url('leave') }}">Leaves</a>
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