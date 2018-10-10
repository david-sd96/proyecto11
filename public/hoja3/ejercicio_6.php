<?php
$texto = "asfhu hashhd2 2h jhjsf88u)=?? shjhh _phpTEXT\rSaltico de línea";

$espacios = 0;
$digitos = 0;
$letras = 0;
$lineas = 1;
$otrosChars = 0;

function charAscii($char){
  $num = ord($char);
  switch ($num) {
    case '32':
      return "espacio";
      break;
    case '13':
      return "salto";
      break;
    default:
      if ($num >= 48 && $num <= 57) {
        return "digito";
        break;
      } elseif ( ($num >= 65 && $num <= 90) || ($num >= 97 && $num <= 122) ) {
        return "letra";
        break;
      } else {
        return "otro";
      }
      break;
  }
}

$textoArray = str_split($texto);
foreach ($textoArray as $char) {
  switch (charAscii($char)) {
    case 'espacio':
      $espacios++;
      break;
    case 'salto':
      $lineas++;
      break;
    case 'digito':
      $digitos++;
      break;
    case 'letra':
      $letras++;
      break;
    case 'otro':
      $otrosChars++;
      break;
    default:
      echo "ERROR";
      break 2;
  }
}
echo "Nº de carácteres en blanco: $espacios, Nº de dígitos: $digitos, Nº de ".
"letras: $letras, Nº de líneas: $lineas, Nº de otros carácteres: $otrosChars.";
?>
<br><br>
<a href="../index.php">Volver al menú.</a>
