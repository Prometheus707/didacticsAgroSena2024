<?php

require_once("../conexiondb.php");
$id=$_POST['idInstructor'];

$nuevaClave=$_POST['nuevaClave'];

// echo $id;
// echo $nuevaClave;
mysqli_set_charset($conecta,"utf8");

$sql = "UPDATE usuario SET claveUsuario='$nuevaClave' WHERE docUsuario=".$id;

if ($conecta->query($sql) === TRUE){

	header('location: datosUsuario.php?opcion1=true');
}
else
{
	echo "Error al ejecutar la consulta: ".$conecta->error;
}
$conecta->close();


 ?>
