<?php
  include 'denticonfig.php';
  /*$name = "Fernanda";
  $email = "12345@gmail.com";
  $contra = "12345";*/
  $name = filter_input(INPUT_POST, "name");
  $email = filter_input(INPUT_POST, "email");
  $contra = filter_input(INPUT_POST, "contra");


  $query = "INSERT INTO usuario(nombre,email,contra) 
  VALUES ('".$name."','".$email."','".$contra."')";
  $result = mysqli_query($conn, $query);
  $lastId = mysqli_insert_id($conn);

  $query2 = "SELECT * FROM usuario WHERE Id_usuario = '".$lastId."'";
  $result2 = mysqli_query($conn, $query2);
  $row = mysqli_fetch_array($result2);
  if($row){
    echo '1';
  }
  mysqli_close($conn);
?>