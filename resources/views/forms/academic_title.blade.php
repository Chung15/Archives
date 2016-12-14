@extends('master')

      @section('content')
        @if(isset($title))
             <div class="row">
                    {{ Form::model($title,['method'=>'PATCH', 'action' => ['AcademicTitleController@update', $title->id]]) }}
                          <div><strong>Title</strong></div>
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
                                            
                                                {{ Form:: text('year', null, ['class' => 'form-control year']) }}
                                    </div>
                                    <div>
                                                {{ Form::submit('save', ['class' => 'btn btn-primary btn-sm pull-right btn-success form_control']) }}
           
                                    </div>
                                   <div>
                                               {{ Form::submit('cancel', ['class' => 'btn btn-primary btn-sm btn-danger form_control']) }}
           
                                  </div>
                               </div>

                               <div class = "col-md-2"></div>
                      {{ Form:: close() }}
              </div>

          @else

                      
                        <div class="row">
                              {{ Form::open(['url' => 'saveTitle']) }}
                                  <div><strong>Title</strong></div>
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
                                                          
                                                              {{ Form:: text('year', null, ['class' => 'form-control year']) }}
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