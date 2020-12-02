<?php
require('../../conex/conexion.php');
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $valIni = $_POST['valIni'];
    $notes = $_POST['notes'];
    if($number=='' or $valIni =='')
    {
      echo '<div class="comment_box" id="Respuesta"> Es Obligatorio llenar la cedula y el valor inicial </div>';
      exit();
    }
  	$sql = "INSERT INTO `cartera` (`id`, `nombre`, `Apellido`, `cedula`, `correo`, `telefono`, `ciudad`, `direccion`, `valorIni`, `notasAdicionales`, `saldo`)  VALUES (NULL, '$name', '$lastname', '$number', '$email', '$phone', '$city', ' $address', '$valIni', '$notes', '$valIni');";
  	if (mysqli_query($conexion, $sql)) {
  	  $id = mysqli_insert_id($conexion);
    
        echo'<div class="comment_box" id="Respuesta">
        Creado la cartera de "'.$name.'"
        <p>valor por:"'.$valIni.'" </p>
        </div>';
        header('Location: /aplication/listarcartera.php');
        

  	}else {
  	  echo "Error: ". mysqli_error($conexion);
  	}
  	exit();
  }
  ?>