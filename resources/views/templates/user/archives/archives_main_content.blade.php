
<div class="col-md-3">
	<div class="row">
		<table class="table table-striped table-hover">


			    	<tr>

			    		<td>
				   			 <a href="{{ action('DiplomaController@index', [$user->id]) }}"> Diploma</a>
				
	    		 			
			    		 </td>
			    	</tr>
			    	<tr>

			    		<td>
				   			 <a href="{{ action('AcademicTitleController@index', [$user->id]) }}"> Academic Title</a>
	    		 			
			    		 </td>
			    	</tr>
			    	<tr>

			    		<td>
				   			 <a href="{{ action('AcademicDegreeController@index', [$user->id]) }}"> Academic degree</a>
	    		 			
			    		 </td>
			    	</tr>
			    	<tr>

			    		<td>
				   			 <a href="{{ action('ChildController@index', [$user->id]) }}"> Children </a>
	    		 			
			    		 </td>
			    	</tr>
			    	<tr>

			    		<td>
				   			 <a href="{{ action('LeavesController@index', [$user->id]) }}"> Leave</a>
				
	    		 			
			    		 </td>
			    	</tr>
			    	<tr>

			    		<td>
				   			 <a href="{{ action('TrainingController@index', [$user->id]) }}"> Trainings </a>
	    		 			
			    		 </td>
			    	</tr>
			    	<tr>

			    		<td>
				   			 <a href="{{ action('PublicationsController@index', [$user->id]) }}"> Publications </a>
					    		
	    		 			
			    		 </td>
			    	</tr>
			    	<tr>

			    		<td>
				   			 <a href="{{ action('TopicsController@index', [$user->id]) }}"> Thesis-topics </a>
	    		 			
			    		 </td>
			    	</tr>
			    	<tr>

			    		<td>
				   			 <a href="{{ action('OtherController@index', [$user->id]) }}"> Other information </a>
					    		
	    		 			
			    		 </td>
			    	</tr>

		</table>
	</div>
</div>
<div class="col-md-1"></div>

<div class="col-md-8"></div>
