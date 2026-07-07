<?php

function calcularDesconto($valorCompra)
{
    
    if($valorCompra > 1000){
        $desconto = 30;
    }
    elseif($valorCompra > 500){
        $desconto = 20;
    }
    elseif($valorCompra > 100){
        $desconto = 10;
    }
    else{
        $desconto = 0;
    }

    
    $valorDesconto = ($valorCompra * $desconto) / 100;

    $valorFinal = $valorCompra - $valorDesconto;

    echo "Valor original: R$ " . ($valorCompra) . "<br>";
    echo "Desconto aplicado: " . $desconto . "%<br>";
    echo "Valor do desconto: R$ " . ($valorDesconto) . "<br>";
    echo "Valor final: R$ " .($valorFinal) . "<br>";
}


calcularDesconto(1804.50);
