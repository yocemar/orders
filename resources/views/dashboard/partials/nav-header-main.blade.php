<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('home')}}">WMS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              CRUD
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{route('order.index')}}">Orders</a>
              <a class="dropdown-item" href="{{route('order_detail.index')}}">Orders Details</a>
              <a class="dropdown-item" href="{{route('item.index')}}">Items</a>
              <a class="dropdown-item" href="{{route('control.index')}}">Control Stock</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{route('user.index')}}">Users</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>      
        </ul>
          
        <ul class="navbar-nav">
          <li class="nav-item ">
                  
            <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
             </form>
                          
          </li>
                        
        </ul>

      </div>
  </nav>