<?php

function validarEmail($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }else{
        return false;
    }
}

echo validarEmail("JuanaOf10@gmail.com") ? "Email válido" : "Email inválido";