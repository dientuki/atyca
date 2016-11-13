<!DOCTYPE html>
<html lang="es">
  <head>
    @include ('admin/main-parts/head')
  </head>

  <body >
    @include ('admin/main-parts/header')

    <main id="main" class="main-content">
      <div class="main-wrapper clearfix">
        @yield('content')
      </div>
    </main>

    @include ('main-parts/footer')
    @include ('main-parts/script')

  </body>

</html>