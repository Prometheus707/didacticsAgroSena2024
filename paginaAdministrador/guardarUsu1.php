<?php

	require_once("../conexiondb.php");

	if(isset($_POST['registroUsu']))
	{

	$cedula= trim($_POST['identificacion']);
  	$nombre= trim($_POST['nombre']);
    	$apellido= trim($_POST['apellido']);
           $rol= trim($_POST['rol']);
             $correo= trim($_POST['correo']);
                 $telefono= trim($_POST['telefono']);
                    $clave= trim($_POST['clave']);
											$estado=trim($_POST['estado']);
                      $regional=trim($_POST['regional']);
                      $centro=trim($_POST['centro']);
                      $area=trim($_POST['area']);
                      





		  	$consulta = "SELECT * FROM usuario where docUsuario = '".$cedula."'";

		  	$resultado = $conecta->query($consulta);

		  		if($resultado->num_rows == 0)
		  		{
		  			$consulta = "INSERT INTO usuario (idUsuario,docUsuario, nombreUsuario, apellidoUsuario, correoUsuario, telefonoUsuario, claveUsuario,estado,idRol,idRegional,idCentro,idArea)
		  						VALUES (NULL,'$cedula','$nombre','$apellido', '$correo','$telefono','$clave','$estado','$rol','$regional','$centro','$area')";
		  					if($conecta->query($consulta) === TRUE)
		  					{
		  							header('location:usuario.php?opcion1=true');

		  					}}
		  					else
		  					{
		  						header('location: usuario.php?opcion2=true');
		  					}



		$conecta->close();

}
	?>
