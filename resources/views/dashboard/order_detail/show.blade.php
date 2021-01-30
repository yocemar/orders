


@extends('dashboard.master')

@section('content') 

<h1> Show Order Detail </h1>


    @csrf
  
    <div class="form-group">
      <label for="item_id" >Item ID</label>
      <input readonly class="form-control" type="text" name="item_id" id ="item_id"value="{{$order_detail->item_id}}">
    </div>
    <div class="form-group">
      <label for="order_id" >Order ID</label>
      <input readonly class="form-control" type="text" name="order_id" id ="order_id"value="{{$order_detail->order_id}}">
    </div>

    <div class="form-group">
      <label for="quantity">quantity</label>
      <input readonly class="form-control" type="text" name="quantity"  id="quantity"value="{{$order_detail->quantity}}">
    </div>
  
    <div class="form-group">
      <label for="note">note</label>
      <input readonly class="form-control" type="text" name="note"  id="note"value="{{$order_detail->note}}">
    </div>
    <div class="form-group">
      <label for="lot">lot</label>
      <input readonly class="form-control" type="text" name="lot"  id="lot"value="{{$order_detail->lot}}">
    </div>
  <hr />
 
@endsection
 


