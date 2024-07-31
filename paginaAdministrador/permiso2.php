<?php


require_once("../conexiondb.php");
$id=$_POST['idInstructor'];

$estado=$_POST['estado'];
$rol=$_POST['rol'];


	header('location:usuario.php?opcion4=true');


mysqli_set_charset($conecta,"utf8");

$sql ="UPDATE usuario SET estado='$estado', idRol='$rol' WHERE docUsuario=".$id;

if ($conecta->query($sql) === TRUE){

	header('location:usuario.php?opcion4=true');
}
else
{
	echo "Error al ejecutar la consulta: ".$conecta->error;
}
$conecta->close();

?>