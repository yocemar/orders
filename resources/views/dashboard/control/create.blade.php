


@extends('dashboard.master')

@section('content') 

<h1> Create Order </h1>
@include('dashboard.partials.validation-error')

<form action="{{route("control.store")}}" method="POST">
  
  @include('dashboard.control._form')

</form>
  
 
@endsection
 


