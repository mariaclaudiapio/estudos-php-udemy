<div class="titulo">Valor x Referência</div>

<?php

$variavel = 'valor inicial';
echo $variavel;

// atribuição por valor
$variavelValor = $variavel;
echo "<br>$variavelValor";
$variavelValor = 'novo valor';
echo "<br>$variavelValor";
echo "<br> Agora a $variavelValor difere de $variavel.";

// atribuição por referência: usa-se o &
$variavelReferencia = &$variavel;
$variavelReferencia = '"mesma referencia"';
echo "<br> Agora a $variavelReferencia tem o mesmo valor de $variavel.";

