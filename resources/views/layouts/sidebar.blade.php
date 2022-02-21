<div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav">
      <li {{{ (Request::is('dashboard') ? 'class=active' : '') }}} ">
        <a href="dashboard">
          <i class="now-ui-icons design_app"></i>
          <p>Dashboard</p>
        </a>
      </li>
      <a href="{{ route('logout') }}" style="cursor: pointer" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();" class="btn btn-md btn-primary">LOGOUT</a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
      <li {{{ (Request::is('driverdata') ? 'class=active' : '') }}} ">
        <a href="{{ url('driverdata') }}">
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
      <li>
        <a href="examples.notifications.html">
          <i class="now-ui-icons ui-1_bell-53"></i>
          <p>Notifications</p>
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