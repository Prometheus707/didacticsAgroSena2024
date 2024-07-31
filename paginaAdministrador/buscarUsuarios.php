<?php
session_start();
?>

<?php
require_once("../conexiondb.php");
include("../include/parametros.php");


$busqueda = strtolower($_REQUEST['busqueda']);
if (empty($busqueda)) {
  header("location: usuario.php");
}

/* codigo de cerrar sesion */
if (($_SESSION['idUsuario']) != '') {
?>
  <?php
  /* capturar variable por método GET */
  if (isset($_GET['pos']))
    $ini = $_GET['pos'];
  else
    $ini = 1;
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
    <link href="../css/plantillaAdmin.css" rel="stylesheet">
    <style>
      img {
        max-width: 10vh;
        min-width: 5vh;
      }

      @media screen and (max-width: 600px) {
        table {
          width: 50%;
          display: block;
          overflow-x: auto;
          font-size: 3vw;
          font-size: 2vh;
        }


        thead {
          display: none;
          font-size: 3vw;
          font-size: 2vh;
        }

        tr:nth-of-type(2n) {
          background-color: inherit;
        }

        tr td:first-child {
          background: #29a900;
          color: white;
          width: 65vh;


        }

        tbody td {
          display: block;
          text-align: center;

          /* background:yellow; */
        }

        tbody tr:before {
          content: attr(data-th);
          display: block;
          text-align: center;
          background: #29a900;
          font-family: "Latin Modern Roman 10";
          font-style: oblique;
          font-size: 3vh;
          font-weight: 500;


        }

        /* .table tr:nth-of-type(1):before { content: ""; } */

      }

      /* wstilo paginado*/

      #miBoton {
        color: black;
      }

      .pagination ul {
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
        color: white;
      }

      .t2 {
        width: 11%;

        font-size: 2vh;
        font-weight: 100;

      }

      .t22 {
        width: 4%;

        font-size: 2vh;


      }

      .t3 {
        width: 9%;


        font-size: 3vh;
        font-weight: 400;

      }

      .t33 {
        width: 9%;


        font-size: 2vh;


      }

      .t4 {
        width: 8%;


        font-size: 3vh;
        font-weight: 400;


      }

      .t44 {
        width: 8%;


        font-size: 2vh;
        word-break: break-all;


      }

      .t5 {
        width: 5%;


        font-size: 3vh;
        font-weight: 400;

      }

      .t55 {
        width: 5%;


        font-size: 2vh;
        word-break: break-all;

      }

      .t6 {
        width: 12%;


        font-size: 3vh;
        font-weight: 400;

      }

      .t66 {
        width: 12%;
        font-size: 2vh;
        word-break: break-all;




      }

      .t7 {
        width: 10%;


        font-size: 3vh;
        font-weight: 400;

      }

      .t8 {
        width: 9%;


        font-size: 3vh;
        font-weight: 400;

      }

      .t9 {
        width: 7%;


        font-size: 3vh;
        font-weight: 400;

      }

      .t10 {
        width: 7%;


        font-size: 3vh;
        font-weight: 400;

      }

      .t11 {
        width: 7%;





      }
    </style>
  </head> <!-- Vertical navbar -->
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
      <li class="nav-item">
        <a href="administrador.php" id="miBoton" class="nav-link ">
          <i style="color:#ff6b00" id="div5" class="fa fa-th-large mr-3  fa-fw"></i>
          Técnicas Didácticas
        </a>

      <li class="nav-item" id="padre">
        <a href="rompehielo.php" id="miBoton" class="nav-link ">
          <i id="otro_div" class="far fa-file-alt  mr-3  fa-fw navimmg "></i>
          Descubra más aquí
        </a>
      </li>

      <li class="nav-item" id="padrep">
        <a href="usuario.php" id="miBoton" class="nav-link " style="background:<?php echo $var_color_sena; ?>;color:white">
          <i id="otro_div3" class="fa fa-address-card  mr-3  fa-fw navimmg "></i>
          Usuarios
        </a>
      </li>




      <li class="nav-item" id="padre2">
        <a href="sugerenciaAdmin.php" id="miBoton" class="nav-link">
          <i id="otro_div2" class="fa fa-cubes mr-3  fa-fw navimmg"></i>
          Sugerencias
        </a>
      </li>
      <li class="nav-item" id="padre4">
        <a href="reporte/reportes.php" id="miBoton" class="nav-link ">
          <i id="otro_div4" class="far fa-file-archive mr-3  fa-fw navimmg"></i>
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

      <div style="background:white; margin-top:-32px;" class="bg-red p-5 rounded  shadow-sm ">
        <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">menú</small></button>

        <p class="lead mb-0 text-muted">
        <h4 class="" style="float:left; font-size:5vh;font-size:2.5vw;   "> Usuarios</h4>
        <a href="../cerrarSesion/cerrarSesion.php"> <button style="float:right" width="60%" class="btn btn-danger text-light "> &nbsp&nbsp&nbsp Salir &nbsp&nbsp&nbsp </button></a>


        </p>
      </div><br>
      <div class="row ">





        <div class="w3-content w3-white" style="width:100%; display:table">

          <!-- Grid -->
          <div class="w3-row w3-padding w3-border">





            <form action="buscarUsuarios.php" method="get" class="form-inline my-2 my-lg-0" style="float: right">
              <input type="text" name="busqueda" id="busqueda" class="form-control mr-sm-2" placeholder="Buscar" aria-label="Buscar">
              <button name="b1" class="btn btn-outline-warning">Buscar</button>
            </form><br><br><br>


            <div id="tablephp">
              <?php
              require_once("../conexiondb.php");
              mysqli_set_charset($conecta, "utf8");
              echo "<table border='1' class='table-bordered table-hover'>
                  <thead>
                  <tr  style='text-align: center'>
                  <th class='t2' style='text-align:center font-size:9px;padding-left:15%;'>Usaurio</b></th>
                  <th class='t2' style='text-align:right font-size:9px;padding-left:18%;'>Estado</b></th>
                  <th  class='t2' style='text-align:left font-size:9px;padding-left:5%;'>Rol</b></th>
                  <th  class='t2' ></b></th>
                  <th  class='t2' >Opciones</b></th>
                  <th  class='t2' ></b></th>



                  </tr>
                  <thead>
                  <tbody>";
              ?>


              <?php


              $consulta = "SELECT * FROM usuario inner join rol on rol.idRol=usuario.idRol inner join estado on estado.idEstado=usuario.estado
              where

              nombreUsuario like '%$busqueda%' OR
              telefonoUsuario like '%$busqueda%' OR
              correoUsuario like '%$busqueda%' OR
              nombreEstado like '$busqueda%' OR
              nombreRol like '%$busqueda%'

              ";
              $resultado = $conecta->query($consulta);


              if ($resultado->num_rows > 0) {
                while ($fila = $resultado->fetch_assoc()) {


                  echo "<tr style='text-align; left'>";
                  echo "<td class='t22' style=' font-size:15px; padding-bottom:1%;padding-top:1%'>" . $fila['nombreUsuario'] ." ". $fila['apellidoUsuario'] . "</td>";

                  if ($fila['nombreEstado'] == 'Activo') {

                    echo "<td style=' font-size:15px; padding-bottom:1%;padding-left:18%'>" . $fila['nombreEstado'] . "</td>";
                  }

                  if ($fila['nombreEstado'] == 'Inactivo') {

                    echo "<td style=' font-size:15px; padding-bottom:1%;padding-left:18%'>" . $fila['nombreEstado'] . "</td>";
                  }
                  echo "
                        
                        <td style=' font-size:15px; padding-bottom:1%;padding-left:10%'>" . $fila['nombreRol'] . "</td>
                        <td class='t12' style=' font-size:15px; padding-bottom:1%;padding-left:14%'> <a href='permiso.php?id=".$fila["docUsuario"]."'> <input  class='btn btn-warning' style='color: black;'  type='button' value=' Permiso'></a></td>
                        <td class='t12' style=' font-size:15px; padding-bottom:1%;padding-left:7%'> <a href='actualizarInstruc.php?id=".$fila["docUsuario"]."'> <input style='color: white;' class='btn btn-success'  type='button' value=' Actualizar'></a></td>
                        <td class='t12' style=' font-size:15px; padding-bottom:1%;padding-left:1%'> <a href='eliminarUsu.php?id=".$fila["docUsuario"]."'>  <button type='button' style='color: white;' class='btn btn-danger'  onclick='return ConfirmDelet()'> Eliminar </button> </a></td>



                  </tr>
                  </tbody>";
                }
              } else {
                echo " <td colspan='10'  >
<div class='alert alert-warning' role='alert'>
   No hay resultado de la busqueda.
</div>
				  </td>  </tr>";
              }

              echo "</table>";
              $conecta->close();
              ?>

            </div>


            <!-- END GRID -->
          </div>

          <!-- END w3-content -->
        </div>


        <div class="bg-white p-5 rounded my-5 shadow-sm">
          <p class="lead font-italic mb-0 text-muted">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
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

      </div>

    </div>








  <?php
} else {
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
    if (isset($_GET['opcion1']) && $_GET['opcion1'] == 'true') {
      echo 'alert ( "Registro exitoso")';
    }


    ?>
  </script>