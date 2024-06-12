<?php

$numero1 = 20;
$numero2 = 20;
$numero3 = 20;

$media = ($numero1 + $numero2 + $numero3) / 3;
if (($media == $numero1) && ($media == $numero2) && ($media == $numero3)) {
    print_r("Este é um triangulo equilatero.");
    
} else {
    print_r("Não é um tringulo equilatero.");
}