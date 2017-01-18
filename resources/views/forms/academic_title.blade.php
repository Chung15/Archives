@extends('master')

      @section('content')
        @if(isset($title))
             <div class="row">
                    {{ Form::model($title,['method'=>'PATCH', 'action' => ['AcademicTitleController@update', $title->id]]) }}
                          <div class="formTitles"><strong>Редактировать ученое звание</strong></div>
                          <hr/>
                                <div class = "col-md-2"></div>
                                <div class="col-md-4">

                                   <div class = 'form-group control-panel'>
                                                {{ Form:: label('academic_title',  'Учетное звание:') }}
                                            
                                                {{ Form:: select('academic_title', ['Доцент'=> 'Доцент', 'Профессор' => 'Профессор', 'старший научный сотрудник' =>'старший научный сотрудник'], ['class'=> 'form-control','multiple']) }}
                                    </div>
                                    <div class = 'form-group control-panel'>
                                                {{ Form:: label('seria_number',  'Серия/N:') }}
                                            
                                                {{ Form:: text('seria_number', null, ['class'=> 'form-control']) }}
                                    </div>
                                    <div class = 'form-group control-panel'>
                                               {{ Form:: label('thesis_topic',  'Тема:') }}
                                            
                                               {{ Form:: text('thesis_topic', null, ['class'=> 'form-control']) }}
                                    </div>
                                     <div class = 'form-group control-panel'>
                                                {{ Form:: label('specialization',  'Специальность:') }}
                                            
                                                {{ Form:: text('specialization', null, ['class'=> 'form-control']) }}
                                    </div>
                                    <div class = 'form-group control-panel'>
                                                {{ Form:: label('year',  'Год:') }}
                                            
                                                {{ Form:: text('year', null, ['class' => 'form-control year']) }}
                                    </div>
                                     <div class = 'form-group control-panel'>
                                                {{ Form:: label('title_link',  'Ссылка:') }}
                                            
                                                {{ Form:: text('title_link', null, ['class'=> 'form-control']) }}
                                    </div>

                                    <div>
                                                {{ Form::submit('сохранить', ['class' => 'btn btn-primary btn-sm pull-right btn-success form_control']) }}
           
                                    </div>
                                   <div>
                                               {{ Form::submit('отметить', ['class' => 'btn btn-primary btn-sm btn-danger form_control']) }}
           
                                  </div>
                               </div>

                               <div class = "col-md-2"></div>
                      {{ Form:: close() }}
              </div>

          @else

                      
                        <div class="row">
                              {{ Form::open(['url' => 'saveTitle']) }}
                                  <div class="formTitles"><strong>Ученое звание</strong></div>
                                  <hr/>
                                          <div class = "col-md-2"></div>
                                          <div class="col-md-4">

                                                 <div class = 'form-group control-panel'>
                                                              {{ Form:: label('academic_title',  'Учетное звание:') }}
                                                          
                                                              {{ Form:: select('academic_title', ['Доцент'=> 'Доцент', 'Профессор' => 'Профессор', 'старший научный сотрудник' =>'старший научный сотрудник'], ['class'=> 'form-control','multiple']) }}
                                                  </div>
                                                  <div class = 'form-group control-panel'>
                                                              {{ Form:: label('seria_number',  'Серия/N:') }}
                                                          
                                                              {{ Form:: text('seria_number', null, ['class'=> 'form-control']) }}
                                                  </div>
                                                  <div class = 'form-group control-panel'>
                                                             {{ Form:: label('thesis_topic',  'Тема:') }}
                                                          
                                                             {{ Form:: text('thesis_topic', null, ['class'=> 'form-control']) }}
                                                  </div>
                                                   <div class = 'form-group control-panel'>
                                                              {{ Form:: label('specialization',  'Специальность:') }}
                                                          
                                                              {{ Form:: text('specialization', null, ['class'=> 'form-control']) }}
                                                  </div>
                                                  <div class = 'form-group control-panel'>
                                                              {{ Form:: label('year',  'Год:') }}
                                                          
                                                              {{ Form:: text('year', null, ['class' => 'form-control year']) }}
                                                  </div>
                                                  <div class = 'form-group control-panel'>
                                                {{ Form:: label('title_link',  'Ссылка:') }}
                                            
                                                {{ Form:: text('title_link', null, ['class'=> 'form-control']) }}
                                    </div>
                                                   <div class = 'form-group control-panel' >
                                                                  {{ Form::submit('submit', ['class' => 'btn btn-primary form_control']) }}
                                       
                                                      </div>
                                        </div>

                                         <div class = "col-md-2"></div>
                                {{ Form:: close() }}
                            </div>
                @endif
                        
                 @endsection