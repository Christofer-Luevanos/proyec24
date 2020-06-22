<?php
  $host = "us-cdbr-east-05.cleardb.net";
  $user = "b2374f68a0d12b";
  $password = "e6bf32d4";
  $db = "heroku_5dff27f7dc21053";

  $conn = new mysqli($host, $user, $password, $db);
  if($conn->connect_error){
    die("Error de conexion: " .$conn->connection_error);
  }
?>
