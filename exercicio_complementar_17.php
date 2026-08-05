<?php

function processarTexto($texto) {

    $textoSemEspacos = textoSemEspacos($texto);
    $palavras = explode(" ", $textoSemEspacos);
    $repetidas = array_count_values($palavras);


    $qtdPalavras = count($palavras);
    $contarFrases = preg_match_all('/[.!?]/', $texto);
    

    return [
        'quantidade_palavras'   => $qtdPalavras,
        'quantidade_frases'     => $contarFrases,
        'palavra_mais_longa'    => acharPalavraMaisLonga($texto),
        'palavra_mais_curta'    => acharPalavraMaisCurta($texto),
        'palavras_repetidas'    => palavraRepetida($repetidas),
        'cinco_mais_frequentes' => cincoRepetidas($repetidas),
        'texto_formatado'       => formatarTexto($texto)
        'texto_sem_espacos'     => textoSemEspacos($texto)
    ];

}


function acharPalavraMaisLonga($texto) {
    $palavras = explode(" ",trim(preg_replace('/\s+/', ' ', $texto)));
    $palavraMaisLonga = "";

    foreach ($palavras as $palavra) {
        if (strlen($palavra) > strlen($palavraMaisLonga)) {
            $palavraMaisLonga = $palavra;
        }
    }

    return $palavraMaisLonga;
}

function acharPalavraMaisCurta($teexto){
    $palavras = explode(" ",trim(preg_replace('/\s+/', ' ', $texto)));
    $palavraMaisCurta = $palavras[0];
    
    foreach ($palavras as $palavra) {
        if (strlen($palavra) < strlen($palavraMaisCurta)) {
            $palavraMaisCurta = $palavra;
        }
    }

    return $palavraMaisCurta;
}

function palavraRepetida($repetidas) {

    $repetidas = 0;
    foreach ($repetidas as $qtd) {
        if ($qtd > 1) {
            $repetidas++;
        }
    }
    return $repetidas;
}

function cincoRepetidas($repetidas, $limite = 5) {
    arsort($repetidas);
    return array_slice($repetidas, 0, $limite, true);
}

function formatarTexto($texto) {
    $textoFormatado = ucwords(strtolower($texto));
    return $textoFormatado;
}
 
function textoSemEspacos($texto) {
    $textoSemEspacos = trim(preg_replace('/\s+/', ' ', $texto));
    return $textoSemEspacos;
}
