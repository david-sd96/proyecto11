<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Ejemplo de trim</title>
  </head>
  <body>
    <?php
    if ($_POST) {
      if ( ! empty($_POST['nombre'])){
        $_POST['nombre'] = trim($_POST['nombre']);
        if (strlen($_POST['nombre']) < 3) {
          echo "El nombre no es válido";
        } else {
          echo "El nombre es: -".$_POST['nombre'].'-';
        }
      } else {
        echo "No he recibido el nombre";
      }
    }
    ?>
    <form  action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
      Nombre <input type="text" name="nombre">
      <br>
      <input type="submit" value="Enviar">
    </form>
  </body>
</html>
