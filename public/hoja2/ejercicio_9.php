<?php
$primos = [2,3];
for ($i=2; $i < 100; $i++) {
  for ($j=0; $j < count($primos)-1; $j++) {
    if($i % $primos[$j] == 0): break; endif;
    if ($i / $primos[$j] < $primos[$j]) {
      $primos[] += $i;
      echo "$i ";
      break;
    }
  }
}
?>
