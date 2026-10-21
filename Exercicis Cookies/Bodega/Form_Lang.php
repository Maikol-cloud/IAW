<?php


$Lang = $_GET["Lang"];

if (isset($Lang)&&
    $Lang === "Cat"
    )
    {
        setcookie ("Idioma", "Cat");
        echo  "<form action='Tienda.php' method='GET'>
                                <h3>Ets major d'edat ?</h3>
                                    <input type='radio' name='Comprovacio' value='si' checked>si<br>
                                    <input type='radio' name='Comprovacio' value='no'>no<br>
                                
                                <h3>Escull la moneda: </h3>
                                    <select name='Coin'> 
                                        <option value='Eur'>€</option>
                                        <option value='Dol'>$</option>
                                    </select>

                                <input type='submit' value='Enviar'>
                            </form>

                        </html>"; 

    }





if (isset($Lang)&&
    $Lang === "Eng"
    )
    {
    
        setcookie ("Idioma", "Eng");
        echo  "<form action='Tienda.php' method='GET'>
                                <h3>Are you an adult ?</h3>
                                    <input type='radio' name='Comprovacio' value='si' checked>yes<br>
                                    <input type='radio' name='Comprovacio' value='no'>no<br>
                                
                                <h3>Choose the coin: </h3>
                                    <select name='Coin'> 
                                        <option value='Eur'>€</option>
                                        <option value='Dol'>$</option>
                                    </select>

                                <input type='submit' value='Send'>
                            </form>
                        </html>"; 

    }




if (isset($Lang)&&
    $Lang === "Cas"
    )
    {
        setcookie ("Idioma", "Cas");
        echo  "<form action='Tienda.php' method='GET'>
                                <h3>Eres mayor de edad ?</h3>
                                    <input type='radio' name='Comprovacio' value='si' checked>si<br>
                                    <input type='radio' name='Comprovacio' value='no'>no<br>
                                
                                <h3>Escoge la moneda </h3>
                                    <select name='Coin'> 
                                        <option value='Eur'>€</option>
                                        <option value='Dol'>$</option>
                                    </select>

                                <input type='submit' value='Send'>
                            </form>
                        </html>"; 
    }






?>