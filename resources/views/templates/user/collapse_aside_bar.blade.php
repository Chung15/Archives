

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Publications
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">

        <table class="table table-hover">
              <tr>
                <th>Date</th>
                <th>Title</th>
              </tr>
             @foreach($publications as $publication)
              <tr>
                <td><li>{{$publication->published_on}}</li></td>
                <td>{{$publication->title}}</td>

                 @if((Auth::check()) AND (Auth::User()->id === $user->id))
                  <td class="col-md-1"><a href="{{ action('PublicationController@edit', [$publication->id]) }}" class="glyphicon glyphicon-pencil default"></a></td>
                  <td>
                    {{ Form::model($publication, ['method'=>'DELETE', 'action' => ['PublicationController@destroy', $publication->id]] ) }}
                              {{ Form::hidden('_method', 'DELETE') }}
                              <button type="submit"><i class="glyphicon glyphicon-trash pull-right"></i></button>
                     {{ Form::close() }}
                  </td>
                @endif

              </tr>
            @endforeach
        </table>

      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Trainings
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
       <table class="table table-hover">
              <tr>
                <th>Date</th>
                <th>Subject</th>
                <th></th>
                <th></th>
              </tr>
        @foreach($trainings as $training)

              <tr>
                <td><li>{{ $training->end_date }}</li></td>
                <td>{{ $training->topic }}</td>

              @if((Auth::check()) AND (Auth::User()->id === $user->id))

                 <td class="col-md-1"><a href="{{ action('TrainingController@edit', [$training->id]) }}" class="glyphicon glyphicon-pencil default"></a></td>
                  <td>
                    {{ Form::model( $training, ['method'=>'DELETE', 'action' => ['TrainingController@destroy', $training->id]] ) }}
                              {{ Form::hidden('_method', 'DELETE') }}
                              <button type="submit"><i class="glyphicon glyphicon-trash pull-right"></i></button>
                     {{ Form::close() }}
                  </td>

              @endif
                <p></p>

              </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Thesis-topics
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <table class="table table-hover">

              <tr>
                <th>Year</th>
                <th>Topic</th>
              </tr>
             @foreach($topics as $topic)
              <tr>
                <td><li>{{ $topic->academic_year }}</li></td>
                <td>{{ $topic->title }}</td>

                 @if((Auth::check()) AND (Auth::User()->id === $user->id))
                   <td class="col-md-1"><a href="{{ action('TopicsController@edit', [$topic->id]) }}" class="glyphicon glyphicon-pencil default"></a></td>
                  <td>
                    {{ Form::model( $topic, ['method'=>'DELETE', 'action' => ['TopicsController@destroy', $topic->id]] ) }}
                              {{ Form::hidden('_method', 'DELETE') }}
                              <button type="submit"><i class="glyphicon glyphicon-trash pull-right"></i></button>
                     {{ Form::close() }}
                  </td>
              @endif

              </tr>
            @endforeach
          
        </table>
      </div>
    </div>
  </div>
  @if((!Auth::check()) || (Auth::User()->id !== $user->id))
    @include('templates.user.collapse_full_aside_bar') 

   @endif
</div>