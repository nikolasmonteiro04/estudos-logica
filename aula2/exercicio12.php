<?php

function pesoIdeal($peso) {
    $conversao = ((72.7 * $peso) -58);
    print_r("O peso ideal para sua altura é " . $conversao . " KG.");
}

echo pesoIdeal(1.53);