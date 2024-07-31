<?php
session_start();
 ?>

<?php
   require_once("../conexiondb.php");
  include('../include/parametros.php');


/* codigo de cerrar sesion */
  if(($_SESSION['idUsuario'])!=''){
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
<script type="text/javascript">
  $(function() {
    $('#padre > a').hover(function() {
      $(this).css('background-color', '#29A900');
      $(this).find('#otro_div').css('color', 'white');
    }, function() {
      $(this).css('background-color', '');
      $(this).find('#otro_div').css('color', '');
    });
  });

  $(function() {
    $('#padre2 > a').hover(function() {
      $(this).css('background-color', '#29A900');
      $(this).find('#otro_div2').css('color', 'white');
    }, function() {
      $(this).css('background-color', '');
      $(this).find('#otro_div2').css('color', '');
    });
  });

  $(function() {
    $('#padrep > a').hover(function() {
      $(this).css('background-color', '#29A900');
      $(this).find('#otro_div3').css('color', 'white');
    }, function() {
      $(this).css('background-color', '');
      $(this).find('#otro_div3').css('color', '');
    });
  });

  $(function() {
    $('#padre4 > a').hover(function() {
      $(this).css('background-color', '#29A900');
      $(this).find('#otro_div4').css('color', 'white');
    }, function() {
      $(this).css('background-color', '');
      $(this).find('#otro_div4').css('color', '');
    });
  });
</script>
   
  <!-- <script type="text/javascript">
  $(function() {
    $('.hover-link').hover(function() {
      $(this).find('.hover-icon').css('color', 'white');
    }, function() {
      $(this).find('.hover-icon').css('color', '');
    });
  });
</script> -->




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
    <li class="nav-item">
      <a style="background:<?php echo $var_color_sena; ?>;" href="administrador.php" id="miBoton" class="nav-link text-white ">
                <i  class="fa fa-th-large mr-3  fa-fw"></i>
                Técnicas Didácticas
            </a>
          </li>

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

  </ul>

  <ul class="nav flex-column bg-white mb-0">

  </ul>
</div>
<!-- End vertical navbar -->
<body>

<!-- Page content holder -->
<div class="page-content p-5" id="content">
  <!-- Toggle button -->

  <div style="background:white; margin-top:-32px;" class=" p-5 rounded pl shadow-sm ">
  <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">menú</small></button>

      <p class="lead mb-0 text-muted">
<h4 class="" style="float:left; font-size:5vh;font-size:2.5vw;   " > Técnicas Didácticas Activas </h4>
    <a href="../cerrarSesion/cerrarSesion.php"> <button style="float:right" width="60%" class="btn btn-danger text-light " > &nbsp&nbsp&nbsp Salir &nbsp&nbsp&nbsp </button></a>


</p>		</div><br>
  <div class="row ">





<div class="w3-content w3-white" style="width:100%; display:block">

  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">

    <!-- Blog entries -->
    <div class="w3-col l6 s12">

      <!-- Blog entry -->
      <div class="w3-container w3-white  subirn " >



        <div class="w3-justify">


           <div class="w3-white ">

  <img src="../images/uno.png " width="12%" ><br>
        <center>

						   <img src="../images/end.png" width="39.9%" ><br>
                        <a href="tdaReflexion.php">   <button type="button" style="background:<?php echo $var_color_sena; ?>;color:white;font-size:17px" class="btn btn-outline-light my-2 my-sm-0 botonInicio" id="myBtn3">Reflexión inicial</button></a>
				<br>  <br>

				  </center>
  <img src="../images/tres.png " width="15.8%" >
		<center>
							<img src="../images/inicio.png" width="40%" ><br><br>
							<a href="tdaApropiacion.php" > <button  type="button" style="background:<?php echo $var_color_sena; ?>;color:white;font-size:17px" class="btn btn-outline-light my-2 my-sm-0 botonInicio1" >Apropiación del conocimiento </button> </a>

      </center>
      </div>


        </div>
      </div>






    <!-- END BLOG ENTRIES -->
    </div>

    <!-- About/Information menu -->
 <div class="w3-col l6 w3-green subirn2">

    <div class="w3-white ">


             <img src="../images/dos.png " width="15.9%" ><br>
          <center>
					   	<img src="../images/desarrollo.png " width="37%" ><br>
                               <a href="tdaIdentificacion.php" > <button style="background:<?php echo $var_color_sena; ?>;color:white;font-size:17px" class="btn btn-outline-light my-2 my-sm-0 botonInicio" type="button"  > Contextualización e identificación del conocimiento </button> </a>

                             	<br>	<br>
        </center>
<img src="../images/cuatro.png " width="16.2%" ><br>
		<center>
							    <img src="../images/evalua.png" width="39%" style="padding-bottom: 3%">
							   <a href="tdaTransferencia.php"> <button type="button" style="background:<?php echo $var_color_sena; ?>;color:white;font-size:17px" class="btn btn-outline-light my-2 my-sm-0 botonInicio" >Transferencia del conocimiento </button> </a>



       </center>
      </div>




    </div>



<a href="pdf22.php"> <button  style="width:100%; margin-top:5%;font-size:17px" type="button" class="btn btn btn-outline-success   " >Descargar Resumen Técnicas Didácticas <svg width="2em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
  <path fill-rule="evenodd" d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
</svg> </button> </a>
  <!-- END GRID -->
  </div>

  <br>
<!-- END w3-content -->
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
