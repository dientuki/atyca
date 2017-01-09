@extends('admin.layouts.admin')

@section ('content')

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
          <td>{{ $rol[$user->rol] }}</td>

          <td class="column-action">
            <a href="{{route('admin::users::edit', $user->id)}}" class="btn btn-primary btn-sm" role="button" title="Editar {{ $user->name }}">Editar</a>

            <div class="checkbox-user">
              <input type='checkbox' class='ios8-switch' id='checkbox-user-{{ $user->id }}' <?php if ($user->active == true) { echo 'checked="checked"'; } ?> data-action="{{ route('admin::users::toogle', ['users' =>  $user->id]) }}">
              <label for='checkbox-user-{{ $user->id }}'></label>
            </div>
          </td>

        </tr>
      @endforeach
      </tbody>
    </table>
  @else
    Enhorabuena! No hay usuarios para activar!
  @endif

@endsection