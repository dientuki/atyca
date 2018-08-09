@extends('layouts.home-argentinos')

@section ('content')

  <div class="login-box block-aside-left">
    @if ($is_loggued)
      <div class="login-form-arrow user-info-box">
        <div class="user-info-title">
          Bienvenido {{$user->name}}
        </div>

        <a class="user-info-link" href="{{ route('private::tarifario') }}" title="Ver tarifarios">Ver tarifarios</a>

        @if ( Auth::user()->rol == 1)
          <a class="user-info-link" href="{{ route('admin::dashboard') }}" title="Panel de administracion">Panel de administracion</a>
          @else
          <a class="user-info-link" href="{{ route('private::edit') }}" title="Editar mis datos">Editar mis datos</a>
        @endif




        <a class="button-logout" href="{{ route('user::logout') }}" title="Salir">Salir</a>
      </div>

    @else
      <form class="login-form-arrow" role="form" method="POST" action="{{ route('user::login.post') }}">
        {{ csrf_field() }}
        <fieldset>
          <div class="form-item{{ $errors->has('email') ? ' has-error' : '' }}">
            @if ($errors->has('email'))
              <span class="help-block">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
            @endif
            <label class="label" for="email">E-Mail</label>
            <input id="email" type="email" name="email" class="text-box" value="{{ old('email') }}" required />
          </div>

          <div class="form-item{{ $errors->has('password') ? ' has-error' : '' }}">

            @if ($errors->has('password'))
              <span class="help-block">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
            @endif


            <label class="label" for="password">Contraseña</label>
            <input class="text-box" id="password" type="password" name="password">
          </div>

        </fieldset>
        <div class="form-action clearfix">
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
    @endif
    <a class="operator" href="#" title="Ingreso a operadores">Ingreso a agencias</a>
  </div>



<div class="main-slider Wallop Wallop-slide-BigArrow block-main-right">
  <div class="Wallop-list">

    <div class="Wallop">
      <a href="{{ route('form-ar') }}" >
        <img src="{{ asset('images/cotizaciones-banner.png') }}">
      </a>

    </div>
  </div>
</div>




@endsection
