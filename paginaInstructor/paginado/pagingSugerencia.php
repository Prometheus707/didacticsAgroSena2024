<?php

const HOST = 'localhost';
const USER = 'root';
const PASSWD = '';
const DB = 'tdas';
const TABLE = 'tda';

/* variables */

$order="nombreTda ASC";
$url = basename($_SERVER ["PHP_SELF"]);
$limit_end = 3;
$init = ($ini-1) * $limit_end;

/* querys */
$count="SELECT COUNT(*) FROM sugerencia";


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
  echo "<table border='1' class='table table-bordered table-hover'>";
  echo "<thead>";
  echo "<tr style='text-align: center'>";
  echo "<th><b>#</b></th>
  <th>Sugerencia</th>
  <th>Fecha</th>
  <th>Nombre Instructor</th>
  <th style='width: 30%'>Respuesta</th>
  <th>Archivo</th>
  <th>ATENDER</th>
  <th>ELIMINAR</th>";
  echo "</tr>";
  echo "</thead>";
  echo "<tbody>";


  $select = "SELECT * FROM usuario inner join sugerencia on usuario.idUsuario=sugerencia.idUsuariofk order by idSugerencia DESC";
  $select .= " LIMIT $init, $limit_end";
  $c = $mysql->query($select);
  while($rows = $c->fetch_assoc())
  {
    echo "<tr style='text-align: center'>";
    echo "<td style=''>".$rows['idSugerencia']."</td>";
    echo "<td>".$rows['sugerencia']."</td>";
    echo "<td>".$rows['fecha']."</td>
          <td>".$rows['nombreUsuario']."</td>
          <td>".$rows['comentario']."</td>
          <td>".$rows['pdfUsuario']."</td>
          <td  style='text-align: center'> <a href='atenderSugerencia.php?id=".$rows["idSugerencia"]."'>  <button style='color: green;' class='btn tdasbtn'  type='button'  '> Atender </button> </a></td>
          <td  style='text-align: center'> <a href='eliminarSugerencia.php?id=".$rows["idSugerencia"]."'>  <button style='color: red;' class='btn tdasbtn'  type='button'   onclick='return ConfirmDelet()'> Eliminar </button> </a></td>
        ";


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
