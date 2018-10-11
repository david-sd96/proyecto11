<?php
$textoPlano = "UN TEXTO, y algo MAS";
$clave = 1;

function cifrarCesar($cadena, $clave){
  $textoCrypt = [];
  $cadenaArray = str_split($cadena);
  //Obtención del código ASCII
  for ($i=0; $i < strlen($cadena); $i++) {
    $cadenaArray[$i] = ord($cadenaArray[$i]);
  }
  
  for ($i=0; $i < count($cadenaArray) ; $i++) {
    //Tratamiento de mayúsculas.
    if ( $cadenaArray[$i] >= 65 && $cadenaArray[$i] <= 90 ) {
            $cadenaArray[$i] += $clave;
            if ($cadenaArray[$i] > 90) {
              $cadenaArray[$i] -= 26;
            }
      $textoCrypt[] = chr($cadenaArray[$i]);
      //Tratamiento de minúsculas.
    } else if( $cadenaArray[$i] >= 97 && $cadenaArray[$i] <= 122) {
      $cadenaArray[$i] += $clave;
      if ($cadenaArray[$i] > 122) {
        $cadenaArray[$i] -= 26;
      }
      $textoCrypt[] = strtoupper(chr($cadenaArray[$i]));
    }
  }
  $textoCrypt = implode($textoCrypt);
  return $textoCrypt;
}

echo cifrarCesar($textoPlano,$clave);
?>
<br><br>
<a href="../index.php">Regresar al menú</a>
