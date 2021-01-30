
<link rel="stylesheet" href="{{asset("css/app.css")}}">
<script src = "{{asset("js/app.js")}}"></script>

<div class="container">

<form action="{{route("post.store")}}" method="POST">
  @csrf
  
    {{var_dump $error->any() }}
      <h1> Create a post </h1>      
    <div class="form-group">
      <label for="title">Titulo</label>
      <input  class="form-control" type="text" name="title" id ="title">
    </div>

    <div class="form-group">
      <label for="url_limpia">url limpia</label>
      <input  class="form-control" type="text" name="url_clean"  id="url_clean">
    </div>
 

    <div class="form-group">
        <label for="content">Contenido</label>
        <textarea class="form-control" id="content" name="content" rows="4"></textarea>
      </div>
      
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>

    
    <input type="submit" value="Enviar post" class="btn btn-primary" >
  </form>


</div>
