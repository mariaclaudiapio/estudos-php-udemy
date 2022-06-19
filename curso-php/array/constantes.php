<div class="titulo">Arrays Constantes</div>

<?php
const FRUTAS = ['laranja', 'abacaxi']; //no PHP não é possível alterar um array constante
//FRUTAS[0] = 'banana';
echo FRUTAS[0];

define('CIDADES', array('Belo Horizonte', 'Recife'));
//CIDADES[] = 'Rio de Janeiro';
echo '<br>' . CIDADES;