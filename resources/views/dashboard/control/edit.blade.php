


@extends('dashboard.master')

@section('content') 

<h1> Edit Control </h1>
@include('dashboard.partials.validation-error')

<form action="{{route("control.update",$control->id)}}" method="POST">

  @method('PUT')
  @include('dashboard.control._form')

</form>
 
@endsection
   


