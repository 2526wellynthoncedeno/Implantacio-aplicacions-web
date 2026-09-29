<?php

$dolar = $_POST["dolar"];
$euro = $_POST["euro"];

if ($dolar == NULL ) {
    $conversion1 = $euro * 0.88;
    echo "La conversión de " . $euro . " euros a dolares es " . $conversion1 . ".";
} else {
    $conversion2 = $dolar * 1.14;
    echo "La conversión de " . $dolar . " dolares a auros es " . $conversion2 . ".";
}
?>
