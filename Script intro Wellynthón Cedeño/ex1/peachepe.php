<?php
if (
    isset($_POST["nombre"]) &&
    isset($_POST["cognoms"]) &&
    isset($_POST["email"]) &&
    isset($_POST["missatge"])
) {
    $nom = $_POST["nombre"];
    $mail = $_POST["email"];

    echo "Mensaje recibido, " . $nom . ". Gracias por contactar, te escribo a " . $mail . ".";

    echo "<form action='formulario.html' method='post'>
            <button type='submit'>Volver</button>
          </form>";
} else {
    echo "No se ha guardado el mensaje. Error.";

    echo "<form action='formulario.html' method='post'>
            <button type='submit'>Volver</button>
          </form>";
}

?>
