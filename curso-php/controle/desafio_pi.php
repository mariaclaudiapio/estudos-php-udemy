<div class="titulo">Desafio PI</div>

<?php
echo pi();
$pi = 3.14;
$piErrado = 2.8;

if($piErrado == pi()) {
    echo "<br>Iguais!";
} else {
    echo "<br>Diferentes!";
}

echo "<h4>Resolução do Desafio:</h4>";
echo "<br>" . ($pi - pi());
echo "<br>" . ($pi - $piErrado);

if($pi - $piErrado <= 0.01) {
    echo "<br> Praticamente iguais!";
} else {
    echo "<br>Valor diferente do esperado!";
}