<!DOCTYPE html>
<html lang="es">
  <head>
    @include ('main-parts/head')
  </head>

  <body class="login-page">
    @include ('widgets/alerts')
    @include ('main-parts/header')

    <div class="main-content">
      <main id="main">
        <div class="main-wrapper clearfix">
          @yield('content')
        </div>
      </main>

 <aside id="aside">
         @include ('widgets/tactic-1')

      </aside>
    </div>

    @include ('main-parts/newfooter')
  	@include ('main-parts/script')

  </body>

</html>
