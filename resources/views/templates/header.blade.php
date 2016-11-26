<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
					<h2>
						Logo
					</h2>
				
				</div>
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<ul class="list-inline">
						@if(Auth::check())
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
								|Help
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
								|Help
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
					<li> <a href="{{  url('profile') }}">Profile</a> </li>

				@endif
				
			</ul>
			<div class="page-header">
			</div>
		</div>
</div>