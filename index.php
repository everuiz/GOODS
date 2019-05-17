<!DOCTYPE html>
<html>
<head>
 	<?php 
		require_once('layouts/head.php');
	?>
</head>
<body>
<div class="container">
		<br>
		<br>
    	<br>
    	<h3>GOODS</h3>
		<form action="proceso.php" class="form-inline" method="POST">
			<div class="form-group">
				<label class="sr-only" for="nombre">Usuario:</label>
				<input class="form-control" id="usuario" type="text" placeholder="Usuario" name="usuario" >
			</div>
			
			<div class="form-group">
				<div class="input-group">
					<label class="sr-only" for="contra">Contraseña:</label>
					<input class="form-control" id="pass" type="password" placeholder="Contraseña:" name="contrase">
				</div>
			</div>

			<button class="btn btn-primary">Enviar</button>
		</form>
		<br>
	</div>
</body>
</html>