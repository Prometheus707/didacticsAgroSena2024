<?php
session_start();
 ?>

<?php
   require_once("../conexiondb.php");

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
             $('#padre6 > a').hover(function() {
               $('#otro_div6').css('color', 'white');
             }, function() {
               // vuelve a dejar el <div> como estaba al hacer el "mouseout"
               $('#otro_div6').css('color', '');
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
    <li class="nav-item">
      <a style="	background:#Ff6b00 ;" href="administrador.php" id="miBoton" class="nav-link text-white ">
                <i style="	color:white ;"  class="fa fa-th-large mr-3  fa-fw"></i>
                Técnicas Didácticas
            </a>

            <li class="nav-item"  id="padre">
              <a href="rompehielo.php" id="miBoton" class="nav-link ">
                        <i     id="otro_div" class="far fa-file-alt  mr-3  fa-fw navimmg " ></i>
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
  </ul><br>


  <ul class="nav flex-column bg-white mb-0" >
     <div class="video1">
				<video style=" width:100%;"  controls>
					<source  src="../video/reflexion.mp4" frameborder="0" >
			   </video>
				</div>
<style>
		.video1{
	/* background:green; */
	width:100%;
	height:40vh;


}
video{
	width:60%;	height:35vh;
  margin-top: -15%;

}
</style>
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
	<h4 class="" style="float:left; font-size:5vh;font-size:2.5vw;   " >  Reflexión Inicial</h4>
		  <a href="administrador.php"> <button style="float:right" width="60%" class="btn btn-danger text-light " > &nbsp&nbsp&nbsp Volver &nbsp&nbsp&nbsp </button></a>

</p>

		</div><br>
  <div class="row ">





<div class="w3-content w3-white" style="width:100%; display:table">

  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">
    <p class="lead   text-black"><strong>Sr(a) Instructor:</strong> Recuerde que las actividades de este campo, que no se encuentran prescritas en la Planeación Pedagógica del Proyecto.
    <br>El componente <strong> REFLEXIÓN INICIAL</strong>,busca las primeras predisposiciones positivas hacia el proceso de aprendizaje y la visión de éxito con el trabajo a desarrollar sobre el Resultado de aprendizaje, por lo tanto además de las TDAs sugeridas, puede también aplicar para este componente otras como: un taller, una entrevista, una discusión guiada....(puedo enviar otras), que determinen puntos de partida comunes, puntos de reflexión en  lo cotidiano y reflexivo, sobre los contenidos del RAp.
  </p><br>
    <h6>  Click en la imagen para agregar una nueva técnica didáctica</h6>

    <div class="w3-half">

    <a href="#myBtn3">
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clipboard-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg" id="myBtn3" style="color:#59b548;font-size:100px">
    <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
    <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zM8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"/>
  </svg>



     </a> <br><br><br><br>

  </div>


  <!------ menu de busqueda--------->

  <form action="buscarReflexion.php" method="get" class="form-inline my-2 my-lg-0" style=" float:right;">
       <input  type="text" name="busqueda" id="busqueda" class="form-control mr-sm-2" placeholder="Buscar" aria-label="Buscar">&nbsp
       <button  name="b1" class="btn btn-outline-warning ">Buscar</button>
   </form><br><br><br><br><br><br>

      <div id="tablephp" >
        <?php  include('paginado/pagingR.php'); ?>
      </div>



  <!-- END GRID -->
  </div>

<!-- END w3-content -->
 </div>
<br> <br>

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


          <form  class="" enctype="multipart/form-data"  onSubmit="return validar();" action="añadirtda/añadirTda.php" method="post">
            <p style="font-size: 18px;padding-left: 4%;">Nombre Técnica Didáctica Activa:</p>
          <input type="text" class="form-control" style="width: 80%;margin-left: 4%" name="nombre" value="" required>
 
          <p style="font-size: 18px;padding-left: 4%">Descripción:</p>
          <input type="text"  class="form-control" style="width: 80%;margin-left: 4%" name="descripcion" value="" required><br>
          <p style="font-size: 18px;padding-left: 4%">Componente</p>


<div style="margin-left: 4%" >
        <label for="op1">  <input type="checkbox" id="op1" name="momento[]" value="1"  checked> Reflexión Inicial </label>
          <label for="op2">  <input type="checkbox" id="op2" name="momento[]" value="2"> Contextualización e identificación del conocimiento  </label>
          <label for="op3">  <input type="checkbox" id="op3" name="momento[]" value="3"> Apropiación De Conocimiento </label><br>
          <label for="op4">  <input type="checkbox" id="op4" name="momento[]" value="4"> Transferencia De Conocimiento </label>
    </div>



           <p style="font-size: 18px;padding-left: 4%;"> Añadir Archivo:</p> <input class="form-control" style="width: 80%;margin-left: 4%"  type="file" name="archivo" value="" id="archivoInput" onchange="return validarExt()" required><br>

           <p style="font-size: 18px;padding-left: 4%;">    Añadir Anexo:</p><input class="form-control" style="width: 80%;margin-left: 4%"  type="file" name="enlace" value="">
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


                          <?php
                          if(isset($_GET['opcion1'])&& $_GET['opcion1']=='true'){
                            echo 'swal.fire(
                              "Registro exitoso.","","success"
                              )';
                          }
                          if(isset($_GET['opcion2'])&& $_GET['opcion2']=='true'){

                            echo 'alert ( "El pdf ya existe en la base de datos")';

                          }
                          if(isset($_GET['opcion8'])&& $_GET['opcion8']=='true'){

                            echo 'swal.fire(
                              "Se actualizo correctamente.","","success"
                              )';
                          }
 if(isset($_GET['opcion6']) && $_GET['opcion6'] == 'true'){
                              echo 'alert ( "La extensión o el tamaño de los archivos no es correcta, vuelva a intentarlo.")';
                            }



                            if(isset($_GET['opcion7']) && $_GET['opcion7'] == 'true'){
                            echo 'alert ( "Ocurrió algún error no pudo guardarse el formato vuelva a intentarlo.")';

                            }

                                    ?>


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
