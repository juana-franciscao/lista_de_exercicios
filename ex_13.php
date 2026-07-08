<?php

function criptografarMensagem($texto){

    $resultado = "";

    for($i = 0; $i < strlen($texto); $i++){

        $letra = $texto[$i];

        if($letra != " "){
            $resultado .= chr(ord($letra) + 3);
        }else{
            $resultado .= " ";
        }
    }

    return $resultado;
}

function descriptografarMensagem($texto){

    $resultado = "";

    for($i = 0; $i < strlen($texto); $i++){

        $letra = $texto[$i];

        if($letra != " "){
            $resultado .= chr(ord($letra) - 3);
        }else{
            $resultado .= " ";
        }
    }

    return $resultado;
}

$mensagem = "Denise, sai da live filha";

$criptografada = criptografarMensagem($mensagem);

echo "Mensagem original: " . $mensagem . "<br>";
echo "Mensagem criptografada: " . $criptografada . "<br>";
echo "Mensagem descriptografada: " . descriptografarMensagem($criptografada);

?>