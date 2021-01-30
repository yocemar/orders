

@extends('dashboard.master')

@section('content') 

    <h1> items </h1>

<a class="btn btn-success mt-3 mb-3" href="{{route('item.create')}}">Create</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer_id</th>
                <th>Location_id</th>
                <th>Code</th>
                <th>Name</th>
                <th>Image</th>
                <th>Type</th>
                <th>Detail</th>
                <th>Create at</th>
                <th>Update at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($items as $item )
            <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->customer_id}}</td>
            <td>{{$item->location_id}}</td>
            <td>{{$item->code}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->image}}</td>
            <td>{{$item->type}}</td>
            <td>{{$item->detail}}</td>
            <td>{{$item->created_at->format('d-m-y')}}</td>
            <td>{{$item->updated_at->format('d-m-y')}}</td>

            <td>
                <a class="btn btn-primary" href="{{route('item.show',$item->id)}}">Show</a>
                <a class="btn btn-success" href="{{route('item.edit',$item->id)}}">Edit</a>
                
                
                <button data-toggle="modal" data-target="#deleteModal" data-id="{{$item->id}}" class="btn btn-danger" >Delete</button>


                </td>   
            </tr>
            @endforeach

            
        </tbody>
    </table>
    {{ $items->links() }}
    
    
    
    

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
        <p>Do you want to delete the item?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form id= "formDelete" method="POST" action= "{{route('item.destroy',0) }}" data-action="{{route('item.destroy',0)}}">
                    
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
    modal.find('.modal-title').text('Are you sure to delete the item ' + id)
    
    });

    };
</script>


@endsection