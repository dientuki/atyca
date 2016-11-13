<header id="header">
  <h1 class="visuallyhidden">Atyca</h1>
  <div class="main-wrapper">
    <a class="logo" href="{{ route('home') }}" title="Home">Home</a>
    <nav id="primary-navigation">
      <h6 class="visuallyhidden">Navegación</h6>
      <ul class="clearfix menu-container">
        <li class="menu-item">
          <a class="menu-link {{ isset($selected) && $selected == 'users' ? 'selected' : '' }}" href="{{ route('home') }}" title="Usuarios">Usuarios</a>
        </li>
        <li class="menu-item">
          <a class="menu-link" href="{{ route('logout') }}" title="Salir">Salir</a>
        </li>
      </ul>
    </nav>
  </div>
</header>