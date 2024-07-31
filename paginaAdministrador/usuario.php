<?php
session_start();
 ?>

<?php
   require_once("../conexiondb.php");

    include('../include/parametros.php');

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
    <title>administrador</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">


    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRjHcB1T9a9gGf7rhxAB7Zf0B1grgKqg6D4f4XT5H" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-5e8ec6fbrr67P6zoiWxY9o9fB6Xa7V+NE/Nu5uXc4b3v8Ew4zP0fsn9BQf6/DH/4" crossorigin="anonymous">}
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap CSS (opcional, solo si lo necesitas) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb97NDey7spBYAS49+bxESrFIuA8CKq4Xr+KB4fyiKtP3af4y" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js" integrity="sha384-cuR3ymHXeUPA5h5I2H6LOF4/hGIsgV0qGrz+u3WZGdUOayG6bT/CaIoB5i3e/s+P" crossorigin="anonymous"></script>
<script src="../js/contadorUsuarios.js"></script>

   
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
               $('#div5').css('color','');
             });
           });
       </script>

<link href="../css/plantillaAdmin.css" rel="stylesheet">

</head>				<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
  <div class="py-4 px-3 mb-4 bg-light">
    <div class="media d-flex align-items-center" ><img src="../images/usuarioD.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
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
              <a href="rompehielo.php" id="miBoton" class="nav-link">
                        <i     id="otro_div" class="far fa-file-alt  mr-3  fa-fw navimmg "></i>
                        Descubra más aquí
                    </a>
            </li>


    <li class="nav-item"  id="padrep">
      <a href="usuario.php" id="miBoton" class="nav-link " style="background:#25a900;color:white">
                <i     id="otro_div3" class="fa fa-address-card text-white  mr-3  fa-fw navimmg "></i>
                Usuarios
            </a>
    </li>




    <li class="nav-item"  id="padre2">
      <a href="sugerenciaAdmin.php"  id="miBoton"   class="nav-link  ">
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

    <div style="background:white; margin-top:-32px;" class=" p-5 rounded  shadow-sm ">
	  <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">menú</small></button>

        <p class="lead mb-0 text-muted">

      <h4 class="" style="float:left; font-size:5vh;font-size:2.5vw;   " > Usuarios</h4>
		  <a href="../cerrarSesion/cerrarSesion.php"> <button style="float:right" width="60%" class="btn btn-danger text-light " > &nbsp&nbsp&nbsp Salir &nbsp&nbsp&nbsp </button></a>


</p>		</div><br>
  <div class="row ">





<div class="w3-content  w3-white" style="width:100%; display:table">

  <!-- Grid -->
  <div class="w3-row w3-padding bordes w3-border">
    <div class="">

  <div class="w3-half" style="display: flex; flex-direction:row;">
  <a href="agregarUsu.php"><i class="bi bi-person-fill-add" style='font-size:40px;padding-left:2%;color:black;padding-top:4%; margin-right:1rem;'></i></a><br>
  <button id="contadorUser" name="contadorUser" class="btn btn-outline-warning" style="max-height:35px; margin-top:0.9rem;" data-toggle="modal" title="Este es el conteo de usuarios que iniciarion sesion por areas" data-target="#mdAreaxPersona">Contador</button>
</div><br>

      <!------ menu de busqueda--------->

      <form action="buscarUsuarios.php" method="get" class="form-inline my-2 my-lg-0" style="float: right">
           <input type="text" style="width:70%;" name="busqueda" id="busqueda" class="form-control " placeholder="Buscar" aria-label="Buscar">&nbsp
           <button name="b1" class="btn btn-outline-warning">Buscar</button>
          
       </form><br>

    </div>

   <br>
    <H3><center>Usuarios registrados</center></H3>

        <?php  include('paginado/pagingUsuario.php'); ?>



  <!-- END GRID -->
  </div>

<!-- END w3-content -->
 </div>


      <div class="bg-white p-5 rounded my-5 shadow-sm">
        <p class="lead font-italic mb-0 text-muted">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
      </div>

      <div class="bg-white p-0 rounded my-10 shadow-lg">
      <footer style="background-color: #39A900;">

<div class="divFp" style="background-color: #39A900;">

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

  </div>

</div>




<!------- modal de añadir tdas ---------->






<?php
}else{
  header("location:../index.php");
}
 ?>
<div class="modal" tabindex="-1" id="mdAreaxPersona">
  <div class="modal-dialog">
    <div class="modal-content">
   
      <div class="modal-body">
        <div id="cardAreaUse">

        </div>
      </div>
      <div class="modal-footer">
    
        <button type="button" class="btn btn-outline-success" data-dismiss="modal">CERRAR</button>
      </div>
    </div>
  </div>
</div>


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

function ConfirmDelet()
{
 var respuesta = confirm(" ¿ Esta seguro que desea eliminar el usuario ?.");
 if (respuesta == true)
 {
   return  true;
 } else {
   return false;
 }
}
</script>

<script>

                          <?php
                          if(isset($_GET['opcion1'])&& $_GET['opcion1']=='true'){
                            echo 'swal.fire(
                              "Se registro usuario correctamente.","","success"
                              )';
                          }
                          if(isset($_GET['opcion4'])&& $_GET['opcion4']=='true'){

                            echo 'swal.fire(
                              "Se actualizo correctamente.","","success"
                              )';
                          }
                          if(isset($_GET['opcion3'])&& $_GET['opcion3']=='true'){

                            echo 'swal.fire(
                              "Se actualizo correctamente.","","success"
                              )';
                          }
                          if(isset($_GET['opcion2'])&& $_GET['opcion2'] == 'true'){

                            echo 'swal.fire( "   Usted ya esta registrado.","","warning")';
                          }

                                    ?>


                       </script>
