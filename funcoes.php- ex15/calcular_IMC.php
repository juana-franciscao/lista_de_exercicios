<?php

function calcularIMC($peso, $altura){
    return $peso / ($altura * $altura);
}

$peso = 62;
$altura = 1.72;

echo "Peso $peso e altura $altura .";
echo "IMC = " .calcularIMC();