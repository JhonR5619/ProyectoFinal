<?php
  $mysqli = new mysqli('localhost:8080','root','','DBVisitor');
  if ($conexion->connect_error) {
   die("La conexion falló: " . $conexion->connect_error);
  }


 ?>
