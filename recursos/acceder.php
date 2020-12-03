<?php
	
//Conectamos a la base de datos
require('../conex/conexion.php');

//Obtenemos los datos del formulario de acceso
$userPOST = $_POST["username"]; 
$passPOST = $_POST["pass"];


//Escribimos la consulta necesaria
$consulta = "SELECT * FROM `usuario` WHERE usuario='".$userPOST."' and pass='".$passPOST."'";
 
//Obtenemos los resultados
$resultado = mysqli_query($conexion, $consulta);
$datos = mysqli_fetch_array($resultado);

//Guardamos los resultados del nombre de usuario en minúsculas
//y de la contraseña de la base de datos
$userBD = $datos['usuario'];
$passwordBD = $datos['pass'];

//Comprobamos si los datos son correctos
if($userBD == $userPOST and $passPOST== $passwordBD){ 

	session_start();
	$_SESSION['nombre'] = $datos['nombre'];
	$_SESSION['apellido'] = $datos['apellido'];
	$_SESSION['correo'] = $datos['correo']; 
	$_SESSION['usuario'] = $datos['usuario'];
	$_SESSION['estado'] = 'Autenticado';
	//redirecciono 
	header("Location: ../redirect.html");
	echo "ingresando";  
//Si los datos no son correctos, o están vacíos, muestra un error
//Además, hay un script que vacía los campos con la clase "acceso" (formulario)
} else {
	die ('<script>$(".acceso").val("");</script>
		Los datos de acceso son incorrectos'.$userBD .$passwordBD );
		die('Error');
} ;

?> 