
<?php 

	require_once 'connection.php';
  $con = connect();
	$consulta=ConsultarRegistro($_GET['id'],$con);

	function ConsultarRegistro($id_reg,$con){
		$sentencia= "SELECT * FROM goods_reg WHERE id='".$id_reg."' ";
		$resultado = $con->query($sentencia);
		$resultado = $resultado->fetch_array();
		return [
			$resultado['name'],
			$resultado['description'],
			$resultado['value']
		];
	}
?>

<!DOCTYPE html>
<html>
<head>
 	<?php 
		require_once('layouts/head.php');
	?>
</head>
<body>
	<header>
	<?php 
		require_once('layouts/header.php');
	?>	
</header>
<div class="container">
  	<br>
  	<form action="modif_reg.php" class="form-horizontal" method="post" >
  		<fieldset>
  			<input type="hidden" name="id_reg" value="<?php  echo $_GET['id'] ?>">
  			<div class="form-group has-succes">
  					<label for="nombre" class="control-label col-md-2">Name:</label>
  					<div class="col-md-10">
  						<input type="text" class="form-control" id="nombre" name="name" value="<?php  echo $consulta[0]?>">
  					</div>
  			</div>	

  		 	<div class="form-group has-succes">
  					<label for="Description" class="control-label col-md-2">Description</label>
  					<div class="col-md-10">
  						<input type="text" class="form-control" id="description"  name="description" value="<?php  echo $consulta[1]?>">
  					</div>
  			</div>

  			<div class="form-group has-succes">
  					<label for="Value" class="control-label col-md-2">Value</label>
  					<div class="col-md-10">
  						<input type="text" class="form-control" id="correo"  name="value" value="<?php  echo $consulta[2]?>">
  					</div>
  			</div>

		<div class="form-group">
			<div class="col-md-2 col-md-offset-2">
				<input type="submit" name="" class="btn btn-primary" value="Guardar">
			</div>
		</div>
  		</fieldset>
  		

  	</form>
  </div>
</body>
</html>

