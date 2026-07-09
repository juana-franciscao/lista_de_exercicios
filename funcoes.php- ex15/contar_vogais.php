<?php
function  analisarTexto($texto)
{
    
    $vogais = preg_match_all('/[aeiou]/i', $texto);

    return "O texto tem $vogais vogais.";

}

$texto = "Denise, sai da live filha";

echo "Texto original: $texto <br>";
echo analisarTexto($texto);