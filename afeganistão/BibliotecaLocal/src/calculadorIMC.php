<?php

require_once "biblioteca/Util.php";

$peso = 72;
$altura = 1.75;

$imc = Util::calcularIMC($peso, $altura);

echo "IMC: $imc <br>";
echo "Classificação: " . Util::classificarIMC($imc);
?>