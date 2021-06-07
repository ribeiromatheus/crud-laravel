@extends('layout.master')

@section('title', 'Sistema de Gerenciamento de Disciplinas')

@section('content')

@component('components.navbar')
@endcomponent

<table class="table table-hover table-bordered table-striped">
  <thead>
      <tr>
          <th>Nome</th>
          <th>Carga horária</th>
          <th colspan="2">Operações</th>
      </tr>
  </thead>
  <tbody>
    @foreach ($subjects as $subject)
    <tr>
      <td>{{ $subject['name'] }}</td>
      <td>{{ $subject['duration'] }}</td>
      <td>
        <a href="{{ route('subject.edit', $subject['id']) }}" class="btn btn-warning">Editar</a>
      </td>
      <td>
        <form action="{{ route('subject.destroy', $subject['id']) }}" method="post">
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
<a href="{{ route('subject.create') }}" class="btn btn-outline-primary">Novo Registro</a>
@endsection