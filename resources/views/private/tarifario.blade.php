@extends('layouts.site')

@section ('content')
  <section class="entry block-main-left tariff clearfix">
    <h6 class="visuallyhidden">Tarifario</h6>

    <div class="tariff-box">
      <a class="tariff-title-wrapper" target="_blank" href="{{ asset('files/Atyca-Manual-Circuitos-Argentina.rtf')}}">>
        <div class="tariff-title">
          <span class="big">Circuitos</span>
          <span class="small">por Argentina</span>
        </div>
        <img alt="Circuitos por Argentina" class="afterload" data-original="{{ asset('images/tariff-argentina.jpg')}}"
             src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEHAAEALAAAAAABAAEAAAICTAEAOw=="
             title="Circuitos por Argentina" />
      </a>
      <a class="tariff-link" target="_blank" href="{{ asset('files/tarifarios-norte.pdf')}}" title="Promociones Buenos Aires">Comunidades del norte</a>
      <a class="tariff-link" target="_blank" href="{{ asset('files/tarifarios-glaciares.pdf')}}" title="Expedición Glaciares">Expedición Glaciares</a>
      <a class="tariff-link" target="_blank" href="{{ asset('files/tarifarios-vinos.pdf')}}" title="Catedrales del vino">Catedrales del vino</a>

    </div>
    <div class="tariff-box">
      <a class="tariff-title-wrapper" target="_blank" href="{{ asset('files/Atyca-Manual-Hoteles-Servicios.docx')}}">
        <div class="tariff-title">
          <span class="small">Hoteles</span>
          <span class="small">Traslados</span>
          <span class="small">Excursiones</span>
        </div>
        <img alt="Hoteles, traslados, excursiones" class="afterload" data-original="{{ asset('images/tariff-world.jpg')}}"
             src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEHAAEALAAAAAABAAEAAAICTAEAOw=="
             title="Hoteles, traslados, excursiones">
      </a>
      <a class="tariff-link" target="_blank" href="{{ asset('files/Gran-Circuito-Sudamericano.pdf')}}" title="Promociones Usuhaia">Gran Circuito Sudamericano</a>
       <a class="tariff-link" target="_blank" href="{{ asset('files/tarifarios-adventure.pdf')}}" title="Usuhaia adventure">Usuhaia adventure</a>
              <a class="tariff-link" target="_blank" href="{{ asset('files/Politica-menores.docx')}}" title="Política de menores">Política de menores</a>

    </div>
  </section>
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
    <div class="info-row">
      <p class="info-title">Contacto Comercial</p>

      <p>
        Mail:
        <a href="mailto:pablo.martin@atyca.tur.ar" title="pablo.martin@atyca.tur.ar">pablo.martin@atyca.tur.ar</a>
      </p>

      <p>
        Skype:
        <a href="skype:atyca.pablo.martin?chat" title="atyca.pablo.martin">atyca.pablo.martin</a>
      </p>
    </div>
    <a class="button-logout" href="{{ route('user::logout') }}" title="Salir">Salir</a>
  </div>

@endsection
