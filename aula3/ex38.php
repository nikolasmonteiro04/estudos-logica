<?php

$cedula1 = 1;
$cedula5 = 5;
$cedula10 = 10;
$cedula50 = 50;
$cedula100 = 100;

$saqueInformado = 587;
$saqueAtual = 587;

if ($saqueAtual >= $cedula100) {
    $cedula100Quantidade = (int)($saqueAtual / $cedula100);
    $saqueAtual = $saqueAtual % $cedula100;
}

if ($saqueAtual >= $cedula50) {
    $cedula50Quantidade = (int)($saqueAtual / $cedula50);
    $saqueAtual = $saqueAtual % $cedula50;
}

if ($saqueAtual >= $cedula10) {
    $cedula10Quantidade = (int)($saqueAtual / $cedula10);
    $saqueAtual = $saqueAtual % $cedula10;
}

if ($saqueAtual >= $cedula5) {
    $cedula5Quantidade = (int)($saqueAtual / $cedula5);
    $saqueAtual = $saqueAtual % $cedula5;
}

if ($saqueAtual >= $cedula1) {
    $cedula1Quantidade = (int)($saqueAtual / $cedula1);
    $saqueAtual = $saqueAtual % $cedula1;
}

echo "Você solitiou um saque de R$ " . $saqueInformado . "<br>";
echo "Você recebera em ". $cedula100Quantidade ." cedulas de R$ " . $cedula100 . " Reais <br>";
echo "Você recebera em ". $cedula50Quantidade ." cedulas de R$ " . $cedula50 . " Reais <br>";
echo "Você recebera em ". $cedula10Quantidade ." cedulas de R$ " . $cedula10 . " Reais <br>";
echo "Você recebera em ". $cedula5Quantidade ." cedulas de R$ " . $cedula5 . " Reais <br>";
echo "Você recebera em ". $cedula1Quantidade ." cedulas de R$ " . $cedula1 . " Real <br>";