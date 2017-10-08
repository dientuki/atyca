<header id="header">
  <h1 class="visuallyhidden">Atyca</h1>
  <div class="main-wrapper">
    <a class="logo" href="{{ route('home') }}" title="Home">Home</a>
    <nav id="primary-navigation">
      <h6 class="visuallyhidden">Navegación</h6>
      <ul class="clearfix menu-container">
        <li class="menu-item">
          <a class="menu-link" href="{{ route('user::password.reset') }}" title="Reset Password">Reset Password</a>
        </li>
        <li class="menu-item">
          <a class="menu-link {{ isset($selected) && $selected == 'dashboard' ? 'selected' : '' }}" href="{{ route('admin::dashboard') }}" title="Dashboard">Dashboard</a>
        </li>
        <li class="menu-item">
          <a class="menu-link {{ isset($selected) && $selected == 'users' ? 'selected' : '' }}" href="{{ route('admin::users::create') }}" title="Agregar usuario">Agregar usuario</a>
        </li>
        <li class="menu-item">
          <a class="menu-link" href="{{ route('user::logout') }}" title="Salir">Salir</a>
        </li>
      </ul>
    </nav>
  </div>
</header>