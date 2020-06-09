<?php

class con{
public function db_conect(){

    $host = "localhost";
    $user = "root";
    $pass = "";
    $database_name = "AlitaArmy";

  $con = mysqli_connect($host, $user, $pass, $database_name);

  if($con){
    return $con;
  }else{
    return false;
  }

}

}


 ?>
