<?php

$horass = 44;
$precoh = 20;

function salario($horass, $precoh) {
    $bruto = $precoh * $horass;
        $ir = ($bruto / 100 * 5);
        $inss = ($bruto / 100 * 10);
        $liquido = ($bruto - $ir - $inss);
        print_r("O salario liquido do funcionario e igual a R$" . $liquido . " tendo sido debitado R$" . $ir . " de IR e R$" . $inss . " de INSS.");

}

echo salario(44, 20);