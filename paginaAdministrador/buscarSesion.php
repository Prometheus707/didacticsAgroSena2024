<?php
session_start();
 ?>

<?php
   require_once("../conexiondb.php");
   include("../include/parametros.php");

  $busqueda=strtolower($_REQUEST['busqueda']);
   if(empty($busqueda)){
     header("location: iniciosesion.php");
   }

/* codigo de cerrar sesion */
  if(($_SESSION['idUsuario'])!=''){
   ?>
   <?php
   /* capturar variable por método GET */
   if (isset($_GET['pos']))
     $ini=$_GET['pos'];
   else
     $ini=1;
   ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Administrador</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">


    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap CSS (opcional, solo si lo necesitas) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

<link href="../css/plantillaAdmin.css" rel="stylesheet">
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
           background:  #29a900;
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
		    background: #29a900;
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
  background-color: #FFC529;
}

.pagination li {
  float: left;
}

.pagination li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 19px;
  text-decoration: none;
  font-size: 3vh;
}

#bo li a:hover {
  background-color: #FABC15;
  color: white;
}

th {
  background: #29a900;
  color:white;
}

.t2{
	  width:20%;

	   
	   
	  font-size:2vh; 
	  font-weight: 200;
	  
  }
  .t3{
	  width:45%;

	   
	     font-size:2vh; 
	  font-weight: 200;
	    
  }
  .t4{
	  width:15%;

	   
	     font-size:2vh; 
	  font-weight: 200;
	    
  }
  .t5{
	  width:15%;

	   
	     font-size:2vh; 
	  font-weight: 200;
	    
  }.t6{
	  width:15%;
	  font-size:2vh; 
	  font-weight: 200;
  }
</style>
 <script type="text/javascript">
        $(function() {
          $('#padre > a').hover(function() {
            $('#otro_div').css('color', 'white');
          }, function() {
            // vuelve a dejar el <div> como estaba al hacer el "mouseout"
            $('#otro_div').css('color', '');
          });
        });
    </script>  <script type="text/javascript">
        $(function() {
          $('#padre2 > a').hover(function() {
            $('#otro_div2').css('color', 'white');
          }, function() {
            // vuelve a dejar el <div> como estaba al hacer el "mouseout"
            $('#otro_div2').css('color', '');
          });
        });
    </script><script type="text/javascript">
        $(function() {
          $('#padre3 > a').hover(function() {
            $('#otro_div3').css('color', 'white');
          }, function() {
            // vuelve a dejar el <div> como estaba al hacer el "mouseout"
            $('#otro_div3').css('color', '');
          });
        });
    </script>
    <script type="text/javascript">
         $(function() {
           $('#padrep > a').hover(function() {
             $('#otro_div3').css('color', 'white');
           }, function() {
             // vuelve a dejar el <div> como estaba al hacer el "mouseout"
             $('#otro_div3').css('color', '');
           });
         });
     </script>
     <script type="text/javascript">
          $(function() {
            $('#padre4 > a').hover(function() {
              $('#otro_div4').css('color', 'white');
            }, function() {
              // vuelve a dejar el <div> como estaba al hacer el "mouseout"
              $('#otro_div4').css('color', '');
            });
          });
      </script>
      <script type="text/javascript">
           $(function() {
             $('#padre5 > a').hover(function() {
               $('#div5').css('color', 'white');
             }, function() {
               // vuelve a dejar el <div> como estaba al hacer el "mouseout"
               $('#div5').css('color', '');
             });
           });
       </script>

</head>				<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
  <div class="py-4 px-3 mb-4 bg-light">
    <div class="media d-flex align-items-center"><img src="../images/usuarioD.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
      <div class="media-body">
       <h5 class="m-0"> <?php   echo  ''  .$_SESSION['nombre']." <br> ".$_SESSION['apellido']; ?></h5>
        <p class="font-weight-light text-muted mb-0">Administrador</p>
      </div>
    </div>
  </div>



  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item" id="padre5">
      <a  href="administrador.php" id="miBoton" class="nav-link " >
                <i   id="div5" class="fa fa-th-large mr-3  fa-fw"></i>
                Técnicas Didácticas
            </a>
        </li>

        <li class="nav-item"  id="padre">
          <a href="rompehielo.php" id="miBoton" class="nav-link " style="background:<?php echo $var_color_sena; ?>; color:white;">
                    <i     id="otro_div" class="far fa-file-alt  mr-3 rh text-white fa-fw navimmg " ></i>
                    Descubra más aquí
                </a>
        </li>

    <li class="nav-item"  id="padrep">
      <a href="usuario.php" id="miBoton" class="nav-link ">
                <i     id="otro_div3" class="fa fa-address-card  mr-3  fa-fw navimmg "></i>
                Usuarios
            </a>
    </li>




    <li class="nav-item"  id="padre2">
      <a href="sugerenciaAdmin.php"  id="miBoton"   class="nav-link">
                <i  id="otro_div2" class="fa fa-cubes mr-3  fa-fw navimmg"></i>
                Sugerencias
            </a>
    </li>
    <li class="nav-item"  id="padre4">
      <a href="reporte/reportes.php"  id="miBoton"   class="nav-link ">
                <i  id="otro_div4" class="far fa-file-archive mr-3  fa-fw navimmg"></i>
                Reportes
            </a>
    </li>

  </ul>



