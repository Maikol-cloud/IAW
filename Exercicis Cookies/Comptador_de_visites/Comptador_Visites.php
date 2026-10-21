<?php


if (isset($_COOKIE['contador'])) //condició: si la cookie existeix 
    {
        $contador = 1; 
        $contador = $_COOKIE['contador']; //agafa el valor del contador
        setcookie("contador",$contador + 1); // actualiza la cookie i li suma 1 
        echo "<h1>".$_COOKIE["contador"]."</h1>"; //mostra per pantalla el contador 
    }

else {
        setcookie("contador", 1);  
        echo "<h1> 0 </h1>"; //contador en 0 (no existeix la cookie)
    }   


if (isset($_COOKIE['contador'])&& 
    $_COOKIE['contador'] == 5 //si la cookie existe i es igual al 5 (no importa si he comprado)
    )
    {
        echo "<h1>Oferta exclusiva! Utilitza el codi BOTIGA20 per obtenir un 20% de descompte en les teves primeres compres a la botiga<h1>"; 
    }

$CodUsat = isset($_COOKIE["CodUsat20"]); //cookie per recollir si s'ha utilitzat el codi


if (isset($_COOKIE['contador'])&&
    $_COOKIE['contador'] == 10 && //si existeix la cookie, es igual a 10 i no s'ha utilitzat el descompte 
    !$CodUsat
    )

    {
        echo "<h1>Oferta exclusiva sols per a tu! Utilitza el codi BOTIGA50 per obtenir un 50% de descompte en les teves primeres compres a la botiga<h1>";
    }

if (isset($_COOKIE["contador"])&&
    $_COOKIE["contador"] >=11)
    {
        setcookie("contador", "", time()-(600)); //borra la cookie y tiempo de expiracion de 60 segundos
    }

?>
<html>
    <form action="Compra.php" method="GET">
<br>Codi Descompte<input type="text" name="Codi_Descompte" pattern="BOTIGA20|BOTIGA50" ><br> 
    <input type="submit" value="Comprar" />
    </form>
</html>
