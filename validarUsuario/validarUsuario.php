<?php
// Inicia el almacenamiento en búfer de salida
ob_start();

session_start();
include('../contador/contUsuarios.php');
require_once("../conexiondb.php");

// Función para registrar mensajes de depuración
function debug($message) {
    error_log($message);
}

debug("Script iniciado");

$n_user = isset($_POST['userU']) ? $_POST['userU'] : '';
$clave = isset($_POST['pass']) ? $_POST['pass'] : '';

debug("Usuario: " . $n_user);

$sql = "SELECT * FROM usuario WHERE docUsuario=? AND claveUsuario=?";
$stmt = $conecta->prepare($sql);
$stmt->bind_param("ss", $n_user, $clave);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado === false) {
    debug("Error en la consulta: " . $conecta->error);
    exit();
}

debug("Número de filas: " . $resultado->num_rows);

if ($resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();
    
    $_SESSION['nombre'] = $row["nombreUsuario"];
    $_SESSION['apellido'] = $row["apellidoUsuario"];
    $_SESSION['docUsuario'] = $n_user;
    $_SESSION['claveUsuario'] = $clave;
    $_SESSION['idUsuario'] = $row["idUsuario"];
    
    debug("Usuario encontrado. Nombre: " . $_SESSION['nombre']);
    
    if ($row["estado"] == '1') {
        if ($row["idRol"] == 2) {
            debug("Redirigiendo a administrador...");
            $redirect = '../paginaAdministrador/administrador.php';
        } elseif ($row["idRol"] == 1) {
            debug("Redirigiendo a instructor...");
            insertarContador();
            $redirect = '../paginaInstructor/instructor.php';
        }
    } else {
        debug("Usuario inactivo. Redirigiendo...");
        $redirect = '../index.php?opcion21=true';
    }
} else {
    debug("Usuario no encontrado. Redirigiendo...");
    $redirect = '../index.php?opcion22=true';
}

$resultado->close();
$conecta->close();

// Limpia cualquier salida almacenada en el búfer
ob_end_clean();

// Realiza la redirección
if (isset($redirect)) {
    header("Location: $redirect");
    exit();
}

debug("Fin del script (no debería llegar aquí)");
?>