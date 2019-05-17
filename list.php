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
	<?php	
		include("connection.php");
		$con = connect();
		$var_consulta= "select * from goods_reg";
		$var_resultado = $con->query($var_consulta);
		if(!$var_resultado) print_r($con->error);
	?>
	<div class="container">
		<div class="rows">
			<h3 class="text-center">GOODS</h3>
		<a href="formulario.php" class="btn btn-primary">Nuevo</a>	
		<table  class="table table-responsive">
			<thead>
				<tr>
           			<th>Name</th>
            		<th>Description</th>
            		<th>Value</th>
				</tr>
			</thead>
			<tbody>   
				<?php while($rows=$var_resultado->fetch_array()){ ?>
					<tr>
						<td><?php echo $rows['name'] ?></td>
						<td><?php echo $rows['description'] ?></td>
						<td><?php echo $rows['value'] ?></td>
						<td>
							<a href="modificar.php?id=<?php echo $rows['id'] ?> ">
								<button class="btn btn-primary">Editar</button>
							</a>
							
							<a href="eliminar.php?id=<?php echo $rows['id'] ?>">
								<button class="btn btn-primary">Eliminar</button>
							</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>	
		</table>
	</div>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>