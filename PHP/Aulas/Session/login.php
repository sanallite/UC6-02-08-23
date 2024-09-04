<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Login</title>
    <style>
        body { background-color: lightblue;
            font-family: monospace;
            font-size: 1.2em;
        }

        form { width: 20%;
            margin: 2em auto;
            background-color: white;
            text-align: center;
            /* box-shadow: 15px 10px 15px 0px black; */
            /* 15px = Deslocamento x, 10px = deslocamento y, 15px = desfoque, 0px = visualição ou tamanho. */
            box-shadow: 15px 15px;
        }

        form h2 {
            margin: 0;
            background-color: darkblue;
            padding: 0.5em;
            color: white;
        }

        form input { display: block;
            height: 2em;
            width: 60%;
            margin: auto;
        }

        form p input[type="submit"] {
            background-color: darkblue;
            border: solid thin lightblue;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        form p:last-child {
            padding-bottom: 1em;
        }

        form a {
            text-decoration: none;
            font-weight: bold;
            color: darkblue;
        }
    </style>
</head>
<body>
    <form action="valida_login.php" method="post">
        <h2>Entrada</h2>

        <p>
            <input type="text" name="email" placeholder="E-mail">
        </p>

        <p>
            <input type="password" name="senha" id="senha" placeholder="Senha">
        </p>

        <p>
            <input type="submit" value="Entrar">
        </p>

        <p>
            <a href="menu.php">Entrar como convidado</a>
        </p>

        <?php if ( isset($_GET['login']) == 'erro' ) { ?>
            <p>E-mail ou senha inválidos.</p>
        <?php } 
        ?>
    </form>
</body>
</html>