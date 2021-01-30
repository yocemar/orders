


@extends('dashboard.master')

@section('content') 

<h1> Create Item </h1>
@include('dashboard.partials.validation-error')

<form action="{{route("item.store")}}" method="POST">
  
  @include('dashboard.item._form')

</form>
  
 
@endsection
 


