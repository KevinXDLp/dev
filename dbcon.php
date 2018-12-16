<?php
$con = mysqli_connect("localhost","root","","ku");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Fehler beim Verbinden! Fehler: " . mysqli_connect_error();
  }
?>
