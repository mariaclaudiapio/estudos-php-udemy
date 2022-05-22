<div class="titulo">String</div>

<?php
echo 'Eu sou uma string.';
echo '<br>';
var_dump("Eu também!"); //o acento conta como um caractere a mais
echo '<br>';

// concatenação
echo "Nós também" . ' somos!';
echo '<br>', "Também aceito", " vírgulas.";

echo '<br>';
echo "'Teste' " . '"Teste" ' . '\'Teste\'';

print("<br> Também existe a função print, similar ao 'echo'.");

// algumas funções
echo '<p>Algumas funções:</p>';
echo strtoupper('efeito caps lock');
echo '<br>' . strtolower('EFEITO LETRA MINUSCULA');
echo '<br>' . ucfirst('só a primeira letra em maiúscula.');
echo '<br>' . ucwords('todas as primeiras letras ficam em maiúsculo.');
echo '<br>' . strlen('Retorna quantas letras tem a string.');
echo '<br>' . mb_strlen('Eu também', "utf-8"); //conta as strings sem 'bugar' com os acentos
echo '<br>' . substr('Só uma parte mesmo', 7, 6); //parte 
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso');

