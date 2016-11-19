@extends('master')

    @section('title')
     Archives
    @endsection



    @section('content')
    	@section('pageHeader')
    		 @include('templates.header')
    		 @include('templates.register')
    	@endsection

      	@include('templates.mainContent')
    @endsection

