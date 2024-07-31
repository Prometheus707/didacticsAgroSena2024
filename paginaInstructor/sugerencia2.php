<?php
session_start();
 ?>
<?php

	require_once("../conexiondb.php");

	$sugerencia=$_POST['sugerencia'];
  $id=$_POST['id'];


// este es el codigo de guardar diferentes tipos de archivos //
  $formatos= array( '.jpg' , '.png' , '.pdf', '.gif');
  $nombreArchivo     =$_FILES ['archivo'] ['name'];
  $nombreTmpArchivo = $_FILES ['archivo'] ['tmp_name'];
  $ext= substr($nombreArchivo, strrpos( $nombreArchivo, '.' ));
  if ( in_array($ext, $formatos)){
    if ( move_uploaded_file ( $nombreTmpArchivo , "../archivoInstruc/$nombreArchivo" )) {
     header('location: sugerencia.php?opcion1=true');
    } else{
      echo  'Ocurrió un error subiendo el archivo, valida los permisos de la carpeta "archivos"' ;
    }
  } else {
    echo  'por favor elija un archivo de diferente extensión' ;
  }


// codigo de subir fechas automaticamente //
date_default_timezone_set("America/Bogota");
$fecha=date("y,m,d");
// cierre de codigo//


mysqli_set_charset($conecta,"utf8");



		  	$consulta = "SELECT * FROM sugerencia inner join usuario on usuario.idUsuario=sugerencia.idUsuariofk where docUsuario=".$_SESSION['docUsuario'];

		  	$resultado = $conecta->query($consulta);

		  		if($resultado->num_rows >= 0)
		  		{
		  			$consulta = "INSERT INTO sugerencia (idUsuariofk,sugerencia,respuesta,comentario,pdfUsuario,fecha)
		  						VALUES ('$id','$sugerencia','Por responder','','$nombreArchivo','$fecha')";
		  					if($conecta->query($consulta) === TRUE)
		  					{
		  							header('location: sugerencia.php?opcion1=true');

		  					}
		  					else
		  					{
		  						echo "Error: " . $consulta . "<br>" . $conecta->error;
		  					}
		  		}

		$conecta->close();


	?>
