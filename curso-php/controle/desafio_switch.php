<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milhas">Km -> Milhas</option>
        <option value="milhas-km">Milhas -> Km</option>
        <option value="metros-km">Metros -> Km</option>
        <option value="km-metros">Km -> Metros</option>
    </select>
<button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;

$param = $_POST['param'] ?? 0;
switch ($_POST['conversao']) {
    case "km-milhas";
    $distancia = $param * FATOR_KM_MILHA;
    $mensagem = "$param Km(s) = $distancia Milha(s)";
    break;
    case "milhas-km";
    $distancia = $param / FATOR_KM_MILHA;
    $mensagem = "$param Milha(s) = $distancia Km(s)";
    break;
    case "metro-km";
    $distancia = $param / FATOR_METRO_KM;
    $mensagem = "$param Metro(s) = $distancia Km(s)";
    break;
    case "km-metro";
    $distancia = $param * FATOR_METRO_KM;
    $mensagem = "$param Km(s) = $distancia Metros(s)";
    break;
    default;
        $mensagem = "Nenhum valor calculado!";
}

echo "<h4>$mensagem</h4>";