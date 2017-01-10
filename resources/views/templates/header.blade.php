<div class="row headerMenu">
		<div class="col-md-12">
			<div class="row ">
				<div class="col-md-4">
					
					<img src="/images/dnu-logo.png" width="60" height="60" id="logo">
					<strong id="appName">ЕОМ АРХИВ</strong>
				
				</div>
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<ul class="list-inline">
						@if(Auth::check())

							<li class="topmenu">
								<strong>Привет {{ Auth::User()->firstname }}</strong>
							</li>
							<li>
								<a class="topmenu" href="{{ url('logout') }}"
	                                onclick="event.preventDefault();
	                                     document.getElementById('logout-form').submit();"><strong>|Выход</strong>
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
								<a class="topmenu" href="{{ url('login') }}">|Вход
	                            </a>

	                           
							</li>

							<li>
								<a class="topmenu" href="{{ url('register') }}">|Регистрация
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
					<a href="{{  url('/') }}">Главная</a>
				</li>
				
				@if(Auth::check())
					
					<li class="menuli"> <a href="{{  url('/profile/'.Auth::user()->id) }}">Профиль</a> </li>
				
					<li class="menuli">
						<a href="{{ url('/profile/'.Auth::user()->id .'/archives') }}">Архивы</a>
					</li>
					
					<li class="dropdown pull-right menuli">
					 <a href="#" data-toggle="dropdown" class="dropdown-toggle">Формы<strong class="caret"></strong></a>
					<ul class="dropdown-menu">
						<li>
							<a href="{{  url('diploma') }}">Дипломы</a>
						</li>
						<li>
							<a href="{{  url('academicTitle') }}">Ученое звание</a>
						</li>
						<li>
							<a href="{{  url('academicDegree') }}">Ученая степень</a>
						</li>

						<li>
							<a href="{{  url('child') }}">Дети</a>
						</li>
						<li>
							<a href="{{  url('leave') }}">Отпуски</a>
						</li>
						<li>
							<a href="{{  url('training') }}">Повышение квалификауии</a>
						</li>
						<li>
							<a href="{{  url('publications') }}">Публикации</a>
						</li>
						<li>
							<a href="{{  url('topics') }}">Темы дипломов</a>
						</li>
						<li class="divider">
						</li>
						<li>
							<a href="{{  url('other') }}">Другое </a>
						</li>
					</ul>
				</li>

				@endif
				
			</ul>
			<div class="simple">
			</div>
		</div>
</div>