<?php
$con=mysqli_connect("localhost","root","","mydb");
if(mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " .mysqli_connect_error();
}
else
{		
			$NombreUsuario = $_GET["NombreUsuario"]; 
			$Contrasena = $_GET["Contrasena"]; 
			$Email = $_GET["Email"];  
			$Direccion = $_GET["Direccion"]; 
	
	$query = "INSERT INTO usuario (NombreUsuario,Contrasena,Email,Direccion) values ($NombreUsuario,$Contrasena,$Email,$Direccion)";
	$query_exc=mysqli_query($con, $query);
}
mysqli_close($con);

?>