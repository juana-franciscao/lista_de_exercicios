<?php

function gerarSenha($tamanho, $maiusculas, $minusculas, $numeros, $especiais)
{
    $maiusculas = "ABCDEFGHIJKLMNOPQRSTUVYXWZ"; // letras maiúsculas
    $minusculas = "abcdefghijklmnopqrstuvyxwz"; // letras minúsculas
    $numeros = "0123456789"; // números
    $especiais = "!@#$%¨&*()_+="; // símbolos

    $senha = "";

    if ($maiusculas) {
        $senha .= str_shuffle($maiusculas);
    }

    if ($minusculas) {
        $senha .= str_shuffle($minusculas);
    }

    if ($numeros) {
        $senha .= str_shuffle($numeros);
    }

    if ($especiais) {
        $senha .= str_shuffle($especiais);
    }

    return substr(str_shuffle($senha), 0, $tamanho);
}

 echo "Senha gerada: " . gerarSenha(10, true, true, true, true);