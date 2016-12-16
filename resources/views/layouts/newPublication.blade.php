@extends('master')

    @section('title')
     Archives
    @endsection

    @section('content')
    	@include('templates.user.archives.archives_main_content')
    	<div class="col-md-1"></div>
    	
		<div class="row">
			<div class="col-md-7">
				<h2>Other
				</h2>
				@foreach($pubs as $publication)
			    	<div>
			    		{{ $publication->name }}
			    	</div>
					<p>
						<a class="btn" href="#">View details »</a>
					</p>
		    	@endforeach
			</div>

		</div>

    @endsection