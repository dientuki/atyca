@extends('admin.layouts.admin')

@section ('content')

  {!! Form::model($user, array_merge($form_data, array('role' => 'form', 'class' => 'form-two-col'))) !!}

    <div class="form-title">
      Editar usuario

      <div class="checkbox-user">
        <input type='checkbox' class='ios8-switch' id='checkbox-user-{{ $user->id }}' <?php if ($user->active == true) { echo 'checked="checked"'; } ?> data-action="{{ route('admin::users::toogle', ['users' =>  $user->id]) }}">
        <label for='checkbox-user-{{ $user->id }}'></label>
      </div>

    </div>

    <fieldset>

      <div class="form-item {{ $errors->has('email') ? ' has-error' : '' }}">
        {!! Form::label('email', 'Usuario', array('class' => 'form-colaside'))  !!}

        <div class="form-colmain">
          {!! Form::text('email', null, array('placeholder' => 'Usuario', 'class'=>'text-box'))  !!}

          @if ($errors->has('email'))
            <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
          @endif
        </div>
      </div>

      <div class="form-item {{ $errors->has('name') ? ' has-error' : '' }}">
        {!! Form::label('business', 'Empresa', array('class' => 'form-colaside'))  !!}

        <div class="form-colmain">
          {!! Form::text('business', null, array('placeholder' => 'Empresa', 'class'=>'text-box'))  !!}

          @if ($errors->has('business'))
            <span class="help-block"><strong>{{ $errors->first('business') }}</strong></span>
          @endif
        </div>
      </div>

      <div class="form-item {{ $errors->has('name') ? ' has-error' : '' }}">
        {!! Form::label('name', 'Contacto', array('class' => 'form-colaside'))  !!}

        <div class="form-colmain">
          {!! Form::text('name', null, array('placeholder' => 'Name', 'class'=>'text-box'))  !!}

          @if ($errors->has('name'))
            <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
          @endif
        </div>
      </div>

      <div class="form-item autocomplete {{ $errors->has('name') ? ' has-error' : '' }}">
        {!! Form::label('country', 'Pais', array('class' => 'form-colaside'))  !!}

        <div class="form-colmain autocomplete-wrapper">
          {!! Form::text('country', null, array('placeholder' => 'Pais', 'class'=>'text-box'))  !!}
          {!! Form::hidden('fk_country', null, array('id' => 'fk_country'))  !!}

          @if ($errors->has('fk_country'))
            <span class="help-block"><strong>{{ $errors->first('fk_country') }}</strong></span>
          @endif
        </div>
      </div>

      <div class="form-item {{ $errors->has('name') ? ' has-error' : '' }}">
        {!! Form::label('rol', 'Rol', array('class' => 'form-colaside'))  !!}

        <div class="form-colmain">
          {!! Form::select('rol', $rol, $user->rol, array('required' => true, 'class'=>'text-box') ) !!}

          @if ($errors->has('fk_country'))
            <span class="help-block"><strong>{{ $errors->first('fk_country') }}</strong></span>
          @endif
        </div>
      </div>
    </fieldset>

    <div class="form-action">
      <input class="form-action-element button-submit" type="submit" value="Actualizar">

      <a class="form-action-element form-delete-acount" href="{{ route('admin::users::destroy', $user->id) }}" title="Borrar cuenta">Borrar cuenta</a>
    </div>
  {!! Form::close() !!}

@endsection