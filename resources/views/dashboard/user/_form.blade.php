


    @csrf
    

      <div class="form-group">
      <label for="name" >Name</label>
    <input  class="form-control" type="text" name="name" id ="name" value="{{old('name',$user -> name)}}">
           
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input  class="form-control" type="text" name="email"  id="email"value="{{old('email',$user -> email)}}">
    </div>

    @if ($pasw) 
    <div class="form-group">
      <label for="password">Password</label>
      <input  class="form-control" type="password" name="password"  id="password"value="{{old('password',$user -> password)}}">
    </div>
    @endif
      
      <button type="submit" class="btn btn-primary">Send</button>
  

 


