<?php

function numeroMaior($num1,$num2) {
    if ($num1 > $num2) {
        return $num1 . ' é maior que ' . $num2;
    }    elseif ($num1 == $num2) {
        return $num2 . ' é igual a ' . $num1;
    } else {  
        return $num2 . ' é maior que ' . $num1;
    } 
}
echo numeroMaior(4, 5);
