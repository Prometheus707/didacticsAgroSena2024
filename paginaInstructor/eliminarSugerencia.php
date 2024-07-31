<?php

require_once("../conexiondb.php");

$id=$_GET['id'];

$sql = "DELETE FROM sugerencia WHERE idSugerencia=".$id;

if ($conecta->query($sql) === TRUE){
	header('location: sugerencia.php?opcion1=true');
}
else
{
	echo "Error al ejecutar la consulta: ".$conecta->error;
	$conecta->close();
}

?>
