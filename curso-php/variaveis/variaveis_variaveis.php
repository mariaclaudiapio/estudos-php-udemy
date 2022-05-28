<div class="titulo">Variáveis Variáveis</div>

<?php

$a = 'valorA';
$$a = 'valorAA';
echo "$a R$$a";
echo "$a {$$a} ${$a} $valorA";

echo '<br>';
$epa = 'opa';
$opa = 'vish';
echo "$epa {$opa}";