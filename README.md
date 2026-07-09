### 1. Calculadora da Engenharia (`calcularFormula()`)
* **O quê:** Recebe dois números ($x$ e $y$) e aplica a fórmula: $(x^2 + y^2) \div (x + y)$.
* **Por quê:** Demonstra o uso de operadores aritméticos e validação condicional para evitar divisões por zero, garantindo a integridade dos cálculos do sistema.

### 2. Espelho Mágico (`inverterTexto()`)
* **O quê:** Recebe uma string, inverte-a completamente e conta o número de caracteres originais.
* **Por quê:** Pratica a manipulação de strings usando funções nativas do PHP para tratamento básico de textos.

### 3. Cadastro Seguro (`mascararCpf()`)
* **O quê:** Recebe um CPF e oculta os dígitos iniciais com asteriscos (`*`), preservando apenas os 4 últimos caracteres visíveis.
* **Por quê:** Simula uma regra de segurança essencial para a proteção de dados sensíveis em sistemas de cadastro (alinhado a boas práticas de privacidade).

### 4. Gerador de Senhas (`gerarSenha()`)
* **O quê:** Gera de forma aleatória uma senha de tamanho dinâmico contendo letras maiúsculas, minúsculas, números e caracteres especiais.
* **Por quê:** Explora a geração de dados randômicos e a manipulação de coleções de caracteres para criar credenciais seguras de autenticação.

### 5. Estatísticas de Texto (`analisarTexto()`)
* **O quê:** Analisa uma string e extrai a contagem exata de palavras, caracteres totais, vogais e consoantes.
* **Por quê:** Útil para sistemas editoriais. Trabalha com expressões regulares ou laços de repetição aplicados à filtragem e análise de texto complexo.

### 6. Conversor de Temperatura (`converterTemperatura()`)
* **O quê:** Realiza a conversão bidirecional de temperaturas entre Celsius, Fahrenheit e Kelvin.
* **Por quê:** Exercita o uso de estruturas condicionais múltiplas (`switch-case` ou `if-else`) baseando-se em fórmulas da física.

### 7. Sistema de Descontos (`calcularDesconto()`)
* **O quê:** Aplica faixas progressivas de descontos (de 10% a 30%) com base no valor total de uma compra.
* **Por quê:** Simula regras de negócio comuns no e-commerce, demonstrando como retornar múltiplos valores estruturados em um array (valor original, desconto e valor final).

### 8. Organizador de Lista (`ordenarNomes()`)
* **O quê:** Recebe uma string com nomes separados por vírgula, limpa os espaços em branco, converte em vetor e ordena em ordem alfabética.
* **Por quê:** Aplica funções fundamentais como a quebra de strings (`explode`), remoção de espaços desnecessários (`trim`) e ordenação de arrays (`sort`).

### 9. Verificador Matemático (`analisarNumero()`)
* **O quê:** Avalia se um número inteiro é par/ímpar, primo/não-primo e perfeito/não-perfeito.
* **Por quê:** Estimula o raciocínio lógico avançado através da implementação de laços para busca de divisores e propriedades matemáticas puras.

### 10. Sistema de Notas (`calcularMedia()`)
* **O quê:** Recebe um vetor de notas, identifica a maior, a menor, calcula a média aritmética e define a situação do aluno (Aprovado, Recuperação ou Reprovado).
* **Por quê:** Integra manipulação estatística básica de arrays e tomada de decisões automatizada em sistemas escolares.

### 11. Formatador de Relatórios (`formatarTexto()`)
* **O quê:** Converte um texto simultaneamente para maiúsculas, minúsculas, capitaliza cada palavra e conta os caracteres.
* **Por quê:** Pratica a padronização e higienização de strings utilizando funções nativas do PHP como `strtoupper`, `strtolower` e `ucwords`.

### 12. Catálogo de Produtos (`analisarProdutos()`)
* **O quê:** Processa uma lista de produtos avaliando o preço mais alto, mais baixo, a média geral e permite buscar um item específico.
* **Por quê:** Ensina a lidar com estruturas de dados associativas e indexadas, varrendo coleções para extração de relatórios comerciais.

### 13. Criptografia Simples (`criptografarMensagem()` e `descriptografarMensagem()`)
* **O quê:** Cria duas funções que codificam e decodificam mensagens de texto através da técnica clássica da Cifra de César.
* **Por quê:** Introduz conceitos básicos de segurança da informação e manipulação de índices de caracteres (tabela ASCII ou posições de string).

### 14. Estatísticas Numéricas (`estatisticasNumericas()`)
* **O quê:** Retorna um compilado estatístico completo de um array numérico: soma, média, maior, menor, contagem de pares/ímpares e a mediana.
* **Por quê:** Aprofunda a lógica de ordenação e tratamento matemático para encontrar o elemento central (mediana) tanto para arrays ímpares quanto pares.

### 15. Biblioteca de Funções (`funcoes.php` e `index.php`)
* **O quê:** Criação de um módulo centralizado com 10 funções utilitárias do dia a dia e um arquivo principal que consome e demonstra cada uma delas na prática.