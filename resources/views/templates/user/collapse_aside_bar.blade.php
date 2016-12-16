
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
              <tr>
                <td><li>12/2016</li></td>
                <td>First publication</td>
              </tr>
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
        @foreach($trainings as $training)
              <tr>
                <th>Date</th>
                <th>Subject</th>
                <th></th>
                <th></th>
              </tr>

              <tr>
                <td><li>{{ $training->end_date }}</li></td>
                <td>{{ $training->topic }}</td>
                <td>
                  <i class="glyphicon glyphicon-pencil"></i></td>
                <td><i class="glyphicon glyphicon-trash"></i></td>
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
             @foreach($topics as $topic)

              <tr>
                <th>Year</th>
                <th>Topic</th>
              </tr>
              <tr>
                <td><li>{{ $topic->academic_year }}</li></td>
                <td>{{ $topic->title }}</td>
              </tr>
            @endforeach
          
        </table>
      </div>
    </div>
  </div>

<div class="panel panel-default hidden">
    <div class="panel-heading" role="tab" id="headingFive">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          Leaves
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
      <div class="panel-body">
        <table class="table table-hover">
             @foreach($topics as $topic)

              <tr>
                <th>Year</th>
                <th>Topic</th>
              </tr>
              <tr>
                <td><li>{{ $topic->academic_year }}</li></td>
                <td>{{ $topic->title }}</td>
              </tr>
            @endforeach
          
        </table>
      </div>
    </div>
  </div>

</div>