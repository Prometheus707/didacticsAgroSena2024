<?php

require_once("../conexiondb.php");
$id=$_POST['id'];

$regional=$_POST['regional'];
$correo=$_POST['correoUsu'];
$centro=$_POST['centro'];

$area=$_POST['area'];
$telefono=$_POST['telefonoUsu'];

mysqli_set_charset($conecta,"utf8");

$sql = "UPDATE usuario SET correoUsuario='$correo', telefonoUsuario='$telefono', idRegional='$regional', idCentro='$centro', idArea='$area' WHERE docUsuario=".$id;

if ($conecta->query($sql) === TRUE){

	header('location: usuario.php?opcion3=true');
}
else
{
	echo "Error al ejecutar la consulta: ".$conecta->error;
}
$conecta->close();


 ?>
