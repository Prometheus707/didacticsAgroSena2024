<?php

require_once("../conexiondb.php");

$id=$_GET['id'];

$sql = "DELETE FROM usuario WHERE docUsuario=".$id;

if ($conecta->query($sql) === TRUE){
	header('location: usuario.php?opcion9=true');
}
else
{
	echo "Error al ejecutar la consulta: ".$conecta->error;
	$conecta->close();
}

?>
