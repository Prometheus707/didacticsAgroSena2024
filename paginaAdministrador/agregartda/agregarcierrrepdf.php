<?php
session_start();
require_once("../../conexiondb.php");

if(isset($_POST['enviar'])){
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    
    $formatos = array('.pdf');
    $nombreArchivo = $_FILES['grafica']['name'];
    $nombreTmpArchivo = $_FILES['grafica']['tmp_name'];
    $ext = strtolower(substr($nombreArchivo, strrpos($nombreArchivo, '.')));
    
    if (in_array($ext, $formatos)){
        $nombreArchivo = str_replace(' ', '_', $nombreArchivo);
        if (move_uploaded_file($nombreTmpArchivo, "../../pdf/$nombreArchivo")) {
            // El archivo se subió correctamente
        } else {
            echo 'Ocurrió un error subiendo el archivo, valida los permisos de la carpeta "archivos"';
            
        }
    } else {
        header('location: ../tdaCierres.php');
        
    }

    $formato = array('.pdf');
    $nombreArchivos = $_FILES['enlace']['name'];
    $nombreTmpArchivos = $_FILES['enlace']['tmp_name'];
    $exte = strtolower(substr($nombreArchivos, strrpos($nombreArchivos, '.')));
    
    if (in_array($exte, $formato)){
        $nombreArchivos = str_replace(' ', '_', $nombreArchivos);
        if (move_uploaded_file($nombreTmpArchivos, "../../pdf/$nombreArchivos")) {
            // El archivo se subió correctamente
        } else {
            echo 'Ocurrió un error subiendo el archivo, valida los permisos de la carpeta "archivos"';
            
            
        }
    } else {
        header('location: ../tdaCierres.php');
    }

    // Parte modificada para el guardado seguro y redirección
    $consulta = "INSERT INTO reflexioncierrepdf (TituloRefPdf, descripcionRefPdf, pdfRefC, anexoR) 
                 VALUES (?, ?, ?, ?)";
    
    $stmt = $conecta->prepare($consulta);
    $stmt->bind_param("ssss", $nombre, $descripcion, $nombreArchivo, $nombreArchivos);
    
    if ($stmt->execute()) {
        // Redirigir en caso de éxito
        header('Location: ../tdaCierres.php?opcion1=true');
        exit();
    } else {
        // Redirigir en caso de error
        header('Location: ../tdaCierres.php?error=true');
        exit();
    }
    $stmt->close();
}

$conecta->close();
?>