<?php


function conversão($far) {
    $conversao = (($far - 32) * 5/9);
    return " ºF convertido para ºC é igual a " . $conversao ;
}

echo conversão(90);
?>