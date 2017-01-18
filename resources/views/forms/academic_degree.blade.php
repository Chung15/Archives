@extends('master')

      @section('content')
        @if(isset($degree))
          <div class="row">
                        {{ Form::model($degree,['method'=>'PATCH', 'action' => ['AcademicDegreeController@update', $degree->id]]) }}
                              <div class="formTitles"><strong>Редактировать ученую степени</strong></div>
                              <hr/>
                                          <div class = "col-md-2"></div>
                                              <div class="col-md-4">

                                                 <div class = 'form-group control-panel'>
                                                              {{ Form:: label('academic_degree',  'Учетное звание:') }}
                                                          
                                                              {{ Form:: select('academic_degree', ['кандидат тех. наук'=> 'кандидат тех. наук', 'Доктор тех. наук' => 'Доктор тех. наук', 'phD' =>'phD'], ['class'=> 'form-control','multiple']) }}
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
                                                              {{ Form:: label('degree_link',  'Ссылка:') }}
                                                          
                                                              {{ Form:: text('degree_link', null, ['class' => 'form-control degree_link']) }}
                                                  </div>
                                                   <div>
                                                {{ Form::submit('сохранить', ['class' => 'btn btn-primary btn-sm pull-right btn-success form_control']) }}
           
                                    </div>
                                   <div>
                                               {{ Form::submit('отметить', ['class' => 'btn btn-primary btn-sm btn-danger form_control']) }}
           
                                  </div>
                                        </div>

                                           <div class = "col-md-2"></div>
          </div>
                        {{ Form:: close() }}

        @else

                      
                    <div class="row">
                        {{ Form::open(['url' => 'saveDegree']) }}
                              <div class="formTitles"><strong>Ученая степень</strong></div>
                              <hr/>
                                          <div class = "col-md-2"></div>
                                              <div class="col-md-4">

                                                 <div class = 'form-group control-panel'>
                                                              {{ Form:: label('academic_degree',  'Учетное звание:') }}
                                                          
                                                              {{ Form:: select('academic_degree', ['кандидат тех. наук'=> 'кандидат тех. наук', 'Доктор тех. наук' => 'Доктор тех. наук', 'phD' =>'phD'], ['class'=> 'form-control','multiple']) }}
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
                                                              {{ Form:: label('degree_link',  'Ссылка:') }}
                                                          
                                                              {{ Form:: text('degree_link', null, ['class' => 'form-control degree_link']) }}
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