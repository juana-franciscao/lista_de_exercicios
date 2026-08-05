<?php

function  analisarSenha($senha) {

    $qtdMaiusculas = contarMaiusculas($senha);    
    $qtdMinusculas = contarMinusculas($senha);
    $qtdNumeros = contarNumeros($senha);
    $qtdCaracteresEspeciais = contarCaracteresEspeciais($senha);
    $tamanho = strlen($senha);

    $nivelSeguranca = validarSenha($senha);

    return [
        'senha' => $senha,
        'qtdMaiusculas' => $qtdMaiusculas,
        'qtdMinusculas' => $qtdMinusculas,
        'qtdNumeros' => $qtdNumeros,
        'qtdCaracteresEspeciais' => $qtdCaracteresEspeciais,
        'tamanho' => $tamanho,
        'nivelSeguranca' => $nivelSeguranca
    ];

}

function Maiusculas($senha) {
    return preg_match('/[A-Z]/', $senha);

}

function Minusculas($senha) {
    return preg_match('/[a-z]/', $senha);
}

function Numeros($senha) {
    return preg_match_all('/[0-9]/', $senha, $matches) >= 2;
}

function CaracteresEspeciais($senha) {
    return preg_match('/[\W_]/', $senha);
}

function tamanhoSenha($senha) {
    return strlen($senha) >= 8;
}

function validarSenha($senha) {

    if(tamanhoSenha($senha)  && Maiusculas($senha) && Minusculas($senha) && Numeros($senha) && CaracteresEspeciais($senha)){
        return "Senha forte Muito";
    }  
    if(tamanhoSenha($senha) && Maiusculas($senha) && Minusculas($senha) && quantidadeNumeros($senha)){
        return "Senha forte";
    }
     if(tamanhoSenha($senha) && Maiusculas($senha)&& Minusculas($senha)){
        return "Senha media";
    }
    if(tamanhoSenha($senha) && Maiusculas($senha) ){
        return "Senha fraca";
    }
}

$senha = "Juju@123";

echo "Senha: $senha <br>";
echo analisarSenha($senha);
