<?php
require('../../conex/conexion.php');

if ($_POST['atributo']=='crear')
{
  $name = $_POST['feFirstName'];
  $lastname = $_POST['feLastName'];
  $user = $_POST['feInputUser'];
  $email = $_POST['feEmailAddress'];
  $pass = $_POST['feInputPass'];
  $ced = $_POST['feInputCed'];   
  $gen = $_POST['feInpuGen'];   
  if($user=='' or $pass =='')
  {
    echo '<div class="comment_box" id="Respuesta"> Es Obligatorio llenar la contraseña y usuario </div>';
    exit();
  } 
  $sql = "INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `correo`, `usuario`, `pass`, `cedula`, `genero`) VALUES (NULL, '$name', '$lastname', '$email', '$user', '$ced', ' $pass', '$gen');
  ";
  if (mysqli_query($conexion, $sql)) {
  
      header('Location: ../../aplication/listarusuario.php');
  }else {
    echo "Error: ". mysqli_error($conexion);
  }
  exit();

}

else if ($_GET['atributo']=='borrar')
{
  $id = $_GET['id']; 
   
  $sql = "DELETE FROM `usuario` WHERE `id` = $id";
  if (mysqli_query($conexion, $sql)) {
  
      header('Location: ../../aplication/listarusuario.php');
  }else {
    echo "Error: ". mysqli_error($conexion);
  } 
  exit(); 
}
else if ($_POST['atributo']=='actualizar')
{
  $id = $_POST['id_usuario'];
  $name = $_POST['feFirstName'];
  $lastname = $_POST['feLastName'];
  $user = $_POST['feInputUser'];
  $email = $_POST['feEmailAddress'];
  $pass = $_POST['feInputPass'];
  $ced = $_POST['feInputCed']; 
  $gen = $_POST['feInpuGen'];   

  $sql = "UPDATE `usuario` SET `nombre` = '$name', `apellido` = '$lastname', `correo` = '$email', `usuario` = '$user', `pass` = '$pass', `cedula` = '$ced',`genero` = '$gen' WHERE `usuario`.`id` = $id;
  ;
  ";
  if (mysqli_query($conexion, $sql)) {
  
      header('Location: ../../aplication/listarusuario.php');
  }else {
    echo "Error: ". mysqli_error($conexion);
  }
  exit();

}
   
  ?>