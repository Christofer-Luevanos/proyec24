<?php
include 'denticonfig.php';
$name = filter_input(INPUT_POST, "name");
$query = "DELETE FROM paciente WHERE nombre = '$name'";
$Resultado = mysqli_query($conn, $query);
$lastId = mysqli_insert_id($conn);
$query2 = "SELECT * FROM usuario WHERE Id_usuario = '".$lastId."'";
  $result2 = mysqli_query($conn, $query2);
  $row = mysqli_fetch_array($result2);
  if($row){
    echo '1';
  }
  mysqli_close($conn);
?>