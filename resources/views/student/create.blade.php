<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <title>Students Registration</title>
</head>
<body>
  <div class="container-md">
		<h1>Cadastro de Alunos</h1>

		<form class="form" action="{{ route('student.store') }}" method="post">
      @csrf
			<div class="form-group">
				<label>Nome:</label>
				<input type="text" name="name" class="form-control" placeholder="Nome">
			</div>
			
			<div class="form-group">
				<label>Email:</label>
				<input type="email" name="email" class="form-control" placeholder="Email">
			</div>
						
			<div class="form-group">
				<label>RA:</label>
				<input type="text" name="ra" class="form-control" placeholder="RA">
			</div>

      <div class="form-group">
				<label>Turma:</label>
				<select name="team_id" class="form-control">
        	@foreach (App\Models\Team::get() as $team)
					<option value="{{ $team['id'] }}">{{ $team['name'] }}</option>
					@endforeach
				</select>
			</div>

      <input type="submit" value="Cadastrar" class="btn btn-primary mb-2">
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>