@extends('layouts.ads-site')

@section ('content')

  <div class="block-aside-left country-selector country-arg">
    <div class="country-selector-title">Clientes de Argentina</div>
    <div class="country-argentina">Argentina</div>
    <a class="button-submit" href="{{ route('contactus-ar.show') }}">Ingresar</a>
  </div>


  <div class="block-main-right country-selector country-world">
    <div class="country-selector-title">Clientes del Exterior</div>

    <?php $countries = array('Colombia','Mexico', 'Comunidad Economica Europea','EE.UU','Perú','Brasil', 'Guatemala', 'República Dominicana', 'Uruguay', 'Chile', 'Ecuador','Venezuela');?>

    <ul class="country-list">
      @foreach ($countries as $country)
        <li class="country-list-item country-{{ str_slug($country)  }}">{{$country}}</li>
      @endforeach
    </ul>
    <a class="button-submit" href="{{ route('contactus-world.show') }}">Ingresar</a>
  </div>

@endsection