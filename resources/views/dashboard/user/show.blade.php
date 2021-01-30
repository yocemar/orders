


@extends('dashboard.master')

@section('content') 

<h1> show user </h1>


    @csrf
    
 
    <div class="form-group">
      <label for="name" >Name</label>
    <input readonly class="form-control" type="text" name="name" id ="name" value="{{old('name',$user -> name)}}">
           
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input readonly class="form-control" type="text" name="email"  id="email"value="{{old('email',$user -> email)}}">
    </div>

    <div class="form-group">
      <label for="image">Image</label>
      <input readonly class="form-control" type="text" name="image"  id="image"value="{{old('image',$user -> image)}}">
    </div>

  <hr />
 
@endsection
 


