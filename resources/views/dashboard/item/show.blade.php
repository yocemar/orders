


@extends('dashboard.master')

@section('content') 

<h1> show item </h1>





    @csrf
    
    <div class="form-group">
      <label for="location_id" >Location ID</label>
      <input readonly class="form-control" type="text" name="location_id" id ="location_id"value="{{old('location_id',$item -> location_id)}}">
    </div>
    <div class="form-group">
      <label for="customer_id" >Customer ID</label>
      <input readonly class="form-control" type="text" name="customer_id" id ="customer_id"value="{{old('customer_id',$item -> customer_id)}}">
    </div>

    <div class="form-group">
      <label for="name" >Item Name</label>
    <input readonly class="form-control" type="text" name="name" id ="name" value="{{old('name',$item -> name)}}">
           
    </div>

    <div class="form-group">
      <label for="code">Code</label>
      <input readonly class="form-control" type="text" name="code"  id="code"value="{{old('code',$item -> code)}}">
    </div>

    <div class="form-group">
      <label for="image">Image</label>
      <input readonly class="form-control" type="text" name="image"  id="image"value="{{old('image',$item -> image)}}">
    </div>

    <div class="form-group">
      <label for="type">Type</label>
      <input readonly class="form-control" type="text" name="type"  id="type"value="{{old('type',$item -> type)}}">
    </div>
    <div class="form-group">
      <label for="detail">detail</label>
      <input readonly class="form-control" type="text" name="detail"  id="detail"value="{{old('detail',$item -> detail)}}">
    </div>

  <hr />
 
@endsection
 


