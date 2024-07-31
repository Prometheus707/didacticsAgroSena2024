<?php




/* variables */


$order="nombreTda ASC";
$url = basename($_SERVER ["PHP_SELF"]);
$limit_end = 5;
$init = ($ini-1) * $limit_end;

/* querys */
$count="SELECT COUNT(*) FROM usuario ";



  $num = $conecta->query($count);
  $x = $num->fetch_array();

  $total = ceil($x[0]/$limit_end);
  // se encarga de los caracteres //
  
 mysqli_set_charset($conecta,"utf8");

  echo "<table border='1' class=' table-bordered table-hover'>";
  echo "<thead>";
  echo "<tr >";


  //echo "<th class='t2' style='background:#29a900; color:white'>N.I</th>";
  echo "<th class='t3' style='background:#29a900; color:white; width:51%;'>Usuario</th>";
  // echo "<th class='t5' style='background:#29a900; color:white'>Teléfono</th>";
  // echo "<th class='t5' style='background:#29a900; color:white'>Correo</th>";
  echo "<th class='t6' style='background:#29a900; color:white; width:auto;'>Rol</th>";
  echo "<th class='t6' style='background:#29a900; color:white; width:auto;'>Estado</th>";
  echo "<th class='t7' style='background:#29a900; color:white; width:49%; '>Opciones</th>";




  echo "</tr>";
  echo "</thead>";
  echo "<tbody>";


  $select = "SELECT * FROM usuario inner join estado on estado.idEstado=usuario.estado inner join rol on rol.idRol=usuario.idRol ";
  $select .= " LIMIT $init, $limit_end";
  $c = $conecta->query($select);
  while($rows = $c->fetch_assoc())
  {
    echo "<tr style='text-align:center;'>";
   
    
    echo "<td class='t33' align='left' >".$rows['nombreUsuario']." ".$rows['apellidoUsuario']."</td>";
    echo"<td>".$rows['nombreEstado']."</td>";
          echo"
          <td>".$rows['nombreRol']."</td>
          <td style='font-size:25px;padding-left:1%;color:black;'><a href='permiso.php?id=".$rows["docUsuario"]."'><button type='button' class='btn btn-warning' style='margin-right:0.3rem'>Permisos</button></a>";

          
    
          echo"
        	 <a href='actualizarInstruc.php?id=".$rows["docUsuario"]."'><button type='button' class='btn btn-success'>Actualizar</button></a>";
          echo"
    		 <a href='eliminarUsu.php?id=".$rows["docUsuario"]."'>  <button type='button' class='btn btn-danger' style='color: white ;'  onclick='return ConfirmDelet()'> Eliminar </button> </a></td>";



    echo "</tr>";
  }

  echo "</tbody>";
  echo "<table><br>";

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

@media screen and (max-width: 600px) {
       table {
           width:100%;
		     display: block;
       overflow-x: auto;
	     font-size:2vw;
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
		   width:65vh;


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

 .t2{
	  width:8%;
    text-align: center;
	  font-size:2vh;
    font-weight: 400;

  }
  .t22{
	  width:8%;

	  font-size:2vh;


  }
  .t3{
	  width:9%;

    text-align: center;
	  font-size:2vh;
	  font-weight: 400;

  }
  .t33{
	  width:9%;


	  font-size:2vh;


  }
  .t4{
	  width:8%;

    text-align: center;
    font-size:2vh;
	  font-weight: 400;


  }
  .t44{
	  width:8%;


    font-size:2vh;
    word-break: break-all;


  }
  .t5{
	  width:5%;

    text-align: center;
	  font-size:2vh;
	  font-weight: 400;

  }.t55{
	  width:5%;

	  font-size:2vh;
    word-break: break-all;

  }.t6{
	  width:12%;

    text-align: center;
    font-size:2vh;
	  font-weight: 400;

  }
  .t66{
	  width:12%;
    font-size:2vh;
    word-break: break-all;




  } .t7{
	  width:10%;

    text-align: center;
	  font-size:2vh;
	  font-weight: 400;

  }
  .t8{
	  width:9%;

    text-align: center;
	  font-size:2vh;
	  font-weight: 400;

  }.t9{
	  width:7%;

   text-align: center;
   font-size:2vh;
	  font-weight: 400;

  }.t10{
	  width:7%;

	  text-align: center;
	  font-size:2vh;
	  font-weight: 400;

  }

  .t11{
	  width:7%;





  }
</style>
