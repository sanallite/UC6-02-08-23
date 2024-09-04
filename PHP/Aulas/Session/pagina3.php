<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 3</title>
    <style>
        body {
            background-color: blue;
            color: white;
        }

        a {
            color: inherit;
        }

        p { 
            font-size: 1.5em;
        }
    </style>
</head>
<body>
    <h1>Bem vindo ao terceiro passo.</h1>
    <p>Usuário:
        <?php
            session_set_cookie_params( ['lifetime' => 10, 'httponly' => true] );
            /* Definindo os parâmetros do cookie de sessão fazendo que ele esteja ativo apenas por um tempo em segundos, assim limitando o tempo que o usuário ficará logado; e que seja enviado apenas pelo http, para que ele não seja copiado tão facilmente, supostamemte... */

            session_start();
            echo @$_SESSION['usuario'];
            /* É necessário colocar o session start em todas as páginas que você quer tenha alguma coisa a ver com a sessão do usuário, como nesse caso, para escrever na tela o nome deste usuário. */
        ?>
    </p>

    <a href="menu.php">Voltar ao menu</a>
    <a href="logout.php">Sair da sessão</a>
</body>
</html>