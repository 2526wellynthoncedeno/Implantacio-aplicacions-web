<?php
if(!isset($_COOKIE['visita'])){
    $visita = 1;
    setcookie('visita', $visita);
} else {
    $visita = $_COOKIE['visita'] + 1;
    setcookie('visita', $visita);
}
echo "Has visitado esta página: " . $visita;
if(isset($_GET['descuento']) && $_GET['descuento'] == "BOTIGA20"){
    setcookie('descuento_si', 'si');
}
if(isset($_GET['descuento']) && $_GET['descuento'] == "BOTIGA50"){
    setcookie('descuento_si', 'si');
}
?>
<html>
<body>
    <h1> Hola, bienvenidos a nuestra tienda</h1>
    
    <?php
    if(!isset($_COOKIE['descuento_si']) && !isset($_GET['descuento'])){   
        if ($visita >= 5 && $visita < 10) {
            echo "Oferta exclusiva! Utilitza el codi BOTIGA20 per obtenir un 20% de descompte en les teves primeres compres a la botiga";
        }
        if ($visita >= 10) {
            echo "Oferta exclusiva sols per a tu! Utilitza el codi BOTIGA50 per obtenir un 50% de descompte en les teves primeres compres a la botiga";
        }
    }
    ?>
 <form action="compatdor_vistas.php" method="get">
     Aplicar descuento: <input type="text" name="descuento"><br>
     <input type="submit" value="Comprar">
 </form>
</body>
</html>
