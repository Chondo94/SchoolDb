<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!--este comando me sirve para llamar a Bulma-->
    <title></title>
  </head>
  <body>
    <br><br>
    <div class="columns">
    <div class="column"></div>
    <div class="column">
      <h1 class="subtitle is-2 has-text-centered">Editar estudiante</h1>
    <form method="post" action="{{ route('student.update', $student->id) }}">

        @csrf
        @method('PATCH')
        {{ csrf_field() }}

        <div class="field">
          <div class="control">
        <input type="text" name="codigo" value="{{$student->codigo}}" class="input is-primary is-large has-text-centered is-rounded" required placeholder""><br>
          </div>
        </div>

        <div class="field">
          <div class="control">
        <input type="text" name="fullname" value="{{$student->fullname}}" class="input is-primary is-large has-text-centered is-rounded" required placeholder=""><br>
          </div>
        </div>

        <div class="field">
          <div class="control">
        <input type="text" name="birthdate" value="{{$student->birthdate}}" class="input is-primary is-large has-text-centered is-rounded" required placeholder=""><br>
          </div>
        </div>

        <input type="submit" value="guardar" class="button is-primary is-medium is-fullwidth is-rounded" required>
    </form>
    </div>

    <div class="column"></div>

  </div>
  </body>
</html>
