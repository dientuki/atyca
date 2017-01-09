<!DOCTYPE html>
<html lang="es">
  <head>
    @include ('admin/main-parts/head')
  </head>

  <body>
    @include ('widgets/alerts')
    @include ('admin/main-parts/header')

    <main id="main">
      <div class="main-wrapper clearfix">
        @yield('content')
      </div>
    </main>

    @include ('main-parts/footer')
  	@include ('admin/main-parts/script')
  	
  </body>

</html>