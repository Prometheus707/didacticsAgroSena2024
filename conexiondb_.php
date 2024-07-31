<?php
// include('config.php');
function Conectarse(){
	$servername 	= "localhost";
	$db 			= "udidactl_tda";
	$username 		= "root";
	$password 		= "";
	$conn = mysqli_connect($servername, $username, $password, $db);
	if (!$conn) {die("Error de Conexion: ".mysqli_connect_error());	}
	else		{  return $conn;									} 
}
?> 