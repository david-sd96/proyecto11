<p>Crear una matriz de 4x4 con números aleatorios entre el 0 y el 9 y calcular su traspuesta.</p>
<?php

for ($i=0; $i<4; $i++){
    for ($j=0; $j<4; $j++){
        $matriz[$i][$j]= rand(0,9);
        echo 'Posición: ['.$i.']['.$j.'] con valor '.$matriz[$i][$j].".<br>";
        $matrizT[$j][$i] = $matriz[$i][$j];
    }
}
echo '<p>Traspuesta de la matriz</p>';
for ($i=0; $i<4; $i++){
    for ($j=0; $j<4; $j++){
        echo 'Posición: ['.$i.']['.$j.'] con valor '.$matrizT[$i][$j].".<br>";
    }
}

?>
<br>
<a href="../index.php">Regresar al menú</a>