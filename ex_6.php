<?php

function converterTemperatura($celsius) {
    $fahrenheit = ($celsius * 9/5) + 32;
    $kelvin = $celsius + 273.15;
    
    return [
        'fahrenheit' => $fahrenheit,
        'kelvin' => $kelvin
    ];
}

$celsius = 25;
$resultado = converterTemperatura($celsius);

echo "Temperatura em Celsius: " . $celsius . "°C<br>";
echo "Temperatura em Fahrenheit: " . $resultado['fahrenheit'] . "°F<br>";
echo "Temperatura em Kelvin: " . $resultado['kelvin'] . "K<br>";