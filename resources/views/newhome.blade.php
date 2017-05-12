@extends('layouts.ads-site')

@section ('content')

  <div class="block-aside-left country-selector">
    <div class="country-selector-title">Clientes de Argentina</div>

    <a class="button-submit" href="#">Ingresar</a>
  </div>


  <div class="block-main-right country-selector">
    <div class="country-selector-title">Clientes del Exterior</div>

    <?php $countries = array('Colombia','Brasil','Chile','Uruguay','Guatemala','EE.UU','Bolivia','Costa Rica','Paraguay', 'República Dominicana', 'Venezuela', 'Ecuador', 'Perú', 'Aruba', 'Panama', 'Canada'); ?>

    <ul class="country-list">
      @foreach ($countries as $country)
        <li class="country-list-item country-{{ str_slug($country)  }}">{{$country}}</li>
      @endforeach
    </ul>
    <a class="button-submit" href="#">Ingresar</a>
  </div>

@endsection