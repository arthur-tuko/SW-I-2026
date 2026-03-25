<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <main>
        <form method="post">
         <div class="container">
            <div class="areanome">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" placeholder="Digite o seu nome..." required>
            </div>

            <div class="areasobrenome">
                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" name="sobrenome" placeholder="Digite seu sobrenome..." required>
            </div>
            <h2>NOTAS</h2>
            <div class="areanota1">
                    <label for="nota1">Nota 1</label>
                    <input type="number" name="nota1" placeholder="Digite a sua primeira nota..." required>
            </div>

                <div class="areanota2">
                    <label for="nota2">Nota 2</label>
                    <input type="number" name="nota2" placeholder="Digite a sua segunda nota..." required>
            </div>

                <div class="areanota3">
                    <label for="nota3">Nota 3</label>
                    <input type="number" name="nota3" placeholder="Digite a sua terceira nota..." required>
            </div>
           </div>
           <input type="submit" value="Enviar" name="btn">
        </form>
        <?php
        if (isset($_POST['btn'])) {
            $_nome = $_POST["nome"];
            $_sobrenome = $_POST["sobrenome"];
            $_nota1 = $_POST["nota1"];
            $_nota2 = $_POST["nota2"];
            $_nota3 = $_POST["nota3"];
            $_media = ($_nota1 + $_nota2 + $_nota3) / 3;
            echo "<h2>Olá, " . $_nome . " " . $_sobrenome . "!</h2>";
            echo "<h2>Resultado: " . $_media . "</h2>";
        }
    ?>
    </main>
</body>
</html>