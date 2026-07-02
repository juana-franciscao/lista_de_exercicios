<?php

function inverterTexto($texto)
{
    $textoInvertido = strrev($texto);
    return $textoInvertido;
    $caracteres = strlen($texto);
}

$texto = "Denise, sai da live filha";
echo "Texto original: " . $texto . "<br>";

echo "Texto invertido: " . inverterTexto($texto) . "<br>";
echo "caracteres: " . strlen($texto);                             