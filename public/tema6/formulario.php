<form  action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
  <p>
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre"
    <?php
      mostrar_campo('nombre');
      }
    ?>
    >
    <?php mostrar_error_campo('nombre', $errores); ?>
  </p>
  <p>
    <label for="email">Email</label>
    <input type="email" name="email"
    <?php
      mostrar_campo('email');
      }
    ?>
    >
    <?php mostrar_error_campo('nombre', $errores); ?>
  </p>
  <p>
    <label for="clave1">Clave</label>
    <input type="password" name="clave1" value="">
  </p>
  <p>
    <label for="clave2">Clave</label>
    <input type="password" name="clave2" value="">
  </p>
  <p>
  <label>
    <input type="submit" value="Enviar">
  </label>
  </p>
</form>