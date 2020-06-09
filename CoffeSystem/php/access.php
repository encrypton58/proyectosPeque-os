<?php

include 'DB.php';

$email = $_POST['email'];
$query='SELECT * FROM usuarios WHERE correo="'.$email.'"';
$result = mysqli_query($con,$query);


if($rows = mysqli_fetch_assoc($result)){
  echo ' <img id = "imagen" src="data:image/jpg;base64, '. base64_encode($rows['imagen'])  .  '   " /> ';

}else{
  echo "error No se Detecto usuario";
}




 ?>
