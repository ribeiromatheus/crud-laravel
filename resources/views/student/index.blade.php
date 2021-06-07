@extends('layout.master')

@section('title', 'Sistema de Gerenciamento de Alunos')

@section('content')

@component('components.navbar')
@endcomponent

<table class="table table-hover table-bordered table-striped">
  <thead>
      <tr>
          <th>Nome</th>
          <th>Email</th>
          <th>RA</th>
          <th>Turma</th>
          <th colspan="2">Operações</th>
      </tr>
  </thead>
  <tbody>
    @foreach ($students as $student)
    <tr>
      <td>{{ $student['name'] }}</td>
      <td>{{ $student['email'] }}</td>
      <td>{{ $student['ra']['ra'] }}</td>
      <td>{{ $student['team']['name'] }}</td>
      <td>
        <a href="{{ route('student.edit', $student['id']) }}" class="btn btn-warning">Editar</a>
      </td>
      <td>
        <form action="{{ route('student.destroy', $student['id']) }}" method="post">
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
<a href="{{ route('student.create') }}" class="btn btn-outline-primary">Novo Registro</a>
@endsection