<?php
function reverser($num){
  $resultado = strrev($num);

  if (isset($resultado)) {
    echo "$resultado";
  } else {
    echo "Fail";
  }
}

$num = 46678;

if (is_integer($num)){
  echo reverser($num);
} else {
  echo "Dato inválido";
}
?>
<br><br>
<a href="../index.php">Regresar al menú</a>
