@extends('layouts.ads-site')

@section('content')

    <section class="contact-box block-center">
        <h6>Contactenos</h6>
        <ul>
            <li>
                <p>Contacto Comercial Receptivo</p>
                <p>Operadores mayoristas del exterior</p>
                <p>Pablo Martin</p>
                <p>Mail <a href="mailto:pablo.martin@atyca.tur.ar">pablo.martin@atyca.tur.ar</a></p>
                <p>Skype <a href="skype:atyca.pablo.martin?call" target="_blank">atyca.pablo.martin</a></p>
            </li>
            <li>
                <p>Contacto Comercial Emisivo</p>
                <p>Agencias de viajes de Argentina</p>
                <p>Diego Gutierrez</p>
                <p>Mail <a href="mailto:diego.gutierrez@atyca.tur.ar">diego.gutierrez@atyca.tur.ar</a></p>
                <p>Skype <a href="skype:atyca.diego.gutierrez?call" target="_blank">atyca.diego.gutierrez</a></p>
            </li>
            <li>
                <p>Contacto Administrativo</p>
                <p>Leandro Gutierrez</p>
                <p>Mail <a href="mailto:administracion@atyca.tur.ar">administracion@atyca.tur.ar</a></p>
                <p>Skype <a href="skype:atyca.administracion?call" target="_blank">atyca.administracion</a></p>
            </li>
            <li>
                <p>Aereos</p>
                <p>Mail <a href="mailto:aereos@atyca.tur.ar">aereos@atyca.tur.ar</a></p>
                <p>Grupos E Incentivos</p>
                <p>Mail <a href="mailto:grupos@atyca.tur.ar">grupos@atyca.tur.ar</a></p>
            </li>
        </ul>

        <form class="login-form" role="form" method="POST" action="{{ route('user::login.post') }}">
            {{ csrf_field() }}

            <div class="form-item">Dejemos su mensaje</div>

            <div class="form-item{{ $errors->has('business') ? ' has-error' : '' }}">
                <label class="label"  for="business">Empresa</label>

                <div>
                    <input id="business" type="text" class="text-box" name="business" value="{{ old('business') }}" required autofocus>

                    @if ($errors->has('business'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('business') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-item{{ $errors->has('tel') ? ' has-error' : '' }}">
                <label class="label"  for="tel">Empresa</label>

                <div>
                    <input id="tel" type="text" class="text-box" name="tel" value="{{ old('tel') }}" required autofocus>

                    @if ($errors->has('tel'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-item{{ $errors->has('email') ? ' has-error' : '' }}">
                <label class="label"  for="email">E-Mail Address</label>

                <div>
                    <input id="email" type="email" class="text-box" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-item{{ $errors->has('message') ? ' has-error' : '' }}">
                <label class="label"  for="message">E-Mail Address</label>

                <div>
                    <textarea id="message" class="textarea" name="message">{{ old('message') }}</textarea>

                    @if ($errors->has('message'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-action clearfix">
                <input class="button-submit" type="submit" value="Enviar">
            </div>

        </form>
    </section>

@endsection
