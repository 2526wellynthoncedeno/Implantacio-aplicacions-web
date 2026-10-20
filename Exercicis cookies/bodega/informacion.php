<?php
if(!isset($_COOKIE['majoredat'])){
    header("Location: bodega.php");
    exit();
}

$edad = $_COOKIE['majoredat'];
$idioma = $_COOKIE['idioma'];
$moneda = $_COOKIE['moneda'];

$moneda2 = "€"; 
if ($moneda == "USD") { $moneda2 = "$"; }
if ($moneda == "GBP") { $moneda2 = "£"; }
?>

<html>
<body>
    <h1> Infomració de la Botiga </h1>
    <?php
    if($edad == "no"){
        echo "No et podem vendre alcohol si ets menor d’edat.";
    } else {
     if($idioma == "cat" && $moneda2 == "€") {
            echo "<p>T’oferim el vi 'Les Terrasses' a un preu de 39 $moneda2.</p>";
            echo "<p>També t'oferim el 'Cava Gran Reserva' a un preu de 20 $moneda2.</p>";
    } elseif ($idioma == "cat") {
            echo "<p>També t'oferim el 'Cava Gran Reserva' a un preu de 20 $moneda2.</p>";
        }
        
        if ($idioma == "es") {
            echo "<p>También te ofrecemos el Cava Gran Reserva a un precio de 20 $moneda2.</p>";
        }
        
        if ($idioma == "en") {
            echo "<p>We also offer you the 'Cava Gran Reserva'  at a price of 20 $moneda2.</p>";
        }
       
    }
    ?>
     <br>
    <a href="bodega.php">Cambiar opciones / Tornar</a>
</body>
</html>
