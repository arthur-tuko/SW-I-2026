<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validador de CPF</title>
    <link rel="stylesheet" href="style.css">
</head>
<header>
<a class= "imagem"><img class="img" src="img/serasa.png" alt=""></a>    

</header>
<body>
    <form method="POST">
    <label>Nome:</label>
    <input type="text" name="nome" required>

    <label>CPF:</label>
    <input type="text" name="cpf" required>

    <button type="submit">Enviar</button>
</form>
<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];

    $cpf = preg_replace('/[^0-9]/', '', $cpf);

    if(strlen($cpf) != 11){
        echo "<p class='invalido'>CPF inválido!</p>";
        exit;
    }

    $digitos = str_split($cpf);

    $soma1 = 0;
    $peso = 10;

    for($i = 0; $i < 9; $i++){
        $soma1 += $digitos[$i] * $peso;
        $peso--;
    }

    $resto1 = ($soma1 * 10) % 11;

    if($resto1 == 10){
        $resto1 = 0;
    }

    $soma2 = 0;
    $peso = 11;

    for($i = 0; $i < 10; $i++){
        $soma2 += $digitos[$i] * $peso;
        $peso--;
    }

    $resto2 = ($soma2 * 10) % 11;

    if($resto2 == 10){
        $resto2 = 0;
    }

    if($resto1 == $digitos[9] && $resto2 == $digitos[10]){
        echo "<p class='valido'>$nome, CPF válido!</p>";
    }else{
        echo "<p class='invalido'>$nome, CPF inválido!</p>";
    }
}

?>
</body>
</html>