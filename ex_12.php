<?php

function analisarProdutos($produtos, $pesquisa){

    $maisCaro = $produtos[0];
    $maisBarato = $produtos[0];
    $soma = 0;
    $encontrado = false;

    foreach($produtos as $produto){

        // Soma dos preços
        $soma += $produto[1];

        // Produto mais caro
        if($produto[1] > $maisCaro[1]){
            $maisCaro = $produto;
        }

        // Produto mais barato
        if($produto[1] < $maisBarato[1]){
            $maisBarato = $produto;
        }

        // Pesquisa do produto
        if($produto[0] == $pesquisa){
            $encontrado = true;
        }
    }

    $media = $soma / count($produtos);

    return "Produto mais caro: " . $maisCaro[0] . " - R$ " . $maisCaro[1] . "<br>" .
           "Produto mais barato: " . $maisBarato[0] . " - R$ " . $maisBarato[1] . "<br>" .
           "Média dos preços: R$ " . $media . "<br>" .
           "Pesquisa: " . ($encontrado ? "Produto encontrado!" : "Produto não encontrado.");
}

// Vetor de vetores
$produtos = [
    ["camaram", 17],
    ["Feijão", 14],
    ["batata frita", 8],
    ["Banana", 329]
];


$pesquisa = "Banana";


echo analisarProdutos($produtos, $pesquisa);