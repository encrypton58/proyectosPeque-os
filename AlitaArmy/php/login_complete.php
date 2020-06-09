<?php

include 'connection.php';

$conn = new con();

if($conn -> db_conect()){

  $email = $_POST['mail'];
  $pass = $_POST['pass'];

  $query = "SELECT * FROM usuarios WHERE correo = '$email' AND pass = '$pass'";

  $res = mysqli_query($conn-> db_conect(), $query);

  if($rows = mysqli_fetch_assoc($res)){
      echo "true";
  }else{
    echo 'false';
  }


}else{
  echo "no se cumple";
}

 ?>
