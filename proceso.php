<?php 
	$username = $_POST['usuario'];
	$contrase = $_POST['contrase'];

	//$username = stripcslashes($username);
	//$contrase = stripcslashes($contrase);
	//$username = mysql_real_escape_string($username);
	//$contrase = mysql_real_escape_string($contrase);
	require_once 'connection.php';
  	$con = connect();

	$sentencia = "SELECT * FROM usuarios WHERE username='".$username."' AND password='".$contrase."' ";
	$resultado = $con->query($sentencia);
	$resultado = $resultado->fetch_array();
	if($resultado['username'] == $username &&  $resultado['password'] == $contrase){
		 header ("Location: list.php");  
	}else{
		include 'layouts/alert.php';
	}
 ?>

