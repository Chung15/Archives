<div class="row">
<div class="col-md-4"></div>
<div class="col-md-6">
	<h2>Архивы</h2>
<div class="row table-rounded">
		<table class="table  table-hover">


			    	<tr>

			    		<td>
				   			 <a href="{{ action('DiplomaController@index', [$user->id]) }}"> Дипломы</a>
				
	    		 			
			    		 </td>
			    	</tr>
			    	<tr>

			    		<td>
				   			 <a href="{{ action('AcademicTitleController@index', [$user->id]) }}"> Ученое звание</a>
	    		 			
			    		 </td>
			    	</tr>
			    	<tr>

			    		<td>
				   			 <a href="{{ action('AcademicDegreeController@index', [$user->id]) }}"> Ученая степень</a>
	    		 			
			    		 </td>
			    	</tr>
			    	<tr>

			    		<td>
				   			 <a href="{{ action('ChildController@index', [$user->id]) }}"> Дети </a>
	    		 			
			    		 </td>
			    	</tr>
			    	<tr>

			    		<td>
				   			 <a href="{{ action('LeavesController@index', [$user->id]) }}"> Отпуски </a>
				
	    		 			
			    		 </td>
			    	</tr>
			    	<tr>

			    		<td>
				   			 <a href="{{ action('TrainingController@index', [$user->id]) }}"> Повышение квалификации </a>
	    		 			
			    		 </td>
			    	</tr>
			    	<tr>

			    		<td>
				   			 <a href="{{ action('PublicationController@index', [$user->id]) }}"> Публикации </a>
					    		
	    		 			
			    		 </td>
			    	</tr>
			    	<tr>

			    		<td>
				   			 <a href="{{ action('TopicsController@index', [$user->id]) }}"> Темы дипломов </a>
	    		 			
			    		 </td>
			    	</tr>
			    	<tr>

			    		<td>
				   			 <a href="{{ action('OtherController@index', [$user->id]) }}"> Другие </a>
					    		
	    		 			
			    		 </td>
			    	</tr>

		</table>
	</div>
</div>
</div>