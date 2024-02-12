<?php
  session_start();
  $servername = "localhost"; //localhost id
  $dBUsername = "root"; //Database Username
  $dBPassword = ""; //Database Password : Default-root
  $dBName = "hms_database"; //Database name
 // session_start();
  $conn=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

  if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
  }
?>
