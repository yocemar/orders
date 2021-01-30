


@extends('dashboard.master')

@section('content') 

<h1> Edit Item </h1>
@include('dashboard.partials.validation-error')

<form action="{{route("item.update",$item->id)}}" method="POST">

  @method('PUT')
  @include('dashboard.item._form')

</form>
 
@endsection
   


