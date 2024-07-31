<?php
session_start();
 ?>

<?php
   require_once("../conexiondb.php");
   include("../include/parametros.php");


/* codigo de cerrar sesion */
  if(($_SESSION['idUsuario'])!=''){
   ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Quinto Boton</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link href="../css/prueba2.css" rel="stylesheet">

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
    </script> <script type="text/javascript">
        $(function() {
          $('#padre3 > a').hover(function() {
            $('#otro_div3').css('color', 'white');
          }, function() {
            // vuelve a dejar el <div> como estaba al hacer el "mouseout"
            $('#otro_div3').css('color', '');
          });
        });
    </script><script type="text/javascript">
        $(function() {
          $('#padre4 > a').hover(function() {
            $('#otro_div4').css('color', 'white');
          }, function() {
            // vuelve a dejar el <div> como estaba al hacer el "mouseout"
            $('#otro_div4').css('color', '');
          });
        });
    </script> <script type="text/javascript">
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
    <div class="media d-flex align-items-center"><img src="../imagenes/usuarioD.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
      <div class="media-body">
       <h5 class="m-0"> <?php   echo  ''  .$_SESSION['nombre']." <br> ".$_SESSION['apellido']; ?></h5>
        <p class="font-weight-light text-muted mb-0">Instructor</p>
      </div>
    </div>
  </div>

  

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item" id="padre4" >
      <a  href="instructor.php" id="miBoton" class="nav-link   ">
                <i  id="otro_div4" class="fa fa-th-large mr-3  fa-fw navimmg"></i>
                Técnicas Didácticas
            </a>
    </li>
    <li class="nav-item" >
      <a href="#" style="	background:<?php echo $var_color_sena; ?>; color:white" id="miBoton" class="nav-link text-white">
                <i  style="	color:white ;" id="otro_div4"  class="far fa-file-alt  mr-3  fa-fw navimmg " ></i>
                        Descubra más aquí
            </a>
    </li>  <li class="nav-item" id="padre6">
      <a href="https://epcagropecuariocauca.blogspot.com" target="_blank" id="miBoton" class="nav-link ">
                <i   id="otro_div6"   class=" fa fa-globe  mr-3  fa-fw navimmg "></i>
                Banco de Recursos Didácticos 
            </a>
    </li><li class="nav-item" id="padre">
      <a href="datosUsuario.php" id="miBoton" class="nav-link ">
                <i   id="otro_div"  class="fa fa-address-card  mr-3  fa-fw navimmg "></i>
                Mis Datos
            </a>
    </li>




    <li class="nav-item " id="padre2" >
      <a href="sugerencia.php"  id="miBoton"   class="nav-link  ">
                <i id="otro_div2" class="fa fa-cubes mr-3  fa-fw navimmg"></i>
                Sugerencias
            </a>
    </li>

  </ul>


</div>
<!-- End vertical navbar -->
<body>

<!-- Page content holder -->
<div class="page-content p-5" id="content">
  <!-- Toggle button -->

    <div style="background:white; margin-top:-32px;" class="bg-red p-5 rounded  shadow-sm ">
	  <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">menú</small></button>

        <p class="lead font-italic mb-0 text-muted">
 <h4  style="float:left; font-size:5vh;font-size:2.5vw;   " > Estrategias De Interés </h4>
		  <a href="../cerrarSesion/cerrarSesion.php"> <button style="float:right" width="60%" class="btn btn-danger text-light " > &nbsp&nbsp&nbsp Salir &nbsp&nbsp&nbsp </button></a>
      <br><br>  <br><br>  <p class="lead   text-black"><strong>Sr(a) Instructor:</strong>  
      La importancia de la motivación de los estudiantes radica en su repercusión para la consecución de los objetivos académicos y la mejora del rendimiento escolar. <br>

La motivación es un factor que debe ser tenido en cuenta por centros educativos y sus Instructores, con la intención de<strong> fomentar el interés de los aprendices y su educación para  favorecer un mejor desarrollo educativo. </strong><br>

¡Si te interesa conocer por qué es importante la motivación de los estudiantes y qué acciones realizar para aumentar dicha motivación, quédate en este espacio!
    </p>

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
           <img src="../images/uno.png " width="12%" >  <center>

<img src="../images/sesion.png" width="26%" ><br><br>
         <a href="iniciosesion.php">   <button type="button" style="background:<?php echo $var_color_sena; ?>;color:white;font-size:17px" class="btn btn-outline-dark my-2 my-sm-0 botonInicio" id="myBtn3"> Inicio de sesión</button></a>
<br>  <br>
</center> 
<img src="../images/tres.png " width="15.8%" >	<br><br><br>
<center>
          <img src="../images/c.png" width="42%" ><br><br>
                               <a href="grupos.php" > <button  style="background:<?php echo $var_color_sena; ?>;color:white;font-size:17px" class="btn btn-outline-dark my-2 my-sm-0 botonInicio" type="button"  > Formas de conformar grupos</button> </a>
                               <br>	<br>
                               </center> 
          <img style="margin-left:-12px" src="../images/cinco.png " width="32%" >
          <center>
					   	<img src="../images/jolt.png" width="50%" ><br>
                               <a href="motivadores.php" > <button  style="background:<?php echo $var_color_sena; ?>;color:white;font-size:17px" class="btn btn-outline-dark my-2 my-sm-0 botonInicio" type="button"  > Jolts y motivadores</button> </a>
					<br><br> </center>    
	  <br>
		
      </div>


        </div>
      </div>





    <!-- END BLOG ENTRIES -->
    </div>

    <!-- About/Information menu -->
 <div class="w3-col l6 w3-white subirn2">

    <div class="w3-white ">

         
          <img src="../images/dos.png " width="15.9%" >
          <center>	<img src="../images/cerebro.png" width="23.5%" ><br><br>
							<a href="rompeHielos.php" > <button  type="button" style="background:<?php echo $var_color_sena; ?>;color:white;font-size:17px" class="btn btn-outline-dark my-2 my-sm-0 botonInicio1" > Rompe hielos </button> </a>
      </center> 
          	<br>
            <img src="../images/cuatro.png " width="16.2%" >
            <center>               
          <img src="../images/positivo.png" width="43%" ><br><br>
                               <a href="frases.php" > <button  style="background:<?php echo $var_color_sena; ?>;color:white;font-size:17px" class="btn btn-outline-dark my-2 my-sm-0 botonInicio" type="button"  > Frases en positivo para usar</button> </a>
                               <br><br>
        </center> 
        <img src="../images/six.png " width="27%" >
        <center>
						   <img src="../images/estrcturada.png" width="59%" ><br>
                        <a href="reflexionCierre.php">   <button type="button" style="background:<?php echo $var_color_sena; ?>;color:white;font-size:17px" class="btn btn-outline-dark my-2 my-sm-0 botonInicio" id="myBtn3">Reflexiones estructuradas y cierres de sesión </button></a>
				<br>  <br>
				  </center> 
      
      </div>


    </div>


  <!-- END GRID -->
  </div>

<br>
<!-- END w3-content -->
 </div>


    

      <div class="bg-white p-0 rounded my-10 shadow-lg">
      <footer style="background-color: <?php echo $var_color_sena; ?>;">

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
