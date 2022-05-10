<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
     <a class="navbar-brand m-0" href="" target="_blank">
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo" >
        <span class="ms-6  font-weight-bold text-white">Drive Cars</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white {{{ (Request::is('dashboard') ? 'class= active bg-gradient-info' : '') }}}"   href="{{Route('Dashboard')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
         <li class="nav-item">
          <a class="nav-link text-white {{{ (Request::is('Userdata') ? 'class= active bg-gradient-info' : '') }}}" href="{{Route('pengguna')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">user</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{{ (Request::is('Datakendaraan') ? 'class= active bg-gradient-info' : '') }}}" href="{{Route('kendaraan')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">cars</span>
          </a>
        </li>
         <li class="nav-item">
          <a class="nav-link text-white {{{ (Request::is('Datalaporan') ? 'class= active bg-gradient-info' : '') }}}" href="{{Route('laporan')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">laporan</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>