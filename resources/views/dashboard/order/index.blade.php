

@extends('dashboard.master')

@section('content') 

    <h1> Orders </h1>

  <a class="btn btn-success mt-3 mb-3" href="{{route('order.create')}}">Create</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>User_id</th>
                <th>Customer_id</th>
                <th>Detail_id</th>
                <th>Shipment</th>
                <th>Number</th>
                <th>Type</th>
                <th>Value</th>
                <th>Create at</th>
                <th>Update at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($orders as $order )
            <tr>
              <td>{{$order->id}}</td>
              <td>{{$order->user_id}}</td>
              <td>{{$order->customer_id}}</td>
              <td>{{$order->detail_id}}</td>
              <td>{{$order->shipment}}</td>
              <td>{{$order->number}}</td>
              <td>{{$order->type}}</td>
              <td>{{$order->value}}</td>
              <td>{{$order->created_at->format('d-m-y')}}</td>
              <td>{{$order->updated_at->format('d-m-y')}}</td>

              <td>
                <a class="btn btn-primary" href="{{route('order.show',$order->id)}}">Show</a>
                <a class="btn btn-success" href="{{route('order.edit',$order->id)}}">Edit</a>
                <button data-toggle="modal" data-target="#deleteModal" data-id="{{$order->id}}" class="btn btn-danger" >Delete</button>
              </td>   
            </tr>
            @endforeach

            
        </tbody>
    </table>
    {{ $orders->links() }}
    
   
    

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
            <p>Do you want to delete the Order?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <form id= "formDelete" method="POST" action= "{{route('order.destroy',0) }}" data-action="{{route('order.destroy',0)}}">
                        
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
      modal.find('.modal-title').text('Are you sure to delete the ORDER ' + id)
      
      });

      };
  </script>


@endsection