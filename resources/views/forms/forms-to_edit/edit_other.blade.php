@extends('app')

@section('content')

    <h1>Edit: {{ $other->name }}</h1>

    {{ Form::model( $other,['method'=>'PATCH', 'action' => ['OtherController@update', $other->id]]) }}

{{ Form::close() }}

@include('errors.list')
@stop