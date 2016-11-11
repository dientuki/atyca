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
      <div class="main-wrapper">
        @include ('widgets/tactic')
      </div>
      <div class="main-wrapper">
        @include ('widgets/work-us')
      </div>
    </aside>

    @include ('main-parts/footer')
  	@include ('main-parts/script')
  	
  </body>

</html>