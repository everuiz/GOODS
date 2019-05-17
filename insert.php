  <?php 	
  
    require_once 'connection.php';
    $con = connect();
  	$user=$_POST['name'];
  	$des=$_POST['description'];
  	$value=$_POST['value'];
  	if($user!=null||$des!=null){
  		$sql="INSERT INTO goods_reg(name,description,value) VALUES ('$user','$des','$value')";
  		$var_resultado = $con->query($sql);
		  if(!$var_resultado) print_r($con->error);
        $con->close();
  	}

   ?>

   <script type="text/javascript">
     alert("Registro ingresado exitosamente");
     window.location.href="list.php";
   </script>