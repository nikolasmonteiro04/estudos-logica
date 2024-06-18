<?php

echo "Insira a nota 1: <br>";
$nota1 = 4;
echo "Nota1 é " . $nota1 . "<br>";
echo "Insira a nota 2: <br>";
$nota2 = 3.75;
echo "Nota2 é " . $nota2 . "<br>";

$media = ($nota1 + $nota2) / 2;

switch($media) {
    case ($media >= 9.1 && $media <= 10):
        echo "Conceito A - APROVADO MEDIA " . $media;
        break;
    case ($media >= 7.5 && $media <= 9):
        echo "Conceito B - APROVADO MEDIA " . $media;
        break;
    case ($media >= 6 && $media <= 7.49):
        echo "Conceito C - APROVADO MEDIA " . $media;
        break;
    case ($media >= 4 && $media <= 5.99):
        echo "Conceito D - REPROVADO MEDIA " . $media;
        break;
    case ($media < 4):
        echo "Conceito E - REPROVADO MEDIA " . $media;
        break;
}