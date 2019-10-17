@extends('layouts.site')

@section ('content')
  <section class="entry block-main-left tariff clearfix">
    @if ($country == 'mundo')
      <h6 class="tariff-title-container">Manuales 2019/2020 (Haga click para descargar)</h6>
    @else
      <h6 class="tariff-title-container">Tarifarios</h6>
    @endif

    @include('private.' . $country . '.tarifario')

  </section>
  <div class="block-aside-right info-box">

    @include('private.' . $country . '.info')

    <a class="button-logout" href="{{ route('user::logout') }}" title="Salir">Salir</a>
  </div>

@endsection
