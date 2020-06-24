<?php
  require "conexion.php";
  //hacemos el registro
  $id = $_POST['baja'];

  $sql = "DELETE FROM usuarios WHERE id=".$id.";";

//PONEMOS CON POR LA CLASE CONEXION.PHP
  $r = mysqli_query($con, $sql);

  if ($r) {
    // code...
    echo "baja exitosa<br>";
  }else{
    echo "Error al dar de baja el registro. ".$sql;
  }
 ?>
