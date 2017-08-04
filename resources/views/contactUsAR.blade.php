@extends('layouts.ads-site')

@section('content')

    <section class="contact-box block-center">
        <h6 class="contact-box-title">Contáctenos</h6>
        <ul class="contact-box-list clearfix">
            <li class="contact-box-list-item" style="float:none;width:100%">
                <p class="contact-box-contactname">Contacto Comercial Emisivo</p>
                <p>Agencias de viajes de Argentina</p>
                <p>Diego Gutierrez</p>
                <p>Mail <a href="mailto:diego.gutierrez@atyca.tur.ar">diego.gutierrez@atyca.tur.ar</a></p>
                <p>Skype <a href="skype:atyca.diego.gutierrez?call" target="_blank">atyca.diego.gutierrez</a></p>
            </li>
        </ul>

        <form class="login-form" role="form" method="POST" action="{{ route('contactus-ar.send') }}">
            {{ csrf_field() }}

            <div class="form-item contact-box-title">Déjenos su mensaje</div>

            <div class="form-item{{ $errors->has('business') ? ' has-error' : '' }}">
                <label class="label"  for="business">Empresa</label>

                <div>
                    <input id="business" type="text" class="text-box" name="business" value="{{ old('business') }}" required autofocus placeholder="Empresa">

                    @if ($errors->has('business'))
                        <span class="help-block">
                                        Por favor escriba el nombre de su empresa.
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-item{{ $errors->has('tel') ? ' has-error' : '' }}">
                <label class="label"  for="tel">Teléfono</label>

                <div>
                    <input id="tel" type="text" class="text-box" name="tel" value="{{ old('tel') }}" placeholder="Teléfono">
                    
                    @if ($errors->has('tel'))
                        <span class="help-block">
                                        Por favor brindenos un telefono con código de pais.
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-item{{ $errors->has('email') ? ' has-error' : '' }}">
                <label class="label"  for="email">E-Mail</label>

                <div>
                    <input id="email" type="email" class="text-box" name="email" value="{{ old('email') }}" required placeholder="E-Mail">

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        Por favor brindenos su correo electrónico.
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-item{{ $errors->has('message') ? ' has-error' : '' }}">
                <label class="label"  for="message">Mensaje</label>

                <div>
                    <textarea id="message" class="textarea" name="message" placeholder="Mensaje">{{ old('message') }}</textarea>

                    @if ($errors->has('message'))
                        <span class="help-block">
                                        Por favor brindenos su mensaje.
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
