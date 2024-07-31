<?php
	require ('../conexiondb.php');
 mysqli_set_charset($conecta,"utf8");

	$id_program =$_POST['id_programa'];

	$sql = "SELECT * FROM programa WHERE idAreafk='".$id_program."' ORDER BY nombrePrograma ASC";
	$result = $conecta->query($sql);

	$html= "<option  value='' disabled selected>Seleccione...</option>";

	while($rowM = $result->fetch_assoc())
	{
		$html.= "<option value='".$rowM['idPrograma']."'>".$rowM['nombrePrograma']."</option>";
	}

	echo $html;

?>
