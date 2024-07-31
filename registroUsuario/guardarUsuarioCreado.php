<?php

	require_once("../conexiondb.php");

	if(isset($_POST['registroUsu']))
	{

	$cedula= trim($_POST['id_identificacion']);
  	$nombre= trim($_POST['nombreUsuario']);
    	$apellido= trim($_POST['ape_usuario']);
		   $telefono= trim($_POST['telefono']);
		          $correo= trim($_POST['correo_usu']);
                    $regional= trim($_POST['nom_programa']);
					$centro= trim($_POST['centro']);
					$area= trim($_POST['area']);
					/* $programa= trim($_POST['programa']); */

                    $clave= trim($_POST['contra_usu']);

											$estado='2';
											$rol='1';


/*echo $cedula;
echo "<br>";
echo $nombre;
echo "<br>";
echo $apellido;
echo "<br>";
echo $telefono;
echo "<br>";
echo $correo;
echo "<br>";
echo "la reginal es: ".$regional;
echo $regional;
echo "<br>";
echo $centro;
echo "<br>";
echo $area;
echo "<br>";
echo $programa;
echo "<br>";
echo $clave;
echo "<br>";
echo $estado;
echo "<br>";
echo $rol;
echo "<br>";
exit();*/

			$consulta = "SELECT * FROM usuario where docUsuario= '".$cedula."'";

		  	$resultado = $conecta->query($consulta);

		  		if($resultado->num_rows == 0)
		  		{
				$consulta = "INSERT INTO usuario (idRol,idArea,idCentro,idRegional,docUsuario,nombreUsuario,apellidoUsuario,telefonoUsuario,correoUsuario,claveUsuario,estado)
									VALUES ('$rol','$area','$centro','$regional','$cedula','$nombre','$apellido','$telefono','$correo','$clave','$estado')"; 
		  					if($conecta->query($consulta) === TRUE)
		  					{
		  							header('location: ../index.php?opcion1=true');

		  					}
		  					else
		  					{
		  						echo "Error: " . $consulta . "<br>" . $conecta->error;
		  					}
		  		}
		  		else
		  		{
		        	header('location: ../index.php?opcion2=true');

		  		}


		$conecta->close();
		

			}
			?>
