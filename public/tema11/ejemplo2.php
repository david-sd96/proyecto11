<?php
include 'enlace.php';
include 'migasPan.php';

$migas = new MigasPan();

$migas->agregarNodo("Home", "https://iescierva.net");
$migas->agregarNodo("Noticias", "https://iescierva.net/noticias");
$migas->agregarNodo("Noticias academicas", "https://iescierva.net/noticias");
echo $migas->mostrar();
?>
