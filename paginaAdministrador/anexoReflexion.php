<?php
session_start();
 ?>

<?php
   require_once("../conexiondb.php");



/* codigo de cerrar sesion */
  if(($_SESSION['idUsuario'])!=''){
   ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>administrador</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">


    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

<link href="../css/plantillaAdmin.css" rel="stylesheet">
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
               $('#div5').css('color', '#ff6b00');
             });
           });
       </script>
       <script type="text/javascript">
            $(function() {
              $('#padre6 > a').hover(function() {
                $('#otro_div6').css('color', 'white');
              }, function() {
                // vuelve a dejar el <div> como estaba al hacer el "mouseout"
                $('#otro_div6').css('color', '');
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

  <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Navegación</p>

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item" id="padre5">
      <a  href="administrador.php" id="miBoton" class="nav-link " >
                <i  style="color:#ff6b00" id="div5" class="fa fa-th-large mr-3  fa-fw"></i>
                Técnicas Didácticas
            </a>
        </li>

            <li class="nav-item"  id="padre">
              <a href="rompehielo.php" id="miBoton" class="nav-link ">
                        <i     id="otro_div" class="far fa-file-alt  mr-3  fa-fw navimmg " style=""></i>
                        Otros recursos de interés
                    </a>
            </li>
            <li class="nav-item"  id="padre6">
              <a href="botonAnexo.php"  id="miBoton"   class="nav-link " style="background:#ff6b00;color:white">
                        <i  id="otro_div6" class="far fa-file mr-3 text-white fa-fw navimmg"></i>
                        Anexos
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


  <ul class="nav flex-column bg-white mb-0">

  </ul>
</div>
<!-- End vertical navbar -->
<body>

<!-- Page content holder -->
<div class="page-content p-5" id="content">
  <!-- Toggle button -->

  <div style="background:white; margin-top:-32px;" class="bg-red p-5 rounded pl shadow-sm ">
  <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">menú</small></button>

      <p class="lead mb-0 text-muted">
<h4 class="" style="float:left; font-size:5vh;font-size:2.5vw;   " > Anexos de reflexión inicial </h4>
    <a href="../../cerrarSesion/cerrarSesion.php"> <button style="float:right" width="60%" class="btn btn-danger text-light " > &nbsp&nbsp&nbsp Salir &nbsp&nbsp&nbsp </button></a>


</p>		</div><br>
  <div class="row ">





<div class="w3-content w3-white" style="width:100%; display:block">

  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">

    <!-- Blog entries -->


    <!-- About/Information menu -->

<center>
  <?php

          mysqli_set_charset($conecta,"utf8");

          ?>


        <?php


        $consulta = "SELECT * FROM tda where idTipoTdas='1'";
        $resultado = $conecta->query($consulta);


        if ($resultado->num_rows > 0 ){
            while($fila = $resultado->fetch_assoc()) {
            echo "<tr>

            <div class='w3-half'><td><a href=../pdf/".$fila["enlace"]."><div style='font-size:20px;'>".$fila["enlace"]."</div></a></td></div>

            </tr>";
            }
          } else {
      echo "error de resultados";
          }

          echo "</table>";
          $conecta->close();

          ?>
  </center>
  <!-- END GRID -->
  </div>


<!-- END w3-content -->
 </div>


      <div class="bg-white p-5 rounded my-5 shadow-sm">
        <p class="lead font-italic mb-0 text-muted">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
      </div>

      <div class="bg-white p-0 rounded my-10 shadow-lg">
        <footer>

			 <div class="divFp">

				  <div class="div1F">
							<img src="../imagenes/sena3.png"  class="imagfooter" >

			     </div>




				<div class="div3F">

              Centro Agropecuario Regional Cauca <br>
Dirección: Cr 9 No 71 N 60, Alto del Cauca - Kilómetro 7 vía a Cali<br>
Teléfono: (2) 8247678 IP: 22112 Fax: (2) 8247678<br>
Correo: agropecuario@misena.edu.co

      		     </div>

				 <div class="div2F">
                      	<img src="../imagenes/SENOVA.png"  class="imag2footer" >
				</div>
			</div>
   </footer>
   </div>

  </div>

</div>
<?php
}else{
  header("location:../index.php");
}
 ?>





</body>

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
