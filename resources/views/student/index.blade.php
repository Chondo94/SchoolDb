<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!--este comando me sirve para llamar a Bulma-->
    <title></title>
  </head>
  <body><br><br><br>
<div class="columns">

  <div class="column"></div>

  <div class="column">
    <input type="submit" value="Estudiantes" class="button is-primary is-medium is-fullwidth is-rounded">
    <br>
    <table class="table  is-striped is-narrow is-hoverable is-fullwidth">
        <tr>
          <th>Codigo</th>
          <th>Nombre</th>
          <th>Fecha de nacimiento</th>
          <th></th>
        </tr>

    @foreach($student as $student) <!--la primero "student" es la variable que se creo en el controlador index. -->

    <tr>
      <td>{{ $student->codigo }}</td>
      <td>{{ $student->fullname }}</td>
      <td>{{ $student->birthdate }}</td>
      <td><a href="{{ route('student.show', $student->id) }}" class="button is-dark">Detalle</a></td>
    </tr>

    @endforeach
    </table>

    <div class="has-text-centered">
      <a href="{{ route('student.create') }}"><h1 class="button is-active is-medium is-rounded has-text-centered">Registrar</h1></a>
    </div>
  </div>

    <div class="column"></div>

  </div>
  </body>
</html>
