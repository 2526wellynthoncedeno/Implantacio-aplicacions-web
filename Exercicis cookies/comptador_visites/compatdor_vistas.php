<html>
  
    <h1> Hola, bienvenidos a nuestra tienda</h1>
 <form action="compatdor_vistas.php" method="post">
     Aplicar descuento :<input type="text" name="descuento"> </input> <br>
    <input type="submit" value="Comprar"> </input>
    </html>

<?php
  if (
isset($_POST["descuento"]) 
) 

session_save_path("./sesiones");
session_start();

if (isset($_SESSION["count"]))
$_SESSION["count"] = $_SESSION["count"]+1;
else
    $_SESSION["count"]=1;

if ($_SESSION["count"]>=5)
echo "<br>Oferta exclusiva! Utilitza el codi BOTIGA20 per obtenir un 20% de descompte en les teves primeres compres a la botiga<br>";

if ($_SESSION["count"]>=10 && $_descuento >= 1)
echo "<br> Oferta exclusiva sols per a tu! Utilitza el codi BOTIGA50 per obtenir un 50% de descompte en les teves primeres compres a la botiga<br>";





echo "<br>Tus inicios de sesiones son: " . $_SESSION['count'];



