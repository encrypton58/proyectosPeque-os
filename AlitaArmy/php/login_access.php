<?php

include 'connection.php';

$conn = new con();

if($conn -> db_conect()){

  $email = $_POST['mail'];

  $query = "SELECT * FROM usuarios WHERE correo = '$email'";

  $res = mysqli_query($conn-> db_conect(), $query);

  if($rows = mysqli_fetch_assoc($res)){
    echo ' <img class="fade show" id = "imagen" src="data:image/jpg;base64, '. base64_encode($rows['img'])  .  '   " /> ';
  }else{
    echo 'false';
  }


}else{
  echo "no se cumple";
}

//$email = $_POST['mail'];



 ?>
