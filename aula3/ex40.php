<?php

$morango = (2.50);
$maca = (1.80);
$morango5 = (2.20);
$maca5 = (1.5);

$pesoMorango = (0);
$pesoMaca = (0);

if ($pesoMorango > 5.1) {
    $morango5kg = $morango5 * $pesoMorango; 
    $morangodesc = $morango5kg / 10;
    $precomorango = $morangodesc;
}
if ($pesoMorango < 5) {
    $morangosd = $morango * $pesoMorango;
    $precomorango = $morangosd;
}
if ($maca < 5) {
    $macasd = $maca * $pesoMaca;
    $precomaca = $macasd;
}
if ($maca > 5.1) {
    $maca5kg = $maca5 * $pesoMaca;
    $macadesc = $maca5kg / 10;
    $precomaca = $macadesc;
}

if ($pesoMorango > 0 && $pesoMaca > 0) {
    echo "Bom dia, você está efetuando uma compra de " . $pesoMaca . "KG de maça e " . $pesoMorango . "KG de morangos.";
    echo "O valor da maça será R$" . $precomaca . " e o valor do morango será R$" . $precomorango;
}

if ($pesoMorango == 0 && $pesoMaca > 0) {
    echo "Bom dia, você está efetuando uma compra de " . $pesoMaca . "KG de maça e " . $pesoMorango . "KG de morangos.";
    echo "O valor da maça será R$" . $precomaca;
}

if ($pesoMorango > 0 && $pesoMaca == 0) {
    echo "Bom dia, você está efetuando uma compra de " . $pesoMaca . "KG de maça e " . $pesoMorango . "KG de morangos.";
    echo "O valor do mmorango será R$" . $precomorango;
}