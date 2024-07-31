<?php

require_once("../conexiondb.php");


/* variables */

$order="nombreTda ASC";
$url = basename($_SERVER ["PHP_SELF"]);
$limit_end = 3;
$init = ($ini-1) * $limit_end;

/* querys */
$count="SELECT COUNT(*) FROM usuario ";


/* conexión al servidor de base de datos */
$mysql = new mysqli(HOST, USER, PASSWD, DB);

if ($mysql->connect_error)
{
  die("Error al conectarse al servidor");

}else{

  $num = $mysql->query($count);
  $x = $num->fetch_array();

  $total = ceil($x[0]/$limit_end);
  // se encarga de los caracteres //
 mysqli_set_charset($mysql,"utf8");
  echo "<table border='1' class=' table-bordered table-hover'>";
  echo "<thead>";
  echo "<tr style='text-align:center'>";
  echo "<th><b>Documento</b></th>";
  echo "<th><b>Nombre</b></th>";
  echo "<th><b>Apellido</b></th>";
  echo "<th><b>Teléfono</b></th>";
  echo "<th><b>Correo</b></th>";
  echo "<th><b>Estado</b></th>";
  echo "<th><b>Rol</b></th>";
  echo "<th><b>Permisos</b></th>";
  echo "<th><b>Actualizar</b></th>";
  echo "<th><b>Eliminar</b></th>";
  echo "</tr>";
  echo "</thead>";
  echo "<tbody>";


  $select = "SELECT * FROM usuario inner join estado on estado.idEstado=usuario.estado inner join rol on rol.idRol=usuario.idRol ";
  $select .= " LIMIT $init, $limit_end";
  $c = $mysql->query($select);
  while($rows = $c->fetch_assoc())
  {
    echo "<tr style='text-align:center;'>";
    echo "<td style='padding-bottom:4%;padding-top:4%'>".$rows['docUsuario']."</td>";
    echo "<td>".$rows['nombreUsuario']."</td>";
    echo "<td>".$rows['apellidoUsuario']."</td>
          <td>".$rows['telefonoUsuario']."</td>
          <td>".$rows['correoUsuario']."</td>
          <td>".$rows['nombreEstado']."</td>
          <td>".$rows['nombreRol']."</td>
          <td> <a href='permiso.php?id=".$rows["docUsuario"]."'> <input  class='btn tdasbtn' style='color: green;'  type='button' value=' Permiso'></a></td>
        	<td> <a href='actualizarInstruc.php?id=".$rows["docUsuario"]."'> <input style='color: green;' class='btn tdasbtn'  type='button' value=' Actualizar'></a></td>
    			<td> <a href='eliminarUsu.php?id=".$rows["docUsuario"]."'>  <button type='button' style='color: red;' class='btn tdasbtn'  onclick='return ConfirmDelet()'> eliminar </button> </a></td>";



    echo "</tr>";
  }

  echo "</tbody>";
  echo "<table>";

  /* numeración de registros [importante]*/
  echo "<div class='pagination'>";
  echo "<ul>";
  /****************************************/
  if(($ini - 1) == 0)
  {
    echo "<li style='background: #e2e2e2;'><a style='color:black' href='#'>&laquo;</a></li>";
  }
  else
  {
    echo "<li style='background: #e2e2e2'><a style='color:black' href='$url?pos=".($ini-1)."'><b>&laquo;</b></a></li>";
  }
  /****************************************/
  for($k=1; $k <= $total; $k++)
  {
    if($ini == $k)
    {
      echo "<li style='background: #e2e2e2'><a style='color:black' href='#'><b>".$k."</b></a></li>";
    }
    else
    {
      echo "<li style='background: #e2e2e2'><a style='color:black' href='$url?pos=$k'>".$k."</a></li>";
    }
  }
  /****************************************/
  if($ini == $total)
  {
    echo "<li  style='background: #e2e2e2'><a style='color:black' href='#'>&raquo;</a></li>";
  }
  else
  {
    echo "<li  style='background: #e2e2e2'><a style='color:black' href='$url?pos=".($ini+1)."'><b>&raquo;</b></a></li>";
  }
  /*******************END*******************/
  echo "</ul>";
  echo "</div>";
}
?>
