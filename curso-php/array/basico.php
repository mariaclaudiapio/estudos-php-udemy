<div class="titulo">Array</div>

<?php
$lista = array(1, 2, 3.4, "texto");
// maneiras de exibir o array:
echo $lista . '<br>';
var_dump ($lista);
echo '<br>';
print_r($lista);

$lista[0] = 1234;
echo '<br>';
print_r($lista);

echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[38]; //se passarmos um índice que não existe, o PHP não vai gerar erro: ele retornará um valor nulo.

var_dump($lista[38]);

$texto = 'Esse é um texto de teste';
echo '<br>' . $texto[11];
echo '<br>' . $texto[10];
echo '<br>' . mb_substr($texto, 10, 1);
