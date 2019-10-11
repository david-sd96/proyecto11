<p>Crear una matriz de 4x7 y que su valor sea el de la suma de sus índices.</p>
<?php

for ($i=0; $i<4; $i++){
    for ($j=0; $j<7; $j++){
        $matriz[$i][$j]= $i+$j;
        echo 'Posición: ['.$i.']['.$j.'] con valor '.$matriz[$i][$j].".<br>";
    }
}

?>
<br>
<a href="../index.php">Regresar al menú</a>