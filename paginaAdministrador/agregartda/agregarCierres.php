<?php
session_start();
require_once("../../conexiondb.php");

$formatos = array('.jpg', '.png', '.jpeg');

if(isset($_POST['enviar'])){
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $archivo_subido = false;

    // Función para subir archivo
    function subirArchivo($archivo, $destino, $formatos_permitidos) {
        if(isset($_FILES[$archivo]) && $_FILES[$archivo]['error'] == 0) {
            $nombre_archivo = $_FILES[$archivo]['name'];
            $tmp_nombre = $_FILES[$archivo]['tmp_name'];
            $ext = strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION));
            if(in_array(".$ext", $formatos_permitidos)) {
                $nombre_archivo = time() . '_' . str_replace(' ', '_', $nombre_archivo); // Añade timestamp para evitar sobrescribir
                if(move_uploaded_file($tmp_nombre, $destino . $nombre_archivo)) {
                    return $nombre_archivo;
                }
            }
        }
        return false;
    }

    // Subir archivo
    $nombreArchivo = subirArchivo('grafica', "../../images/", $formatos);
    if($nombreArchivo) {
        $archivo_subido = true;
    } else {
        header('Location: ../tdaCierres.php?error=upload');
        exit();
    }

    // Si el archivo se subió correctamente, guardar en la base de datos
    if($archivo_subido) {
        $consulta = "INSERT INTO reflexioncierre (tituloRef, descripcionRef, imagenRef) VALUES (?, ?, ?)";
        $stmt = $conecta->prepare($consulta);
        $stmt->bind_param("sss", $nombre, $descripcion, $nombreArchivo);
        if($stmt->execute()) {
            // Redirigir con mensaje de éxito
            header('Location: ../tdaCierres.php?opcion1=true');
            exit();
        } else {
            // Redirigir con mensaje de error de base de datos
            header('Location: ../tdaCierres.php?error=db');
            exit();
        }
        $stmt->close();
    }

    $conecta->close();
}
?>