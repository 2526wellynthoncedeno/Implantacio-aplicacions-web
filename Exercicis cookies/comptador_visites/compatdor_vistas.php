
<?php


if(isset($_COOKIE['visitas'])){
    setcookie('visita', 1, $cookie_exp);
    $visita = 1;
} else {

    $visita = $_COOKIE['visita'] + 1;
    setcookie('visita', $visita,);
}
echo "Has visitado esta página: " 
    .$visita ;
?>
<html>
  
    <h1> Hola, bienvenidos a nuestra tienda</h1>
 <form action="compatdor_vistas.php" method="get">
     Aplicar descuento :<input type="text" name="descuento"> </input> <br>
    <input type="submit" value="Comprar"> </input>
    </html>
