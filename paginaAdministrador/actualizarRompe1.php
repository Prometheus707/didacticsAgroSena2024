<?php

require_once("../conexiondb.php");
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];


// este es el codigo de guardar diferentes tipos de archivos //

		$formatos= array( '.jpg' , '.png');
		$nombreArchivo     =$_FILES ['grafica'] ['name'];
		$nombreTmpArchivo = $_FILES ['grafica'] ['tmp_name'];
		$ext= substr($nombreArchivo, strrpos( $nombreArchivo, '.' ));
		if ( in_array($ext, $formatos)){
			if ( move_uploaded_file ( $nombreTmpArchivo , "../images/$nombreArchivo" )) {
				header('location: tdaRompe.php?opcion8=true');
			} else{
				echo  'Ocurrió un error subiendo el archivo, valida los permisos de la carpeta "archivos"' ;
			}
		} else {
			echo  'por favor elija un archivo de diferente extensión' ;
		}

// cierre de codigo //



mysqli_set_charset($conecta,"utf8");

$sql = "UPDATE rompehielos SET tituloRompeH='$nombre',descripcionRompe='$descripcion',imagenRpmpeH='$nombreArchivo' WHERE idRompeH=".$id;

if ($conecta->query($sql) === TRUE){

	header('location: tdaRompe.php?opcion8=true');
}
else
{
	echo "Error al ejecutar la consulta: ".$conecta->error;
}
$conecta->close();


 ?>
