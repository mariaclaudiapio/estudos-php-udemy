<div class="titulo">Booleano</div>

<?php

echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(False); //nesse ponto, o PHP é case insensitive
echo '<br>' . var_dump('false');
echo '<br>' . is_bool(false);
echo '<br>' . is_bool('true');

// fazendo as regras de conversões
echo '<p>Regras de conversões:</p>';
echo '<br>' . var_dump((bool) 0); //apenas 0 é false
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) -1);
echo '<br>' . var_dump((bool) "");//string vazia retorna false
echo '<br>' . var_dump((bool) "0");//string com zero dentro também retorna false
echo '<br>' . var_dump((bool) " ");
echo '<br>' . var_dump((bool) 0.5);