</div>
<!-- End vertical navbar -->
<body>

<!-- Page content holder -->
<div class="page-content p-5" id="content">
  <!-- Toggle button -->

    <div style="background:white; margin-top:-32px;" class=" p-5 rounded ps  shadow-sm ">
	  <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">menú</small></button>

        <p class="lead mb-0 text-muted">
   <h4 class="" style="float:left; font-size:5vh;font-size:2.5vw;   " >Inicio De Sesión</h4>
	  <a href="iniciosesion.php"> <button style="float:right" width="60%" class="btn btn-danger text-light " > &nbsp&nbsp&nbsp Volver &nbsp&nbsp&nbsp </button></a>

</p>		</div><br>
  <div class="row ">





<div class="w3-content w3-white" style="width:100%; display:table">

  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">
    <h6>  Click en la imagen para agregar un nuevo archivo</h6>

    <div class="w3-half">

      <a href="#myBtn3">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clipboard-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg" id="myBtn3" style="color:#59b548;font-size:80px">
      <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
      <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zM8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"/>
    </svg>
       </a> <br><br><br><br>

    </div>

  <form action="buscarSesion.php"method="get" class="form-inline my-2 my-lg-0" style=" float:right; margin-top:-50%;">
       <input  type="text" name="busqueda" id="busqueda" class="form-control mr-sm-2" placeholder="Buscar" aria-label="Buscar">
       <button  name="b1" class="btn btn-outline-warning">Buscar</button>
   </form><br><br><br><br><br><br>


      <div id="tablephp">
        <?php
                require_once("../conexiondb.php");
                mysqli_set_charset($conecta,"utf8");
                echo "<table border='1'  class='table table-bordered table-hover'>
                 <thead> <tr>
                   <th class='t2' style='background:#29a900; color:white; width:35%; text-align:center'>Nombre</th>
                   <th class='t3' style='background:#29a900; color:white; width:40%; text-align:center'>Descripción</th>
                   <th class='t4' style='background:#29a900; color:white;width:1%; text-align:center'>Archivo</th>
                    <th class='t4' style='background:#29a900; color:white;width:1%; text-align:center'>Anexo</th>
                    <th class='t4' style='background:#29a900; color:white;width:1%; text-align:center'>Actualizar</th>


                  </tr>
				      </thead>";
                ?>


              <?php


              $consulta = "SELECT * FROM iniciosesion
              where
              nombreInicio like '%$busqueda%' OR
              descripcionInicioS like '%$busqueda%'
              ";
              $resultado = $conecta->query($consulta);


              if ($resultado->num_rows > 0 ){
                  while($fila = $resultado->fetch_assoc()) {
                    if( $fila['idIniciosesion'] ) {
      
                      $varCadena = strlen ($fila["anexoS"]);
                      if($varCadena>0)
                      {
                        $enlaceHref = " <a href=../pdf/".$fila["anexoS"]."> ";
                        $no_pdf = " <img src='../images/ver.png' width='50%'>";
                      }else
                      {
                        $no_pdf = " <img src='../images/no_pdf.png' width='50%'>";
                        $enlaceHref="";
                      }
                    }
                  echo "<tr>

                  <td> ".$fila["nombreInicio"]."</td>
                  <td> ".$fila['descripcionInicioS']."</td>
                  <td style='text-align:center'><a href=../pdf/".$fila["pdfInicioS"]."><img src='../images/ver.png' width='50%'></a></td>
                   <td> ".$enlaceHref." ". $no_pdf ."</a></td>
                  <td> <a href='actualizarSesion.php?id=".$fila['idIniciosesion']."'> <input  class='btn btn-success' style='color: white; font-size: 14px' type='button' value=' Actualizar'></a></td>

                  </tr>";
                  }
                } else {
            echo " <td colspan='5'  >
<div class='alert alert-warning' role='alert'>
   No hay resultado de la busqueda.
</div>
				  </td>  </tr>"
				  ;
                }

                echo "</table>";
                $conecta->close();
                ?>

      </div>
      <div class="bg-white p-0 rounded my-10 shadow-lg">
      <footer style="background-color:<?php echo $var_color_sena; ?>;">

