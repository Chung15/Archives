  
{{ Form::model($user, ['method'=>'PATCH', 'action' => ['AuthController@updatePassword', $user->id]]) }}
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Обновить пароль</h4>
          </div>
          <div class="modal-body">

              <div class="form-group">
                  <label for="oldPassword"> текущий пароль</label>
                  <input type="password" class="form-control" id="oldPassword" name="oldPassword" placeholder="Old Password" value="" required>

                </div>
                <div class="form-group">
                  <label for="newPassword">Новый пароль</label>
                  <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="New Password" value="{{ old('newPassword') }}" required>
                </div>
           
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            <button type="submit" class="btn btn-primary">Сохранить</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
{{ Form::close() }}