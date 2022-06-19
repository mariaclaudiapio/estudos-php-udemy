<div class="titulo">Desafio Sorteio</div>

<?php
$princesasDisney = ["Elza", "Rapunzel", "Branca de Neve", "Cinderela", "Bela", "Ariel", "Anastácia"];
$index = array_rand($princesasDisney);
echo"<h1 princesa><center>$princesasDisney[$index]</center></h1>";
?>

<style>
    [princesa] {
        color: blue;
    }
</style>