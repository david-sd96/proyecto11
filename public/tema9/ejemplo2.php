<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Ejemplo 2 citas</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
  </head>
  <body>
    <?php
    $archivo = 'citas.txt';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      if (isset($_POST['cita'])) {
        if (isset($_POST['cita']) && $_POST['cita'] != '' &&
         isset($_POST['nombre']) && ! empty($_POST['nombre'])) {
          $fuente = fopen($archivo, "a+");
          if (is_writable($archivo)) {
            $reserva = $_POST['cita'].' : '.$_POST['nombre']."\n";
            fwrite($fuente, $reserva);
            fclose($fuente);
            echo '<h2>Cita guradada</h2><br>';
            echo '<a href="ejemplo2.php">Regresar al formulario</a><br>';
            echo '<a href="../index.php">Regresar al menú</a>';
          }
        }
      } else {
        echo "<h4>Los datos introducidos no son correctos</h4><br>";
      }

    } else {
      include 'formularioCitas.php';
    }
    ?>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/popper.js"></script>
  </body>
</html>
