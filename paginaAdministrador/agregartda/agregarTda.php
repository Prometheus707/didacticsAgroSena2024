<?php
session_start();

require_once("../../conexiondb.php");

$formatos = array('.jpg', '.png', '.pdf', '.docx', '.xls', '.mp3', '.mp4', '.gif');

if (isset($_POST['enviar'])) {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $fechaRegistroTda = $_POST['fechaRegTda'];

    // Verificación y subida del primer archivo
    $nombreArchivo = $_FILES['archivo']['name'];
    $nombreTmpArchivo = $_FILES['archivo']['tmp_name'];
    $ext = substr($nombreArchivo, strrpos($nombreArchivo, '.'));

    if (in_array($ext, $formatos)) {
        $nombreArchivo = str_replace(' ', '_', $nombreArchivo); // Reemplazar espacios en blanco
        if (move_uploaded_file($nombreTmpArchivo, "../../pdf/$nombreArchivo")) {
            header('location: ../tdaReflexion.php?opcion1=true');
        } else {
            echo 'Ocurrió un error subiendo el archivo, valida los permisos de la carpeta "pdf"';
        }
    } else {
        header('location: ../tdaReflexion.php?opcion7=true');
    }

    // Verificación y subida del segundo archivo
    $nombreArchivos = $_FILES['enlace']['name'];
    $nombreTmpArchivos = $_FILES['enlace']['tmp_name'];
    $exte = substr($nombreArchivos, strrpos($nombreArchivos, '.'));

    if (in_array($exte, $formatos)) {
        $nombreArchivos = str_replace(' ', '_', $nombreArchivos); // Reemplazar espacios en blanco
        if (move_uploaded_file($nombreTmpArchivos, "../../pdf/$nombreArchivos")) {
           header('location: ../tdaReflexion.php?opcion1=true');
        } else {
            echo 'Ocurrió un error subiendo el archivo, valida los permisos de la carpeta "pdf"';
        }
    } else {
        echo 'Por favor, elija un archivo de diferente extensión';
    }

    mysqli_set_charset($conecta, "utf8");

    // Código para insertar los datos en la base de datos
    $consulta = "SELECT * FROM tda WHERE nombreTda = '$nombre'";

    $resultado = $conecta->query($consulta);
    if ($resultado->num_rows >= 0) {
        $checkbox = $_POST['momento'];
        foreach ($checkbox as $llave => $valor) {
            $ficha2 = "INSERT INTO tda (idTipoTdas, nombreTda, descripcionTda, rutaPDF, enlace, fechaRegistroTda) 
                        VALUES ('$valor', '$nombre', '$descripcion', '$nombreArchivo', '$nombreArchivos', '$fechaRegistroTda')";
            $ejecutar_insertar_ficha2 = mysqli_query($conecta, $ficha2);
        }

        if ($conecta->multi_query($consulta) === TRUE) {
            header('location: ../tdaReflexion.php?opcion1=true');
        } else {
            echo "Error: " . $consulta . "<br>" . $conecta->error;
        }
    }

    $conecta->close();
}
?>