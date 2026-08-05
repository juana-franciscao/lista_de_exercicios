<?php

function  analisarSenha()($senha) {
    $temMaiuscula = preg_match('/[A-Z]/', $senha);
    $temMinuscula = preg_match('/[a-z]/', $senha);
    $temNumero = preg_match('/[0-9]/', $senha);
    $temCaracterEspecial = preg_match('/[\W_]/', $senha);
    $tamanho = strlen($senha);

    
    if ($tamanho < 8) {
        return "Senha fraca: deve ter pelo menos 8 caracteres.";
    } elseif (!$temMaiuscula || !$temMinuscula || !$temNumero || !$temCaracterEspecial) {
        return "Senha média: deve conter letras maiúsculas, minúsculas, números e caracteres especiais.";
    } else {
        return "Senha forte.";
    }
}

$senha = "Juju@123";

echo "Senha: $senha <br>";
echo analisarSenha($senha);
