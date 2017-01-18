
<h2> Архивы</h2>
<div class="col-md-3 ">
	<div class="row table-rounded">
		<table class="table  table-hover">


			    	<tr>

			    		<td>
				   			 <a href="{{ action('DiplomaController@index', [$user->id]) }}"> Дипломы</a>
				
	    		 			
			    		 </td>
			    		 <td class="col-md-1"><a href="{{ action('DiplomaController@create') }}" class="glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="left" title="добавьте диплом"></a></td>
			    	</tr>
			    	<tr>

			    		<td>
				   			 <a href="{{ action('AcademicTitleController@index', [$user->id]) }}"> Ученое звание</a>
	    		 			
			    		 </td>
			    		 <td class="col-md-1"><a href="{{ action('AcademicTitleController@create') }}" class="glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="left" title="добавьте ученое звание"></a></td>
			    	</tr>
			    	<tr>

			    		<td>
				   			 <a href="{{ action('AcademicDegreeController@index', [$user->id]) }}"> Ученая степень</a>
	    		 			
			    		 </td>
			    		 <td class="col-md-1"><a href="{{ action('AcademicDegreeController@create') }}" class="glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="left" title="добавьте ученую степень"></a></td>
			    	</tr>
			    	<tr>

			    		<td>
				   			 <a href="{{ action('ChildController@index', [$user->id]) }}"> Дети </a>
	    		 			
			    		 </td>
			    		 <td class="col-md-1"><a href="{{ action('ChildController@create') }}" class="glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="left" title="добавьте ребенок"></a></td>
			    	</tr>
			    	<tr>

			    		<td>
				   			 <a href="{{ action('LeavesController@index', [$user->id]) }}"> Отпуски </a>
				
	    		 			
			    		 </td>
			    		 <td class="col-md-1"><a href="{{ action('LeavesController@create') }}" class="glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="left" title="добавьте отпуск"></a></td>
			    	</tr>
			    	<tr>

			    		<td>
				   			 <a href="{{ action('TrainingController@index', [$user->id]) }}"> Повышение квалификации </a>
	    		 			
			    		 </td>
			    		 <td class="col-md-1"><a href="{{ action('TrainingController@create') }}" class="glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="left" title="добавьте квалификацию"></a></td>
			    	</tr>
			    	<tr>

			    		<td>
				   			 <a href="{{ action('PublicationController@index', [$user->id]) }}"> Публикации </a>
					    		
	    		 			
			    		 </td>
			    		 <td class="col-md-1"><a href="{{ action('PublicationController@create') }}" class="glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="left" title="добавьте публикацию"></a></td>
			    	</tr>
			    	<tr>

			    		<td>
				   			 <a href="{{ action('TopicsController@index', [$user->id]) }}"> Темы дипломов </a>
	    		 			
			    		 </td>
			    		 <td class="col-md-1"><a href="{{ action('TopicsController@create') }}" class="glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="left" title="добавьте тему"></a></td>
			    	</tr>
			    	<tr>

			    		<td>
				   			 <a href="{{ action('OtherController@index', [$user->id]) }}"> Другие </a>
					    		
	    		 			
			    		 </td>
			    		 <td class="col-md-1"><a href="{{ action('OtherController@create') }}" class="glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="left" title="добавьте другую информацию"></a></td>
			    	</tr>

		</table>
	</div>
</div>
<div class="col-md-1"></div>

<div class="col-md-8"></div>
