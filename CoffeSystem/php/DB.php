<?php
//Sintaxis de conexión de la base de datos de muestra para PHP y MySQL.

	//Conectar a la base de datos

	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="coffesystem";
	$usertable="usuarios";

	$con = mysqli_connect($hostname,$username, $password);
	mysqli_select_db($con,$dbname);

?>
