<!DOCTYPE html>
<html lang="es">
  <head>
    @include ('main-parts/head')
  </head>

  <body>
    @include ('widgets/alerts')

    @include ('main-parts/newheader')

    <div class="main-content">
      <main id="main">
        <div class="main-wrapper clearfix">
          @yield('content')
        </div>
      </main>

      <aside id="aside">
        @include ('widgets/tactic-1')
        @include ('widgets/tactic-2')
        @include ('ads/disney-940x100')
        @include ('widgets/gob-medals')
      </aside>
    </div>



    @include ('main-parts/footer')
  	@include ('main-parts/script')
  	
  </body>

</html>