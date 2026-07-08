<?php

function analisarNumero($numero) {
 
//numero par ou ímpar
$parOuImpar = ($numero % 2 == 0) ? "par" : "ímpar";
//final numero par ou ímpar


//numero primo
$primo= true;
if ($numero <= 1) {
    $primo = false;
} else {
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            $primo = false;
            break;
        }
    }
}
    $numeroPrimo = $primo ? "é primo" : "não é primo";
//final numero primo


//numero perfeito
$somaDivisores = 0;
for ($i = 1; $i < $numero; $i++) {
    if ($numero % $i == 0) {
        $somaDivisores += $i;
    }
}
$numeroPerfeito = ($somaDivisores == $numero) ? "é perfeito" : "não é perfeito";
//final numero perfeito

return [$parOuImpar, $numeroPrimo, $numeroPerfeito];

}

echo "Analisando o número 6:" . "<br>";
$numero = 6;    
$analise = analisarNumero($numero);
echo "O número $numero " . $analise[0] . ", " . $analise[1] . " e " . $analise[2] . ".";