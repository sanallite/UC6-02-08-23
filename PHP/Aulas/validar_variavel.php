<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validando variáveis</title>
</head>
<body>
    <h1>Validando variáveis</h1>

    <form action="#" method="post">
        <label for="nome">Nome:</label>

        <input type="text" name="nome" id="nome">

        <button type="submit">Enviar</button>
        <!-- input type submit também funciona. -->
    </form>

    <?php
        if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
            /* Verifica se o formulário foi enviado. */

            if ( isset($_POST["nome"]) && !empty($_POST["nome"]) ) {
                /* is set testa se a variável existe. */
                /* !empty (se não vazio) empty (vazio) */

                $nome = $_POST["nome"];
                echo "Olá " .$nome. "! Seja bem vindo!";
            }

            else {
                echo "Por favor insira seu nome.";
            }
        }
    ?>
    <!-- Se o código do php estivesse em cima, o texto do echo apareceria antes do formulário. -->
</body>
</html>