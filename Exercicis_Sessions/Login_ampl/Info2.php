<?php
//Resume la sesion 
session_start(); 

    if (isset ($_SESSION["Usuari"]))
        {
            echo "Usuari actual: " . $_SESSION["Usuari"];
            echo " <a href='Logout.phps'>Terminar Login</a>";
        }



?>


<html>

<h1>Pagina de informacion 2</h1>
<a href="index.html"><button>Tornar al Login</button></a>


</html>