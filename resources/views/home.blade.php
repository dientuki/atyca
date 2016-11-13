@extends('layouts.site')

@section ('content')

  <div class="login-box block-aside-left">
    <form class="login-form-arrow">
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
        <input class="button-submit" type="submit" value="Ingresar">
        <a class="button-register" href="{{ route('register') }}" title="Registrarse">Registrarse</a>
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


  <div class="main-slider rs-atyca rs-big block-main" id="main-slider">
    <div class="rsContent">
      <a class="rsTitle" href="files/atyca-glaciares.pdf" target="_blank">
        Expedicion glaciares
        <span class="days">4 dias / 3 noches</span>
      </a>
      <img src="images/sliders/glaciar.jpg">
    </div>
    <div class="rsContent">
      <a class="rsTitle" href="files/atyca-adventure.pdf" target="_blank">
        Ushuaia adventure
        <span class="days">4 dias / 3 noches</span>
      </a>
      <img src="images/sliders/adventure.jpg">
    </div>
    <div class="rsContent">
      <a class="rsTitle" href="files/atyca-vinos.pdf" target="_blank">
        Catedrales del vino
        <span class="days">4 dias / 3 noches</span>
      </a>
      <img src="images/sliders/vino.jpg">
    </div>
  </div>

@endsection