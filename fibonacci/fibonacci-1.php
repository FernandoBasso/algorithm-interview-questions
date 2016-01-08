<?php

$penultimoNumero = 1;
$ultimoNumero    = 1;
$proximoNumero   = 1;

$interacoes = 1;

while(true) {
    if ($interacoes > 2) {
        $proximoNumero   = $ultimoNumero + $penultimoNumero;
        $penultimoNumero = $ultimoNumero;
        $ultimoNumero    = $proximoNumero;
    }

    if ($proximoNumero >= 100) {
        break;
    }

    echo $proximoNumero. PHP_EOL;
    
    $interacoes++;
}

