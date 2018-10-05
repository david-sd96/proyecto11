<?php
$a = 1;
$b = -2;
$c = 5;
$d = 0;
$e = -1;
$f = 1;
if($a*$e-$b*$d == 0){
  if($c*$e-$b*$f == 0){
    echo "El sistema de ecuaciones es indeterminado.";
  } else {
    echo "El sistema de ecuaciones es incompatible.";
  }
} else {
  echo 'x='.($c*$e-$b*$f)/($a*$e-$b*$d).' y='.($a*$f-$c*$d)/($a*$e-$b*$d);
}
?>
<br><br>
<a href="../index.php">Regresar al menú</a>
