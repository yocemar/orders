


    @csrf
    
    <div class="form-group">
      <label for="item_id" >Item ID</label>
      <select  class="form-control" name="item_id" id= "item_id">  
          @foreach ($items as $name => $id )
              <option {{$order_detail->item_id ==$id ? 'selected="selected"':''}} value="{{$id}}">{{$name}} </option>
          @endforeach
      </select>

    </div>
    <div class="form-group">
      <label for="order_id" >Order ID</label>
      
      <select  class="form-control" name="order_id" id= "order_id">  
        @foreach ($orders as $number => $id )
            <option {{$order_detail->order_id ==$id ? 'selected="selected"':''}} value="{{$id}}">{{$number}} </option>
        @endforeach
    </select>


    </div>

    <div class="form-group">
      <label for="quantity">Quantity</label>
      <input  class="form-control" type="text" name="quantity"  id="quantity"value="{{old('quantity',$order_detail -> quantity)}}">
    </div>

    <div class="form-group">
      <label for="lot">lot</label>
      <input  class="form-control" type="text" name="lot"  id="lot"value="{{old('lot',$order_detail -> lot)}}">
    </div>

    <div class="form-group">
      <label for="note">note</label>
      <input  class="form-control" type="text" name="note"  id="note"value="{{old('note',$order_detail -> note)}}">
    </div>

    <button type="submit" class="btn btn-primary">Send</button>
  

 


