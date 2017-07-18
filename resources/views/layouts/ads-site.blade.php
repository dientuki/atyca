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
        @include ('ads/cruceros-940x100')
        @include ('widgets/tactic-1-new')
      </aside>
    </div>



    @include ('main-parts/newfooter')
  	@include ('main-parts/script')
  	
  </body>

</html>