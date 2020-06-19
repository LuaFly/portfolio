<?php
ob_start();

require __DIR__ . "/vendor/autoload.php";
$usuario = new Classe\usuario();
$faceL= $usuario->facebook();
header('Location: portfolio1.php');

if($faceL==null){
  echo "erro";
}elseif (gettype($faceL) == 'string'){
  echo "<a href='".$faceL."'>LOGIN</a>";
}else {
  var_dump($faceL);
}

ob_end_flush();

?>