@extends('master')

      @section('content')

                      
                    <div class="row">
                        {{ Form::open(['url' => 'saveDegree']) }}
                              <div><strong>Degree</strong></div>
                                          <div class = "col-md-2"></div>
                                              <div class="col-md-4">

                                                 <div class = 'form-group control-panel'>
                                                              {{ Form:: label('academic_degree',  'Учетное звание:') }}
                                                          
                                                              {{ Form:: select('academic_degree', ['кандидат тех. наук'=> 'кандидат тех. наук', 'Доктор тех. наук' => 'Доктор тех. наук', 'phD' =>'phD'], ['class'=> 'form-control','multiple']) }}
                                                  </div>
                                                  <div class = 'form-group control-panel'>
                                                              {{ Form:: label('seria_number',  'Serie/N:') }}
                                                          
                                                              {{ Form:: text('seria_number', null, ['class'=> 'form-control']) }}
                                                  </div>
                                                  <div class = 'form-group control-panel'>
                                                             {{ Form:: label('thesis_topic',  'Thesis Topic:') }}
                                                          
                                                             {{ Form:: text('thesis_topic', null, ['class'=> 'form-control']) }}
                                                  </div>
                                                   <div class = 'form-group control-panel'>
                                                              {{ Form:: label('specialization',  'Specialization:') }}
                                                          
                                                              {{ Form:: text('specialization', null, ['class'=> 'form-control']) }}
                                                  </div>
                                                  <div class = 'form-group control-panel'>
                                                              {{ Form:: label('year',  'year:') }}
                                                          
                                                              {{ Form:: text('year', null, ['class' => 'form-control year']) }}
                                                  </div>
                                                   <div class = 'form-group control-panel' >
                                                                  {{ Form::submit('submit', ['class' => 'btn btn-primary form_control']) }}
                                       
                                                      </div>
                                        </div>

                                           <div class = "col-md-2"></div>
                  </div>
                  {{ Form:: close() }}
                         

                 @endsection