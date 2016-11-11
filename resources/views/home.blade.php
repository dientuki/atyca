@extends('layouts.site')

@section ('content')


  <div class="main-wrapper clearfix">
    <div class="login-box">
      <form class="login-form">
        <fieldset>
          <div class="login-item">
            <label for="username">Usuario</label>
            <input class="text-box" id="username" type="text">
          </div>
          <div class="login-item">
            <label for="password">Contraseña</label>
            <input class="text-box" id="username" type="password">
          </div>
        </fieldset>
        <div class="login-action clearfix">
          <input class="button-submit" value="Ingresar" type="submit">
          <a class="button-register" href="#" title="Registrarse">Registrarse</a>
        </div>
        <div class="forgot-password">
          <p>Olvidó su contraseña?</p>
          <p>
            Contactese a
            <a class="forgot-password-link" href="mailto:info@atyca.tur.ar" title="info@atyca.tur.ar">info@atyca.tur.ar</a>
          </p>
        </div>
      </form>
      <a class="operator" href="#" title="Ingreso a operadores">Ingreso a operadores</a>
    </div>
    <div class="main-slider rs-atyca rs-big rsHor rsWithBullets" id="main-slider" style="height: 350px;"><div class="rsOverflow" style="cursor: grab; width: 620px; height: 350px;"><div class="rsContainer" style="transition-duration: 600ms; transform: translate3d(0px, 0px, 0px); transition-timing-function: cubic-bezier(0.445, 0.05, 0.55, 0.95);"><div style="left: 0px;" class="rsSlide "><div class="rsContent" style="visibility: visible; opacity: 1; transition: opacity 400ms ease-in-out 0s;">
              <a class="rsTitle" href="files/atyca-glaciares.pdf" target="_blank">
                Expedicion glaciares
                <span class="days">4 dias / 3 noches</span>
              </a>
              <img src="images/sliders/glaciar.jpg">
            </div></div><div style="left: 628px;" class="rsSlide "><div class="rsContent">
              <a class="rsTitle" href="files/atyca-adventure.pdf" target="_blank">
                Ushuaia adventure
                <span class="days">4 dias / 3 noches</span>
              </a>
              <img src="images/sliders/adventure.jpg">
            </div></div><div style="left: 1256px;" class="rsSlide "><div class="rsContent">
              <a class="rsTitle" href="files/atyca-vinos.pdf" target="_blank">
                Catedrales del vino
                <span class="days">4 dias / 3 noches</span>
              </a>
              <img src="images/sliders/vino.jpg">
            </div></div></div></div><div class="rsNav rsBullets"><div class="rsNavItem rsBullet rsNavSelected"><span></span></div><div class="rsNavItem rsBullet"><span></span></div><div class="rsNavItem rsBullet"><span></span></div></div><div class="rsArrow rsArrowLeft rsArrowDisabled" style="display: block;"><div class="rsArrowIcn"></div></div><div class="rsArrow rsArrowRight" style="display: block;"><div class="rsArrowIcn"></div></div></div>

  </div>

@endsection