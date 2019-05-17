<?php 
	require_once 'connection.php';
  	$con = connect();
	$consulta=EliminarRegistro($_GET['id'],$con);

	function EliminarRegistro($id_reg,$con){
		$sentencia= "DELETE FROM goods_reg WHERE id='".$id_reg."' ";
		$resultado = $con->query($sentencia);
	}
 ?>

    <script type="text/javascript">
     alert("Registro Eliminado exitosamente");
     window.location.href="list.php";
   </script>