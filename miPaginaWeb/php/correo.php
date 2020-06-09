<?php
//my code <3



$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensage = $_POST['mensage'];

if ( isset($_POST['enviar']) ) {

$header = "From: marc_anthony_gr@hotmail.com" . "\r\n";
$header.= "Reply-To: marc_anthony_gr@hotmail.com". "\r\n";
$header.= "X-Marc: PHP/". phpversion();

$mail = mail($email,"Cuestion",$mensage,$header);

if($mail){
  echo "<h1> Se realizo el envio </h1>";
//}else{
//  echo "<h1> Error de envio </h1>";
}

}*/

 ?>
