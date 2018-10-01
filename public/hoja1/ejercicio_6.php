<?php
$total=510.04;
$mensajeFloat='';
echo "$total .";

if (is_float($total)) {
  $cifra=explode('.',$total);
  $decimal=$cifra[1];
  $total=$cifra[0];
  if (strlen($decimal) == 1) {
    $decimal *= 10;
  }

  $moneda05=intdiv($decimal,50);
  $decimal=ceil($decimal %= 50);
  $mensajeFloat .=" $moneda05 de 0.5 €, ";

  $moneda02=intdiv($decimal,20);
  $decimal=ceil($decimal %= 20);
  $mensajeFloat .=''.$moneda02.' de 0.2 €,';

  $moneda01=intdiv($decimal,10);
  $decimal=ceil($decimal %= 10);
  $mensajeFloat .=" $moneda01 de 0.1 €, ";

  $moneda005=intdiv($decimal,5);
  $decimal=ceil($decimal %= 5);
  $mensajeFloat .=" $moneda005 de 0.05 €, ";

  $moneda002=intdiv($decimal,2);
  $decimal=ceil($decimal %= 2);
  $mensajeFloat .=" $moneda002 de 0.02 €, ";

  $moneda001=intdiv($decimal,1);
  $decimal=ceil($decimal %= 1);
  $mensajeFloat .=" $moneda001 de 0.01 €";
}
echo "La cifra a desglosar es $total €<br>";
$billete500=intdiv($total,500);
$total=ceil($total %= 500);
echo "$billete500 de 500 €, ";

$billete200=intdiv($total,200);
$total=ceil($total %= 200);
echo "$billete200 de 200 €, ";

$billete100=intdiv($total,100);
$total=ceil($total %= 100);
echo "$billete100 de 100 €, ";

$billete50=intdiv($total,50);
$total=ceil($total %= 50);
echo "$billete50 de 50 €, ";

$billete20=intdiv($total,20);
$total=ceil($total %= 20);
echo "$billete20 de 20 €, ";

$billete10=intdiv($total,10);
$total=ceil($total %= 10);
echo "$billete10 de 10 €, ";

$billete5=intdiv($total,5);
$total=ceil($total %= 5);
echo "$billete5 de 5 €, ";

$moneda2=intdiv($total,2);
$total=ceil($total %= 2);
echo "$moneda2 de 2 €, ";

$moneda1=intdiv($total,1);
$total=ceil($total %= 1);
echo "$moneda1 de 1 €<br>$mensajeFloat";
 ?>
 <br><br>
 <a href="../index.php">Regresar al menú</a>
