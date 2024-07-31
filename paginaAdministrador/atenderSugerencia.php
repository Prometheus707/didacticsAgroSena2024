
<?php
session_start();
   require_once("../conexiondb.php");
    $id=$_GET['id'];
    include("../include/parametros.php");

/* codigo de cerrar sesion */
  if(($_SESSION['idUsuario'])!='id'){
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
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap CSS (opcional, solo si lo necesitas) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <!-- codigo para desplegar selct--->
    <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>


  <!-- final del selct--->

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
               $('#div5').css('color', '');
             });
           });
       </script>

<link href="../css/plantillaAdmin.css" rel="stylesheet">

</head>				<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
  <div class="py-4 px-3 mb-4 bg-light">
    <div class="media d-flex align-items-center"><img src="../images/usuarioD.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
      <div class="media-body">
          <h5 class="m-0"> <?php echo  ''  . $_SESSION['nombre'] . " <br> " . $_SESSION['apellido']; ?></h5>
        <p class="font-weight-light text-muted mb-0">Administrador</p>
      </div>
    </div>
  </div>


  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item" id="padre5">
      <a  href="administrador.php" id="miBoton" class="nav-link " >
                <i  id="div5" class="fa fa-th-large mr-3  fa-fw"></i>
                Técnicas Didácticas
            </a>
        </li>

            <li class="nav-item"  id="padre">
              <a href="rompehielo.php" id="miBoton" class="nav-link ">
                        <i     id="otro_div" class="far fa-file-alt  mr-3  fa-fw navimmg " style=""></i>
                        Descubra más aquí
                    </a>
            </li>

    <li class="nav-item"  id="padrep">
      <a href="usuario.php" id="miBoton" class="nav-link">
                <i     id="otro_div3" class="fa fa-address-card  mr-3  fa-fw navimmg "></i>
                Usuarios
            </a>
    </li>




    <li class="nav-item"  id="padre2">
      <a href="sugerenciaAdmin.php"  id="miBoton"   class="nav-link " style="background:<?php echo $var_color_sena; ?>;color:white">
                <i  id="otro_div2" class="fa fa-cubes mr-3 text-white  fa-fw navimmg"></i>
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

      <h4 class="" style="float:left; font-size:5vh;font-size:2.5vw;   " > Atender sugerencia</h4>
		  <a href="../cerrarSesion/cerrarSesion.php"> <button style="float:right" width="60%" class="btn btn-danger text-light " > &nbsp&nbsp&nbsp Salir &nbsp&nbsp&nbsp </button></a>


</p>		</div><br>
  <div class="row ">





<div class="w3-content  w3-white" style="width:100%; display:table">

  <!-- Grid -->

      <center>
        <?php
        $consulta = "SELECT * FROM sugerencia inner join usuario on usuario.idUsuario=sugerencia.idUsuariofk where idSugerencia=".$id;
        $resultado = $conecta->query($consulta);
           

        if ($resultado->num_rows > 0){
            $fila = $resultado->fetch_assoc();
        ?>

     
        <div style="font-size:20px;color:<?php echo $var_color_sena; ?>">  Nombre instructor:</div><p style="font-size:18px"> <?php echo $fila['nombreUsuario'] ?>&nbsp<?php echo $fila['apellidoUsuario']; ?> </p>
      
        
          <div style="font-size:20px;color:<?php echo $var_color_sena; ?>"> Sugerencia:</div> <p style="font-size:18px"> <?php echo  $fila['sugerencia']; ?></p><br><br><br>
       


         <form class="" action="sugerenciaAdmin2.php" method="post">

      
          <div  style="font-size:20px;">Responder sugerencia:</div><textarea name="comentario" style="width: 100%;padding:2%;font-size:21px" rows="8" cols="80"><?php echo $fila['comentario']; ?></textarea>
       
        
        </center><br><br><br><br>

          <div style="float:right;width:48%;padding-right:5%">
          <a href="sugerenciaAdmin.php" ><button type="button" class='btn  btn-danger btn-sm' style="font-size: 19px;width:100%" name="button">Cancelar</button></a>
          </div>
          <div style="width:48%;padding-left:5%">
          <button  class="btn  btn-success btn-sm" style="font-size:19px;width:100%" type="submit" name="">Agregar</button>
          </div>

          <br><br><br>
          <input type="hidden" name="id" value="<?php echo $id; ?>">



         </form>

    <?php } ?>
      </center>
  <!-- END GRID -->
  </div>

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




<!------- modal de añadir tdas ---------->






<?php
}else{
  header("location:../index.php");
}
 ?>





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

                          <?php
                          if(isset($_GET['opcion1'])&& $_GET['opcion1']=='true'){
                            echo 'alert ( "Registro exitoso")';
                          }



                                    ?>


                       </script>



<!-- codigo para los selects--->
                       <script type="text/javascript">
                       	$(document).ready(function(){
                       		$('#lista1').val(1);
                       		recargarLista();

                       		$('#lista1').change(function(){
                       			recargarLista();
                       		});
                       	})
                       </script>
                       <script type="text/javascript">
                       	function recargarLista(){
                       		$.ajax({
                       			type:"POST",
                       			url:"datos.php",
                       			data:"continente=" + $('#lista1').val(),
                       			success:function(r){
                       				$('#select2lista').html(r);
                       			}
                       		});
                       	}
                       </script>





                       <!-- codigo para los selects--->
                                              <script type="text/javascript">
                                              	$(document).ready(function(){
                                              		$('#lista5').val(1);
                                              		nombrelista();

                                              		$('#lista5').change(function(){
                                              			nombrelista();
                                              		});
                                              	})
                                              </script>
                                              <script type="text/javascript">
                                              	function nombrelista(){
                                              		$.ajax({
                                              			type:"POST",
                                              			url:"datos1.php",
                                              			data:"area=" + $('#lista5').val(),
                                              			success:function(r){
                                              				$('#select3lista').html(r);
                                              			}
                                              		});
                                              	}
                                              </script>

                                              <!--- solo letras de registro-->
                                              <script>
                                                        // longitud de letras java
                                            function soloLetras(e){
                                              key = e.keyCode || e.which;
                                              tecla = String.fromCharCode(key).toLowerCase();
                                              letras = " ABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚabcdefghijklmnñopqrstuvwxyzáéíóú";
                                              especiales = "8-37-39-46";
                                              tecla_especial = false
                                              for(var i in especiales){
                                                if(key == especiales[i]){
                                                  tecla_especial = true;
                                                  break;
                                                }
                                              }
                                              if(letras.indexOf(tecla)==-1 && !tecla_especial){
                                                return false;
                                              }
                                            }
                                           </script>
