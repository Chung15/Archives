@extends('master')

    @section('title')
     Archives
    @endsection

    @section('content')
    	
		<div class="row">
			<div class="col-md-8">
				<h2>Children
				</h2>
				@foreach($children as $child)
			    	<div>
			    		{{ $child->lastname }}
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