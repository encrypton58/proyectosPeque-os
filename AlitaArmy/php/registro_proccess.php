<?php

include 'connection.php';

class registro{

public function registrarUsuario(){

  $conn = new con();


  if($conn -> db_conect()){

    $nombre = $_POST['nombre'];
    $pass = $_POST['pass'];
    $correo = $_POST['email'];
    $imagen = addslashes(file_get_contents($_FILES['archivo']['tmp_name']));

    $insert = "INSERT INTO usuarios(id, correo, pass, img, nombre) VALUES (null , '$correo','$pass', '$imagen' , '$nombre')";

    $query = mysqli_query($conn-> db_conect(), $insert);

    if($query){
      echo "true";
    }else{
      echo "false";
    }

  }else{
    echo "Error en conexion db";
  }


}

}

$registro = new registro;
$registro -> registrarUsuario();



 ?>
