 <?php  

 function calcularMedia(array $notas) {

    $maiorNota = max($notas);
    $menorNota = min($notas);

    //media das notas 
    $somaNotas = array_sum($notas);
    $quantidadeNotas = count($notas);   
    $media = $somaNotas / $quantidadeNotas;
    //fim media das notas

    //situação do aluno
    if ($media >= 6) {
        $situacao = "Aprovado";
    } elseif ($media >= 5) {
        $situacao = "Recuperação";
    } else {
        $situacao = "Reprovado";
    }

    return [
        'maiorNota' => $maiorNota,
        'menorNota' => $menorNota,
        'media' => $media,
        'situacao' => $situacao
    ];
 }

    echo "Resultado do cálculo da média:" . "<br>";
        $notas = [7, 8, 5, 6, 9];  
        $resultado = calcularMedia($notas);
                echo "Maior nota: " . $resultado['maiorNota'] . "<br>";
                echo "Menor nota: " . $resultado['menorNota'] . "<br>";
                echo "Média: " . $resultado['media'] . "<br>";
                echo "Situação: " . $resultado['situacao'] . "<br>";