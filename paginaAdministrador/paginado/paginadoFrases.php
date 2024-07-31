<?php
require_once("../conexiondb.php");


/* variables */

$order="nombreTda ASC";
$url = basename($_SERVER ["PHP_SELF"]);
$limit_end = 3;
$init = ($ini-1) * $limit_end;

/* querys */
$count="SELECT COUNT(*) FROM frases";




  $num = $conecta->query($count);
  $x = $num->fetch_array();

  $total = ceil($x[0]/$limit_end);
  // se encarga de los caracteres //
 mysqli_set_charset($conecta,"utf8");
  echo "<table border='1'  class='table table-bordered table-hover'>
                  <thead> <tr>
                   <th class='nt2' style='background:#29a900; color:white; width:31%; text-align:center'>Nombre</th>
                   <th class='nt3' style='background:#29a900; color:white; width:41%; text-align:center'>Descripción</th>
                	<th class='nt4'style='background:#29a900; color:white;width: 1%; text-align:center'>Archivo</th>
                  <th class='nt4'style='background:#29a900; color:white;width: 1%; text-align:center'>Anexo</th>
                  <th class='nt4' style='background:#29a900; color:white;width:1%; text-align:center'>Actualizar</th>
                  <th class='nt4' style='background:#29a900; color:white;width:1%; text-align:center'>Eliminar</th>
                  </tr>
				      </thead>";
  echo "<tbody>";

  $rs = mysqli_query($conecta, "SELECT DISTINCT  MAX(idFrases) FROM frases");
  if ($row = mysqli_fetch_row($rs)) {
  $id = trim($row[0]);


  }
  $select = "SELECT * FROM frases ORDER BY idFrases DESC";
  $select .= " LIMIT $init, $limit_end";
  $c = $conecta->query($select);
  while($rows = $c->fetch_assoc())
  {
    if( $rows['idFrases'] ) {
      
      $varCadena = strlen ($rows["anexoF"]);
      if($varCadena>0)
      {
        $enlaceHref = " <a href=../pdf/".$rows["anexoF"]."> ";
        $no_pdf = " <img src='../images/ver.png' width='50%'>";
      }else
      {
        $no_pdf = " <img src='../images/no_pdf.png' width='50%'>";
        $enlaceHref="";
      }
    echo "<tr>";
    echo "<td style='text-align:center'>".$rows['nombreFrases']."</td>";
    echo "<td style='text-align:center'>".$rows['descripcionFrases']."</td>


          <td style='text-align:center'><a href=../pdf/".$rows["pdfFrases"]."><img src='../images/ver.png' width='40%'></a></td>
          <td> ".$enlaceHref." ". $no_pdf ."</a></td>
          <td style='text-align:center'> <a href='actualizarFrases.php?id=".$rows['idFrases']."'> <input  class='btn btn-success' style='color: white; font-size: 14px' type='button' value=' Actualizar'></a></td>
          <td style='text-align:center'> <a href='eliminarFrases.php?id=".$rows['idFrases']."'> <input  class='btn btn-danger' style='color: white; font-size: 14px' type='button' value=' Eliminar'></a></td>";


    echo "</tr>";
    }
    if(['idFrases'] < $id ) {
      echo "<tr>";
      echo "<td style='text-align:center'>".$rows['nombreFrases']."</td>";
      echo "<td style='text-align:center'>".$rows['descripcionFrases']."</td>


            <td style='text-align:center'><a href=../pdf/".$rows["pdfFrases"]."><img src='../images/ver.png' width='40%'></a></td>
            <td> ".$enlaceHref." ". $no_pdf ."</a></td>
            <td style='text-align:center'> <a href='actualizarFrases.php?id=".$rows['idFrases']."'>  <input  class='btn btn-success' style='color: white; font-size: 14px' type='button' value=' Actualizar'></a></td>
            <td style='text-align:center'> <a href='eliminarFrases.php?id=".$rows['idFrases']."'> <input  class='btn btn-danger' style='color: white; font-size: 14px' type='button' value=' Eliminar'></a></td>";


      echo "</tr>";
      }
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

?>
<style>
img{
	max-width:10vh;
	min-width:5vh;
}
@media screen and (max-width: 600px) {
       table {
           width:100%;
		     display: block;
       overflow-x: auto;
	     font-size:3vw;
   font-size:2vh;
       }


       thead {
           display: none;
		   	     font-size:3vw;
         font-size:2vh;
       }
       tr:nth-of-type(2n) {
           background-color: inherit;
       }
       tr td:first-child {
           background:  #Ff6b00;
		   color:white;
		   width:100%;


       }
       tbody td {
           display: block;
           text-align:center;

   /* background:yellow; */
       }
       tbody tr:before {
           content: attr(data-th);
           display: block;
           text-align:center;
		    background: #Ff6b00;
		   	  font-family:  "Latin Modern Roman 10";
	  font-style: oblique;
	  font-size:3vh;
	  font-weight: 500;


       }
	   		/* .table tr:nth-of-type(1):before { content: ""; } */

}
/* wstilo paginado*/



.pagination  ul{
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: white;
}

.pagination li {
  float: left;
}

.pagination li a {
  display: block;
  color: white;
  text-align: center;
  padding: 5px 9px;
  text-decoration: none;
  font-size: 2vh;
}

#bo li a:hover {
  background-color: #FABC15;
  color: white;
}

th {
	    background: #Ff6b00;
}

.nt2{
	background:#Ff6b00;
   font-size:2vh;
     font-weight: 200;
	width:20%;
}.nt3{
	background:#Ff6b00;
   font-size:2vh;
     font-weight: 200;
	width:60%;
}.nt4{
	background:#Ff6b00;
   font-size:2vh;
     font-weight: 200;
	width:20%;
}



</style>
