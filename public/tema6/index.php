<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formularios Usables</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
	<h1>Formularios usables</h1>

<?php
	include 'funciones.php';
	$errores = [];
	if ( ! $_POST ) {
		include('formulario.php');
	} else {
		// Procesamos el formulario
		include 'validacion.php';

		if ( $errores ) {
			//mostrar_errores($errores);
			include 'formulario.php';

		} else {
			echo "Todo correcto, usuario registrado";
		}
	}
?>
<script src="../js/"></script>
<script src="../js/"></script>
<script src="../js/"></script>
</body>
</html>
