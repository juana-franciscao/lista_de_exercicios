<?php

funtion ordenarNomes($nomes) {
    sort($nomes);
    return $nomes;  

    print_r($nomes);
}

echo "Nomes ordenados:" . "<br>";
$nomes = ["Denise", "João", "Maria", "Carlos"];
$nomesOrdenados = ordenarNomes($nomes);
print_r($nomesOrdenados);
