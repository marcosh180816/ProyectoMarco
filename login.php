<?php

include('./modelo/conexionbd.php');

$nombre = $_POST["txtnombre"];
$clave 	= $_POST["txtpassword"];

//Para iniciar sesión

$queryusuario = mysqli_query($conexion,"SELECT * FROM usuarioafi WHERE nombre ='$nombre' and clave = '$clave'");
$nr 		= mysqli_num_rows($queryusuario);  

	
if ($nr == 1 )
	{ 
	echo	"<script> alert('Usuario logueado.');window.location= './vista/convertidor.html' </script>";
	}
else
	{
	echo "<script> alert('Usuario o contraseña incorrecto.');window.location= 'index.html' </script>";
	}


?>