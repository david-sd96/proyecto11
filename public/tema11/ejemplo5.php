<?php
spl_autoload_register(function($clase){
  $archivo = $clase.'.php';
  include $archivo;
});

session_start();
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Carrito de la compra</title>
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
    <?php
    $p1 = new Producto("Espuma de afeitar", 3.5);
    $p2 = new Producto("Cereales de chocolate", 5.9);
    $p3 = new Producto("Servilletas 20x20", 1.2);

    $carrito = new Carrito();
    $carrito->meter($p1);
    $carrito->meter($p2);
    $carrito->meter($p3);
    $carrito->quitar(1);

    $carrito->masUnidad(0);
    $carrito->masUnidad(0);
    $carrito->menosUnidad(2);
    $carrito->menosUnidad(2);

    $d1 = new Descuento("Cod XDD11122", 2);
    $carrito->meter($d1);
    $p5 = new Producto("Camara x2", 96);
    $p6 = new Producto("Memoria", 12);
    $p7 = new Producto("asd x2", 5);

    $pack1 = new Pack([$p5,$p6, $p7]);
    $carrito->meter($pack1);
    $carrito->mostrar();
    ?>
    <br><br>
    <p><a href="destroy.php">Cerrar sesión</a></p>
  </body>
</html>
