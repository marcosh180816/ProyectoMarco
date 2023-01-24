<?php
include('./modelo/conexionbd.php');

$correo = $_POST['txtcorreo'];

$queryusuario 	= mysqli_query($conexion,"SELECT * FROM usuarioafi WHERE correo = '$correo'");
$nr 			= mysqli_num_rows($queryusuario); 
if ($nr == 1)
{
$mostrar		= mysqli_fetch_array($queryusuario); 
$enviarclave 	= $mostrar['clave'];

$paracorreo 		= $correo;
$titulo				= "Recuperar contraseña";
$mensaje			= $enviarclave;
$tucorreo			= "From: marcosolanoh20@gmail.com";

if(mail($paracorreo,$titulo,$mensaje,$tucorreo))
{
	echo "<script> alert('Contraseña enviado');window.location= 'index.html' </script>";
}else
{
	echo "<script> alert('Error');window.location= 'index.html' </script>";
}
}
else
{
	echo "<script> alert('Este correo no existe');window.location= 'index.html' </script>";
}

?>