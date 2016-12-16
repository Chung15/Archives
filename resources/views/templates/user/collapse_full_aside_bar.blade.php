<div class="panel panel-default">
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

              <tr>
                <th>Year</th>
                <th>Topic</th>
              </tr>
             @foreach($topics as $topic)
              <tr>
                <td><li>{{ $topic->academic_year }}</li></td>
                <td>{{ $topic->title }}</td>

                 @if(Auth::check())
                  <td><i class="glyphicon glyphicon-pencil"></i></td>
                  <td><i class="glyphicon glyphicon-trash"></i></td>
              @endif

              </tr>
            @endforeach
          
        </table>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSix">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          Children
        </a>
      </h4>
    </div>
    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
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

                 @if(Auth::check())
                <td><i class="glyphicon glyphicon-pencil"></i></td>
                <td><i class="glyphicon glyphicon-trash"></i></td>
              @endif

              </tr>
            @endforeach
          
        </table>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSeven">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
          Diploma
        </a>
      </h4>
    </div>
    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
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

                 @if(Auth::check())
                <td><i class="glyphicon glyphicon-pencil"></i></td>
                <td><i class="glyphicon glyphicon-trash"></i></td>
              @endif

              </tr>
            @endforeach
          
        </table>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingHeight">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseHeight" aria-expanded="false" aria-controls="collapseHeight">
          Academic degree
        </a>
      </h4>
    </div>
    <div id="collapseHeight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingHeight">
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

                 @if(Auth::check())
                <td><i class="glyphicon glyphicon-pencil"></i></td>
                <td><i class="glyphicon glyphicon-trash"></i></td>
              @endif

              </tr>
            @endforeach
          
        </table>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingNine">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
          Academic title
        </a>
      </h4>
    </div>
    <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
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

                 @if(Auth::check())
                <td><i class="glyphicon glyphicon-pencil"></i></td>
                <td><i class="glyphicon glyphicon-trash"></i></td>
              @endif

              </tr>
            @endforeach
          
        </table>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTen">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
          Other
        </a>
      </h4>
    </div>
    <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
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

                 @if(Auth::check())
                <td><i class="glyphicon glyphicon-pencil"></i></td>
                <td><i class="glyphicon glyphicon-trash"></i></td>
              @endif
              
              </tr>
            @endforeach
          
        </table>
      </div>
    </div>
  </div>
