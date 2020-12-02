<?php
require('../../conex/conexion.php');
if (isset($_POST['save'])) {
    $value = $_POST['value'];
    $interes = $_POST['interes'];
    $cartera = $_POST['cartera'];
    $cliente = $_POST['cliente'];
    $date = $_POST['date'];
    $notas = $_POST['notas'];

    if($value=='' )
    {
      echo '<div class="comment_box" id="Respuesta"> Es Obligatorio llenar la valor y asignar cartera </div>';
      exit();
    }
  	$sql = "INSERT INTO `cuenta` (`id`, `id_cliente`, `id_prestamista`, `prestamo`, `fecha_prestamo`, `interes`, `fechaVisita1`) VALUES (NULL, '$cliente ', '$cartera', '$value', current_timestamp(), '$interes', '$date');";
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