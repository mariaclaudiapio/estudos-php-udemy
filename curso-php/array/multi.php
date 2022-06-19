<div class="titulo">Arrays Multidimensionais</div>

<?php
$dados = [
    [
        "nome" => "Roberto",
        "idade" => 26,
        "naturalidade" => "São Paulo"
    ],
    [
        "nome" => "Maria",
        "idade" => 25,
        "naturalidade" => "Bahia"
    ],
];

print_r($dados);
echo '<br>' . $dados[0]['idade'];
echo '<br>' . $dados[1]['idade'];

$dados[] = [
    "nome" => "Chiquinha",
    "idade" => 15,
    "naturalidade" => "Cidade do México"
];

print_r($dados);
echo '<br>' . $dados[2]['idade'];

unset($dados[2]);
echo '<br>';
print_r($dados);

$dados[] = [
    "nome" => "Florinda",
    "idade" => 30,
    "naturalidade" => "Cidade do México"
];

print_r($dados);