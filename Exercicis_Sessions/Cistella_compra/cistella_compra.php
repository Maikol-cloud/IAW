<?php
//resum la sessio
session_start (); 

//si solo existe la sesion Pintia: 
if (isset($_SESSION["Pintia"])&&
    !isset($_SESSION["Vinya"]))
    {
        $Valor1 = $_SESSION["Pintia"] * 55;
            echo "<html>
                    <h1>Resum de la compra<h1> 
                        <h2>Producte: Pintia Vi negre (55 euros)</h2> 
                        <h2>Quantitat: <br> Vi negre: " . $_SESSION["Pintia"] . ",Vinya: 0 </h2> 
                        <h2>Total:  $Valor1  </h2> 
                        <br><a href='Logout.php'><button>Confirmar compra</button></a>
                </html>"; 

    }//solo si existe vinya 
    elseif (isset($_SESSION["Vinya"])&&
            !isset($_SESSION["Pintia"]))
            {
                $Valor1 = $_SESSION["Vinya"] * 52.20;
                    echo "<html>
                            <h1>Resum de la compra<h1> 
                                <h2>Producte: Vinya Pedrosa (52,5 euros)</h2> 
                                <h2>Quantitat: <br> Vi negre: 0 ,Vinya: " . $_SESSION["Vinya"] . "</h2> 
                                <h2>Total:  $Valor1  </h2> 
                                <br><a href='Logout.php'><button>Confirmar compra</button></a>
                        </html>"; 

            }//si existen los dos: 
            elseif(isset($_SESSION["Pintia"])&&
                    isset($_SESSION["Vinya"]))
                    {
                        //calcular el precio total (cantidad * precio)
                        $Valor1 = $_SESSION["Pintia"] * 55; 
                        $Valor2 = $_SESSION["Vinya"] * 52.50; 
                        $Total = $Valor1 + $Valor2;
                        
                        echo "<html>
                                <h1>Resum de la compra<h1> 
                                    <h2>Producte: Pintia Vi negre (55 euros) i Vinya Pedrosa (52,5 euros)</h2> 
                                    <h2>Quantitat: <br> Vi negre: " . $_SESSION["Pintia"] . " Vinya: " . $_SESSION["Vinya"] . "</h2> 
                                    <h2>Total:  $Total  </h2> 
                                    <br><a href='Logout.php'><button>Confirmar compra</button></a>
                            </html>"; 
                    }
                    else 
                        {
                            echo "<h1>No has afegit a la cistella cap producte</h1>
                                <a href='index.html'><button>Tornar a la botiga</button></a>";
                            
                        }
 










?>