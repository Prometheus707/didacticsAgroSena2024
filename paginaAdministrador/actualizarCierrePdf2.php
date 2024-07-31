<?php

require_once("../conexiondb.php");
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];


// este es el codigo de guardar diferentes tipos de archivos //

		$formatos= array( '.jpg' , '.png','.pdf');
		$nombreArchivo     =$_FILES ['grafica'] ['name'];
		$nombreTmpArchivo = $_FILES ['grafica'] ['tmp_name'];
		$ext= substr($nombreArchivo, strrpos( $nombreArchivo, '.' ));
		if ( in_array($ext, $formatos)){
			$nombreArchivo = str_replace(' ', '_', $nombreArchivo); // Reemplazar espacios en blanco
			if ( move_uploaded_file ( $nombreTmpArchivo , "../pdf/$nombreArchivo" )) {
				header('location: tdaCierres.php?opcion8=true');
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
    echo  "Felicitaciones, archivo $nombreArchivos subido exitosamente" ;
  } else{
    echo  'Ocurrió un error subiendo el archivo, valida los permisos de la carpeta "archivos"' ;
  }
} else {
  echo  'por favor elija un archivo de diferente extensión' ;
}

mysqli_set_charset($conecta,"utf8");

$sql = "UPDATE reflexioncierrepdf SET TituloRefPdf='$nombre',descripcionRefPdf='$descripcion',pdfRefC='$nombreArchivo', anexoR='$nombreArchivos'  WHERE idReflexionCPdf=".$id;

if ($conecta->query($sql) === TRUE){

	header('location: tdaCierres.php?opcion8=true');
}
else
{
	echo "Error al ejecutar la consulta: ".$conecta->error;
}
$conecta->close();


 ?>