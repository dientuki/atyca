<!DOCTYPE html>
<html lang="es">
  <head>
    @include ('main-parts/head')
  </head>

  <body>
    @include ('main-parts/header')

    <main id="main">
      <div class="main-wrapper clearfix">
        @yield('content')
      </div>
    </main>

    <aside id="aside">
      @include ('widgets/tactic')
      @include ('widgets/work-us')
    </aside>

    @include ('main-parts/footer')
  	@include ('main-parts/script')
  	
  </body>

</html>