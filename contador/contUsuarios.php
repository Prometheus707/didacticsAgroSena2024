<?php
session_start();
include("../conexiondb.php");
//INSERTAR ID DE USUARIO INSTRUCTOR
function insertarContador()
{
    include("../conexiondb.php");
    $jTableResult = array();
    $jTableResult['msj'] = "";
    $idUsuario = $_SESSION['idUsuario'];
    $resultado = $conecta->query("SELECT * FROM contadorusuarios WHERE idUsuCont=$idUsuario");
    if ($resultado->num_rows > 0) {
        echo "el usuario ya esta registrado en contador usuarios";
    } else {
        $query = $conecta->prepare("INSERT INTO contadorusuarios (idUsuCont) VALUES (?)");
        $query->bind_param("i", $_SESSION['idUsuario']);
        if ($query->execute()) {
            mysqli_commit($conecta);
            $jTableResult['msj'] = "DATO GUARDADO CORRECTAMENTE";
            $jTableResult['resultd'] = "1";
        } else {
            mysqli_rollback($conecta);
            $jTableResult['msj'] = "  ERROR AL GUARDAR. INTENTE NUEVAMENTE.";
            $jTableResult['resultd'] = "0";
        }
        $query->close();
    }
    print json_encode($jTableResult);
}
switch ($_REQUEST['action']) {

    case 'UsersXarea':

        $jTableResult = array();
        $jTableResult['cardAreaxUser']="";
        // $jTableResult['msj'] = "";
        $resultado = $conecta->query("SELECT usuario.idArea, area.nombreArea AS nombreAreaUser, COUNT(usuario.idUsuario) AS          numeroPersonasxArea   
            FROM contadorusuarios 
            INNER JOIN usuario ON contadorusuarios.idUsuCont = usuario.idUsuario 
            INNER JOIN area ON usuario.idArea = area.idArea 
            WHERE usuario.idRol = 1
            GROUP BY area.nombreArea 
                                    ");
        $jTableResult['cardAreaxUser'] .= "<div class='card'>
           <div class='card-header' style='background:#29A900; color: white;'>
               <h5 class='card-title'><center>N° usuarios x area</center></h5>
               <div class=' d-flex justify-content-end align-items-center'>   
               </div>
           </div>
           <div class='card-body' style='max-height: 400px; overflow-y: auto;'>";
        while ($registro = mysqli_fetch_array($resultado)) {
            $jTableResult['cardAreaxUser'] .= "<div class='card mb-3'>
               <div class='card-body' '>
                   <div class='row'>
                       <div class='col-sm-10' >
                           <h6 class='modal-title'><strong>" . $registro['nombreAreaUser'] . "</strong></h6>
                       </div>												
                       <div class='col-sm-2' >
                           <h6 class='modal-title'>" . $registro['numeroPersonasxArea'] . "</h6>
                       </div>           
                   </div>
               </div>
           </div>";
        }

        $jTableResult['cardAreaxUser'] .= "    </div>
</div>";
        print json_encode($jTableResult);
        break;
}
