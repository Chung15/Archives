<div class="panel-group" id="accordion" role="tab" aria-multiselectable="false">
  <div class="panel panel-default">
    <div class="panel-heading " role="tab" id="headingFour">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          <strong>Контактная информация</strong>
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">

        <table class="table table-hover table-user-information col-md-4">
              <tr>
                <td><label>Город:</label> {{ $adress->city }}</td>
              </tr>
              <tr>
                <td> <label>Улица:</label> {{ $adress->street }}</td>
              </tr>
              <tr>
                <td><label>Почтовый индекс:</label> {{ $adress->zip }}</td>
              </tr>
              <tr>
                <td><label>Телефон:</label> {{ $adress->phone }}</td>
              </tr>
              <tr>
                <td><label>Электронный адрес:</label> {{ $user->email }}</td>
              </tr>
        </table>
          @if( (Auth::check() AND (Auth::User()->id === $user->id)) OR (Auth::check() AND (Auth::User()->isAdmin === 1) ))
                  <a class="btn btn-primary pull-right btn-xs" href="{{ URL::to('/profile/' . $user->id . '/editContact/' .$adress->id) }}">Редактировать</a>
                @endif


      </div>
    </div>
  </div>
 
  </div>
