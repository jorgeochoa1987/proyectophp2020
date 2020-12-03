<?php

$conexion = new mysqli("localhost", "mrcaballo", "mrcaballo", "mrcaballo");

 if($conexion === false) { 
    echo 'Ha habido un error <br>'.mysqli_connect_error(); 
   } else {

//echo 'Conectado a la base de datos';
    
   }


?>