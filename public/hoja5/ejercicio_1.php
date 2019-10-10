<?php
$randArray = [];

for ($i = 0; $i<10; $i++){
    $randArray[$i] = rand(0,10);
}

$avg = array_sum($randArray) / count($randArray);
echo '<p>Media del array: '.$avg.'</p>';

sort($randArray);
echo '<p>Array mostrado de menor a mayor: ';
for ($i = 0; $i<10; $i++){
    echo $randArray[$i];
    if ($i < 9){
        echo ', ';
    } else {
        echo '.</p>';
    }
}

$quantity = array_count_values($randArray);
echo '<table><tr><th>Número</th><th>Repeticiones</th></tr>';
foreach ($quantity as $key => $val) {

    echo '<tr><td>'.$key.'</td><td>'.$val.'</td></tr>';
}
echo '</table>'

?>
<br>
<a href="../index.php">Regresar al menú</a>