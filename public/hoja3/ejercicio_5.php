<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 5 - Factores primos</title>
  </head>
  <body>
  <?php
    if ( ! $_POST) {
      include 'ejercicio_5Form.php';
  } else {

    if ( ! isset($_POST['numero'])) {
      echo "Número no recibido";
    } elseif ( ! is_numeric($_POST['numero']) || $_POST['numero'] < 3 ) {
      echo "Debes introducir un NÚMERO ENTERO, distinto de 0, 1, 2 y 3 ";
    } else {

      function es_primo($num){
        if ($num == 2 || $num == 3) {
          return true;
        } else {
        $primos = [2,3];
        for ($i=2; $i <= $num; $i++) {
          for ($j=0; $j < count($primos)-1; $j++) {
            if($i % $primos[$j] == 0) : break; endif;
            if ($i / $primos[$j] < $primos[$j]) {
              $primos[] += $i;
              if ($i == $num) {
                return true;
              }
              break;
            }
          }
        }
      }
      } //es_primo() closed

      $numero = $_POST['numero'];
      $resultado = $numero.' = ';
      if (es_primo($numero)){
        echo "$numero es un número primo";
      } else {
      for ($i=2; $i < $numero; $i++) {
        if ( es_primo($i) == true ){
            while ($numero % $i == 0) {
              $resultado .= $i.'*';
              if (es_primo($numero/$i)) {
                $resultado .= $numero/$i;
                break 2;
              } else {
                $numero /= $i;
              }
            }
        }
      }
      echo "$resultado";
    }
  }

  } ?>

    <br><br>
    <a href="../index.php">Regresar al menú.</a>
  </body>
</html>
