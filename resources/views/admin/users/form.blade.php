@extends('admin.layouts.admin')

@section ('content')

  <div class="login-box block-main-left tariff clearfix">
      {!! Form::model($user, array_merge($form_data, array('role' => 'form', 'class' => 'login-form'))) !!}

      <div class="login-item {{ $errors->has('name') ? ' has-error' : '' }}">
        {!! Form::label('name', 'Contacto')  !!}

        <div>

          {!! Form::text('name', null, array('placeholder' => 'Name', 'class'=>'text-box'))  !!}

          @if ($errors->has('name'))
            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
          @endif
        </div>
      </div>

      <div class="login-item {{ $errors->has('name') ? ' has-error' : '' }}">
        {!! Form::label('business', 'Empresa')  !!}

        <div>
          {!! Form::text('business', null, array('placeholder' => 'Empresa', 'class'=>'text-box'))  !!}

          @if ($errors->has('name'))
            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
          @endif
        </div>
      </div>

      <div class="login-item autocomplete {{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="fk_country">Pais</label>

        <div>
          <input id="fk_country" type="text" class="text-box" name="fk_country" value="{{ old('fk_country') }}" required autofocus>

          @if ($errors->has('name'))
            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
          @endif
        </div>
      </div>

      <div class="login-item {{ $errors->has('email') ? ' has-error' : '' }}">
        {!! Form::label('email', 'E-Mail')  !!}

        <div >
          {!! Form::text('email', null, array('placeholder' => 'E-Mail', 'class'=>'text-box'))  !!}

          @if ($errors->has('email'))
            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
          @endif
        </div>
      </div>



      <div class="login-action clearfix">
        <input class="button-submit" type="submit" value="Registrarse">
      </div>
    {!! Form::close() !!}

  </div>

@endsection