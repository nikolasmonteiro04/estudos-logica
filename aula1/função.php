<?php 

function somaDeNumeros($numero1, $numero2, $numero3) {
    $resultado = ($numero1 + $numero2 + $numero3);
    return $resultado;
}

$retorno = somaDeNumeros(2, 5, 6);
print_r($retorno);
?>