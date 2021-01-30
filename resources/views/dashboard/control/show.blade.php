


@extends('dashboard.master')

@section('content') 

<h1> show Order </h1>





    @csrf
    <div class="form-group">
      <label for="number" >Invoice</label>
    <input readonly class="form-control" type="text" name="invoice" id ="invoice" value="{{old('invoice',$control -> invoice)}}" >     
    </div>

    <div class="form-group">
      <label for="item">Items</label>
      <input readonly class="form-control" id="item" name="item" rows="5" value="{{old('item',$control -> item)}}"></textarea>
    </div>
    
    <div class="form-group">
      <label for="built" >Build BY</label>
      <input readonly class="form-control" type="text" name="built" id ="built" value="{{old('built',$control -> built)}}">
    </div>

    <div class="form-group">
      <label for="description">Description</label>
      <input readonly class="form-control" id="description" name="description" rows="4" value="{{old('description',$control -> description)}}"></textarea>
    </div>
    <div class="form-group">
      <label for="user" >User</label>
    <input readonly class="form-control" type="text" name="user" id ="user" value="{{old('user',$control -> user)}}" >     
    </div>

    <div class="form-group">
      <label for="date" >Date</label>
    <input readonly class="form-control" type="text" name="date" id ="date" value="{{old('date',$control -> created_at)}}" >     
    </div>

    <div class="form-group">
      <label for="out" >Scaned Out</label>
    <input readonly class="form-control" type="text" name="out" id ="out" value="{{old('out',$control -> out)}}" >     
    </div>
    
   
      
  <hr />
 
@endsection
 


