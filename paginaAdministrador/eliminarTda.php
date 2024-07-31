<?php

require_once("../conexiondb.php");

$id=$_GET['id'];

$sql = "DELETE FROM tda WHERE idTda=".$id;

if ($conecta->query($sql) === TRUE){
	header('location: tda.php?opcion3=true');
}
else
{
	echo "Error al ejecutar la consulta: ".$conecta->error;
	$conecta->close();
}

?>
