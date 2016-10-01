<?php
	function conectar()
	{
		$user="Targaryen";
		$pass="lapato124";
		$server="localhost";
		$db="alumnos";
		$con=mysql_connect($server,$user,$pass) or die ("Error al Conectar a la DB".mysql_error());
		mysql_select_db($db,$con);
		return $con;
	}
?>