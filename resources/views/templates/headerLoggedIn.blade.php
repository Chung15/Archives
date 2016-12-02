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
					<a href=" {{  url('/') }}" > Home </a>
				</li>
				<li>
					<a href="#">Profile</a>
				</li>
				<li class="">
					<a href="#">Archives</a>
				</li>
				<li class="dropdown pull-right">
					 <a href="#" data-toggle="dropdown" class="dropdown-toggle">Forms<strong class="caret"></strong></a>
					<ul class="dropdown-menu">
						<li>
							<a href="{{  url('diploma') }}">Diploma</a>
						</li>
						<li>
							<a href="{{  url('child') }}">Children</a>
						</li>
						<li>
							<a href="{{  url('training') }}">Qualification(training)</a>
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
			</ul>
			<div class="page-header">
			</div>
		</div>
</div>