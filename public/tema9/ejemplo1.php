<?php
$fuente = fopen("lista.txt","r+");

fwrite($fuente, "Hola amigo\n");
fclose($fuente);
?>
