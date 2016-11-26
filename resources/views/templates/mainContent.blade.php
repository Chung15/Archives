<div class="row">
		<div class="col-md-8">
			<h2>
				Teachers
			</h2>
			@foreach($users as $user)
		    	<div>
		    		{{ $user->lastname }}
		    	</div>
				<p>
					<a class="btn" href="#">View details »</a>
				</p>
	    	@endforeach
		</div>

		<!-- AsideContent-->
		@include('templates.asideContent')
		<!-- End-AsideContent-->
	</div>