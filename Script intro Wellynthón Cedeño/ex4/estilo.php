<?php 
$estilo = $_GET["estilo"];
switch($estilo) {

case "Rock":
    echo "Viiva el rock! ";
    break;
  case "Pop":
    echo "Gran elección!";
    break;
  case "Jazz":
    echo "Me gusta tu vibra";
    break;
  case "Rap":
    echo "Ey slim shady";
    break;
  default:
    echo "Oye no tienes nada seleccionado!";

}

?>