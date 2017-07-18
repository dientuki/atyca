<header id="header">
  <h1 class="visuallyhidden">Atyca</h1>
  <div class="main-wrapper">
    <a class="logo" href="{{ route('home') }}" title="Home">Home</a>
    <div class="rwd-mobile">
      <ul class="contact-info">
        <li class="contact-info-item">
          <a class="contact-info-link email" href="mailto:info@atyca.tur.ar" title="info@atyca.tur.ar">info@atyca.tur.ar</a>
        </li>
        <li class="contact-info-item">
          <a class="contact-info-link landphone" href="tel:541143711878" title="+54-11-4371-1878">+54-11-4371-1878</a>
        </li>
        <li class="contact-info-item">
          <a class="contact-info-link mobile" data-before="Las 24 hs. " href="tel:5491154528187" title="+54-9-11-5452-8187">+54-9-11-5452-8187</a>
        </li>
      </ul>
      <nav id="primary-navigation">
        <h6 class="visuallyhidden">Navegación</h6>
        <ul class="clearfix menu-container">
          <li class="menu-item">
            <a class="menu-link {{ isset($selected) && $selected == 'home' ? 'selected' : '' }}" href="{{ route('newhome') }}" title="Inicio">Inicio</a>
          </li>
          <li class="menu-item">
            <a class="menu-link {{ isset($selected) && $selected == 'sobre-nosotros' ? 'sobre-nosotros' : '' }}" href="{{ route('pages.show', ['slug' => 'sobre-nosotros']) }}" title="Sobre Nosotros">Sobre Nosotros</a>
          </li>
          <li class="menu-item">
            <a class="menu-link {{ isset($selected) && $selected == 'destinos' ? 'selected' : '' }}" href="{{ route('pages.show', ['slug' => 'destinos-general']) }}" title="Destinos">Destinos</a>
          </li>
          <li class="menu-item">
            <a class="menu-link {{ isset($selected) && $selected == 'salidas-grupales' ? 'selected' : '' }}" href="{{ route('pages.show', ['slug' => 'salidas-grupales']) }}" title="Salidas Grupales">Salidas Grupales</a>
          </li>
          <li class="menu-item">
            <a class="menu-link {{ isset($selected) && $selected == 'grupos-e-incentivos' ? 'selected' : '' }}" href="{{ route('pages.show', ['slug' => 'grupos-e-incentivos']) }}" title="Grupos e Incentivos">Grupos e Incentivos</a>
          </li>
          <li class="menu-item">
            <a class="menu-link {{ isset($selected) && $selected == 'condiciones-generales' ? 'selected' : '' }}" href="{{ route('pages.show', ['slug' => 'condiciones-generales']) }}" title="Condiciones Generales">Condiciones Generales</a>
          </li>
          <li class="menu-item">
            <a class="menu-link {{ isset($selected) && $selected == 'contactenos' ? 'selected' : '' }}" href="{{ route('contactus-world.show') }}" title="Contáctenos">Contáctenos</a>
          </li>
        </ul>
      </nav>
    </div>
    <div id="main-icon" class="main-icon ">
      <div class="burger-icon">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="close-icon">
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
</header>
