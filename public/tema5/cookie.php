<?php
  $duracion = time() + (60*60*24*365*2);
  setcookie('nombre', 'David');
  setcookie('edad','22');
  $datos = ['web' => 'iescierva.net', 'director' => 'Jose Antonio'];
  setcookie('especial', serialize($datos), $duracion);
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Ejemplo de cookies</title>
  </head>
  <body>
    <h1>Hola<?= $_COOKIE['nombre'] ?></h1>
    <h2>Tu edad es <?= $_COOKIE['edad'] ?> años.</h2>
    <h3>Los datos almacenados son:
    <?php
      $datos = unserialize($_COOKIE['especial']);
      var_dump($datos);
    ?>
    <br><br>
    <?php
      var_dump($_COOKIE);
    ?>
    </h3>
  </body>
</html>
