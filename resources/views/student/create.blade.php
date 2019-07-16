<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title></title>
  </head>
  <body><br><br>
    <div class="columns">
      <div class="column"></div>

    <div class="column">
      <h1 class="subtitle is-2 has-text-centered">Registrar nuevo estudiante</h1>
    <form method="post" action="{{ route('student.store') }}">

        {{ csrf_field() }}
        <div class="field">
          <div class="control">
            <input type="text" name="codigo"  class="input is-primary is-large has-text-centered is-rounded" required placeholder="Codigo"><br>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <input type="text" name="fullname" class="input is-primary is-large has-text-centered is-rounded"  required placeholder="Nombre Completo"><br>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <input type="text" name="birthdate" class="input is-primary is-large has-text-centered is-rounded"  required placeholder="Fecha de Nacimiento"><br>
          </div>
        </div>
        <div class="field">
          <div class="control">
            <input type="text" name="is_active" class="input is-primary is-large has-text-centered is-rounded"  required placeholder="Escriba 0 si esta Inactivo o 1 Activo"><br>
          </div>
        </div>
        <input type="submit" value="guardar" class="button is-primary is-medium is-fullwidth is-rounded"  required>
    </form>
  </div>

  <div class="column"></div>

  </div>
  </body>
</html>
