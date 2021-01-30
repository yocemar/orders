
    @csrf
    <div class="form-group">
      <label for="number" >Invoice</label>
    <input  class="form-control" type="text" name="invoice" id ="invoice" value="{{old('invoice',$control -> invoice)}}" >     
    </div>

    <div class="form-group">
      <label for="item">Items</label>
      <textarea class="form-control" id="item" name="item" rows="5" value="{{old('item',$control -> item)}}">{{old('item',$control -> item)}}</textarea>
    </div>
    
    <div class="form-group">
      <label for="built" >Build BY</label>
      <input  class="form-control" type="text" name="built" id ="built" value="{{old('built',$control -> built)}}">
    </div>

    <div class="form-group">
      <label for="description">Description</label>
      <textarea class="form-control" id="description" name="description" rows="4" value="{{old('description',$control -> description)}}">{{old('description',$control -> description)}}</textarea>
    </div>
 

    <button type="submit" class="btn btn-primary">Send</button>
  

 


