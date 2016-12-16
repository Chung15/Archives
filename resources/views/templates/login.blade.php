 @extends('master')

@section('content')
	<div class="row">
	<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						Login
					</h3>
				</div>
				<div class="panel-body">
					<form method="POST" action="{{ url('processLogin') }}">
					{{ csrf_field() }}
					
					  <div class="form-group">
					    <label for="email">Email address</label>
					    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required>

					  </div>
					  <div class="form-group">
					    <label for="password">Password</label>
					    <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="{{ old('password') }}" required>
					  </div>
					  <div class="checkbox">
					    <label>
					      <input type="checkbox"> Remember Me
					    </label>
					  </div>
  						<button type="submit" class="btn btn-default">Submit</button>

  						@if (count($errors))
						<div class="alert alert-danger">
					     	<ul>
					     		@foreach($errors->all() as $error)
					     		<li>
					     			{{ $error }}
					     		</li>
					     		@endforeach
					     	</ul>
					     	</div>
					    @endif

					</form>

		
				</div>
				<div class="panel-footer">
					<div class="">
					    <label> <a href="#"> Forgot my password  <a>
					    </label>
					  </div>
				</div>
			</div>
		</div>
	<div class="col-md-3"></div>
	</div>
	@endsection
