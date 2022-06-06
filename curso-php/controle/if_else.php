<div class="titulo">If Else</div>

<?php

if(true)

echo "Setença avulsa... <br>";
{
    echo "Serei impresso? <br>"; //só relaciona a primeira sentença de código em caso de 'false'
    echo "Serei impresso novamente?<br>";
}

echo ("<h2>*** If Else *** </h2><br>");
if(true)
    echo "Verdadeiro<br>";
else
    echo "Falso<br>";

echo "Fim<br>";

if(false) {
    echo "Passo A<br>";
} else if(false) {
    echo "Passo B<br>"; //elseif ou else if é adequado para muitas alternativas
} else {
    echo "Último passo<br>";
}

