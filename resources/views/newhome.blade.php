@extends('layouts.home-general')

@section ('content')

  <div class="clearfix">
    <div class="block-aside-left country-selector country-arg">
      <div class="country-selector-title">Clientes de Argentina</div>
      <div class="country-argentina">Argentina</div>
      <a class="button-submit" href="{{ route('home-ar') }}">Ingresar</a>
    </div>


    <div class="block-main-right country-selector country-world">
      <div class="country-selector-title">Clientes del Exterior</div>

      <?php $countries = array('Colombia','Mexico', 'Comunidad Economica Europea','EE.UU','Perú','Brasil', 'Guatemala', 'República Dominicana', 'Uruguay', 'Chile', 'Ecuador','Venezuela');?>

      <ul class="country-list">
        @foreach ($countries as $country)
          <li class="country-list-item country-{{ str_slug($country)  }}">{{$country}}</li>
        @endforeach
      </ul>
      <a class="button-submit" href="{{ route('home') }}">Ingresar</a>
    </div>
  </div>

  <form class="login-form contact-form-home" role="form" method="POST" action="{{ route('contactus.send') }}">
    {{ csrf_field() }}

    <div class="form-item contact-box-title">Déjenos su mensaje</div>

    <div class="flex">
      <div class="form-item{{ $errors->has('business') ? ' has-error' : '' }}">
        <label class="label"  for="business">Nombre</label>

        <div>
          <input id="business" type="text" class="text-box" name="business" value="{{ old('business') }}" required autofocus>

          @if ($errors->has('business'))
            <span class="help-block">
                                        Por favor escriba su nombre.
                                    </span>
          @endif
        </div>
      </div>

      <div class="form-item{{ $errors->has('email') ? ' has-error' : '' }}">
        <label class="label"  for="email">E-Mail</label>

        <div>
          <input id="email" type="email" class="text-box" name="email" value="{{ old('email') }}" required>

          @if ($errors->has('email'))
            <span class="help-block">
                                        Por favor brindenos su correo electrónico.
                                    </span>
          @endif
        </div>
      </div>

    </div>

    <div class="form-item{{ $errors->has('message') ? ' has-error' : '' }}">
      <label class="label"  for="message">Mensaje</label>

      <div>
        <textarea id="message" class="textarea" name="message">{{ old('message') }}</textarea>

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

@endsection
