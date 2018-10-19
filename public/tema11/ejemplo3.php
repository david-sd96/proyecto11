<?php
include 'Etiqueta.php';
include 'enlace.php';
include 'migasPan.php';
include 'MigasPanContenedor.php';

$migas = new MigasPanContenedor('=>','section');

$migas->agregarNodo("Home", "https://iescierva.net");
$migas->agregarNodo("Noticias", "https://iescierva.net/noticias");
$migas->agregarNodo("Noticias academicas",
  "https://iescierva.net/noticias/academicas");
echo $migas->mostrar();
?>
