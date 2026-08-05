<?php
require_once "BibliotecaLocal/autoload.php"


$cpf = "529.982.247-25";

if (Util::validarCPF($cpf)) {
    echo "CPF válido!";
} else {
    echo "CPF inválido!";
}
echo "<br><br>";
$peso = 72;
$altura = 1.75;

$imc = Util::calcularIMC($peso, $altura);

echo "IMC: $imc <br>";
echo "Classificação: " . Util::classificarIMC($imc);
?>