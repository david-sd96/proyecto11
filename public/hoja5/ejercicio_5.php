
<?php
$title = 'Ejercicio 5.5';
include_once '../partials/header.php'
?>

<p>Crear dos matrices de 3x3 con números aleatorios entre el 0 y el 9 y calcular su producto.</p>
<?php
function putMatrix($size1,$size2=null){
    if (is_null($size2)){
        $size2 = $size1;
    }
    for ($i=0; $i<$size1; $i++){

        for ($j=0; $j<$size2; $j++){
            $matrix[$i][$j]= rand(0,5);
            echo $matrix[$i][$j].' ';
        }
        echo '<br>';
    }
    return $matrix;
}

function productMatrix($matrix1,$matrix2){
    for ($i=0; $i<3; $i++){
        for ($k=0; $k<3; $k++){
            $resultado = 0;
            for ($j=0; $j<3; $j++){
                $resultado += $matrix1[$i][$j] * $matrix2[$j][$k];

            }
            echo $resultado.' ';
        }
        echo '<br>';
    }
}
?>
<div class="container">
    <div class="row text-center">
        <div class="col">
            <p>Matriz 1</p>
            <?php
            $m1 = putMatrix(3);
            ?>
        </div>
        <div class="col">
            <p>Matriz 2</p>
            <?php
            $m2 = putMatrix(3);
            ?>
        </div>
        <div class="col">
            <p>Producto de las matrices</p>
            <?php
            productMatrix($m1,$m2);
            ?>
        </div>
    </div>
</div>
<?php include_once '../partials/footer.php' ?>
