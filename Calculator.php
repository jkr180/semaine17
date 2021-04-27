<?php

function calculator($x, $y, $op) {

if (is_numeric ($x) ==false) {
    return "Nombre 1 incorrect. Veuillez réessayer";
}
else {
    if (is_numeric($y) ==false) {
        return  "Nombre 2 incorrect. Veuillez réessayer";
    }
    else { 
        $signe = ['+', '-', '*', '/'];
        $cherche = array_search($op, $signe); var_dump(gettype($cherche));
        if (gettype($cherche) == "boolean" && $cherche == false) {
            return "Opérateur incorrect. Veuillez réessayer";
        }
        else {
            $resultat = "";
            switch ($op) {
                case "+":
                    $resultat = $x + $y;
                    break;
                case "-":
                    $resultat = $x - $y;
                    break;
                case "*":
                    $resultat = $x * $y;
                    break;
                case "/":
                    $resultat = $x / $y;
                    break; 
            }
            return "Le résultat est $resultat";
        }
    }
}
}

echo calculator(2, 3, '+');

?>