<?php

//FUNCIONA, NO TOCAR

$Pass = $_POST["pwd"];
$Nom =$_POST["Username"];

if (isset ($Pass)&&
    isset ($Nom) && 
    $Pass === $Nom)
    {

        session_start(); //inicia la sesion 
        $_SESSION["Usuari"] = $Nom; //la sesion se llama igual que el nombre del login "se guarda hasta que lo vuelva a cambiar" 

        echo "<html>
                <h1> Consulta les nostres pagines de informacio: </h1>
                
                <a href='Info1.php'><button>Informacio 1</button></a>
                <a href='Info2.php'><button>Informacio 2</button></a>
                
            
                </html"; 
    }
    else {
        header ("Location: index.html"); 
    }

?>



