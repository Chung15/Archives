<div class="panel-group" id="accordion" role="tab" aria-multiselectable="false">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Contact info
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">

        <table class="table table-hover table-user-information">
              <tr>
                <td>{{ $adress->city }}</td><td><i class="glyphicon glyphicon-pencil"></i></td>
              </tr>
              <tr>
                <td>{{ $adress->street }}</td><td><i class="glyphicon glyphicon-pencil"></i></td>
              </tr>
              <tr>
                <td>{{ $adress->zip }}</td><td><i class="glyphicon glyphicon-pencil"></i></td>
              </tr>
              <tr>
                <td>{{ $adress->phone }}</td><td><i class="glyphicon glyphicon-pencil"></i></td>
              </tr>
              <tr>
                <td>{{ $user->email }}</td><td><i class="glyphicon glyphicon-pencil"></i></td>
              </tr>
        </table>

      </div>
    </div>
  </div>
 
  </div>
