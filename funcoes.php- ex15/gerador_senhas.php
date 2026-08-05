<?php

function gerarSenha($tamanho, $maiusculas, $minusculas, $numeros, $simbolos){

  $maiusculas = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $minusculas = "abcdefghijklmnopqrstuvwxyz";
  $numeros = "0123456789";
  $simbolos = "!@#$%&*()_+=";

$senha = "";

  if($maiusculas){
    $senha .= str_shuffle($maiusculas);
  }

  if($minusculas){
    $senha .= str_shuffle($minusculas);
  }

  if($numeros){
    $senha .= str_shuffle($numeros);
  }

  if($simbolos){
    $senha .= str_shuffle($simbolos);
  }


  return substr(str_shuffle($senha), 0, $tamanho);

}

echo "Senha gerada: ". gerarSenha(8, true, true, true, true) . "<br>";