<div class="divFp" style="background-color: <?php echo $var_color_sena; ?>;">

  <div class="div1F">
    <img src="../imagenes/sena3.png" class="imagfooter">

  </div>




  <div class="div3F">

    Centro Agropecuario Regional Cauca <br>
    Dirección: Cr 9 No 71 N 60, Alto del Cauca - Kilómetro 7 vía a Cali<br>
    Teléfono: (2) 8247678 IP: 22112 Fax: (2) 8247678<br>
    Correo: agropecuario@misena.edu.co

  </div>

  <div class="div2F">
    <!-- <img src="images/SENOVA.png" class="imag2footer"> -->
    <img src="../images/LOGOsENNOVA.png" class="imag2footer">
  </div>
</div>
</footer>
      </div>

  <!-- END GRID -->
  </div>

<!-- END w3-content -->
 </div>


  </div>

</div>




<!------- modal de añadir tdas ---------->



<div class="container mt-3">
  <!-- Modal -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Añadir Técnica Didáctica Activa</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" >


          <form  class="" enctype="multipart/form-data"  onSubmit="return validar();" action="añadirtda/añadirSesion.php" method="post">

            <p style="font-size: 18px;"> Nombre:</p> <textarea name="nombre" style="width:100%; height:8%" rows="2" cols="80" required></textarea> <br>

            <p style="font-size: 18px;">    Descripción:</p><textarea name="descripcion" style="width:100%;height:20%" rows="6" cols="80" required></textarea>

            <p style="font-size: 18px;">   Añadir pdf:</p><input type="file" name="grafica" value="" id="archivoInput" onchange="return validarExt()" required>

            <p style="font-size: 18px;">   Añadir anexo:</p><input type="file" name="enlace" value="">

            <br>
           <div id="visorArchivo">
            <!--Aqui se desplegará el fichero-->
           </div>

        </div>
        <div class="modal-footer">
          <input type="submit" style="margin-right: 3%" class='btn  btn-success' name="enviar" value="Agregar">
          </form>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
</div>




<?php
}else{
  header("location:../index.php");
}
 ?>



 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
 <script src="js/main.js"></script>

</body>
</html>

<script src="JS/jquery-3.3.1.min.js"></script>
          <script src="JS/popper.min.js"></script>
            <script src="JS/bootstrap.min.js"></script>
<script>

$(function() {
  // Sidebar toggle behavior
  $('#sidebarCollapse').on('click', function() {
    $('#sidebar, #content').toggleClass('active');
  });
});

</script>


<script>
// script de sacar el modal
$(document).ready(function(){

  $("#myBtn3").click(function(){
    $("#myModal3").modal({backdrop: "static"});
  });
});
</script>
<script>
$(document).ready(function(){
    $('.zoom').hover(function() {
        $(this).addClass('transition');
    }, function() {
        $(this).removeClass('transition');
    });
});
</script>

<!---------- scrip de validacion si es pdf o imagen------->

                       <script type="text/javascript">

                       function validarExt()
                       {
                           var archivoInput = document.getElementById('archivoInput');
                           var archivoRuta = archivoInput.value;
                           var extPermitidas = /(.pdf)$/i;
                           if(!extPermitidas.exec(archivoRuta)){
                               swal.fire(
                                 "Asegurese de haber seleccionado un archivo PDF","","warning"
                                 );
                               archivoInput.value = '';
                               return false;
                           }

                           else
                           {
                               //PRevio del PDF
                               if (archivoInput.files && archivoInput.files[0])
                               {
                                   var visor = new FileReader();
                                   visor.onload = function(e)
                                   {
                                       document.getElementById('visorArchivo').innerHTML =
                                       '<embed src="'+e.target.result+'" width="500" height="375" />';
                                   };
                                   visor.readAsDataURL(archivoInput.files[0]);
                               }
                           }
                       }
                       </script>
