<?php
function time2sec($time){
  $timeArray = explode(':', $time);
  $segundos = ($timeArray[0]*60*60)+($timeArray[1]*60)+$timeArray[2];
  return $segundos;
}

$time1 = date_create(NULL);
$time1 = date_format($time1, 'H:i:s');
$time2 = date_create('13:40:20');
$time2 = date_format($time2, 'H:i:s');
echo 'La diferencia es: '.(time2sec($time1)-time2sec($time2)).' segundos';
?>

<br><br>
<a href="../index.php">Regresar al menú</a>
