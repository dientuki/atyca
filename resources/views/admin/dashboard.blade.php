@extends('admin.layouts.admin')

@section ('content')

  @if (isset($cards))
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
            <a href="#" class="btn btn-primary btn-sm" role="button" title="Editar {{ $inactive->name }}">Editar</a>
            <a href="#" class="btn btn-primary btn-sm" role="button" title="Editar {{ $inactive->name }}">Activar</a>
            <a href="#" class="btn btn-primary btn-sm" role="button" title="Editar {{ $inactive->name }}">Borrar</a>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  @else
    Enhorabuena! No hay usuarios para activar!
  @endif

@endsection