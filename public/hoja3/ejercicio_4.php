<?php
function factorial($numero){

  $resultado=1;
  for ($i=0; $i < $numero; $i++){
  $resultado *= ($i+1);
  }
  return $resultado;
}

$m = 6;
$n = 4;

$solucion = factorial($m)/(factorial($n)*factorial($m-$n));
echo "El resultado es ".$solucion;
?>
<br><br>
<a href="../index.php">Regresar al menú</a>
