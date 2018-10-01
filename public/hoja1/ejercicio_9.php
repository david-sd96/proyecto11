<?php
$radianes = 2.5;
$grados= $radianes*(180/Pi());

if (is_float($grados)) {
  $grados=round($grados,2);
  $gradArray=explode('.',$grados);
  $grados=$gradArray[0];
  $minutos=($gradArray[1]/100)*60;
  $minArray=explode('.',$minutos);
  $minutos=$minArray[0];
  $segundos=($minArray[1]/100)*60;

  echo "<p>$radianes radianes equivalen a: $grados".'°, '.$minutos.'\', '.
  $segundos.'".</p>';
  }
 ?>
 <br><br>
 <a href="../index.php">Regresar al menú</a>
