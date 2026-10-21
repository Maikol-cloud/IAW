<?php


$Comp = $_GET["Comprovacio"];
$Coin = $_GET["Coin"];


if (isset($_COOKIE["Idioma"])&&
    $_COOKIE["Idioma"] === "Cat"&&
    isset($Comp)&&
    $Comp === "no")

    {
        setcookie ("Majoredat", "no");
        echo "<h1>No et podem vendre alcohol si ets menor d’edat<h1>"; 
    }

if (isset($_COOKIE["Idioma"])&&
    $_COOKIE["Idioma"] === "Cat"&&
    isset($Comp)&&
    $Comp === "si"&&
    isset($Coin)&&
    $Coin === "Eur")

    {
        setcookie ("Majoredat", "si");
        setcookie ("Moneda", "Eur");
        echo "<h1>Tenda</h1>
                <h2>T’oferim el vi “Les Terrasses” a un preu de 39 €</h2>
                <h2>Pintia Vi negre 55€</h2>
                <h2>Vinya Pedrosa criança magnum a 52,50€</h2>
                <form action ='Bodega.php' method= 'get'><button>Tornar</button></form>"; 
    }
    elseif(isset($_COOKIE["Idioma"])&&
        $_COOKIE["Idioma"] === "Cat"&&
        isset($Comp)&&
        $Comp === "si"&&
        isset($Coin)&&
        $Coin === "Dol")

        {
            setcookie ("Majoredat", "si");
            setcookie ("Moneda", "Dol");  
            echo "<h1>Tenda</h1>
                    <h2>Pintia Vi negre 55$</h2>
                    <h2>Vinya Pedrosa criança magnum a 52,50$</h2>
                    <form action ='Bodega.php' method= 'get'><button>Tornar</button></form>"; 
        }


if (isset($_COOKIE["Idioma"])&&
    $_COOKIE["Idioma"] === "Cas"&&
    isset($Comp)&&
    $Comp === "no")

    {
        setcookie ("Majoredat", "no");
        echo "<h1>No te podemos vender alcohol si eres menor de edad<h1>"; 
    }

if (isset($_COOKIE["Idioma"])&&
        $_COOKIE["Idioma"] === "Cas"&&
        isset($Comp)&&
        $Comp === "si"&&
        isset($Coin)&&
        $Coin === "Eur")

        {
            setcookie ("Majoredat", "si");
            setcookie ("Moneda", "Eur");
            echo "<h1>Tienda</h1>
                    <h2>Pintia Vino tinto 55€</h2>
                    <h2>Viña Pedrosa crianza magnum a 52,50€</h2>
                    <form action ='Bodega.php' method= 'get'><button>Regresar</button></form>"; 
        }
        elseif(isset($_COOKIE["Idioma"])&&
                $_COOKIE["Idioma"] === "Cas"&&
                isset($Comp)&&
                $Comp === "si"&&
                isset($Coin)&&
                $Coin === "Dol")

                {
                    setcookie ("Majoredat", "si");
                    setcookie ("Moneda", "Dol");  
                    echo "<h1>Tienda</h1>
                            <h2>Pintia Vino tinto 55$</h2>
                            <h2>Viña Pedrosa crianza magnum a 52,50$</h2>
                            <form action ='Bodega.php' method= 'get'><button>Regresar</button></form>"; 
                }

if (isset($_COOKIE["Idioma"])&&
        $_COOKIE["Idioma"] === "Eng"&&
        isset($Comp)&&
        $Comp === "no")

        {
            setcookie ("Majoredat", "no");
            echo "<h1>We can't offer you alcohol if you are underage<h1>"; 
        }

if (isset($_COOKIE["Idioma"])&&
            $_COOKIE["Idioma"] === "Eng"&&
            isset($Comp)&&
            $Comp === "si"&&
            isset($Coin)&&
            $Coin === "Eur")

            {
                setcookie ("Majoredat", "si");
                setcookie ("Moneda", "Eur");
                echo "<h1>Tenda</h1>
                        <h2>Pintia Red Wine 55€</h2>
                        <h2>Vineyard Pedrosa crianza magnum at 52,50€</h2>
                        <form action ='Bodega.php' method= 'get'><button>Return</button></form>"; 
            }
            elseif(isset($_COOKIE["Idioma"])&&
                    $_COOKIE["Idioma"] === "Cat"&&
                    isset($Comp)&&
                    $Comp === "si"&&
                    isset($Coin)&&
                    $Coin === "Dol")

                    {
                        setcookie ("Majoredat", "si");
                        setcookie ("Moneda", "Dol");  
                        echo "<h1>Tenda</h1>
                                <h2>Pintia Vi negre 55$</h2>
                                <h2>Vinya Pedrosa criança magnum a 52,50$</h2>
                                <form action ='Bodega.php' method= 'get'><button>Tornar</button></form>"; 
                    }






?>