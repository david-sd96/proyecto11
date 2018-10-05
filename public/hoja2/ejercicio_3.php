<?php
$radical = 8;
$orden=3;
$signo = '';
if ($radical < 0) {
  $radical *= -1;
  $signo ='-';
}
/* Operaciones*/
echo $signo.pow($radical,1/$orden);
 ?>
 <br><br>
 <a href="../index.php">Regresar al menú</a>
