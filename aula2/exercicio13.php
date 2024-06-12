<?php

$altura = 1.80;
$sexo = strtoupper("m");


function pesoIdeal($altura, $sexo) {
    if ($sexo == "M") {
        $conversao = ((72.7 * $altura) -58);    
        print_r("O peso ideal para um homem sua altura é " . $conversao . " KG.");   
    } 
    if ($sexo == "F") {
        $conversao = ((62.1 * $altura) -44.7);
        print_r("O peso ideal para uma mulher com sua altura é " . $conversao . " KG.");
    }
}


echo pesoIdeal($altura, $sexo);