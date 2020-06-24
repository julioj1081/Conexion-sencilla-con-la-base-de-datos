<?php
  require "conexion.php";
  //hacemos el registro
  $matricula = $_POST['matricula'];
  $nombre = $_POST['nombre'];
  $sql = "UPDATE usuarios SET nombre='$nombre' WHERE id=".$matricula;

//PONEMOS CON POR LA CLASE CONEXION.PHP
  $r = mysqli_query($con, $sql);

  if ($r) {
    // code...
    echo "Cambio exitoso<br>";

  }else{
    echo "Error al hacer el cambio de registro. ".$sql;
  }
 ?>
