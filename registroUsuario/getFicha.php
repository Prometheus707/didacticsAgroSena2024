<?php
	require ('../conexiondb.php');
 mysqli_set_charset($conecta,"utf8");
	$id_program =$_POST['id_programa'];

	$sql = "SELECT * FROM centro WHERE idRegional='".$id_program."' ORDER BY nombreCentro ASC";
	$result = $conecta->query($sql);

	$html= "<option  value='' disabled selected>Seleccione...</option>";

	while($rowM = $result->fetch_assoc())
	{
		$html.= "<option value='".$rowM['idCentro']."'>".$rowM['nombreCentro']."</option>";
	}

	echo $html;

?>
