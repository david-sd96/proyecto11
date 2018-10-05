<table id="potencias">
  <tr>
    <th>Número</th>
    <th>Cuadrado</th>
    <th>Cubo</th>
  </tr>
<?php
$num=6;
$tope=$num+5;
while ($num < $tope) {
  echo '<tr><td>'.$num.'</td><td>'.pow($num,2).'</td><td>'.pow($num,3).
  '</td></tr>';
  $num++;
}
?>
</table>
<br><br>
<a href="../index.php">Regresar al menú</a>
