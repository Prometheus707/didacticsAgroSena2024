<?php
session_start();

require_once("../../conexiondb.php");
$formatos= array( '.jpg' , '.png' , '.pdf', '.gif');
  if(isset($_POST['enviar'])){

 $nombre=$_POST['nombre'];
 $descripcion=$_POST['descripcion'];
 $fechaRegistroTda = $_POST['fechaRegTdaIdenti'];



// este es el codigo de guardar diferentes tipos de archivos //

    $formatos= array( '.jpg' , '.png' , '.pdf','.docx','.xls','.mp3','.mp4', '.gif');
 		$nombreArchivo     =$_FILES ['archivo'] ['name'];
 		$nombreTmpArchivo = $_FILES ['archivo'] ['tmp_name'];
 		$ext= substr($nombreArchivo, strrpos( $nombreArchivo, '.' ));
 		if ( in_array($ext, $formatos)){
            $nombreArchivo = str_replace(' ', '_', $nombreArchivo); // Reemplazar espacios en blanco
 			if ( move_uploaded_file ( $nombreTmpArchivo , "../../pdf/$nombreArchivo" )) {
 				header('location: ../tdaIdentificacion.php?opcion1=true');
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
  if ( move_uploaded_file ( $nombreTmpArchivos , "../../pdf/$nombreArchivos" )) {
    header('location: ../tdaIdentificacion.php?opcion1=true');
  } else{
    echo  'Ocurrió un error subiendo el archivo, valida los permisos de la carpeta "archivos"' ;
  }
} else {
  echo  'por favor elija un archivo de diferente extensión' ;
}


mysqli_set_charset($conecta,"utf8");
// codigo de hecer varios insert into en la base de datos //
$consulta = "SELECT * FROM tda WHERE nombreTda = '".$nombre."'";

$resultado = $conecta->query($consulta);
if($resultado->num_rows >= 0)
{

$checkbox=$_POST['momento'];
foreach ($checkbox as $llave => $valor) {
  $ficha2= "INSERT INTO tda set idTipoTdas='$valor', nombreTda='$nombre', descripcionTda='$descripcion', rutaPDF='$nombreArchivo',enlace='$nombreArchivos', fechaRegistroTda='$fechaRegistroTda'  ";
  

  $ejecutar_insertar_ficha2=mysqli_query($conecta, $ficha2);
}






if($conecta->multi_query($consulta) === TRUE)
{
header('location: ../tdaIdentificacion.php?opcion1=true');

}
else
{
echo "Error: " . $consulta . "<br>" . $conecta->error;
}
}

$conecta->close();
}

?>
