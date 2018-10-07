<?php
  $N = 60; //Limitador
  $A = 3; //Multiplo necesario A
  $B = 5; //Multiplo necesario B
  //Funcion necesaria es_multiplo(numero,multiplo)
  function es_multiplo($I,$J) {

    if (($I%$J) == 0) {
      return true;
    } else {
      return false;
    }
  }
  while ($N > 0) {
    if ( es_multiplo($N,$A) && es_multiplo($N,$B) ) {
      echo "$N ";
      $N--;
    }
    else {
      $N--;
    }
  }
?>
<br><br>
<a href="../index.php">Regresar al menú</a>
