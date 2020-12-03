<?php
require('../../conex/conexion.php');
if ($_POST['atributo']=='crear')
{
  $name = $_POST['feFirstName'];
  $ced = $_POST['feCed'];  
  $plataforma = $_POST['fePlataforma'];
  $pista = $_POST['fePista'];  
  $carga =  $_POST['fePista'];  
  $caballo = $_POST['feCaballo'];
  $tipo = 'participante'; 
  $monto = $_POST['feMonto']; 
  $cod =$_POST['feCaballo'].rand(1,99);
  if($name=='' or $ced =='')
  {
    echo '<div class="comment_box" id="Respuesta"> Es Obligatorio llenar la contraseña y usuario </div>';
    exit();
  } 
  $sql = "INSERT INTO `apuesta` (`id`, `fecha_apuesta`, `plataforma`, `pista`, `caballo`, `tipo`, `carga`, `monto`,`cod`, `nombreapellido`, `cedula`, `ganancia`) VALUES
                                (NULL, current_timestamp(), '$plataforma', '$pista',' $caballo', '$tipo','$carga', '$monto ', '$cod', '$name', '$ced', 0);";
  if (mysqli_query($conexion, $sql)) {
  
      header('Location: ../../aplication/listarapuesta.php');
  }else {
    echo "Error: ". mysqli_error($conexion);
  }
  exit();

}



else if ($_POST['atributo']=='actualizar')
{
  $id=$_POST['id_apuesta'];
  $name = $_POST['feFirstName'];
  $plataforma = $_POST['fePlataforma'];
  $pista = $_POST['fePista'];  
  $carga =  $_POST['fePista'];  
  $caballo = $_POST['feCaballo'];
  $tipo =  $_POST['feTipo']; 
  $monto = $_POST['feMonto']; 
  $cod =$_POST['feCaballo'].rand(1,99);

  $sql = "UPDATE `apuesta` SET `plataforma` = '$plataforma', `pista` = '$pista', `caballo` = ' $caballo', `tipo` = '$tipo', `carga` = '$carga', `monto` = '$monto', `cod` = '$cod', `nombreapellido` = '$name' WHERE `apuesta`.`id` = $id;";
  if (mysqli_query($conexion, $sql)) {
  
if(  $tipo =  $_POST['feTipo'] == 'ganador')
{

  if($plataforma = 'bet365')
  {
    $id=$_POST['id_apuesta'];
    $monton   =  $_POST['feMonto'] *1 /100 +  $_POST['feMonto'] +5;
    $sql2 = "UPDATE `apuesta` SET  `ganancia` = '$monton' WHERE `apuesta`.`id` = $id;";
    if (mysqli_query($conexion, $sql2 )) {echo 'ok';}


    $sql3 = "INSERT INTO `bitacora` (`id`, `id_usuario`, `fecha`, `accion`) VALUES (NULL, '$name ', current_timestamp(), '$monton')";
    if (mysqli_query($conexion, $sql3 )) {echo 'ok2';}
    


  
  } 
  elseif($plataforma == 'parlay')
  { 
    $id=$_POST['id_apuesta'];
    $monton  = $_POST['feMonto'] *3 /100 +  $_POST['feMonto']; 
    $sql2 = "UPDATE `apuesta` SET  `ganancia` = ' $monton ' WHERE `apuesta`.`id` = $id;";
    if (mysqli_query($conexion, $sql2 )) {echo 'ok';}
    $sql3 = "INSERT INTO `bitacora` (`id`, `id_usuario`, `fecha`, `accion`) VALUES (NULL, '$name ', current_timestamp(), '$monton')";
    if (mysqli_query($conexion, $sql3 )) {echo 'ok2';}


   }
  elseif($plataforma == 'sportium')
  { 
    $id=$_POST['id_apuesta'];
    $monton   =  $_POST['feMonto'] *10; 
    $sql2 = "UPDATE `apuesta` SET  `ganancia` = ' $monton ' WHERE `apuesta`.`id` = $id;";
    if (mysqli_query($conexion, $sql2 )) {echo 'ok';}
    
    $sql3 = "INSERT INTO `bitacora` (`id`, `id_usuario`, `fecha`, `accion`) VALUES (NULL, '$name ', current_timestamp(), '$monton')";
    if (mysqli_query($conexion, $sql3 )) {echo 'ok2';}
  }
  elseif($plataforma == 'betcris')
    {  

      $id=$_POST['id_apuesta'];
      $monton  = $_POST['feMonto'] *3 /100 + $_POST['feMonto'];
      $sql2 = "UPDATE `apuesta` SET  `ganancia` = ' $monton 'WHERE `apuesta`.`id` = $id;";
      if (mysqli_query($conexion, $sql2 )) {echo 'ok';}
      
    $sql3 = "INSERT INTO `bitacora` (`id`, `id_usuario`, `fecha`, `accion`) VALUES (NULL, '$name ', current_timestamp(), '$monton')";
    if (mysqli_query($conexion, $sql3 )) {echo 'ok2';}
    }    

    header('Location: ../../aplication/listarapuesta.php');
    
 } 


else{
  header('Location: ../../aplication/listarapuesta.php');

}

  }else {
    echo "Error: ". mysqli_error($conexion);
  }
  exit();
}




else if ($_GET['atributo']=='borrar')
{
  $id = $_GET['id']; 
   
  $sql = "DELETE FROM `apuesta` WHERE `id` = $id";
  if (mysqli_query($conexion, $sql)) {
  
      header('Location: ../../aplication/listarapuesta.php');
  }else {
    echo "Error: ". mysqli_error($conexion);
  }
}
 
  
  ?>