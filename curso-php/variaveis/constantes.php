<div class="titulo">Constantes</div>

<?php

define('TAXA_DE_JUROS', 5.9); //padronização com totas as letras maiúsculas, separadas por underline. Constantes não usam dólar antes do nome.
echo TAXA_DE_JUROS;
//TAXA_DE_JUROS = 1.5;

const NOVA_TAXA = 2.5;
echo "<br>" . NOVA_TAXA;

$valorVariavel = 2.8;
//const NOVISSIMA_TAXA = $valorVariavel; // essa versão não funciona
define('NOVISSIMA_TAXA', $valorVariavel);
echo '<br>' . NOVISSIMA_TAXA;

//constantes do PHP
echo '<br>' . PHP_VERSION;
echo '<br>' . PHP_INT_MAX;
echo '<br>' . __LINE__;
echo '<br>' . __FILE__;
echo '<br>' . __DIR__;
