<?php 
require_once 'connection.php';
$con = connect();
$consulta = Modificar($_POST['id_reg'], $_POST['name'], $_POST['description'] , $_POST['value'] , $con );

function Modificar($id_reg,$name,$description,$value,$con){
		$sentencia= "UPDATE goods_reg SET name='".$name."', description='".$description."', value='".$value."' WHERE id='".$id_reg."' ";
		$resultado = $con->query($sentencia);

		if(!$resultado) print_r($con->error);
        $con->close();
}

 ?>

    <script type="text/javascript">
     alert("Registro Actualizado exitosamente");
     window.location.href="list.php";
   </script>