<div class="titulo">Switch</div>

<?php
$categoria = '';
$preco = 0.0;
$carro = '';

if($categoria === 'Luxo') {
    $carro = 'Mercedes';
    $preco = 250000;
} elseif ($categoria === 'SUV') {
    $carro = 'Renegade';
    $preco = 80000;
} elseif ($categoria === 'Sedan') {
    $carro = 'Etios';
    $preco = 55000;
} else {
    $carro = 'Mobi';
    $preco = 33000;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<pr>Carro: $carro<br>Preço: R$ $precoFormatado</p>";

$categoria = "Sedan";
switch ($categoria) {
    case "Luxo";
        $carro = "Mercedes";
        $preco = 250000;
        break;
    case "SUV";
    case "SUV Básico";
        $carro = 'Renegade';
        $preco = 80000;
        break;
    case "Sedan";
        $carro = 'Etios';
        $preco = 55000;
        break;
    default:
        $carro = "Mobi";
        $preco = 33000;
        break;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<pr>Carro: $carro<br>Preço: R$ $precoFormatado</p>";