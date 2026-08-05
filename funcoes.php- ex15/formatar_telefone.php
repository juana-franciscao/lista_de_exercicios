<?php

function formatarTelefone($telefone){
    return "(" . substr($telefone, 0, 2) . ") " .
           substr($telefone, 2, 5) . "-" .
           substr($telefone, 7);
}

$telefone = 47991731781;

echo "O telefone era: $telefone" . "<br>";
echo "O telefone ficou:" .formatarTelefone($telefone). "<br>";