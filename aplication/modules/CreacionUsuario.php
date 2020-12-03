<?php
require('../../conex/conexion.php');
    $name = $_POST['feFirstName'];
    $lastname = $_POST['feLastName'];
    $user = $_POST['feInputUser'];
    $email = $_POST['feEmailAddress'];
    $pass = $_POST['feInputPass'];
    $ced = $_POST['feInputCed'];   
    if($user=='' or $pass =='')
    {
      echo '<div class="comment_box" id="Respuesta"> Es Obligatorio llenar la contraseña y usuario </div>';
      exit();
    } 
  	$sql = "INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `correo`, `usuario`, `pass`, `cedula`) VALUES (NULL, '$name', '$lastname', '$email', '$user', '$ced', ' $pass');
    ";
  	if (mysqli_query($conexion, $sql)) {
    
        header('Location: ../../aplication/listarusuario.php');
  	}else {
  	  echo "Error: ". mysqli_error($conexion);
  	}
  	exit();
  
  ?>