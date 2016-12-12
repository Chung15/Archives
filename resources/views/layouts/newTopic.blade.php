@extends('master')

    @section('title')
     Archives
    @endsection

    @section('content')
    	@section('pageHeader')
    		 @include('templates.headerLoggedIn')
    	@endsection
    	
		<div class="row">
			<div class="col-md-8">
				<h2>Topics
				</h2>
				@foreach($topics as $topic)
			    	<div>
			    		{{ $topic->title }}
			    	</div>
					<p>
						<a class="btn" href="#">View details »</a>
					</p>
		    	@endforeach
			</div>

			<!-- AsideContent-->
			<!-- End-AsideContent-->
		</div>

    @endsection