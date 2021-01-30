


@extends('dashboard.master')

@section('content') 

<h1> Create Order Details </h1>
@include('dashboard.partials.validation-error')

<form action="{{route("order_detail.store")}}" method="POST">
  
  @include('dashboard.order_detail._form')

</form>
  
 
@endsection
 


