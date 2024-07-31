<?php

require_once("../conexiondb.php");
$id=$_POST['idInstructor'];

$correo=$_POST['correoUsu'];
$nombre=$_POST['nombreUsu'];
$apellido=$_POST['apellidoUsu'];
$telefono=$_POST['telefonoUsu'];

mysqli_set_charset($conecta,"utf8");

$sql = "UPDATE usuario SET nombreUsuario='$nombre', apellidoUsuario='$apellido', correoUsuario='$correo', telefonoUsuario='$telefono' WHERE docUsuario=".$id;

if ($conecta->query($sql) === TRUE){

	header('location: datosUsuario.php?opcion1=true');
}
else
{
	echo "Error al ejecutar la consulta: ".$conecta->error;
}
$conecta->close();


 ?>
