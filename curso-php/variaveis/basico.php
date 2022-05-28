<div class="titulo">Variáveis</div>

<?php

$numeroA = 13;
echo $numeroA, '<br>'; //variáveis em PHP começam com o símbolo "$"(dólar)
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$somaDosNumeros = $a + $b;
echo $somaDosNumeros; //as variáveis no PHP são case sensitive.

echo '<br>';
echo isset($somaDosNumeros);

unset($somaDosNumeros);
echo isset($somaDosNumeros);
echo '<br>';
var_dump($somaDosNumeros);
echo '<br>';
$variavel = 10;
echo $variavel;
echo '<br>';
$variavel = 'Agora eu sou uma string!'; //PHP tem tipagem dinâmica/fraca (use esse recurso com moderação)
echo $variavel;

//nomes de variáveis
$var = 'válida';
$var2 = 'válida';
$VAR3 = 'válida'; //seja consistente dentro de um projeto - padronize o seu código
$_var_4 = 'válida';
$vâr5 = 'válida, mas não recomendado para evitar conflitos';
//$6var = 'inválida';
//$%var7 = 'inválida';
//$var8% = 'inválida';

echo '<br>';
var_dump($_SERVER);

