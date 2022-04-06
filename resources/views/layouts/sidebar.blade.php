<div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav">
      <li {{{ (Request::is('dashboard','Dashboard') ? 'class=active' : '') }}} >
        <a href="dashboard">
          <i class="now-ui-icons design_app"></i>
          <p>Dashboard</p>
        </a>
      </li>
      <li {{{ (Request::is('datadriver') ? 'class=active' : '') }}} >
        <a href="{{ url('datadriver') }}">
          <i class="now-ui-icons users_single-02"></i>
          <p>Driver Profile</p>
        </a>
      </li>
      <li {{{ (Request::is('cars') ? 'class=active' : '') }}}>
        <a href="{{ url('cars') }}">
          <i class="now-ui-icons transportation_bus-front-12"></i>
          <p>cars</p>
        </a>
      </li>
      <li {{{ (Request::is('laporan') ? 'class=active' : '') }}}>
        <a href="{{ url('laporan') }}">
          <i class="now-ui-icons ui-1_bell-53"></i>
          <p>laporan</p>
        </a>
      </li>
      <li>
        {{--  <form method="POST" action="{{ route('logout') }}">
          @csrf
        <a href="{{ route('logout') }}"
        onclick="event.preventDefault();
               this.closest('form').submit();" class="btn btn-danger" >  --}}
          {{--  <p>logout</p>  --}}
        </a>
      </form>
      </li>
      <li>
         <a href="{{ route('profile.show') }}">
          <i class="now-ui-icons ui-1_bell-53"></i>
          <p>profile</p>
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
          <a class="navbar-brand" href="#">Data Drive Cars</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
          <form>
            <div class="input-group no-border">
              <input type="text" value="" class="form-control" ="Cari disini...">
              <div class="input-group-append">
                <div class="input-group-text">
                  <i class="now-ui-icons ui-1_zoom-bold"></i>
                </div>
              </div>
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="http://127.0.0.1:8000/dashboard">
                <i class="now-ui-icons media-2_sound-wave"></i>
                <p>
                  <span class="d-lg-none d-md-block">Stats</span>
                </p>
              </a>
            </li>
            {{--  <li class="nav-item dropdown">
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
            </li>  --}}
            <!--  <li class="nav-item">
              <a class="nav-link" href="{{ route('profile.show') }}">
                <i class="now-ui-icons users_single-02"></i>
                <p>
                  <span class="d-lg-none d-md-block">Account</span>
                </p>
              </a>
            </li> -->

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="now-ui-icons users_single-02"></i>
                <p>
                  <span class="d-lg-none d-md-block">Some Actions</span>
                </p>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <!-- <a class="dropdown-item" href="#">Profile</a> -->
                <a class="dropdown-item" href="http://127.0.0.1:8000/Dashboard">Menu Utama</a>
                <a class="dropdown-item" href="/">Log Out</a>
              </div>
              </a>
            </li>
    
          </ul>
        </div>
      </div>
    </nav>
    <div class="panel-header panel-header-sm">
    </div>
    <!-- End Navbar -->