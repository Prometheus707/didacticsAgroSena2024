<?php
require_once('../conexiondb.php');


$continente=$_POST['continente'];

	$sql="SELECT *
		from centro
		where idRegional='$continente'";

	$result=$conecta->query($sql);

	$cadena="<label style='margin-top:5%'>2. Centro</label><br>
			<select id='lista2' style='width:70%' name='centro'>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option  value='.$ver[0].'>'.($ver[2]).'</option>';
	}

	echo  $cadena."</select>";


?>
