


@extends('dashboard.master')

@section('content') 

<h1> Create Order </h1>
@include('dashboard.partials.validation-error')

<form action="{{route("order.store")}}" method="POST">
  
  @include('dashboard.order._form')

</form>
  
 
@endsection
 


