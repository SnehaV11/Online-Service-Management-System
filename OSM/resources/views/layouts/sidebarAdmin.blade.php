<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile not-navigation-link">
      <div class="nav-link">
        <div class="user-wrapper">
          <div class="profile-image">
            <img src="{{ url('assets/images/faces/face8.jpg') }}" alt="profile image">
          </div>
          <div class="text-wrapper">
            <p class="profile-name">{{ Auth::user()->name }}</p>
            <div class="dropdown" data-display="static">
              <a href="#" class="nav-link d-flex user-switch-dropdown-toggler" id="UsersettingsDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <small class="designation text-muted">Admin</small>
                <span class="status-indicator online"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{ url('/') }}">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{ url('/charts/chartjs') }}">
        <i class="menu-icon mdi mdi-chart-line"></i>
        <span class="menu-title">Work Order</span>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{ url('/admin/view_request') }}">
        <i class="menu-icon mdi mdi-dna"></i>
        <span class="menu-title">Request</span>
      </a>
    </li>

    <li class="nav-item ">
      <a class="nav-link" href="{{ url('/admin/view_technicians') }}">
        <i class="menu-icon mdi mdi-chart-line"></i>
        <span class="menu-title">Technicians</span>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{ url('/admin/view_assets') }}">
        <i class="menu-icon mdi mdi-table-large"></i>
        <span class="menu-title">Assets</span>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{ url('/admin/view_requester') }}">
        <i class="menu-icon mdi mdi-emoticon"></i>
        <span class="menu-title">Requester</span>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#user-pages"  aria-controls="user-pages">
        <i class="menu-icon mdi mdi-lock-outline"></i>
        <span class="menu-title">Reports</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="user-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/user-pages/login') }}">Sell Report</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/user-pages/register') }}">Work Report</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="https://www.bootstrapdash.com/demo/star-laravel-free/documentation/documentation.html" target="_blank">
        <i class="menu-icon mdi mdi-file-outline"></i>
        <span class="menu-title">Feedbacks</span>
      </a>
    </li>
  </ul>
</nav>