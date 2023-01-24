<?php
//Para registrar
include('./modelo/conexionbd.php');

$cedula = $_POST["txtcedula"];
$correo = $_POST["txtcorreo"];
$clave 	= $_POST["txtpassword"];
$nombre = $_POST["txtnombre"];
$telefono = $_POST["txttelefono"];


$queryusuario 	= mysqli_query($conexion,"SELECT * FROM usuarioafi WHERE correo = '$correo'");
$nr 			= mysqli_num_rows($queryusuario); 


if ($nr == 0)
{	
	
	$queryregistrar = "INSERT INTO usuarioafi (cedula, correo, clave, nombre, telefono) values ('$cedula', '$correo', '$clave', '$nombre', '$telefono')";
	

if(mysqli_query($conexion,$queryregistrar))
{
	echo "<script> alert('Usuario registrado: $nombre');window.location= 'index.html' </script>";
}
else 
{
	echo "Error: " .$queryregistrar."<br>".mysql_error($conexion);
}

}
else
{
		echo "<script> alert('No puedes registrar este correo: $correo');window.location= 'index.html' </script>";
}

?>