<?php

function converterMoeda($valor, $cotacao){
    return $valor / $cotacao;
}

$valor = 500;
$cotacao = 5;

echo "Valor em reais: $valor";
echo "Valor do dolar: $cotacao";
echo "Valor em dolar:" .converterMoeda($valor, $cotacao);