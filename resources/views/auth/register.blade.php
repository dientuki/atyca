@extends('layouts.site')

@section('content')

    <div class="login-box block-main-left tariff clearfix">
        <form class="login-form" role="form" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}

            <div class="login-item {{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name">Contacto</label>

                <div>
                    <input id="name" type="text" class="text-box" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="login-item {{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name">Empresa</label>

                <div>
                    <input id="name" type="text" class="text-box" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="login-item {{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name">Pais</label>

                <div>
                    <input id="name" type="text" class="text-box" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="login-item {{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email">E-Mail Address</label>

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

    <div class="block-aside-right info-box">
        <div class="info-row">
            <p class="info-title">Cotizaciones y reservas:</p>

            <p>
                Mail:
                <a href="mailto:ventas3@atyca.tur.ar" title="ventas3@atyca.tur.ar">ventas3@atyca.tur.ar</a>
            </p>

            <p>
                Skype:
                <a href="skype:atyca3.skype?chat" title="atyca3.skype">atyca3.skype</a>
            </p>
        </div>
    </div>
@endsection
