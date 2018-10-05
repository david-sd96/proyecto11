<?php session_start() ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Página de autenticación</title>
  </head>
  <body>
    <h1>Ya estás logueado</h1>
    <?php $_SESSION['user']['name'] = 'David' ?>
    <h2>Con el nombre: <?= $_SESSION['user']['name']?></h2>
    <a href="inicio.php">Regresar al inicio</a>
    <br>
    <a href="logout.php">Cerrar sesión</a>
  </body>
</html>
