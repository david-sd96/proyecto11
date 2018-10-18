<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Ejemplo de persona</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
  </head>
  <body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control" name="nombre">
      <label for="fechaNac">Fecha Nacimiento</label>
      <input type="date" class="form-control" name="fechaNac">
      <label for="trabajo">Trabajo</label>
      <input type="text" class="form-control" name="trabajo">
      <button type="submit" name="button">Enviar</button>
    </form>
    <br><br><br>

    <?php
    if ( $_POST ) {
      include 'ejPersona.php';
      if ( ! isset($_POST['nombre']) || empty($_POST['nombre'])){
        echo "<p>No hagas tonterías</p>";
      }else {
        if (! isset($_POST['fechaNac']) || empty($_POST['fechaNac'])) {
          $_POST['fechaNac'] = 'desconocida';
          $persona = new Persona($_POST['nombre'],$_POST['fechaNac'],
            $_POST['trabajo']);
        } elseif (! isset($_POST['trabajo']) || empty($_POST['trabajo'])) {
          $persona = new Persona($_POST['nombre'],$_POST['fechaNac']);
          echo "funciona";
        } else {
          $persona = new Persona($_POST['nombre'],$_POST['fechaNac'],
            $_POST['trabajo']);
        }

        $tablaDatos = $persona->verDatos();
      echo "<table class=\"table\">
        <thead class=\"thead-dark\">
          <th scope=\"col\">Nombre</th>
          <th scope=\"col\">Nacimiento</th>
          <th scope=\"col\">Trabajo</th>
        </thead>
        <tbody>
          <tr>
          $tablaDatos
          </tr>
        </tbody>
      </table>";
      }
    }
    ?>
  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/popper.js"></script>
  </body>
</html>
