<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/estiloActualizar.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <title></title>
</head>

<body>

  <?php
  require_once("../conexiondb.php");
  $id = $_GET['id'];
  $consulta = "SELECT * FROM usuario inner join estado on estado.idEstado=usuario.estado inner join rol on rol.idRol=usuario.idRol where docUsuario=" . $id;
  $resultado = $conecta->query($consulta);
  include("../include/parametros.php");

  if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
  ?>

    <main style="display: block; width:35%;margin: 7% auto;background:#e2e2e2">
      <section>

        <img src="../images/didac.png" alt="logo" width="45%" style="padding-top: 2%;padding-left: 2%">
        <hr>
        <form class="" action="permiso2.php" method="post">

          <p style="padding-left: 2%;font-size:25px; text-align: center;color:<?php echo $var_color_sena; ?>">Por favor seleccione permisos de usuario</p>
          <!---- select de estado de usuario ------->

          <div style="padding-left:10%;font-size:20px">
            <p>Estado</p>
            <select class="" style="width:70%" name="estado">
              <option value="<?php echo $fila["estado"]; ?>"><?php echo $fila["nombreEstado"]; ?></option>
              <option value="" disabled>Seleccione...</option>
              <option value="1">ACTIVO</option>
              <option value="2">INACTIVO</option>
            </select>

            <p>Rol</p>
            <!-- select de permiso de rol ---->
            <select class="" style="width:70%" name="rol">
              <option value="<?php echo $fila["idRol"]; ?>"><?php echo $fila["nombreRol"]; ?></option>
              <option value="" disabled>Seleccione...</option>
              <option value="2">ADMINISTRADOR</option>
              <option value="1">INSTRUCTOR</option>
            </select>
            <br><br>

            <input type="hidden" name="idInstructor" value="<?php echo $id; ?>" />
            <input class="btn btn-success btn-sm" style="font-size:18px" type="submit" id="validate" value="Actualizar Datos">
            <a href="usuario.php"> <input class="btn btn-danger btn-sm" style="font-size:18px; margin-left:4%" type="button" value=" Cancelar"> </a>
          </div><br><br>
        </form>

      </section>
    </main>



  <?php
  }
  ?>



</body>

</html>