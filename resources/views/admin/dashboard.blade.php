@extends('admin.layouts.admin')

@section ('content')

  @if (isset($status))
    <div>
      {{ $status }}
    </div>
  @endif


    @if (isset($users))
    <table class="list-table" id="list-table">
      <thead class="hidden">
      <tr>
        <th>Email</th>
        <th>Contacto</th>
        <th>Empresa</th>
        <th>Pais</th>
        <th class="column-action">Accion</th>
      </tr>
      </thead>
      <tbody>
      @foreach ($users as $user)
        <tr>
          <td class="email">{{ $user->email }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->business }}</td>
          <td>{{ $user->country }}</td>

          <td class="column-action">
            <div class="">
              <input type='checkbox' class='ios8-switch' id='checkbox-3' <?php if ($user->active == true) { echo 'checked="checked"'; } ?>>
              <label for='checkbox-3'></label>
            </div>
            <a href="{{ route('admin::users::activate', ['users' =>  $user->id]) }}" title="activar usuario">aqui</a>

            <a href="{{route('admin::users::edit', $user->id)}}" class="btn btn-primary btn-sm" role="button" title="Editar {{ $user->name }}">Editar</a>

<!--
            <form class="form-inline" action="{{ route('admin::users::activate', $user->id) }}" method="POST">
              {{ csrf_field() }}
              <input name="_method" type="hidden" value="PATCH">
              <button type="submit" class="btn btn-danger btn-sm" title="Activar {{ $user->name }}">Activar</button>
            </form>

            <form class="form-inline" action="{{ route('admin::users::destroy', $user->id) }}" method="POST">
              {{ csrf_field() }}
              <input name="_method" type="hidden" value="DELETE">
              <button type="submit" class="btn btn-danger btn-sm" title="Borrar {{ $user->name }}">Borrar</button>
            </form>
            .-->
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  @else
    Enhorabuena! No hay usuarios para activar!
  @endif

@endsection