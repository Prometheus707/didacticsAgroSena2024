<?php
require_once("../conexiondb.php");
mysqli_set_charset($conecta,"utf8");
$id=$_GET['id'];
$consulta = "SELECT * FROM reflexioncierrepdf where idReflexionCPdf=".$id;
$resultado = $conecta->query($consulta);
include('../include/parametros.php');


if ($resultado->num_rows > 0){
    $fila = $resultado->fetch_assoc();
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
		  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/tablaActualizar.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    	  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <title></title>
  </head>
  <body>

    <main class="pequeña">
     <div style="background:<?php echo $var_color_sena; ?>; ">
    <center><p style='  font-family:Lobster, cursive; font-size:4rem; color:white;'>Didactics</p></center>
</div>


      <form class="" action="actualizarCierrePdf2.php"  enctype="multipart/form-data"  onSubmit="return validar();" method="post">
       	<h4 class="" style=" font-size:5vh;font-size:2vw;  text-align:center; width:100%; "  > Actualizar Técnica Didáctica</h4>
  <hr><div class="w3-row w3-padding " >


	 <div class="w3-col l6 s12">
      <div class="w3-container w3-white  subirn " >
        <div class="w3-justify">
      <center>
     <div class="w3-white ">
					Nombre: <textarea name="nombre" style="width:100%" rows="2" cols="80"><?php echo $fila['TituloRefPdf'] ?></textarea>
      </div>
    </center><br>
      <div class="w3-white ">
        <p>Por favor vuelva a elegir el pdf para que sea cargado nuevamente.</p>
    <b>Pdf:</b> <br> <input type="file" name="grafica" value="" id="archivoInput" onchange="return validarExt()" required><br>
    <b>Añadir anexo:</b> <br> <input type="file" name="enlace" value="">
 </div><br><br>



        </div>
      </div>

    <!-- END BLOG ENTRIES -->
    </div>

    <!-- About/Information menu -->
 <div class="w3-col l6 w3-white subirn2">
<center>
   <div class="w3-white ">
  Descripción: <textarea name="descripcion" style="width:92%" rows="8" cols="80"><?php echo $fila['descripcionRefPdf'] ?></textarea>
</div><br><br>
 
</center>
    </div>
    <div id="visorArchivo">
     <!--Aqui se desplegará el fichero-->
    </div>

	</div>
	<input type="hidden" name="id" value="<?php echo $id; ?>">

        <div style="margin-left:20%;">
      <input type="submit" class='btn  btn-success btn-sm' style="width:32%; font-size:2vh; " name="" value="Actualizar">
      <a href="tdaCierres.php"><button type="button" class='btn  btn-danger btn-sm' style="width:32%; font-size:2vh;" name="button">Cancelar</button></a>
      </div>




      </form>
<?php } ?>
    </main>

    <footer style="background-color: #39A900; margin-top:-5%;">

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
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
   <script src="js/main.js"></script>
  </body>
</html>
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
