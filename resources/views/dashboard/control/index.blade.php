

@extends('dashboard.master')

@section('content') 

    <h1> controls </h1>

<a class="btn btn-success mt-3 mb-3" href="{{route('control.create')}}">Create</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Invoice</th>
                <th>Item</th>
                <th>Built</th>
                <th>Scanned</th>
                <th>Description</th>
                <th>Scaned Out</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($controls as $control )
            <tr>
            <td>{{$control->id}}</td>
            <td>{{$control->created_at}}</td>
            <td>{{$control->invoice}}</td>
            <td>{{$control->item}}</td>
            <td>{{$control->built}}</td>
            <td>{{$control->user}}</td>
            <td>{{$control->description}}</td>
            <td>{{$control->out}}</td>
            <td>{{$control->created_at->format('d-m-y')}}</td>
            <td>{{$control->updated_at->format('d-m-y')}}</td>

            <td>
                <a class="btn btn-primary" href="{{route('control.show',$control->id)}}">Show</a>
                <a class="btn btn-success" href="{{route('control.edit',$control->id)}}">Edit</a>
                
                
                <button data-toggle="modal" data-target="#deleteModal" data-id="{{$control->id}}" class="btn btn-danger" >Delete</button>


                </td>   
            </tr>
            @endforeach

            
        </tbody>
    </table>
    {{ $controls->links() }}
    
    
    
    

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Do you want to delete the control?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form id= "formDelete" method="POST" action= "{{route('control.destroy',0) }}" data-action="{{route('control.destroy',0)}}">
                    
            @method('DELETE')
            @csrf
            <button class="btn btn-danger" type= "submit">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>


<script>

  window.onload = function(){
    $('#deleteModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var id = button.data('id') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    
    action = $('#formDelete').attr('data-action').slice(0,-1)
    
    action += id
    
    console.log(action)

    $('#formDelete').attr('action',action)

    var modal = $(this)
    modal.find('.modal-title').text('Are you sure to delete the control ' + id)
    
    });

    };
</script>


@endsection