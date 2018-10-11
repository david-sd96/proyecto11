<?php
$textoPlano = "UN TEXTO, y algo MAS";
$clave = 1;

function cifrarCesar($cadena, $clave){
  $textoCrypt = [];
  $cadenaArray = str_split($cadena);
  for ($i=0; $i < strlen($cadena); $i++) {
    $cadenaArray[$i] = ord($cadenaArray[$i]);
  }
  for ($i=0; $i < count($cadenaArray) ; $i++) {
    if ($cadenaArray[$i] >= 65 && $cadenaArray[$i] <= 90) {
      $cadenaArray[$i] += $clave;
      if ($cadenaArray[$i] > 90) {
        $cadenaArray[$i] -= 26;
      }
      $textoCrypt[] = chr($cadenaArray[$i]);
    } else {
      $textoCrypt[] = chr($cadenaArray[$i]);
    }
  }
  $textoCrypt = implode($textoCrypt);
  return $textoCrypt;
}

echo cifrarCesar($textoPlano,$clave);
?>
<br><br>
<a href="../index.php">Regresar al menú</a>
