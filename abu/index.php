<?php
    $_MENU = [
        'Home' => 'home.php',
        'Sobre' => 'sobre.php',
        'Consoles' => 'consoles.php',
        'Jogos' => 'jogos.php',
        'Contato' => 'contato.php'
    ];
?>  

<!DOCTYPE html>
<html>
<head>
    <!-- Define a codificação de caracteres -->
    <meta charset="UTF-8">

    <!-- Importa o arquivo CSS externo -->
    <link rel="stylesheet" href="style.css">

    <!-- Título da página -->
    <title>PHP Test</title>
</head>

<!-- Cabeçalho da página -->
<header class="alonso">

    <?php
        // Exibe o logo (imagem)
        echo '<img class ="logo" src="Logo.png" alt="Logo">';

        foreach($_MENU as $key => $value){
            echo '<a href="?page='.$key.'">'.$key.'</a> | ';
        }
    ?>

</header>

<body>    

    <?php
        $_pagina = $_GET['page'] ??  'Home';

        if(array_key_exists($_pagina, $_MENU)){
            include $_MENU[$_pagina];
        } else {
            echo '<h1>Página não encontrada</h1>';
        }
    ?>  

</body>
</html>
