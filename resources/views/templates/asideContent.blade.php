<div class="col-md-1"></div>
<div class="col-md-3">
<div class="row">
			<h2>
				Преподователи
			</h2>
			<table class="table table-user-information table-hover" id="teacherList">

				@foreach($users as $user)

			    	<tr>

			    		<td>
				   			 <a href="{{ action('UserController@show', [$user->id]) }}">
					    			{{ $user->lastname }} {{ $user->firstname }} {{ $user->patronymic }} 
	    		 			</a>
			    		 </td>
			    	</tr>

		    	@endforeach

	    	</table>
		</div>
	</div>
			
    	
