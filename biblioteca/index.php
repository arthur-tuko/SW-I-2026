<?php
require_once 'bibliotecaLocal/autoload.php';
$texto = new texto();
$calc = new Calcular();
$len = new lenght();
$rep = new replace();
echo $calc->somar(10,20);
echo "<br><br>";
echo $texto->maiusculo("etec mcm");
echo "<br><br>";
echo $calc->multiplicar(10,20);
echo "<br><br>";
echo $len->contar("123456");
echo "<br><br>";
echo $rep->removerCaracteres("R$ 1.234,56 ABC");
echo "<br><br>";
?>