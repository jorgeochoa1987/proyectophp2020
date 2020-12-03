<?php
require('../../conex/conexion.php');
    $id = $_GET['id']; 
   
  	$sql = "DELETE FROM `usuario` WHERE `id` = $id";
  	if (mysqli_query($conexion, $sql)) {
    
        header('Location: ../../aplication/listarusuario.php');
  	}else {
  	  echo "Error: ". mysqli_error($conexion);
  	}
  	exit();
   
  ?>