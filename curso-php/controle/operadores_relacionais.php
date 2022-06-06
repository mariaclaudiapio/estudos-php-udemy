<div class="titulo">Operadores Relacionais</div>

<?php
var_dump(1 == 1);
var_dump(1 > 1);
var_dump(1 >= 1);
var_dump(1 <= 7);
var_dump(1 != 1);
var_dump(1 <> 1);

echo'<h4>Igualdade e Igualdade Estrita</h4>';
var_dump(111 == '111');
var_dump(111 === '111'); //comparação estrita
var_dump(111 != '111');
var_dump(111 !== '111'); //diferença estrita

echo'<h4>Relacionais no If/Else</h4>';
$idade = 13;
if($idade < 18) {
    echo "Menor de idade<br>";
} else if($idade < 65) {
    echo "Adulto<br>";
} else {
    echo "Terceira idade";
}

echo'<h4>Spaceship</h4>';
var_dump(500 <=> 3); //retorna 1 quando o primeiro número é maior que o segundo
var_dump(50 <=> 50); //retorna 0 quando o primeiro número tem o mesmo tamanho do segundo
var_dump(5 <=> 50); //retorna -1 quando o primeiro número é menor que o segundo

echo'<h4>Dupla negação para determinar valores V ou F</h4>';
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");