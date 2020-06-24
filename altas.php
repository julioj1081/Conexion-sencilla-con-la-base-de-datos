<?php
  require "conexion.php";
  //hacemos el registro
  $id = 0;
  $nombre = $_POST['nombre'];

  $sql = "INSERT INTO usuarios(id,nombre) VALUE('". $id ."', '". $nombre ."')";

//PONEMOS CON POR LA CLASE CONEXION.PHP
  $r = mysqli_query($con, $sql);

  if ($r) {
    // code...
    echo "registro exitoso<br>";
  }else{
    echo "Error al insertar el registro. ".$sql;
  }
 ?>
