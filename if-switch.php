<?php
    $edad = 20;
    if ($edad < 17){
        echo "Menor de edad";
    }
    else if ($edad<20){
        echo"menor de 20";
    }
    else if ($edad<25){
        echo"menor de 25";
    }
    else {
        echo"mayor de edad";
    }

    $categoia = 'a';
    switch($categoia){
        case 'a':
            echo "<br>Categoria A";
            break;
        case 'b':
            echo "<br>Categoria B"; 
            break;
        default:
            echo "<br>Categoria no definida";   
            break;
    }
?>