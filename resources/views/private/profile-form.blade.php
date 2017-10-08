@extends('layouts.site')

@section ('content')
  {!! Form::model($user, array_merge($form_data, array('role' => 'form', 'class' => 'entry block-main-left tariff clearfix form-two-col'))) !!}

  <div class="form-title">Mis Datos</div>

  <fieldset>

    <div class="form-item {{ $errors->has('email') ? ' has-error' : '' }}">
      <div class="label form-colaside">Usuario</div>

      <div class="form-colmain text-box">
        {{ $user->email }}
      </div>
    </div>

    <div class="form-item {{ $errors->has('name') ? ' has-error' : '' }}">
      {!! Form::label('business', 'Empresa', array('class' => 'label form-colaside'))  !!}

      <div class="form-colmain">
        {!! Form::text('business', null, array('placeholder' => 'Empresa', 'class'=>'text-box'))  !!}

        @if ($errors->has('business'))
          <span class="help-block"><strong>{{ $errors->first('business') }}</strong></span>
        @endif
      </div>
    </div>

    <div class="form-item {{ $errors->has('name') ? ' has-error' : '' }}">
      {!! Form::label('name', 'Contacto', array('class' => 'label form-colaside'))  !!}

      <div class="form-colmain">
        {!! Form::text('name', null, array('placeholder' => 'Name', 'class'=>'text-box'))  !!}

        @if ($errors->has('name'))
          <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
        @endif
      </div>
    </div>

    <div class="form-item autocomplete {{ $errors->has('name') ? ' has-error' : '' }}">
      {!! Form::label('country', 'Pais', array('class' => 'label form-colaside'))  !!}

      <div class="form-colmain autocomplete-wrapper">
        {!! Form::text('country', null, array('placeholder' => 'Pais', 'class'=>'text-box'))  !!}
        {!! Form::hidden('fk_country', null, array('id' => 'fk_country'))  !!}

        @if ($errors->has('fk_country'))
          <span class="help-block"><strong>{{ $errors->first('fk_country') }}</strong></span>
        @endif
      </div>
    </div>

    <div class="form-item {{ $errors->has('password') ? ' has-error' : '' }}">
      {!! Form::label('password', 'Password', array('class' => 'label form-colaside'))  !!}

      <div class="form-colmain">
        {!! Form::password('password', array('placeholder' => 'Password', 'class'=>'text-box'))  !!}

        @if ($errors->has('password'))
          <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
        @endif
      </div>
    </div>

    <div class="form-item">
      {!! Form::label('password_confirmation', 'Check Pass', array('class' => 'label form-colaside'))  !!}

      <div class="form-colmain">
        {!! Form::password('password_confirmation', array('placeholder' => 'Confirmar Password', 'class'=>'text-box'))  !!}

      </div>
    </div>



  </fieldset>



  <div class="form-action">
    <input class="form-action-element button-submit" type="submit" value="{{ trans('buttons.forms.' . $action)  }}">

    @if ($action == 'update')
      <a class="form-action-element form-delete-acount" href="{{ route('private::destroy') }}" title="Borrar cuenta">Borrar cuenta</a>
    @endif
  </div>
  {!! Form::close() !!}

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
