<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Uso de Post</title>
  </head>
  <body>
    <?php
    if ( ! $_POST) {
      include('formulario.php');
    } else {
      if (isset($_POST['registrarse']) && $_POST['registrarse'] == 'Enviar') {
        echo "Muchas gracias por registrarte en mi sistema";
      } elseif(isset($_POST['registrarse']) && $_POST['registrarse'] == 'Cancelar') {
        echo "Que pena.";
      } else {
        echo "Operación no permitida";
      }
      if (isset($_POST['nombre']) ){
        echo 'Tu nombre es'.$_POST['nombre'];
      }
      if (isset($_POST['email']) ){
        echo '<br>Tu email es '.$_POST['email'];
      }
      if ($_POST['clave']['original'] ==  $_POST['clave']['repetida']){
        echo "Tu clave es correcta";
      } else {
        echo "Incorrecta la clave";
      }
    }
     ?>
     <br><br>
     <a href="../index.php">Regresar al menú</a>
  </body>
</html>
