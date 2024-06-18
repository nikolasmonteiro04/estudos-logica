<?php

$resposta1 = strtoupper("sim");
$resposta2 = strtoupper("sim");
$resposta3 = strtoupper("sim");
$resposta4 = strtoupper("sim");
$resposta5 = strtoupper("sim");

$respostasPositivas = 0;

if ($resposta1 == "SIM") {
    $respostasPositivas++;
}
if ($resposta2 == "SIM") {
    $respostasPositivas++;
}
if ($resposta3 == "SIM") {
    $respostasPositivas++;
}
if ($resposta4 == "SIM") {
    $respostasPositivas++;
}
if ($resposta5 == "SIM") {
    $respostasPositivas++;
}

switch ($respostasPositivas) {
    case ($respostasPositivas <= 2):
    echo "Você é inocente.";
    break;
    case ($respostasPositivas == 3 || $respostasPositivas == 4 ):
    echo "Você é suspeito do crime.";
    break;
    case ($respostasPositivas == 5): 
    echo "Você é o assassino.";
    break;
}
