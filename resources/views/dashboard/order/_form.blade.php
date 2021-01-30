


    @csrf
    <div class="form-group">
      <label for="number" >Order Number</label>
    <input  class="form-control" type="text" name="number" id ="number" value="{{old('number',$order -> number)}}">
           
    </div>

    <div class="form-group">
      <label for="user_id" >User ID</label>
      <select  class="form-control"  name="user_id" id ="user_id"
        @foreach ($users as $name => $id )
        <option {{$order->user_id ==$id ? 'selected="selected"':''}} value="{{$id}}">{{$name}} </option>
        @endforeach
      </select>
    </div>

    
    <div class="form-group">
      <label for="customer_id" >Customer ID</label>
      <input  class="form-control" type="text" name="customer_id" id ="customer_id"value="{{old('customer_id',$order -> customer_id)}}">
    </div>

    <div class="form-group">
      <label for="shipment">Shipment</label>
      <input  class="form-control" type="text" name="shipment"  id="shipment"value="{{old('shipment',$order -> shipment)}}">
    </div>
    <div class="form-group">
      <label for="type">Type</label>
      <input  class="form-control" type="text" name="type"  id="type"value="{{old('type',$order -> type)}}">
    </div>
    <div class="form-group">
      <label for="invoice">Invoice</label>
      <input  class="form-control" type="text" name="invoice"  id="invoice"value="{{old('invoice',$order -> invoice)}}">
    </div>

    <div class="form-group">
        <label for="detail_id">Details</label>
        <textarea class="form-control" id="detail_id" name="detail_id" rows="4">{{old('detail_id',$order -> detail_id)}}</textarea>
      </div>
      <div class="form-group">
        <label for="value">Value</label>
        <input  class="form-control" type="text" name="value"  id="value" value="{{old('value',$order -> value)}}">
      </div>
  

    <button type="submit" class="btn btn-primary">Send</button>
  

 


