@extends('admin.layouts.admin')

@section ('content')

  <div class="login-box block-main-left tariff clearfix">
    <form class="login-form" role="form" method="POST" action="{{ route('admin::users::update', $user->id) }}">
      {{ csrf_field() }}

      <div class="login-item {{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name">Contacto</label>

        <div>
          <input id="name" type="text" class="text-box" name="name" value="{{ (old('name')) or ($user->name) }}" required autofocus>

          @if ($errors->has('name'))
            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
          @endif
        </div>
      </div>

      <div class="login-item {{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="business">Empresa</label>

        <div>
          <input id="business" type="text" class="text-box" name="business" value="{{ old('business') or $user->business }}" required autofocus>

          @if ($errors->has('name'))
            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
          @endif
        </div>
      </div>

      <div class="login-item autocomplete {{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="fk_country">Pais</label>

        <div>
          <input id="fk_country" type="text" class="text-box" name="fk_country" value="{{ old('fk_country') }}" required autofocus>

          @if ($errors->has('name'))
            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
          @endif
        </div>
      </div>

      <div class="login-item {{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email">E-Mail</label>

        <div >
          <input id="email" type="email" class="text-box" name="email" value="{{ old('email') }}" required>

          @if ($errors->has('email'))
            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
          @endif
        </div>
      </div>

      <div class="login-item{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password">Password</label>

        <div>
          <input id="password" type="password" class="text-box" name="password" required>

          @if ($errors->has('password'))
            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
          @endif
        </div>
      </div>

      <div class="login-item">
        <label for="password-confirm">Confirm Password</label>

        <div class="col-md-6">
          <input id="password-confirm" type="password" class="text-box" name="password_confirmation" required>
        </div>
      </div>

      <div class="login-action clearfix">
        <input class="button-submit" type="submit" value="Registrarse">
      </div>
    </form>

  </div>

@endsection