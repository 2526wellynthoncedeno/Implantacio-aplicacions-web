<?php
if (
isset($_POST["precio"]) &&
isset($_POST["iva"])
) {
$precio = $_POST["precio"];
$iva = $_POST["iva"];
$resultado = $precio + ($precio * ($iva / 100));

echo "Hola, el precio con el iva insertado es de: " . $resultado . ". Gracias por su consulta ";

} else { echo "Oye te falta algo!";

}
?>