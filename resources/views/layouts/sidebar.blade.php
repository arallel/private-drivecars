<div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav">
      <li {{{ (Request::is('dashboard') ? 'class=active' : '') }}} >
        <a href="dashboard">
          <i class="now-ui-icons design_app"></i>
          <p>Dashboard</p>
        </a>
      </li>
      {{-- <a href="{{ route('logout') }}" style="cursor: pointer" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();" class="btn btn-md btn-primary">LOGOUT</a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form> --}}
      <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-jet-dropdown-link href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                        this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-jet-dropdown-link>
    </form>
      <li {{{ (Request::is('datadriver') ? 'class=active' : '') }}} >
        <a href="{{ url('datadriver') }}">
          <i class="now-ui-icons users_single-02"></i>
          <p>Driver Profile</p>
        </a>
      </li>
      <li >
        <a href="examples.map">
          <i class="now-ui-icons transportation_bus-front-12"></i>
          <p>cars</p>
        </a>
      </li>
      <li {{{ (Request::is('test') ? 'class=active' : '') }}}>
        <a href="{{ url('test') }}">
          <i class="now-ui-icons ui-1_bell-53"></i>
          <p>test</p>
        </a>
      </li>
      <li>
        <a href="examples.user.html">
          <i class="now-ui-icons users_single-02"></i>
          <p>User Profile</p>
        </a>
      </li>
      <li>
        <a href="examples.tables">
          <i class="now-ui-icons design_bullet-list-67"></i>
          <p>Table List</p>
        </a>
      </li>
      <li>
        <a href="examples.typography">
          <i class="now-ui-icons text_caps-small"></i>
          <p>Typography</p>
        </a>
      </li>
    </ul>
  </div>
  </div>
  <div class="main-panel" id="main-panel">
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <div class="navbar-toggle">
        <button type="button" class="navbar-toggler">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <a class="navbar-brand" href="#pablo">Dashboard</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navigation">
      <form>
        <div class="input-group no-border">
          <input type="text" value="" class="form-control" placeholder="Search...">
          <div class="input-group-append">
            <div class="input-group-text">
              <i class="now-ui-icons ui-1_zoom-bold"></i>
            </div>
          </div>
        </div>
      </form>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#pablo">
            <i class="now-ui-icons media-2_sound-wave"></i>
            <p>
              <span class="d-lg-none d-md-block">Stats</span>
            </p>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="now-ui-icons location_world"></i>
            <p>
              <span class="d-lg-none d-md-block">Some Actions</span>
            </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="#pablo">
            <i class="now-ui-icons users_single-02"></i>
            <p>
              <span class="d-lg-none d-md-block">Account</span>
            </p>
          </a>
        </li> --}}
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="now-ui-icons users_single-02"></i>
            <p>
              <span class="d-lg-none d-md-block">Some Actions</span>
            </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
          </a>
        </li>

      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->