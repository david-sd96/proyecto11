<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Formularios usables</title>
  </head>
  <body>
    <h1>Formularios usables</h1>

    <?php
    include('funciones.php');

    if ( ! $_POST){
      include('formulario.php');

    } else {
        $errores = [];
        //procesamos el formulario

        if( ! isset($_POST['nombre']) ){
          $errores['nombre'] = 'No he recibido el nombre';
        } elseif (strlen($_POST['nombre']) < 3 ){
          $errores['nombre'] = 'Campo nombre demasiado corto';
        }

        if ( ! isset($_POST['email']) ) {
          $errores['email'] = 'No he recibido el email';
        } elseif ( strlen($_POST['email']) < 6 ) {
          $errores['email'] = 'El email no es válido';
        }

        if ( ! isset($_POST['clave1']) || ! isset($_POST['clave2'])) {
          $errores['clave1'] = 'No he recibido ambas claves';
        } else {
          if ( strlen($_POST['clave1']) < 6 ) {
            $errores['clave1'] = 'Campo clave demasiado corto, almenos 6 caracteres';
          }
          if ( $_POST['clave1'] != $_POST['clave2']) {
            $errores['clave1'] = "Las claves deben ser iguales";
          }
        }

        if ( $errores ) {
        //  mostrar_errores($errores);
          include('formulario.php');
        } else {
          echo "Todo correcto, usuario registrado";
        }
    }
    ?>
  </body>
</html>
