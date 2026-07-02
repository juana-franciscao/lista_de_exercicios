<?php

function  mascararCpf()
{
    $cpf = "131.897.674-51";
    $mascararCpf = substr($cpf, 0, 0) . "***.***.*" . substr($cpf, -5);
    return $mascararCpf;
}

echo "CPF original: 131.897.674-51 <br>";

echo "CPF mascarado: " . mascararCpf();