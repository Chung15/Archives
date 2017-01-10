<div class = "col-md-6">
	 @if((Auth::check()) AND (Auth::User()->id === $user->id))
		<h2>Последние обновлении</h2>
	 	@include('templates.user.collapse_aside_bar')
	 @else
		@include('templates.user.archives.archives_offline_user')
	@endif
	

</div>
