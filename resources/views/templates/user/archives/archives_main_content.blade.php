@if(Auth::id())
<div class="col-md-3">
	<div class="row">
		<table class="table table-striped table-hover">


			    	<tr>

			    		<td>
				   			 <a href="{{ url('/archives/diploma') }}"> Diploma</a>
				
	    		 			
			    		 </td>
			    	</tr>
			    	<tr>

			    		<td>
				   			 <a href="{{ url('/archives/academicTitle') }}"> Academic Title</a>
	    		 			
			    		 </td>
			    	</tr>
			    	<tr>

			    		<td>
				   			 <a href="{{ url('/archives/academicDegree') }}"> Academic degree</a>
	    		 			
			    		 </td>
			    	</tr>
			    	<tr>

			    		<td>
				   			 <a href="{{ url('/archives/children') }}"> Children </a>
	    		 			
			    		 </td>
			    	</tr>
			    	<tr>

			    		<td>
				   			 <a href="{{ url('/archives/leave') }}"> Leave</a>
				
	    		 			
			    		 </td>
			    	</tr>
			    	<tr>

			    		<td>
				   			 <a href="{{ url('/archives/trainings') }}"> Trainings </a>
	    		 			
			    		 </td>
			    	</tr>
			    	<tr>

			    		<td>
				   			 <a href="{{ url('/archives/publications') }}"> Publications </a>
					    		
	    		 			
			    		 </td>
			    	</tr>
			    	<tr>

			    		<td>
				   			 <a href="{{ url('/archives/topics') }}"> Thesis-topics </a>
	    		 			
			    		 </td>
			    	</tr>
			    	<tr>

			    		<td>
				   			 <a href="{{ url('/archives/other') }}"> Other information </a>
					    		
	    		 			
			    		 </td>
			    	</tr>

		</table>
	</div>
</div>
<div class="col-md-1"></div>

<div class="col-md-8"></div>
@endif