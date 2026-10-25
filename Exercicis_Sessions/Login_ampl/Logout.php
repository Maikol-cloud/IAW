<?php
//resumeix la sessió
session_start(); 

//la deja de setear
session_unset(); 

//Destruye la sesion 
session_destroy(); 

echo "<h1>Has sortit de la sessió</h1>";
echo "<a href='index.html'><button>Tornar al Login</button></a>"; 

//Desde el f12 "en cookies" se puede ver: PHP, VALUE [.......], identificador de sesion. 

?>