<?php

require_once("../conexiondb.php");
$id=$_POST['id'];
$nombre=$_POST['nombretda'];
$descripcion=$_POST['descripcion'];
$momento=$_POST['momento'];


// este es el codigo de guardar diferentes tipos de archivos //

		$formatos= array( '.jpg' , '.png' , '.pdf','.docx','.xls','.mp3','.mp4', '.gif');
		$nombreArchivo     =$_FILES ['archivo'] ['name'];
		$nombreTmpArchivo = $_FILES ['archivo'] ['tmp_name'];
		$ext= substr($nombreArchivo, strrpos( $nombreArchivo, '.' ));
		if ( in_array($ext, $formatos)){
			$nombreArchivo = str_replace(' ', '_', $nombreArchivo); // Reemplazar espacios en blanco
			if ( move_uploaded_file ( $nombreTmpArchivo , "../pdf/$nombreArchivo" )) {
				header('location: tdaTransferencia.php?opcion8=true');
			} else{
				echo  'Ocurrió un error subiendo el archivo, valida los permisos de la carpeta "archivos"' ;
			}
		} else {
			echo  'por favor elija un archivo de diferente extensión' ;
		}

// cierre de codigo //
$formato= array( '.jpg' , '.png' , '.pdf','.docx','.xls','.mp3','.mp4', '.gif');
$nombreArchivos     =$_FILES ['enlace'] ['name'];
$nombreTmpArchivos = $_FILES ['enlace'] ['tmp_name'];
$exte= substr($nombreArchivos, strrpos( $nombreArchivos, '.' ));
if ( in_array($exte, $formato)){
	$nombreArchivos = str_replace(' ', '_', $nombreArchivos); // Reemplazar espacios en blanco
  if ( move_uploaded_file ( $nombreTmpArchivos , "../pdf/$nombreArchivos" )) {
    header('location: tdaTransferencia.php?opcion8=true');
  } else{
    echo  'Ocurrió un error subiendo el archivo, valida los permisos de la carpeta "archivos"' ;
  }
} else {
  echo  'por favor elija un archivo de diferente extensión' ;
}

mysqli_set_charset($conecta,"utf8");

$sql = "UPDATE tda SET nombreTda='$nombre', descripcionTda='$descripcion', idTipoTdas='$momento',rutaPDF='$nombreArchivo',enlace='$nombreArchivos' WHERE idTda=".$id;

if ($conecta->query($sql) === TRUE){

	header('location: tdaTransferencia.php?opcion8=true');
}
else
{
	echo "Error al ejecutar la consulta: ".$conecta->error;
}
$conecta->close();


 ?>
