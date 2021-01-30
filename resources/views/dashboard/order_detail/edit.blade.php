


@extends('dashboard.master')

@section('content') 

<h1> Edit Order Detail</h1>
@include('dashboard.partials.validation-error')

<form action="{{route("order_detail.update",$order_detail->id)}}" method="POST">

  @method('PUT')
  @include('dashboard.order_detail._form')

</form>
 
@endsection
   


