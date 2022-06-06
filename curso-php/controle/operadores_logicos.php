<div class="titulo">Operadores Lógicos</div>

<?
echo "<h4>V ou F</h4><hr>";
var_dump(true);
echo "<br>";
var_dump(!true);// operador not "!"

echo "<h4>Tabela Verdade 'AND' (E)</h4><hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false and false); //"and" também funciona nesse cenário

echo "<h4>Tabela Verdade 'OR' (OU)</h4><hr>";
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false or false); //"or" também funciona nesse cenário

echo "<h4>Tabela Verdade 'XOR' (OU Exclusivo)</h4><hr>";
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false != false); //o sinal "diferente (!=)" também funciona nesse cenário

echo "<h4>Exemplo</h4><hr>";
$idade = 35;
$sexo = 'F';

if($idade >= 60 && $sexo === 'F') {
    echo "Pode se aposentar -> $sexo.";
} elseif ($idade >= 65 && $sexo === 'M') {
    echo "Pode se aposentar -> $sexo.";
} else {
    echo "Vai ter que trabalhar mais um pouco...";
}




?>
<style>
h4 {
    margin-bottom: 0px;
}

hr {
    margin-top: 0px;
}
</style>

