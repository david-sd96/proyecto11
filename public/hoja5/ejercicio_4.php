<?php
$title = 'Ejercicio 5.4';
include_once '../partials/header.php'
?>
<p>Crear una matriz de 4x4 con números aleatorios entre el 0 y el 9 y calcular su traspuesta.</p>

<div class="container">
    <div class="row text-center">
        <div class="col">
            <p>Matriz original</p>
            <?php
            for ($i = 0; $i < 4; $i++) {
                for ($j = 0; $j < 4; $j++) {
                    $matriz[$i][$j] = rand(0, 9);
                    echo 'Posición: ['.$i.']['.$j.'] con valor '.$matriz[$i][$j].".<br>";
                    $matrizT[$j][$i] = $matriz[$i][$j];
                }
            }
            ?>
        </div>
        <div class="col">
            <p>Traspuesta de la matriz</p>
            <?php
            for ($i = 0; $i < 4; $i++) {
                for ($j = 0; $j < 4; $j++) {
                    echo 'Posición: ['.$i.']['.$j.'] con valor '.$matrizT[$i][$j].".<br>";
                }
            }
            ?>
        </div>
    </div>
</div>
<?php include_once '../partials/footer.php' ?>