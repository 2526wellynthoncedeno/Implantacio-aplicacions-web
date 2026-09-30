<?php
date_default_timezone_set('Europe/Madrid');
$hora = date("H:i:s");

if ($hora >= 5 && $hora <= 14 ) {

    echo "Bon dia, la hora actual del sistema es " .$hora ."h";
;
}

elseif  ($hora >= 14 && $hora <= 19 ) {
   echo "Bona tarda, la hora actual del sistema es " .$hora ."h";}

else {
   echo "Bona nit, la hora actual del sistema es " .$hora ."h" ;}

?>
