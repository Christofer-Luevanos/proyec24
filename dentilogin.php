<?php
  include 'denticonfig.php';
  //$usua ="fer";
  //$password= "12345";
  $usua = filter_input(INPUT_POST, "usuario");
  $password = filter_input(INPUT_POST, "contra");
  $query = "SELECT * FROM usuario WHERE nombre= '". $usua."'
            AND contra= '". $password ."'";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result);
  if($row){
    echo '1';
  }
  mysqli_close($conn);
?>