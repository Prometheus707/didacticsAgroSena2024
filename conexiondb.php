<?php
 $servername 	= "localhost";
 $dbname			= "id22404003_didacticsagrosena";
 $username 		= "id22404003_santiago";
 $password 		= "Didactics2024*";
 $conecta = new mysqli ($servername, $username, $password, $dbname);
 if ($conecta->connect_error) {	die("la conexion a fallado: " . $conecta->connect_error);	}
 ?>