<div class="vertical-nav bg-white" id="sidebar">
  <div class="py-4 px-3 mb-4 bg-light">
    <div class="media d-flex align-items-center">
     <div class="media-body">
        <h4 class="m-0">{{ Auth::user()->name }}</h4>
        <p class="font-weight-normal text-muted mb-0">Requester</p>
      </div>
    </div>
  </div>

  <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Dashboard</p>

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
      <a href="{{ url('/') }}" class="nav-link text-dark bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                home
            </a>
    </li>
    <li class="nav-item">
      <a href="{{ url('/requester/request') }}" class="nav-link text-dark">
                <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                Request Service
            </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-dark">
                <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                service status
            </a>
    </li>
    <li class="nav-item">
      <a href="{{ url('/admin/view_technicians') }}" class="nav-link text-dark">
                <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
                Profile
            </a>
    </li>
   
  </ul>

  
  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
      <a href="#" class="nav-link text-dark" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                
      </a>
    </li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
        </form>
  </ul>
</div>

