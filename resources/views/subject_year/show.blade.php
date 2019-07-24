<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
    <br><br><br>
    <div class="columns">
      <div class="column"></div>
      <div class="column">

    <h2 class="button is-dark is-medium is-fullwidth ">Catedratico: {{ $subject_year->teacher->fullname}}</h2>
    <br>
    <h2 class="button is-dark is-medium is-fullwidth ">Materia: {{ $subject_year->subject->name}} </h2>
    <br>
    <table class="table is-fullwidth">
      <td>Alumno</td>
      <td>Nota</td>
    @foreach ($subject_year->enrollments as $enroll)
    <tr>
      <td>{{ $enroll->student->fullname }}</td>
      <td>{{ $enroll->score }}</td>
    </tr>
    @endforeach
  </table>
    </div>
    <div class="column"></div>

</div>
  </body>
</html>
