@extends('layouts.site')

@section ('content')
  <section class="entry block-main-left tariff clearfix">
    <h6 class="tariff-title-container">Tarifarios</h6>

    @include('private.' . $country . '.tarifario')

  </section>
  <div class="block-aside-right info-box">

    @include('private.' . $country . '.info')

    <a class="button-logout" href="{{ route('user::logout') }}" title="Salir">Salir</a>
  </div>

@endsection
