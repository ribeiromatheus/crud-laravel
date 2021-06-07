@extends('layout.master')

@section('title', 'Sistema de Gerenciamento de Turmas')

@section('content')

@component('components.navbar')
@endcomponent

<table class="table table-hover table-bordered table-striped">
  <thead>
      <tr>
          <th>Nome</th>
          <th>Ano</th>
          <th colspan="2">Operações</th>
      </tr>
  </thead>
  <tbody>
    @foreach ($teams as $team)
    <tr>
      <td>{{ $team['name'] }}</td>
      <td>{{ $team['year'] }}</td>
      <td>
        <a href="{{ route('team.edit', $team['id']) }}" class="btn btn-warning">Editar</a>
      </td>
      <td>
        <form action="{{ route('team.destroy', $team['id']) }}" method="post">
          @csrf
          @method('DELETE')
          <input type="submit" value="Excluir" class="btn btn-danger">
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

<hr>
<a href="{{ route('team.create') }}" class="btn btn-outline-primary">Novo Registro</a>
@endsection