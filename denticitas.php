<?php
  include 'denticonfig.php';
  /*$nombre_us="Fernanda";
  $name = "Claudio";
  $lastnameF = "Hernandez";
  $lastnameM = "Ruiz";
  $telefono = "3330238313";
  $edad = "18";
  $peso = "1kg";*/
  $nombre_us="edwin";
  $name = filter_input(INPUT_POST, "nombre");
  $lastnameF = filter_input(INPUT_POST, "apellido_pat");
  $lastnameM = filter_input(INPUT_POST, "apellido_mat");
  $telefono = filter_input(INPUT_POST, "telefono");
  $edad = filter_input(INPUT_POST, "edad");
  $peso = filter_input(INPUT_POST, "peso");

  $pacientQuery = "SELECT id_paciente FROM paciente WHERE nombre='".$name."' AND apellido_paterno='".$lastnameF."'";
  $pacientResult = mysqli_query($conn, $pacientQuery);
  $pacientRow = mysqli_fetch_assoc($pacientResult);
  echo $pacientRow["id_paciente"];

  $pacientQuery2 = "SELECT id_usuario FROM usuario WHERE nombre='".$name."'";
  $pacientResult2 = mysqli_query($conn, $pacientQuery2);
  $pacientRow2 = mysqli_fetch_assoc($pacientResult2);
  echo $pacientRow2["id_usuario"];

  $query = "INSERT INTO paciente(nombre,apellido_paterno,apellido_materno,telefono,edad,peso)
  VALUES ('".$name."','".$lastnameF."','".$lastnameM."','".$telefono."','".$edad."','".$peso."')";
  echo $query;
  $result = mysqli_query($conn, $query);
  $lastId = mysqli_insert_id($conn);

  $query2 = "INSERT INTO us_pa(id_usuario,id_paciente)
  VALUES ('".$pacientRow2['id_usuario']."','".$pacientRow['id_paciente']."')";
  echo $query2;
  $result2 = mysqli_query($conn, $query2);
  $lastId2 = mysqli_insert_id($conn);

  $query3 = "SELECT * FROM paciente WHERE id_paciente = '".$lastId."'";
  $result3 = mysqli_query($conn, $query3);
  $row = mysqli_fetch_array($result3);
  if($row){
    echo '1';
  }
  mysqli_close($conn);
?>