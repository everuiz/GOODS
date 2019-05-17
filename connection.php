<?php 

function connect(){

	$user="root";
	$pass="";
	$server="localhost";
	$db="goods";
	$mysqli = new mysqli($server, $user, $pass, $db);
	$mysqli->set_charset("utf8");
	return $mysqli;
}

 ?>
