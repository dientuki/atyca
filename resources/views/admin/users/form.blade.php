@extends('admin.layouts.admin')

@section ('content')

  {!! Form::model($user, array_merge($form_data, array('role' => 'form', 'class' => 'login-form'))) !!}

    <div class="login-item {{ $errors->has('email') ? ' has-error' : '' }}">
      {!! Form::label('email', 'Usuario')  !!}

      <div>
        {!! Form::text('email', null, array('placeholder' => 'Usuario', 'class'=>'text-box'))  !!}

        @if ($errors->has('email'))
          <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
        @endif
      </div>
    </div>

    <div class="login-item {{ $errors->has('name') ? ' has-error' : '' }}">
      {!! Form::label('business', 'Empresa')  !!}

      <div>
        {!! Form::text('business', null, array('placeholder' => 'Empresa', 'class'=>'text-box'))  !!}

        @if ($errors->has('business'))
          <span class="help-block"><strong>{{ $errors->first('business') }}</strong></span>
        @endif
      </div>
    </div>

    <div class="login-item {{ $errors->has('name') ? ' has-error' : '' }}">
      {!! Form::label('name', 'Contacto')  !!}

      <div>

        {!! Form::text('name', null, array('placeholder' => 'Name', 'class'=>'text-box'))  !!}

        @if ($errors->has('name'))
          <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
        @endif
      </div>
    </div>

    <div class="login-item autocomplete {{ $errors->has('name') ? ' has-error' : '' }}">
      {!! Form::label('country', 'Pais')  !!}

      <div>
        {!! Form::text('country', null, array('placeholder' => 'Pais', 'class'=>'text-box'))  !!}
        {!! Form::hidden('fk_country', null, array('id' => 'fk_country'))  !!}

        @if ($errors->has('fk_country'))
          <span class="help-block"><strong>{{ $errors->first('fk_country') }}</strong></span>
        @endif
      </div>
    </div>

    <div class="login-item {{ $errors->has('name') ? ' has-error' : '' }}">
      {!! Form::label('rol', 'Rol')  !!}

      <div>
        {!! Form::select('rol', $rol, $user->rol, array('required' => true, 'class'=>'text-box') ) !!}

        @if ($errors->has('fk_country'))
          <span class="help-block"><strong>{{ $errors->first('fk_country') }}</strong></span>
        @endif
      </div>
    </div>

    <div class="login-action clearfix">
      <input class="button-submit" type="submit" value="Actualizar">

    </div>
  {!! Form::close() !!}

  <form class="form-inline" action="{{ route('admin::users::destroy', $user->id) }}" method="POST">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="DELETE">
    <button type="submit" class="btn btn-danger btn-sm" title="Borrar {{ $user->name }}">Borrar</button>
  </form>


@endsection