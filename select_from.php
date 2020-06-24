<?php

$conexion = mysql_connect("localhost","root","1234567890") or die("Error en la conexion");
mysql_select_db("registro_de_usuarios",$conexion) or die("Error en la base de datos");
$sql ="SELECT * FROM usuarios";

$datos = mysql_query($sql, $conexion) or die("Error en el sql");
  //$datos = mysql_query($sql, $con) or die("Error en el sql");

  //IMPRECION DE REGISTROS DE UNA TABLA
    echo "<table border=2>";
    echo "<th>ID DEL REGISTRO</th>";
    echo "<th>NOMBRE DEL USUARIO</th>";

  while($reg=mysql_fetch_array($datos)){
  //renglones de la tabla
      echo "<tr>";
        echo "<td>$reg[id]</td>";
        //este es el nombre completo
        echo "<td>$reg[nombre]</td>";
      echo "</tr>";
    }
    echo "</table>";
    mysql_close($conexion);
    mysql_free_result($datos);
 ?>
