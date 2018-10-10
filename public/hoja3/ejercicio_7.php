<?php
$texto = "abddba";

function is_palidromo($cadena){
  if ($cadena == strrev($cadena)) {
    return true;
  } else {
    return false;
  }
}
?>

<?php if (is_palidromo($texto)) { ?>
  <p> Es un palíndromo.</p>
<?php } else {?>
  <p>No es un palídromo.</p>
<?php } ?>
<br><br>
<a href="../index.php">Volver al menú.</a>
