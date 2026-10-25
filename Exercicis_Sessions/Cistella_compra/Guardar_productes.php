<?php
//si existen llamalos así (individualmente ya que son dos forms diferentes) y coge sus valores 
if (isset($_GET["Pintia"]))
    {
        $Pintia = $_GET["Pintia"];
    }

if (isset($_GET["Vinya"]))
    {
        $Vinya = $_GET["Vinya"]; 
    }




//guarda en cistella con sesion (individualmente)
if (isset($Pintia)&&  //si existe uno y el otro no. 
    !isset($Vinya))
    {
        session_start (); 
        $_SESSION["Pintia"] = $Pintia; //NO PONER 3 IGUALES (con uno basta)
        header ("Location: index.html"); 
        
    }
    else    //es imposible que los dos no existan, eso lo comprueba cistella_compra
            //en este caso si existe Vinya y Pintia no. 
            {
                session_start (); 
                $_SESSION["Vinya"] = $Vinya; 
                header ("Location: index.html");
                 
            }
            

            
            
            
            
            
            
            //else //si los dos existen, ya que es imposible que no existan "Por la redireccion a cistella_compra"
                //{
                    //session_start (); 
                    //$_SESSION["Prod1"] = $Pintia; 
                    //$_SESSION["Prod2"] = $Vinya; 
                    //header ("Location: index.html");
                    //echo "Pintia y vinya"; 
                //}

?>