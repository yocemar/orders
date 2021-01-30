

@extends('dashboard.master')

@section('content') 

    <h1> order_details</h1>

  <a class="btn btn-success mt-3 mb-3" href="{{route('order_detail.create')}}">Create</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Item_id</th>
                <th>Order_id</th>
                <th>Quantity</th>
                <th>Lot</th>
                <th>Note</th>
                <th>Create at</th>
                <th>Update at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($order_details as $order_detail )
            <tr>
              <td>{{$order_detail->id}}</td>
              <td>{{$order_detail->item_id}}</td>
              <td>{{$order_detail->order_id}}</td>
              <td>{{$order_detail->quantity}}</td>
              <td>{{$order_detail->lot}}</td>
              <td>{{$order_detail->note}}</td>
              <td>{{$order_detail->created_at->format('d-m-y')}}</td>
              <td>{{$order_detail->updated_at->format('d-m-y')}}</td>

              <td>
                <a class="btn btn-primary" href="{{route('order_detail.show',$order_detail->id)}}">Show</a>
                <a class="btn btn-success" href="{{route('order_detail.edit',$order_detail->id)}}">Edit</a>
                <button data-toggle="modal" data-target="#deleteModal" data-id="{{$order_detail->id}}" class="btn btn-danger" >Delete</button>
              </td>   
            </tr>
            @endforeach

            
        </tbody>
    </table>
    {{ $order_details->links() }}
    
   
    

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
            <p>Do you want to delete the order_detail?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <form id= "formDelete" method="POST" action= "{{route('order_detail.destroy',0) }}" data-action="{{route('order_detail.destroy',0)}}">
                        
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
      modal.find('.modal-title').text('Are you sure to delete the order_detail ' + id)
      
      });

      };
  </script>


@endsection