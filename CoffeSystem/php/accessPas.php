<?php

include 'DB.php';

$email = $_POST['email'];
$query='SELECT * FROM usuarios WHERE pass="'.$email.'"';
$result = mysqli_query($con,$query);


if($rows = mysqli_fetch_assoc($result)){

  echo "true";

}else{

  echo "Contraseña incorrecta";

}




 ?>
