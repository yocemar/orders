


@extends('dashboard.master')

@section('content') 

<h1> Edit User </h1>
@include('dashboard.partials.validation-error')

<form action="{{route("user.update",$user->id)}}" method="POST">

  @method('PUT')
  @include('dashboard.user._form',['pasw'=>false])

</form>
 
@endsection
   


