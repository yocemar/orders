


@extends('dashboard.master')

@section('content') 

<h1> Edit Order </h1>
@include('dashboard.partials.validation-error')

<form action="{{route("order.update",$order->id)}}" method="POST">

  @method('PUT')
  @include('dashboard.order._form')

</form>
 
@endsection
   


