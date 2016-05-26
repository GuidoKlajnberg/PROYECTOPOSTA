<?php
$con=mysqli_connect("localhost","root","","mydb");
if(mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " .mysqli_connect_error();
}
else
{
	$query = "SELECT * FROM usuario";
$query_exc=mysqli_query($con, $query);
$usuarios = Array();
		while($row=mysqli_fetch_assoc($query_exc)){
			$usuario = Array(
			"idUsuario" => $row["idUsuario"], 
			"NombreUsuario" => $row["NombreUsuario"], 
			"Contrasena" => $row["Contrasena"], 
			"Email" => $row["Email"],  
			"Direccion" => $row["Direccion"], 
			);
			array_push($usuarios, $usuario);
		}
	
	
	header("Content-Type: application/json");
	$json = json_encode($usuarios, JSON_PRETTY_PRINT);
	echo($json);
}
mysqli_close($con);

?>