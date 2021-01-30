


@extends('dashboard.master')

@section('content') 

<h1> Create Item </h1>
@include('dashboard.partials.validation-error')

<form action="{{route("user.store")}}" method="POST">
  
  @include('dashboard.user._form',['pasw'=>true])

</form>
  
 
@endsection
 


