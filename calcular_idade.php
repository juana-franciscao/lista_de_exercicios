<?php

function calcularIdade($anoNascimento){
    return date("Y") - $anoNascimento;
}

$anoNascimento = 1987;

echo "Ano de nascimento: $anoNascimento" . "<br>" ;
echo "Idade: " .calcularIdade($anoNascimento);