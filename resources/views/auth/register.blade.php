@extends('layouts.site')

@section('content')

    <div class="login-box block-main-left tariff clearfix">
        <form class="login-form" role="form" method="POST" action="{{ route('user::register.post') }}">
            {{ csrf_field() }}

            <div class="form-item {{ $errors->has('name') ? ' has-error' : '' }}">
                <label class="label"  for="name">Contacto</label>

                <div>
                    <input id="name" type="text" class="text-box" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-item {{ $errors->has('name') ? ' has-error' : '' }}">
                <label class="label"  for="business">Empresa</label>

                <div>
                    <input id="business" type="text" class="text-box" name="business" value="{{ old('business') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-item autocomplete {{ $errors->has('name') ? ' has-error' : '' }}">
                <label class="label"  for="country">Pais</label>

                <div class="form-colmain autocomplete-wrapper">
                    <input id="country" type="text" class="text-box" name="country" value="{{ old('country') }}" required>
                    <input id="fk_country" type="hidden" name="fk_country" value="{{ old('fk_country') }}">

                    @if ($errors->has('country'))
                        <span class="help-block"><strong>{{ $errors->first('country') }}</strong></span>
                    @endif
                </div>
            </div>


            <div class="form-item autocomplete {{ $errors->has('name') ? ' has-error' : '' }}">


                <div class="autocomplete-wrapper">


                    @if ($errors->has('name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-item {{ $errors->has('email') ? ' has-error' : '' }}">
                <label class="label"  for="email">E-Mail</label>

                <div >
                    <input id="email" type="email" class="text-box" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-item{{ $errors->has('password') ? ' has-error' : '' }}">
                <label class="label" for="password">Password</label>

                <div>
                    <input id="password" type="password" class="text-box" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-item">
                <label class="label" for="password-confirm">Confirmar Password</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="text-box" name="password_confirmation" required>
                </div>
            </div>

            <div class="form-action clearfix">
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
