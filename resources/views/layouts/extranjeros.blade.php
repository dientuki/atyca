<!DOCTYPE html>
<html lang="es">
  <head>
    @include ('main-parts/newheader')
  </head>

  <body>
    @include ('widgets/alerts')

    @include ('main-parts/header')

    <div class="main-content">
      <main id="main">
        <div class="main-wrapper clearfix">
          @yield('content')
        </div>
      </main>

      <aside id="aside">
        @include ('widgets/home-extranjeros')
        @include ('widgets/logos-regiones')
      </aside>
    </div>



    @include ('main-parts/footer')
  	@include ('main-parts/script')

  </body>

</html>
