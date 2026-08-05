<?php

function validarSenha($senha){

    if(strlen($senha) >= 8){
        return "Senha forte";
    }else{
        return "Senha fraca";
    }

}

$senha =18042025;

echo "Senha: $senha <br>";
echo validarSenha($senha);