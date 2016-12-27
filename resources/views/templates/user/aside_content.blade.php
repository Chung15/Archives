<div class = "col-md-6">
	<h1>Recent updates</h1>
	 @if((Auth::check()) AND (Auth::User()->id === $user->id))
	 	@include('templates.user.collapse_aside_bar')
	 @else
		@include('templates.user.archives.archives_main_content')
	@endif
	

</div>
