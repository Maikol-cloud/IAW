<?php

$codi = $_GET["Codi_Descompte"] ?? ""; //Si s'ha aplicat el codi de descompte 
$codisValids = ["BOTIGA20", "BOTIGA50"];

setcookie("contador", "", time() - 60); //cada compra contador = 0 


if ($codi === "BOTIGA20") {
    setcookie("CodUsat20", "1", time() + 30*24*60*60); //expiració de 30 dies
} 

if ($codi !== "" && !in_array($codi, $codisValids))
    {
    echo "<p>El codi de descompte no es valid.<p>";        
    }

    elseif ($codi !== "")
        {
        echo "codi ". $codi ." aplicat correctament";
        }



echo "<h1>".$_COOKIE["contador"]."</h1>"; //mostra per pantalla el contador 
echo "<h1>Gracies per la teva compra!<h1>"; //missatge de compra 
echo "<form action ='Comptador_Visites.php' method= 'get'><button>Tornar</button></form>"; //Tornar al contador. 


?>