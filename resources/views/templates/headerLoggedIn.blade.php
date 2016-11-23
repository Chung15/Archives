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
							|Help
						</li>
					</ul>
				</div>
			</div>
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#">Home</a>
				</li>
				<li>
					<a href="#">Profile</a>
				</li>
				<li class="disabled">
					<a href="#">Archives</a>
				</li>
				<li class="dropdown pull-right">
					 <a href="#" data-toggle="dropdown" class="dropdown-toggle">Dropdown<strong class="caret"></strong></a>
					<ul class="dropdown-menu">
						<li>
							<a href="#">Action</a>
						</li>
						<li>
							<a href="#">Another action</a>
						</li>
						<li>
							<a href="#">Something else here</a>
						</li>
						<li class="divider">
						</li>
						<li>
							<a href="#">Separated link</a>
						</li>
					</ul>
				</li>
			</ul>
			<div class="page-header">
			</div>
		</div>
</div>