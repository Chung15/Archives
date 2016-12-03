@extends('master')

      @section('pageHeader')
            @include('templates.headerLoggedIn')
      @endsection

      @section('content')

                      
                        {{ Form::open(['url' => 'saveTitle']) }}
                              <div><strong>Diploma</strong></div>
                                    <div class="row">
                                          <div class = "col-md-2"></div>
                                          <div class="col-md-4">

                                                 <div class = 'form-group control-panel'>
                                                              {{ Form:: label('academic_title',  'Учетное звание:') }}
                                                          
                                                              {{ Form:: select('academic_title', ['Доцент'=> 'Доцент', 'Профессор' => 'Профессор', 'старший научный сотрудник' =>'старший научный сотрудник'], ['class'=> 'form-control','multiple']) }}
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
                                                          
                                                              {{ Form:: date('year', \Carbon\Carbon::now()) }}
                                                  </div>
                                                   <div class = 'form-group control-panel' >
                                                                  {{ Form::submit('submit', ['class' => 'btn btn-primary form_control']) }}
                                       
                                                      </div>
                                        </div>

                              </div>
                  {{ Form:: close() }}
                          </div>
                  </div>
                    <div class = "col-md-2"></div>
      </div>

                 @endsection