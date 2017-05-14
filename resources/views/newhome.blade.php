@extends('layouts.ads-site')

@section ('content')

  <div class="block-aside-left country-selector country-arg">
    <div class="country-selector-title">Clientes de Argentina</div>

    <a class="button-submit" href="#">Ingresar</a>
  </div>


  <div class="block-main-right country-selector country-world">
    <div class="country-selector-title">Clientes del Exterior</div>

    <?php $countries = array('Brasil','Chile','Mexico', 'República Dominicana', 'Venezuela' , 'Ecuador',    'Uruguay','EE.UU','Bolivia',   'Costa Rica',    'Perú', 'Aruba', 'Panama', 'Canada'); ?>

    <ul class="country-list">
      @foreach ($countries as $country)
        <li class="country-list-item country-{{ str_slug($country)  }}">{{$country}}</li>
      @endforeach
    </ul>
    <a class="button-submit" href="#">Ingresar</a>
  </div>

@endsection