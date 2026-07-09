<?php  

 function formatarTexto( string $texto): array {

        return[
        'maiusculos' => mb_strtoupper($texto, 'UTF-8'),
        'minusculos' => mb_strtolower($texto, 'UTF-8'),
        'primeiraLetraMaiuscula' => mb_convert_case($texto, MB_CASE_TITLE, 'UTF-8'),
        'quantidadeCaracteres' => mb_strlen($texto, 'UTF-8')
        ];

 }

 $textoOriginal = "Denise, sai da live filha";
 $resultados = formatarTexto($textoOriginal);

 echo "Texto em maiúsculas: " . $resultados['maiusculos'] . "<br>";
 echo "Texto em minúsculas: " . $resultados['minusculos'] . "<br>";    
 echo "Texto com primeira letra maiúscula: " . $resultados['primeiraLetraMaiuscula'] . "<br>";
 echo "Quantidade de caracteres: " . $resultados['quantidadeCaracteres'] . "<br>";