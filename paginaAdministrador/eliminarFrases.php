<?php

require_once("../conexiondb.php");
$id=$_GET['id'];

mysqli_set_charset($conecta,"utf8");

$sql = "DELETE FROM frases WHERE idFrases=".$id;

if ($conecta->query($sql) === TRUE){

	header('location: frases.php?opcion9=true');
}
else
{
	echo "Error al ejecutar la consulta: ".$conecta->error;
}
$conecta->close();

?>