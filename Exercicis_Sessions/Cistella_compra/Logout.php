<?php
//resume la sesion 
session_start (); 


//la deja de setear
session_unset(); 

//Destruye la sesion 
session_destroy(); 

echo "<h1>Has acabat la compra</h1>";
echo "<a href='index.html'><button>Tornar al index</button></a>";




?>