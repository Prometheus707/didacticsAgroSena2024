<?php

$servername="localhost";
$username="root";
$password="";
$dbname="senovatda";


// creamos la conexion
$conecta = new mysqli ($servername, $username, $password, $dbname);


// verificamos la conexion
if ($conecta->connect_error) {
die("la conexion a fallado: " . $conecta->connect_error);
}
?>
