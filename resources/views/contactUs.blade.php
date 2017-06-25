@extends('layouts.ads-site')

@section('content')

    <section class="contact-box block-center">
        <h6 class="contact-box-title">Contactenos</h6>
        <ul class="contact-box-list clearfix">
            <li class="contact-box-list-item">
                <p>Contacto Comercial Receptivo</p>
                <p>Operadores mayoristas del exterior</p>
                <p class="contact-box-contactname">Pablo Martin</p>
                <p>Mail <a href="mailto:pablo.martin@atyca.tur.ar">pablo.martin@atyca.tur.ar</a></p>
                <p>Skype <a href="skype:atyca.pablo.martin?call" target="_blank">atyca.pablo.martin</a></p>
            </li>
            <li class="contact-box-list-item">
                <p>Contacto Comercial Emisivo</p>
                <p>Agencias de viajes de Argentina</p>
                <p class="contact-box-contactname">Diego Gutierrez</p>
                <p>Mail <a href="mailto:diego.gutierrez@atyca.tur.ar">diego.gutierrez@atyca.tur.ar</a></p>
                <p>Skype <a href="skype:atyca.diego.gutierrez?call" target="_blank">atyca.diego.gutierrez</a></p>
            </li>
            <li class="contact-box-list-item">
                <p>Contacto Administrativo</p>
                <p class="contact-box-contactname">Leandro Gutierrez</p>
                <p>Mail <a href="mailto:administracion@atyca.tur.ar">administracion@atyca.tur.ar</a></p>
                <p>Skype <a href="skype:atyca.administracion?call" target="_blank">atyca.administracion</a></p>
            </li>
            <li class="contact-box-list-item">
                <p class="contact-box-contactname">Aereos</p>
                <p>Mail <a href="mailto:aereos@atyca.tur.ar">aereos@atyca.tur.ar</a></p>
                <p class="contact-box-contactname">Grupos E Incentivos</p>
                <p>Mail <a href="mailto:grupos@atyca.tur.ar">grupos@atyca.tur.ar</a></p>
            </li>
        </ul>

        <form class="login-form" role="form" method="POST" action="{{ route('contactus.send') }}">
            {{ csrf_field() }}

            <div class="form-item contact-box-title">Dejemos su mensaje</div>

            <div class="form-item{{ $errors->has('business') ? ' has-error' : '' }}">
                <label class="label"  for="business">Empresa</label>

                <div>
                    <input id="business" type="text" class="text-box" name="business" value="{{ old('business') }}" required autofocus placeholder="Empresa">

                    @if ($errors->has('business'))
                        <span class="help-block">
                                        Por favor escriba el nombre de la empresa a la que pertenece.
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
                <label class="label"  for="message">Consulta</label>

                <div>
                    <textarea id="message" class="textarea" name="message" placeholder="Consulta">{{ old('message') }}</textarea>

                    @if ($errors->has('message'))
                        <span class="help-block">
                                        Por favor brindenos su consulta.
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