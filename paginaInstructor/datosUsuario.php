<?php
session_start();
?>
<?php
require_once("../conexiondb.php");
include("../include/parametros.php");


/* codigo de cerrar sesion */
if (($_SESSION['idUsuario']) != '') {
?>


  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Datos Usuario</title>
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
    <link href="../css/datosUsuario.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome Icons -->
  
    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">



    <script>
      $(document).ready(function() {
        $("#myBtn3").click(function() {
          $("#exampleModal").modal({
            backdrop: "static"
          });
        });
      });
    </script>
    <script type="text/javascript">
      $(function() {
        $('#padre > a').hover(function() {
          $('#otro_div').css('color', 'white');
        }, function() {
          // vuelve a dejar el <div> como estaba al hacer el "mouseout"
          $('#otro_div').css('color', '');
        });
      });
    </script>
    <script type="text/javascript">
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
    <script>
      // comparar claves
      function habilitar() {
        var camp1 = document.getElementById("campo1");
        var camp2 = document.getElementById("campo2");
        var botn = document.getElementById("boton");

        if (camp1.value != camp2.value) {
          botn.disabled = true;
          $('#error2').text('LAS CLAVES NO COINCIDEN!').css("color", "red");


        } else {
          botn.disabled = false;
          $('#error2').text('LAS CLAVES COINCIDEN!').css("color", "green");

        }

      }
    </script>
    <script>
      // longitud de letras java		
      function soloLetras(e) {
        key = e.keyCode || e.which;
        tecla = String.fromCharCode(key).toLowerCase();
        letras = " ABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚabcdefghijklmnñopqrstuvwxyzáéíóú";
        especiales = "8-37-39-46";
        tecla_especial = false
        for (var i in especiales) {
          if (key == especiales[i]) {
            tecla_especial = true;
            break;
          }
        }
        if (letras.indexOf(tecla) == -1 && !tecla_especial) {
          return false;
        }
      }
    </script>
  </head> <!-- Vertical navbar -->
  <div class="vertical-nav bg-white" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-light">
      <div class="media d-flex align-items-center"><img src="../imagenes/usuarioD.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
        <div class="media-body">
          <h5 class="m-0"> <?php echo  ''  . $_SESSION['nombre'] . " <br> " . $_SESSION['apellido']; ?></h5>
          <p class="font-weight-light text-muted mb-0">Instructor</p>
        </div>
      </div>
    </div>
    <ul class="nav flex-column bg-white mb-0">
      <li class="nav-item" id="padre">
        <a href="instructor.php" id="miBoton" class="nav-link  ">
          <i id="otro_div" class="fa fa-th-large mr-3  fa-fw navimmg"></i>
          Técnicas Didácticas
        </a>
      </li>
      <li class="nav-item" id="padre4">
        <a href="quintoBoton.php" id="miBoton" class="nav-link ">
          <i id="otro_div4" class="far fa-file-alt  mr-3  fa-fw navimmg "></i>
          Descubra más aquí
        </a>
      </li>
      <li class="nav-item" id="padre6">
        <a href="https://epcagropecuariocauca.blogspot.com" target="_blank" id="miBoton" class="nav-link ">
          <i id="otro_div6" class=" fa fa-globe  mr-3  fa-fw navimmg "></i>
          Banco de Recursos Didácticos
        </a>
      </li>
      <li class="nav-item">
        <a style="	background:<?php echo $var_color_sena; ?>; color:white" href="#" id="miBoton" class="nav-link text-white  ">
          <i style="	color:white ;" class="fa fa-address-card  mr-3  fa-fw navimmg "></i>
          Mis Datos
        </a>
      </li>





      <li class="nav-item" id="padre2">
        <a href="sugerencia.php" id="miBoton" class="nav-link ">
          <i id="otro_div2" class="fa fa-cubes mr-3  fa-fw navimmg"></i>
          Sugerencias
        </a>
      </li>




      <!-- End vertical navbar  <li class="nav-item">
      <a href="#" class="nav-link text-dark font-italic">
                <i style="	color:#Ff6b00 ;"  class="fa fa-bar-chart mr-3  fa-fw"></i>
                Bar charts
            </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-dark font-italic">
                <i style="	color:#Ff6b00 ;"  class="fa fa-pie-chart mr-3  fa-fw"></i>
                Pie charts
            </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-dark font-italic">
                <i style="	color:#Ff6b00 ;"   class="fa fa-line-chart mr-3 
				fa-fw"></i>
                Line charts
            </a>
    </li>-->
    </ul>
  </div>
  <!-- End vertical navbar -->

  <body>

    <!-- Page content holder -->
    <div class="page-content p-5" id="content">
      <!-- Toggle button -->
      <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">menú</small></button>



      <div class="row  w3-white">

        <div class=" p-5 rounded my-15 shadow-sm blue">



          <?php
          require_once("../conexiondb.php");
          $id = $_SESSION['docUsuario'];
          $consulta = "SELECT * FROM usuario inner join estado on estado.idEstado=usuario.estado inner join centro on centro.idCentro=usuario.idCentro inner join regional on regional.idRegional=usuario.idRegional inner join area on area.idArea=usuario.idArea  where docUsuario=" . $id;
          $resultado2 = $conecta->query($consulta);


          if ($resultado2->num_rows > 0) {
            while ($fila = $resultado2->fetch_assoc()) {
              echo "
		<div style='display: flex; flex-wrap: wrap; gap: 1rem; text-align:center; justify-content: center; align-items:center; max-width: 1200px; margin: auto;'>
  <!-- Input addon -->
  <div class='card card-info' style='width: 100%;'>
    <div class='card-header' style='background:#29a900'>
      <h5 class='card-title'><center>Datos del usuario</center></h5>
    </div>
    <div class='card-body'>

      <div class='row'>
        
      </div>

      <div class='row'>
      <div class='col-4'>
          <h5>Nombre</h5>
          <div class='input-group mb-3'>
            <div class='input-group-prepend'>
              <span class='input-group-text' style='background:#29a900; color:white;'><i class='fa-solid fa-user'></i></span>
            </div>
            <input type='text' style='text-align:center;' class='form-control' value='" . $fila["nombreUsuario"] ." ".$fila["apellidoUsuario"]."' readonly>
          </div>
        </div>
        <div class='col-4'>
          <h5>Numero Documento</h5>
          <div class='input-group mb-3'>
            <div class='input-group-prepend'>
              <span class='input-group-text'  style='background:#29a900; color:white;'><i class='fa-regular fa-address-card'></i></span>
            </div>
            <input type='email' style='text-align:center;' class='form-control' value='" . $fila["docUsuario"] . "' readonly>
          </div>
        </div>

        <div class='col-4'>
          <h5>Teléfono</h5>
          <div class='input-group mb-3'>
            <div class='input-group-prepend'>
              <span class='input-group-text'  style='background:#29a900; color:white;'><i class='fa-solid fa-phone'></i></span>
            </div>
            <input type='email' class='form-control' style='text-align:center;' value='" . $fila["telefonoUsuario"] ."' readonly>
          </div>
        </div>
      </div>

      <div class='row'>
        <div class='col-4'>
          <h5>Correo Electrónico</h5>
          <div class='input-group mb-3'>
            <div class='input-group-prepend'>
              <span class='input-group-text'  style='background:#29a900; color:white;'><i class='fa-solid fa-envelope'></i></span>
            </div>
            <input type='email' style='text-align:center;' class='form-control' value='" . $fila["correoUsuario"] . "' readonly>
          </div>
        </div>

        <div class='col-4'>
          <h5>Estado Usuario</h5>
          <div class='input-group mb-3'>
            <div class='input-group-prepend'>
              <span class='input-group-text'  style='background:#29a900; color:white;'><i class='fa-solid fa-bullseye'></i></span>
            </div>
            <input type='email' style='text-align:center;' class='form-control' value='" . $fila["nombreEstado"] . "' readonly>
          </div>
        </div>
         <div class='col-4'>
          <h5>Nombre Centro</h5>
          <div class='input-group mb-3'>
            <div class='input-group-prepend'>
              <span class='input-group-text'  style='background:#29a900; color:white;'><i class='fa-solid fa-file-signature'></i></span>
            </div>
            <input type='email' style='text-align:center;' class='form-control' value='" . $fila["nombreCentro"] . "' readonly>
          </div>
        </div>
      </div>

      <div class='row'>
        <div class='col-4'>
          <h5>Regional</h5>
          <div class='input-group mb-3'>
            <div class='input-group-prepend'>
              <span class='input-group-text'  style='background:#29a900; color:white;'><i class='fa-solid fa-house'></i></span>
            </div>
            <input type='email' style='text-align:center;' class='form-control' value='" . $fila["nombreRegional"] . "' readonly>
          </div>
        </div>
         <div class='col-4'>
          <h5>Area</h5>
          <div class='input-group mb-3'>
            <div class='input-group-prepend'>
              <span class='input-group-text'  style='background:#29a900; color:white;'><i class='fa-solid fa-chart-area' '></i></span>
            </div>
            <input type='email' style='text-align:center;' class='form-control' value='" . $fila["nombreArea"] . "' readonly>
          </div>
        </div>
      </div>

      <div class='row'>
       
      </div>

    </div>
    <!-- /.card-body -->
  </div>
</div>

      <button style=' width:22vh; font-size:2vh; margin-top:3rem; margin-left:30rem;'type='button' id='myBtn3' class='btn btn-warning' data-toggle='modal' data-target='#exampleModal'>
         Actualizar Información
      </button> &nbsp;&nbsp;

      <button style=' width:20vh; font-size:2vh; margin-top:3rem;' type='button' id='myBtn3' class='btn btn-success' data-toggle='modal' data-target='#exampleModal2'>
      Cambiar contraseña
      </button>";

          ?>








              </tbody>
              </table>



              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Información Personal</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">



                      <?php
                      require_once("../conexiondb.php");


                      ?>



                      <form name="actualizarInstructor2" method="POST" action="actualizarInstructor2.php">

                        <div> Cédula <input class="form-control" type="text" name="numDoc" value="<?php echo $fila["docUsuario"]; ?>" disabled="disabled" /> </div>
                        <div> Nombre: <input class="form-control" type="text" name="nombreUsu" value="<?php echo $fila["nombreUsuario"]; ?>" maxlength="30" onkeypress="return soloLetras(event)" onKeyUp="this.value=this.value.toUpperCase();" /> </div>
                        <div> Apellidos: <input class="form-control" type="text" name="apellidoUsu" value="<?php echo $fila["apellidoUsuario"]; ?>" maxlength="30" onkeypress="return soloLetras(event)" onKeyUp="this.value=this.value.toUpperCase();" /> </div>

                        <div> Teléfono: <input class="form-control" type="text" name="telefonoUsu" value="<?php echo $fila["telefonoUsuario"]; ?>" required maxlength="10" oninput="maxlengthNumber(this);" onkeypress='return event.charCode >= 48 && event.charCode <= 57' /> </div>
                        <div> Correo: <input class="form-control" type="email" name="correoUsu" value="<?php echo $fila["correoUsuario"]; ?>" /> </div>

                    </div>
                    <div class="modal-footer">
                      <input type="hidden" name="idInstructor" value="<?php echo $id; ?>" />
                      <input class="btn btn-success btn-sm btn-block" type="submit" id="validate" value="Actualizar Datos">
                      <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cerrar</button>
                    </div>





                    </form>


                  </div>
                </div>
              </div>
              <!--  Modal Cambiar Contraseña -->
              <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="exampleModalLabel">Cambiar Contraseña</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">






                      <form name="actualizarClave" method="POST" action="actualizarClave.php">

                        <div> Contraseña actual: <input class="form-control" type="password" id="campo1" name="numDoc" value="<?php echo $fila["claveUsuario"]; ?>" disabled="disabled" /> </div>
                        <div> Ingresa tu contraseña actual: <input class="form-control" id="campo2" onkeyup="habilitar()" type="password" name="numDoc" value="" maxlength="10" required /> </div>
                        <span style="font-size:12px" id="error2"></span>
                        <div> Nueva Contraseña: <input class="form-control" type="password" name="nuevaClave" value="" minlength="4" maxlength="10" required /> </div>

                        <br>
                        <input type="hidden" name="idInstructor" value="<?php echo $id; ?>" />
                        <input class="btn btn-success btn-sm btn-block" type="submit" id="boton" value="Guardar Cambios">


                      </form>
                  <?php

                }
              } else {
                echo "No hay resultados en la consulta";
              }


              $conecta->close();
                  ?>

                    </div>
                  </div>
                </div>
              </div>


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
} else {
  header("location:../index.php");
}
  ?>





  </body>
  <script>
    <?php

    if (isset($_GET['opcion1']) && $_GET['opcion1'] == 'true') {
      echo 'alert ( " Actualización Exitosa.")';
    }


    ?>
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