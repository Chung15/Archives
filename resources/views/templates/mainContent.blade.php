<div class="row">
		<div class="col-md-8">
			<h2>
				Teachers
			</h2>
			<table class="table table-striped table-hover">

				@foreach($users as $user)
			    	<tr>

			    		<td>
			    		 	<a href="{{ action('UserController@show', [$user->id]) }}">{{ $user->lastname }}</a>
			    		 </td>
			    	</tr>
		    	@endforeach

	    	</table>

		</div>

		<!-- AsideContent-->
		@include('templates.asideContent')
		<!-- End-AsideContent-->
	</div>