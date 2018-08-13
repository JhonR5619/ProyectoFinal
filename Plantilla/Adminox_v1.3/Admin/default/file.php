<?php

if ($_FILES['archivo']["error"] > 0) {

  echo "Error";
}else {
  echo "Upload :" .$_FILES['archivo']['name'];
  echo "Type :" .$_FILES['archivo']['type'];
  echo "Size :" .$_FILES['archivo']['size'/1024]"kB <br>";
  echo "Stored in :" .$_FILES['archivo']['tmp_name'];

  move_uploaded_file($_FILES['archivo']['tmp_name'], 'ImagenesGuardadas'.$_FILES['archivo']['tmp_name']);

}

















 ?>
