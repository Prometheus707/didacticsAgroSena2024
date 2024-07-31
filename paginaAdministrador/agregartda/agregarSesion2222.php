<?php
	session_start();
	require_once("../../conexiondb.php");
	$formatos= array( '.jpg' , '.png');
	if(isset($_POST['enviar'])){

	$nombre=$_POST['nombre'];
	$descripcion=$_POST['descripcion'];
    $formatos= array( '.pdf','.docx');
 		ECHO $nombreArchivo =$_FILES['grafica']['name'];
 		ECHO "<br>".$nombreTmpArchivo = $_FILES ['grafica']['tmp_name']; exit();
 		$ext= substr($nombreArchivo, strrpos( $nombreArchivo, '.' ));
 		if ( in_array($ext, $formatos)){
			$nombreArchivo = str_replace(' ', '_', $nombreArchivo); // Reemplazar espacios en blanco
 			if ( move_uploaded_file ( $nombreTmpArchivo , "../../pdf1/$nombreArchivo" )) {
 			    /*echo  "Felicitaciones, archivo $nombreArchivo subido exitosamente" ;*/
 				header('location:../iniciosesion.php?opcion1=true');
 			} else{
 				echo  'Ocurrió un error subiendo el archivo, valida los permisos de la carpeta "archivos"' ;
 			}
 		} else {
 			echo  'por favor elija un archivo de diferente extensión' ;

 		}
// cierre de codigo //
$formato= array( '.jpg' , '.png' , '.pdf','.docx','.xls','.mp3','.mp4', '.gif');
$nombreArchivos     =$_FILES ['enlace']['name'];
$nombreTmpArchivos = $_FILES ['enlace']['tmp_name'];
$exte= substr($nombreArchivos, strrpos( $nombreArchivos, '.' ));
if ( in_array($exte, $formato)){
	$nombreArchivos = str_replace(' ', '_', $nombreArchivos); // Reemplazar espacios en blanco
  if ( move_uploaded_file ( $nombreTmpArchivos , "../../pdf1/$nombreArchivos" )) {
   /* echo  "Felicitaciones, archivo $nombreArchivos subido exitosamente" ;*/
  } else{
    echo  'Ocurrió un error subiendo el archivo, valida los permisos de la carpeta "archivos"' ;
  }
} else {
  echo  'por favor elija un archivo de diferente extensión' ;
}

		  	$consulta = "SELECT * FROM iniciosesion";

		  	$resultado = $conecta->query($consulta);

		  		if($resultado->num_rows >= 0)
		  		{
		  			$consulta = "INSERT INTO iniciosesion (nombreInicio,descripcionInicioS,pdfInicioS,anexoS)
		  						VALUES ('$nombre','$descripcion','$nombreArchivo','$nombreArchivos')";
		  					if($conecta->query($consulta) === TRUE)
		  					{


		  					}
		  					else
		  					{
		  						echo "Error: " . $consulta . "<br>" . $conecta->error;
		  					}
		  		}


		$conecta->close();

}
	?>
