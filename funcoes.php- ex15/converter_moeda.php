<?php

function converterMoeda($valor, $cotacao){
    return $valor / $cotacao;
}

$valor = 676;
$cotacao = 5;

echo "Valor em reais: $valor" . "<br>";
echo "Valor do dolar: $cotacao" . "<br>";
echo "Valor em dolar:" . converterMoeda($valor, $cotacao);