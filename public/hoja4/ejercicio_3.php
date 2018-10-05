<?php
function desencriptar($cadena, $clave){
  $solucion = '';
  for ($i=0; $i < strlen($cadena); $i++) {
    $letra = $cadena[$i];
    $letraNumerica = ord($letra);
    $newLetraNum = $letraNumerica + $clave;
    if ($newLetraNum > 90) {
      $newLetraNum -= 26;
    } elseif ($newLetraNum < 65) {
      $newLetraNum += 26;
    }
    $solucion[$i] = chr($newLetraNum);
  }
  return $solucion;
}

$cadenaCrypt='LEGREXIRDRVJLEKVOKFHLVTFEKZVEVKFURJCRJCVKIRJUVCRSVTVURIZFL'.
'EVAVDGCFVJTRURMVQHLVKIRSRAFWVCZODVGRXRLENYZJBP';
$cadena = $cadenaCrypt;
$clave=0;

while ( ! strpos($cadena, 'FELIX')) {
  $clave--;
  $cadena = desencriptar($cadenaCrypt, $clave);
}

echo $cadena;
 ?>
 <br><br>
 <a href="../index.php">Regresar al menú</a>
