<?php

function estatisticasNumericas($numeros){

$soma = 0;
    $pares = 0;
    $impares = 0;

    $maior = $numeros[0];
    $menor = $numeros[0];

    foreach($numeros as $numero){

        $soma += $numero;

        if($numero > $maior){
            $maior = $numero;
        }

        if($numero < $menor){
            $menor = $numero;
        }

        if($numero % 2 == 0){
            $pares++;
        }else{
            $impares++;
        }
    }

    $media = $soma / count($numeros);

    // Ordena o vetor para calcular a mediana
    sort($numeros);

    $quantidade = count($numeros);

    if($quantidade % 2 == 0){
        $mediana = ($numeros[$quantidade / 2 - 1] + $numeros[$quantidade / 2]) / 2;
    }else{
        $mediana = $numeros[floor($quantidade / 2)];
    }

    return "Soma: $soma<br>" .
           "Média: $media<br>" .
           "Maior valor: $maior<br>" .
           "Menor valor: $menor<br>" .
           "Mediana: $mediana<br>" .
           "Quantidade de números pares: $pares<br>" .
           "Quantidade de números ímpares: $impares";
}

// Vetor de números
$numeros = [1, 8, 4, 69, 3, 2, 9];


echo estatisticasNumericas($numeros);