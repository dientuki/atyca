@extends('layouts.site')

@section ('content')

  <div class="login-box block-aside-left">
    <form class="login-form-arrow" role="form" method="POST" action="{{ route('user::login.post') }}">
      {{ csrf_field() }}
      <fieldset>
        <div class="login-item{{ $errors->has('email') ? ' has-error' : '' }}">
          @if ($errors->has('email'))
            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
          @endif
          <label for="email">E-Mail</label>
          <input id="email" type="email" name="email" class="text-box" value="{{ old('email') }}" required />
        </div>

        <div class="login-item{{ $errors->has('password') ? ' has-error' : '' }}">

          @if ($errors->has('password'))
            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
          @endif


          <label for="password">Contraseña</label>
          <input class="text-box" id="password" type="password" name="password">
        </div>

      </fieldset>
      <div class="login-action clearfix">
        <input class="button-submit" type="submit" value="Ingresar">
        <a class="button-register" href="{{ route('user::register') }}" title="Registrarse">Registrarse</a>
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