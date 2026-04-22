<?php
    $_MENU = [
        'Home' => '<h1>Pagina inicial</h1>',
        'Sobre' => '<h1>Sobre page aqui</h1>',
        'Contato' => '<h1>Contato page aqui</h1>',
        'Experiências' => '<h1>Experiências</h1>',
        'Projetos' => '<h1>Projetos</h1>',
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
        $_pagina = isset($_GET['page']) ? $_GET['page'] : 'Home';

        if(array_key_exists($_pagina, $_MENU)){
            echo $_MENU[$_pagina];
        } else {
            echo '<h1>Página não encontrada</h1>';
        }
    ?>  

</body>
</html>