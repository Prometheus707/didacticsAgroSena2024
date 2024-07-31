<?php
session_start();
 ?>
<?php

require_once("../../conexiondb.php");
$formatos= array( '.jpg' , '.png' , '.jpeg');
  if(isset($_POST['enviar'])){

 $nombre=$_POST['nombre'];
 $descripcion=$_POST['descripcion'];


// este es el codigo de guardar diferentes tipos de archivos //

    $formatos= array( '.jpg' , '.png','.jpeg');
 		$nombreArchivo     =$_FILES ['grafica'] ['name'];
 		$nombreTmpArchivo = $_FILES ['grafica'] ['tmp_name'];
 		$ext= substr($nombreArchivo, strrpos( $nombreArchivo, '.' ));
 		if ( in_array($ext, $formatos)){
 			if ( move_uploaded_file ( $nombreTmpArchivo , "../../images/$nombreArchivo" )) {
 				header('location:../tdaEquipos.php?opcion1=true');
 			} else{
 				echo  'Ocurrió un error subiendo el archivo, valida los permisos de la carpeta "archivos"' ;
 			}
 		} else {
 			echo  'por favor elija un archivo de diferente extensión' ;
 		}

// cierre de codigo //



		  	$consulta = "SELECT * FROM conformarg";

		  	$resultado = $conecta->query($consulta);

		  		if($resultado->num_rows >= 0)
		  		{
		  			$consulta = "INSERT INTO conformarg (tituloConfor,descripcionConf,imagenConfor)
		  						VALUES ('$nombre','$descripcion','$nombreArchivo')";
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
