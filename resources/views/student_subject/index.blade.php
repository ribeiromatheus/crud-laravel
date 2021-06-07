@extends('layout.master')

@section('title', 'Detalhes do Aluno')

@section('content')

@component('components.navbar')
@endcomponent
<div class="form-group">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Aluno</th>
        <th>Disciplina</th>
        <th>Carga Horária</th>
        <th>Nota 1</th>
        <th>Nota 2</th>
        <th colspan="2">Operações</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($student_subjects as $student_subject)
      <tr>
        <td>{{ $student_subject['student']['name'] }}</td>
        <td>{{ $student_subject['subject']['name'] }}</td>
        <td>{{ $student_subject['subject']['duration'] }}</td>
        <td>{{ $student_subject['first_grade'] }}</td>
        <td>{{ $student_subject['second_grade'] }}</td>
        <td>
          <a href="{{ route('student_subject.edit', $student_subject['id']) }}" class="btn btn-warning">Editar</a>
        </td> 
        <td>
          <form action="{{ route('student_subject.destroy', $student_subject['id']) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Excluir" class="btn btn-danger">
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a href="{{ route('student_subject.create') }}" class="btn btn-info">Incluir disciplina</a>
</div>
@endsection