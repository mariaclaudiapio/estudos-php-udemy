<div class="titulo">Mapa</div>

<?php
$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
);

print_r($dados);

echo '<br>';
echo $dados[0];
var_dump($dados[0]); //nessa sentença a pesquisa por chave inteira não funciona.

echo '<br>';
echo "Para funcionar, será preciso utilizar a chave determinada no bloco acima";
echo '<br>' . $dados["idade"];
echo '<br>' . $dados["cor"];
echo '<br>' . $dados["peso"];
echo '<br>';
var_dump($dados["outra_informacao"]);

//evite o tipo de mistura abaixo:
$lista = array (
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "e",
    6 => "f",
    "9",
    8 => "h"
);

echo '<br>';
print_r($lista);

//$lista = 'bananinha';
echo '<br>';
print_r($lista);

$lista[] = 'bananinha';
echo '<br>';
print_r($lista);

$lista['banana'] = 'bananinha';
echo '<br>';
print_r($lista);

$lista[false] = 'bananinha'; //coloca o valor no índice 0
echo '<br>';
print_r($lista);

$lista[true] = 'bananinha'; //coloca o valor no índice 1
echo '<br>';
print_r($lista);


