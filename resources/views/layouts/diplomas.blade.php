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
				<h2>Diplomas
				</h2>
				@foreach($diplomas as $diploma)
			    	<div>
			    		{{ $diploma->diploma_type }}
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

    @endsection