


@extends('dashboard.master')

@section('content') 

<h1> show Order </h1>





    @csrf
    <div class="form-group">
      <label for="number" >Order Number</label>
    <input readonly class="form-control" type="text" name="number" id ="number" value="{{$order->number}}">
           
    </div>

    <div class="form-group">
      <label for="user_id" >User ID</label>
      <input readonly class="form-control" type="text" name="user_id" id ="user_id"value="{{$order->user_id}}">
    </div>
    <div class="form-group">
      <label for="customer_id" >Customer ID</label>
      <input readonly class="form-control" type="text" name="customer_id" id ="customer_id"value="{{$order->customer_id}}">
    </div>

    <div class="form-group">
      <label for="shipment">Shipment</label>
      <input readonly class="form-control" type="text" name="shipment"  id="shipment"value="{{$order->shipment}}">
    </div>
    <div class="form-group">
      <label for="type">Type</label>
      <input readonly class="form-control" type="text" name="type"  id="type"value="{{$order->type}}">
    </div>
    <div class="form-group">
      <label for="invoice">Invoice</label>
      <input readonly class="form-control" type="text" name="invoice"  id="invoice"value="{{$order->invoice}}">
    </div>

    <div class="form-group">
        <label for="detail_id">Details</label>
        <textarea readonly class="form-control" id="detail_id" name="detail_id" rows="4">{{$order->detail_id}}</textarea>
      </div>
      <div class="form-group">
        <label for="value">Value</label>
        <input readonly class="form-control" type="text" name="value"  id="value" value="{{$order->value}}">
      </div>

  <hr />
 
@endsection
 


