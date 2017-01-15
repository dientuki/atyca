@extends('admin.layouts.admin')

@section ('content')

  @foreach ($errors->all() as $message)
    algo hay!
    {{ $message }}
  @endforeach

  {!! Form::model($user, array_merge($form_data, array('role' => 'form', 'class' => 'form-two-col'))) !!}

    <div class="form-title">
      {{ ucfirst(trans('buttons.forms.' . $action))}} usuario

      <div class="checkbox-user">
        <input value="1" name="active" type='checkbox' class='ios8-switch' id='checkbox-user-{{ $user->id }}' <?php if ($user->active == true) { echo 'checked="checked"'; } ?> >
        <label for='checkbox-user-{{ $user->id }}'></label>
      </div>

    </div>

    <fieldset>

      <div class="form-item {{ $errors->has('email') ? ' has-error' : '' }}">
        {!! Form::label('email', 'Email', array('class' => 'label form-colaside'))  !!}

        <div class="form-colmain">
          {!! Form::email('email', null, array('placeholder' => 'Email', 'class'=>'text-box'))  !!}

          @if ($errors->has('email'))
            <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
          @endif
        </div>
      </div>

      <div class="form-item {{ $errors->has('business') ? ' has-error' : '' }}">
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
          {!! Form::text('name', null, array('placeholder' => 'Contacto', 'class'=>'text-box'))  !!}

          @if ($errors->has('name'))
            <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
          @endif
        </div>
      </div>

      <div class="form-item autocomplete {{ $errors->has('country') ? ' has-error' : '' }}">
        {!! Form::label('country', 'Pais', array('class' => 'label form-colaside'))  !!}

        <div class="form-colmain autocomplete-wrapper">
          {!! Form::text('country', null, array('placeholder' => 'Pais', 'class'=>'text-box'))  !!}
          {!! Form::hidden('fk_country', null, array('id' => 'fk_country'))  !!}

          @if ($errors->has('fk_country'))
            <span class="help-block"><strong>{{ $errors->first('country') }}</strong></span>
          @endif
        </div>
      </div>

      <div class="form-item {{ $errors->has('rol') ? ' has-error' : '' }}">
        {!! Form::label('rol', 'Rol', array('class' => 'label form-colaside'))  !!}

        <div class="form-colmain">
          {!! Form::select('rol', $rol, $user->rol, array('required' => true, 'class'=>'text-box') ) !!}

          @if ($errors->has('fk_country'))
            <span class="help-block"><strong>{{ $errors->first('rol') }}</strong></span>
          @endif
        </div>
      </div>

      @if ($action == 'update' && Auth::user()->id == $user->id)
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

      @endif
    </fieldset>



    <div class="form-action">
      <input class="form-action-element button-submit" type="submit" value="{{ trans('buttons.forms.' . $action)  }}">

      @if ($action == 'update' && Auth::user()->id != $user->id)
        <a class="form-action-element form-delete-acount" href="{{ route('admin::users::destroy', $user->id) }}" title="Borrar cuenta">Borrar cuenta</a>
      @endif
    </div>
  {!! Form::close() !!}

@endsection