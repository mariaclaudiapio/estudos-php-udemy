<div class="titulo">Atribuições</div>

<?php

$title = 'Atribuições'; //não coloque o tipo da variável na frente dela

$numero = 10;
echo '<br>' . $numero;
$numero = $numero - 3;
echo '<br>' . $numero;
$numero = $numero + 1.5;
echo '<br>' . $numero;
$numero--; //só pode decrementar variável, número literal não. 
--$numero;
echo '<br>' . $numero;
$numero -= 5;
echo '<br>' . $numero; //$numero = $numero - 5.
$numero += 18.5;
echo '<br>' . $numero;
$numero *= 10;
echo '<br>' . $numero;

$texto = 'Esse é um texto';
echo '<br>' . $texto;
$texto = $texto . ' qualquer.';
echo '<br>' . $texto;

//$variavelInexistente = 'valor existente';
echo '<br>' . $variavelInexistente;
$valor = $variavelInexistente ?? 'valor default'; //aqui tratamos da atribuição de um valor padrão
echo '<br>' . $valor;
