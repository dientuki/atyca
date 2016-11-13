@extends('layouts.site')

@section ('content')
  <section class="entry block-main-left tariff clearfix">
    <h6 class="visuallyhidden">Tarifario</h6>

    <div class="tariff-box">
      <a class="tariff-title-wrapper" href="#">>
        <div class="tariff-title">
          <span class="big">Circuitos</span>
          <span class="small">por Argentina</span>
        </div>
        <img alt="Circuitos por Argentina" class="afterload" data-original="images/tariff-argentina.jpg"
             src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEHAAEALAAAAAABAAEAAAICTAEAOw=="
             title="Circuitos por Argentina">
      </a>
      <a class="tariff-link" href="#" title="Promociones Buenos Aires">Promociones Buenos Aires</a>
      <a class="tariff-link" href="#" title="Promociones Usuhaia">Promociones Usuhaia</a>
      <a class="tariff-link" href="#" title="Promociones NOA">Promociones NOA</a>
    </div>
    <div class="tariff-box">
      <a class="tariff-title-wrapper" href="#">
        <div class="tariff-title">
          <span class="small">Hoteles</span>
          <span class="small">Traslados</span>
          <span class="small">Excursiones</span>
        </div>
        <img alt="Hoteles, traslados, excursiones" class="afterload" data-original="images/tariff-world.jpg"
             src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEHAAEALAAAAAABAAEAAAICTAEAOw=="
             title="Hoteles, traslados, excursiones">
      </a>
      <a class="tariff-link" href="#" title="Promociones Bariloche">Promociones Bariloche</a>
      <a class="tariff-link" href="#" title="Promociones Iguazu">Promociones Iguazu</a>
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
    <a class="button-logout" href="{{ route('logout') }}" title="Salir">Salir</a>
  </div>

@endsection