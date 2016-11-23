@extends('master')
	@section('pageHeader')

		@include('templates.headerLoggedIn')
		
	@endsection

	<!-- <div class="row"> -->
	@section('content')
		@include('templates.user.main_content')
		
	@stop
	@section('aside_content')
		@include('templates.user.aside_content')
	@endsection
	<!-- </div> -->	