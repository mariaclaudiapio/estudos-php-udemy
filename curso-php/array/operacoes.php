<div class="titulo">Operações</div>

<?php
$dados1 = [
    "nome" => "José",
    "idade" => 28
];

$dados2 = [
    "nome" => "Maria",
    "naturalidade" => "Fortaleza"
];

$dadosCompletos = $dados2 + $dados1; //quando há conflito de chaves, o valor mais à esquerda prevalece sobre o valor mais à direita
print_r($dadosCompletos);

$dadosCompletosComMerge = $dados1 + $dados2;
echo '<h4>resultado do Merge:</h4>';
print_r($dadosCompletosComMerge);

echo '<br>' . is_array($dadosCompletos); //"is_array" retorna se a variável é array (retorna 1) ou não (retorna O ou nada)
echo '<br>' . count($dadosCompletos); //retorna a quantidade de índices do array
echo '<br>' . count($dados1);

echo '<br>';
$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]"; //pega índice e exibe resultado de forma randômica

echo "<br>{$dadosCompletos['idade']}"; //em algumas situações, para a interpolação dar certo é preciso usar chaves

unset($dadosCompletos["nome"]);
echo '<br>';
print_r($dadosCompletos); //o comando "unset" retira elementos do array

unset($dadosCompletos); //aqui o array todo é apagado
echo '<br>';
print_r($dadosCompletos);
var_dump($dadosCompletos);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = $pares + $impares;
echo '<br>';
print_r($decimais);

$decimais = array_merge($pares, $impares); //o comando "merge" é mais adequado para somar arrays, quando há coincidência de chaves.
echo '<br>';
print_r($decimais);

sort($decimais); //ordena elementos, alterando o array original
echo '<br> <h4>Testando com o sort</h4>';
print_r($decimais);

$decimais[] = 10;
echo '<br> <h4>Testando adição de elementos</h4>';
print_r($decimais);
