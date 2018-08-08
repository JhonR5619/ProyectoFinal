<?php
  $mysqli = new mysqli('localhost:8080','root','','DBVisitor');
  if ($mysqli->connect_error) {
   die("La conexion falló: " . $mysqli->connect_error);
  }


 ?>
