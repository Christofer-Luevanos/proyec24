<?php
header('Content-Type: application/json');
include 'denticonfig.php';

$menu = 1;
$resultadoArray = array();
$aux=1;
if($menu == 1){
  $pacienteQuery = "SELECT * FROM paciente WHERE id_paciente > '$aux'";
  $pacienteResultado = mysqli_query($conn, $pacienteQuery);
  foreach($pacienteResultado as $row){
    $resultadoArray[] = $row;
  }
}


echo json_encode($resultadoArray);
?>