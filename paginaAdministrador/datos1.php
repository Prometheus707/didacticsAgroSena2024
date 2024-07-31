<?php
require_once('../conexiondb.php');
$continente=$_POST['area'];

	$sql="SELECT *
		from programa
		where idareafk='$continente'";

	$result=$conecta->query($sql);

	$cadena="<label style='margin-top:5%'>4. Programa</label><br>
			<select id='lista5' style='width:70%' name='programa'>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';
	}

	echo  $cadena."</select>";


?>
