<?php

$servername="localhost";
$username="id22407094_basesena";
$password ="baseSena1*";
$dbname="id22407094_sena";


// creamos la conexion
$conecta = new mysqli ($servername, $username, $password, $dbname);


// verificamos la conexion
if ($conecta->connect_error) {
die("la conexion a fallado: " . $conecta->connect_error);
}
?>