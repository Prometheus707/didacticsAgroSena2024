<?php

require_once("../conexiondb.php");


/* variables */

$order = "nombreTda DESC";
$url = basename($_SERVER["PHP_SELF"]);
$limit_end = 4;
$init = ($ini - 1) * $limit_end;

/* querys */
$count = "SELECT COUNT(*) FROM tda where idTipoTdas='1'";




$num = $conecta->query($count);
$x = $num->fetch_array();

$total = ceil($x[0] / $limit_end);
// se encarga de los caracteres //
mysqli_set_charset($conecta, "utf8");
//echo'mas comillas';
echo "<table border='1' class='table table-bordered table-hover' style='height: 20px'>";
echo "<thead>";
echo "<tr >";
echo "<th class='t2' style='background:#29a900; color:white'>Nombre</th>";
echo "<th class='t3'style='background:#29a900; color:white' >Descripción</th>";
echo "<th class='t5'style='background:#29a900; color:white'>Archivo</th>";
echo "<th class='t5'style='background:#29a900; color:white'>Anexo</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

$rs = mysqli_query($conecta, "SELECT DISTINCT  MAX(idTda) FROM tda where idTipoTdas='1'");
if ($row = mysqli_fetch_row($rs)) {
  $id = trim($row[0]);
}

$select = "SELECT * FROM tda inner join tipotda on tipotda.idTipoTda=tda.idTipoTdas where idTipoTdas='1' order by idTda DESC";
$select .= " LIMIT $init, $limit_end";
$c = $conecta->query($select);
while ($rows = $c->fetch_assoc()) {

  if( $rows['idTda']) {
      
    $varCadena = strlen ($rows["enlace"]);
    if($varCadena>0)
    {
      $enlaceHref = " <a href=../pdf/".$rows["enlace"]."> ";
      $no_pdf = " <img src='../images/ver.png' width='50%'>";
    }else
    {
      $no_pdf = " <img src='../images/no_pdf.png' width='50%'>";
      $enlaceHref="";
    }
    echo "<tr >";
    echo "<td >" . $rows['nombreTda'] . "</td>";
    echo "<td>" . $rows['descripcionTda'] . "</td>
        
    <td style='font-size:25px;'><a href=../pdf/". $rows["rutaPDF"] ."><img src='../images/ver.png'></a></td>
    <td> ".$enlaceHref." ". $no_pdf ."</a></td>";

    



    echo "</tr>";
  }

  if (['idTda'] < $id) {
    echo "<tr>";
    echo "<td>" . $rows['nombreTda'] . "</td>";
    echo "<td>" . $rows['descripcionTda'] . "</td>
        
          <td style='font-size:25px;'><a href=../pdf/" . $rows["rutaPDF"] . "><img src='../images/ver.png'></a></td>
          <td> ".$enlaceHref." ". $no_pdf ."</a></td>";


    echo "</tr>";
  }
}

echo "</tbody>";
echo "<table>";

/* numeración de registros [importante]*/
echo "<div class='pagination'>";
echo "<ul>";
/****************************************/
if (($ini - 1) == 0) {
  echo "<li style='background: #e2e2e2;'><a style='color:black' href='#'>&laquo;</a></li>";
} else {
  echo "<li style='background: #e2e2e2'><a style='color:black' href='$url?pos=" . ($ini - 1) . "'><b>&laquo;</b></a></li>";
}
/****************************************/
for ($k = 1; $k <= $total; $k++) {
  if ($ini == $k) {
    echo "<li style='background: #e2e2e2'><a style='color:black' href='#'><b>" . $k . "</b></a></li>";
  } else {
    echo "<li style='background: #e2e2e2'><a style='color:black' href='$url?pos=$k'>" . $k . "</a></li>";
  }
}
/****************************************/
if ($ini == $total) {
  echo "<li  style='background: #e2e2e2'><a style='color:black' href='#'>&raquo;</a></li>";
} else {
  echo "<li  style='background: #e2e2e2'><a style='color:black' href='$url?pos=" . ($ini + 1) . "'><b>&raquo;</b></a></li>";
}
/*******************END*******************/
echo "</ul>";
echo "</div>";

?>
<style>
  img {
    max-width:2vh;
    min-width:5vh;
    text-align: center;
  }

  @media screen and (max-width: 600px) {
    table {
      width: 100%;
      display: block;
      overflow-x: auto;
      font-size: 2vw;
      font-size: 2vh;
    }


    thead {
      display: none;
      font-size: 3vw;
      font-size: 2vh;
      height: 10px;
    }

    tr:nth-of-type(2n) {
      background-color: inherit;
    }

    tr td:first-child {
      background: #Ff6b00;
      color: white;
      width: 65vh;



    }

    tbody td {
      display: block;
      text-align: center;

      /* background:yellow; */
    }

    tbody tr:before {
      content: attr(data-th);
      display: block;
      text-align: center;
      background: #Ff6b00;

      font-style: oblique;
      font-size: 3vh;
      font-weight: 500;


    }

    /* .table tr:nth-of-type(1):before { content: ""; } */

  }

  /* wstilo paginado*/



  .pagination ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #FFC529;
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

  .t2 {
    width: 40%;
    font-size: 2vh;
    background-color: red;
    font-weight: 400;
    text-align: center;

  }

  .t3 {
    width: 55%;


    font-size: 2vh;
    font-weight: 400;
    text-align: center;

  }

  .t4 {
    width: 8%;


    font-size: 2vh;
    font-weight: 400;

  }

  .t5 {



    font-size: 2vh;
    font-weight: 400;
    text-align: center;

  }
</style>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    setTimeout(function() {
      $(".content").fadeOut(1500);
    }, 1296000);


  });
</script>