

@extends('dashboard.master')

@section('content') 

    <h1> users </h1>

<a class="btn btn-success mt-3 mb-3" href="{{route('user.create')}}">Create</a>

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Create at</th>
                <th>Update at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($users as $user )
            <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->rol->key}}</td>
            <td>{{$user->created_at->format('d-m-y')}}</td>
            <td>{{$user->updated_at->format('d-m-y')}}</td>

            <td>
                <a class="btn btn-primary" href="{{route('user.show',$user->id)}}">Show</a>
                <a class="btn btn-success" href="{{route('user.edit',$user->id)}}">Edit</a>
                
                
                <button data-toggle="modal" data-target="#deleteModal" data-id="{{$user->id}}" class="btn btn-danger" >Delete</button>


                </td>   
            </tr>
            @endforeach

            
        </tbody>
    </table>
    {{ $users->links() }}
    
    
    
    

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
        <p>Do you want to delete the user?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form id= "formDelete" method="POST" action= "{{route('user.destroy',0) }}" data-action="{{route('user.destroy',0)}}">
                    
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
    modal.find('.modal-title').text('Are you sure to delete the user ' + id)
    
    });

    };
</script>


@endsection