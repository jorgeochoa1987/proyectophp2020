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
    $notes = $_POST['notes'];
    $category1 = $_POST['category1'];
    $category2 = $_POST['category2'];
    $category3 = $_POST['category3'];
    $category4 = $_POST['category4'];
    $category5 = $_POST['category5'];
    $category6 = $_POST['category6'];
    $category7 = $_POST['category7'];

    if($number=='' or $name =='')
    {
      echo '<div class="comment_box" id="Respuesta"> Es Obligatorio llenar la cedula y nombre </div>';
      exit();
    }
  	$sql = "INSERT INTO `cliente` (`id`, `nombre`, `apellido`, `cedula`, `correo`, `telefono`, `ciudad`, `direccion`, `notas`)  VALUES (NULL, '$name', '$lastname', '$number', '$email', '$phone', '$city', ' $address', '$notes');";
  	if (mysqli_query($conexion, $sql)) {
  	  $id = mysqli_insert_id($conexion);
    
     
        $sql2 = "INSERT INTO `dias` (`id`, `id_cliente`, `lunes`, `martes`, `miercoles`, `jueves`, `viernes`, `sabado`, `domingo`) VALUES (NULL, '$number', '$category1', '$category2', '$category3', '$category4', '$category5', '$category6', '$category7');";
        if (mysqli_query($conexion, $sql2)) {
          $id = mysqli_insert_id($conexion);
        }
        header('Location: /aplication/listarcartera.php');
        

  	}else {
  	  echo "Error: ". mysqli_error($conexion);
  	}
  	exit();
  }
  ?>