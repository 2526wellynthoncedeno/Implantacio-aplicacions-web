<?php
if(isset($_GET['enviar'])){
    setcookie('majoredat', $_GET['edad']);
    setcookie('idioma', $_GET['idioma']);
    setcookie('moneda', $_GET['moneda']);
    header("Location: informacion.php");
    exit();
}
?>

<html> 
 <body>
    <h1> Benvingut / Bienvenedio / Welcome </h1>
    <form action="bodega.php" method="get">
    <p> Eres mayor de edad? </p>
    <input type="radio" name="edad" value="si" checked> Sí <br>
        <input type="radio" name="edad" value="no"> No <br>
    <p> Idioma </p>
    <select name = "idioma">
        <option value="cat"> Catalá </option>
        <option value="es"> Español </option>
        <option value="en"> Egnlish </option>
    </select>
    <p> Moneda </p>
    <select name="moneda">
        <option value="EUR">Euros (€)</option>
        <option value="USD">Dolares ($)</option>
        <option value="GBP">Libras (£)</option>
        </select>
    <input type = "submit" name ="enviar" value="Entrar">
    </form>
 </body>
</html>
