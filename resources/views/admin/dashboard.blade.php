@extends('admin.layouts.admin')

@section ('content')

  @if (isset($inactives))
    <table class="table table-hover table-striped" id="list-table">
      <thead>
      <tr>
        <th>Contacto</th>
        <th>Empresa</th>
        <th>Pais</th>
        <th>Email</th>
        <th class="column-action">Accion</th>
      </tr>
      </thead>
      <tbody>
      @foreach ($inactives as $inactive)
        <tr>
          <td>{{ $inactive->name }}</td>
          <td>{{ $inactive->business }}</td>
          <td>{{ $inactive->country }}</td>
          <td>{{ $inactive->email }}</td>
          <td class="column-action">
            <a href="{{route('admin::users::edit', $inactive->id)}}" class="btn btn-primary btn-sm" role="button" title="Editar {{ $inactive->name }}">Editar</a>

            <form class="form-inline" action="{{ route('admin::users::activate', $inactive->id) }}" method="POST">
              {{ csrf_field() }}
              <input name="_method" type="hidden" value="PATCH">
              <button type="submit" class="btn btn-danger btn-sm" title="Activar {{ $inactive->name }}">Activar</button>
            </form>

            <form class="form-inline" action="{{ route('admin::users::destroy', $inactive->id) }}" method="POST">
              {{ csrf_field() }}
              <input name="_method" type="hidden" value="DELETE">
              <button type="submit" class="btn btn-danger btn-sm" title="Borrar {{ $inactive->name }}">Borrar</button>
            </form>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  @else
    Enhorabuena! No hay usuarios para activar!
  @endif

@endsection