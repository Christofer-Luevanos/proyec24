<?php
  include 'denticonfig.php';
  /*$name = "Claudio";
  $lastnameF = "Hernandez";
  $lastnameM = "Ruiz";
  $telefono = "3321647768";
  $peso = "3kg";
  $edad = "12";*/
  $name = filter_input(INPUT_POST, "nombre1");
  $lastnameF = filter_input(INPUT_POST, "apellidopaterno1");
  $lastnameM = filter_input(INPUT_POST, "apellidomaterno1");
  $telefono = filter_input(INPUT_POST, "telefono1");
  $peso = filter_input(INPUT_POST, "peso1");
  $edad = filter_input(INPUT_POST, "edad1");
  $query = "UPDATE paciente SET nombre='".$name."',apellido_paterno='".$lastnameF."',apellido_materno='".$lastnameM."',telefono='".$telefono."',peso='".$peso."',edad='".$edad."'WHERE nombre='".$name."'";
  $result = mysqli_query($conn, $query);
  $lastId = mysqli_insert_id($conn);

  $query3 = "SELECT * FROM paciente WHERE id_paciente = '".$lastId."'";
  $result3 = mysqli_query($conn, $query3);
  $row = mysqli_fetch_array($result3);
  $row = mysqli_fetch_array($result3);
  if($row){
    echo '1';
  }
  mysqli_close($conn);
?>