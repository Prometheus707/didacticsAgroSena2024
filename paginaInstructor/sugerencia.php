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
    <title>Sugerencia</title>
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
<link href="../css/sugerencia.css" rel="stylesheet">	  
	
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
       <li class="nav-item" id="padre2">
      <a  href="instructor.php" id="miBoton" class="nav-link   ">
                <i  id="otro_div2" class="fa fa-th-large mr-3  fa-fw navimmg"></i>
                Técnicas Didácticas
            </a>
    </li>
    <li class="nav-item" id="padre4">
      <a href="quintoBoton.php" id="miBoton" class="nav-link ">
                <i   id="otro_div4"  class="far fa-file-alt  mr-3  fa-fw navimmg " ></i>
                        Descubra más aquí
            </a>
    </li> <li class="nav-item" id="padre6">
      <a href="https://epcagropecuariocauca.blogspot.com" target="_blank" id="miBoton" class="nav-link ">
                <i   id="otro_div6"   class=" fa fa-globe  mr-3  fa-fw navimmg "></i>
                Banco de Recursos Didácticos 
            </a>
    </li> <li class="nav-item" id="padre">
      <a href="datosUsuario.php" id="miBoton" class="nav-link ">
                <i   id="otro_div"  class="fa fa-address-card  mr-3  fa-fw navimmg "></i>
                Mis Datos
            </a>
    </li>



 <li class="nav-item">
      <a href="#"  style="	background:<?php echo $var_color_sena; ?>;" href="#" id="miBoton" class="nav-link text-white ">
                <i style="	color:white ;"  class="fa fa-th-large mr-3  fa-fw"></i>
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
  <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">menú</small></button>



  <div class="row  w3-white">

      <div class="bg-green p-5 rounded my-15 shadow-sm blue">

	 	
      <div class="bg-white p-4 rounded my-2 shadow-sm  ">
	  
	  <form class="" action="sugerencia2.php" enctype="multipart/form-data" method="post">
	  ¿Deseas sugerir un archivo? <br> <br> <input  class="form-control"  type="file" name="archivo" value=""> </input> </i>   <br> <br>
<textarea name="sugerencia" id="message"    aria-label="With textarea" maxlength="299" class="form-control"value="" placeholder=" Escribe aquí tus sugerencias" rows="5" cols="20" required></textarea> <br>

<span class="help-block">
  <p id="mensaje_ayuda" class="help-block">Cuerpo del mensaje de alerta</p>
</span>
 <input   class="btn btn-success botonE" name="" id="inputsubmit" type='submit' value="Enviar">
 <input type="hidden" name="id" value="<?php echo $_SESSION['idUsuario']; ?>">
 


</form>
<br><br>

     <?php
       require_once("../conexiondb.php");



     	echo "<table class='table'>
				 <thead>
				<tr>
		<th style='font-size:2vh;font-weight: 400; background:#29a900; color:white; text-align:center;' >Sugerencia</th>
       <th  style='font-size:2vh;font-weight: 400; background:#29a900;color:white; text-align:center;'>Fecha</th>
       <th  style='font-size:2vh;font-weight: 400; background:#29a900;color:white;text-align:center;' >Respuesta</th>
       <th  style='font-size:2vh;font-weight: 400; background:#29a900;color:white;text-align:center;' >Comentario</th>
       <th  style='font-size:2vh;font-weight: 400; background:#29a900;color:white;text-align:center;' >Archivo</th>
       <th style='font-size:2vh;font-weight: 400; background:#29a900;color:white;text-align:center;' >Eliminar</th>

</thead>

				</tr>";
			?>


			<?php
			 mysqli_set_charset($conecta,"utf8");
		$consulta = "SELECT * FROM usuario inner join sugerencia on usuario.idUsuario=sugerencia.idUsuariofk where docUsuario=".$_SESSION['docUsuario'];
	$resultado = $conecta->query($consulta);

			if ($resultado->num_rows > 0 ){
					while($fila = $resultado->fetch_assoc()) {
					echo "
					  <tbody>
					  <tr>
					<td class='sugerencia' > ".$fila["sugerencia"]."</td>
      <td class='fecha'> ".$fila["fecha"]."</td>";
    
     
       
      echo "<td > <center> ".$fila['respuesta']." </center></td>";

        
 
        
      
       
       
 
      
		echo"	
			<td class='comentario '> ".$fila["comentario"]."</td>
			<td class='pdf ' ><a href='../archivoInstruc/".$fila["pdfUsuario"]."'><img src='../images/ver.png' class='imgPdf' st'></a></td>
			<td class='eliminar ' style='padding-top:1.3rem; '> <a style='padding:0.4rem;' href='eliminarSugerencia.php?id=".$fila["idSugerencia"]." ' class='btn  btn-danger btn-block ' onclick='return ConfirmDelet()'> Eliminar  </a></td>

				</tr>
				  </tbody>";
					}
				} else {
					echo "
					<div class='alert alert-danger' role='alert'>
 No hay resultados en la consulta
</div>
					
					
					";
				}
			$conecta->close();
				echo "</table>";
				?>

           </div>



    <!---------- tdas existente, actualizar  ------------>




<script>
 $('#mensaje_ayuda').text('299 carácteres restantes');
  $('#message').keydown(function () {
      var max = 299;
      var len = $(this).val().length;
      if (len >= max) {
          $('#mensaje_ayuda').text('Has llegado al límite');// Aquí enviamos el mensaje a mostrar          
          $('#mensaje_ayuda').addClass('text-danger');
          $('#message').addClass('is-invalid');
          $('#inputsubmit').addClass('disabled');    
          document.getElementById('inputsubmit').disabled = true;                    
      } 
      else {
          var ch = max - len;
          $('#mensaje_ayuda').text(ch + ' carácteres restantes');
          $('#mensaje_ayuda').removeClass('text-danger');            
          $('#message').removeClass('is-invalid');            
          $('#inputsubmit').removeClass('disabled');
          document.getElementById('inputsubmit').disabled = false;            
      }
  }); 

</script>



<!------------ confirmacion de eliminar ------------>
<script>

function ConfirmDelet()
{
 var respuesta = confirm(" ¿ Esta seguro que desea eliminar la sugerencia ?.");
 if (respuesta == true)
 {
   return  true;
 } else {
   return false;
 }
}
</script>
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

  </div>

</div>
<?php
}else{
  header("location:../index.php");
}
 ?>

       
        
  
      
</body>
<script>
      
	
</script>

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

 
 	
		

 
