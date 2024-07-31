<?php
session_start();
 ?>
<?php 
 /* codigo de cerrar sesion */
  if(($_SESSION['idUsuario'])!=''){
   ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  </head>
  <body>




  <?php
  require_once("../conexiondb.php");
  $id= $_SESSION['docUsuario'];
  $consulta = "SELECT * FROM usuario inner join regional on regional.idRegional=usuario.idRegional inner join centro on centro.idCentro=usuario.idCentro inner join area on area.idArea=usuario.idArea inner join programa on programa.idPrograma=usuario.idPrograma where docUsuario=".$id;
  $resultado = $conecta->query($consulta);


  if ($resultado->num_rows > 0){
      $fila = $resultado->fetch_assoc();
    ?>



    <form name="actualizarInstructor2" method="POST" action="actualizarInstructor2.php" >
  <br>
  <table>
  <tr><th colspan="6"> Actualizar Datos De Usuario </th> </tr>




  <td> Nombre: </td><td   class="" >  <input class=""  type="text" name="nombreUsu" value="<?php echo $fila["nombreUsuario"]; ?>" maxlength="30"  onkeypress="return soloLetras(event)" onKeyUp="this.value=this.value.toUpperCase();"maxlength="3"  onkeypress="return soloLetras(event)" onKeyUp="this.value=this.value.toUpperCase();" required/>     </td>
  <td> Apellidos: </td><td class=""  > <input class="form-control"  type="text" name="apellidoUsu" value="<?php echo $fila["apellidoUsuario"]; ?>" maxlength="30"  onkeypress="return soloLetras(event)" onKeyUp="this.value=this.value.toUpperCase();"maxlength="3"  onkeypress="return soloLetras(event)" onKeyUp="this.value=this.value.toUpperCase();" required/>  </td>
  <td> Teléfono: </td><td class=""  > <input class="form-control" type="text" name="telefonoUsu"  value="<?php echo $fila["telefonoUsuario"]; ?>" required/>  </td>

<tr>
  <td> Correo:  </td><td class=""  > <input class="form-control" type="email" name="correoUsu" value="<?php echo $fila["correoUsuario"]; ?>" required/>  </td>

</tr>




      <br>




    <input type="hidden"  name="idInstructor" value="<?php echo $id; ?>"/>
    <tr> <td colspan="3"> <input class="btn btn-success btn-sm btn-block" type="submit" id="validate"  value="Actualizar Datos"> </td>
    <td  colspan="3"> <a href="Usuario.php"> <input   style="width:100%" class="btn btn-danger btn-sm "  type="button" value=" Cancelar">  </a></td>
    </tr>

    </table>
    <br>
    </form>

    <?php
    }
    ?>
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Actualizar Información
</button>
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
  $id= $_SESSION['docUsuario'];
  $consulta2 = "SELECT * FROM usuario  where docUsuario=".$id;
echo $consulta2;
  $resultado2 = $conecta->query($consulta2);


  if ($resultado2->num_rows > 0){
      $fila = $resultado2->fetch_assoc();
    ?>



    <form name="actualizarInstructor2" method="POST" action="actualizarInstructor2.php" >
  <br>
  <table>
  <tr><th colspan="6"> Actualizar Datos De Usuario </th> </tr>



<tr>
  <td> Nombre: </td><td   class="" >  <input class=""  type="text" name="nombreUsu" value="<?php echo $fila["nombreUsuario"]; ?>" maxlength="30"  onkeypress="return soloLetras(event)" onKeyUp="this.value=this.value.toUpperCase();"maxlength="3"  onkeypress="return soloLetras(event)" onKeyUp="this.value=this.value.toUpperCase();" required/>     </td><br>
 </tr><tr> <td> Apellidos: </td><td class=""  > <input class="form-control"  type="text" name="apellidoUsu" value="<?php echo $fila["apellidoUsuario"]; ?>" maxlength="30"  onkeypress="return soloLetras(event)" onKeyUp="this.value=this.value.toUpperCase();"maxlength="3"  onkeypress="return soloLetras(event)" onKeyUp="this.value=this.value.toUpperCase();" required/>  </td><BR>
 </tr><tr>   <td> Teléfono: </td><td class=""  > <input class="form-control" type="text" name="telefonoUsu"  value="<?php echo $fila["telefonoUsuario"]; ?>" required/>  </td>

 </tr><tr>
  <td> Correo:  </td><td class=""  > <input class="form-control" type="email" name="correoUsu" value="<?php echo $fila["correoUsuario"]; ?>" required/>  </td>

</tr>




      <br>




    <input type="hidden"  name="idInstructor" value="<?php echo $id; ?>"/>
    <tr> <td colspan="3"> <input class="btn btn-success btn-sm btn-block" type="submit" id="validate"  value="Actualizar Datos"> </td>
    <td  colspan="3"> <a href="Usuario.php"> <input   style="width:100%" class="btn btn-danger btn-sm "  type="button" value=" Cancelar">  </a></td>
    </tr>

    </table>
    <br>
    </form>

    <?php
    }
    ?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>    
  </body>
</html>
<?php
}else{
  header("location:../index.php");
}
 ?>