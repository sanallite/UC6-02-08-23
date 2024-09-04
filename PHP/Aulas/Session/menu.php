<?php
    session_set_cookie_params( ['lifetime' => 10, 'httponly' => true] );
    /* Definindo os parâmetros do cookie de sessão fazendo que ele esteja ativo apenas por um tempo em segundos, assim limitando o tempo que o usuário ficará logado; e que seja enviado apenas pelo http, para que ele não seja copiado tão facilmente, supostamemte... */
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>

<body>
    <h1> Bem vindo ao nosso site
        <?= @$_SESSION['usuario'] ?>
        <!-- PHP Simplificado. Em alguns lugares não funciona... -->
    </h1>
    
    <h3> Menu:</h3>

    <a href="pagina1.php">Pagina1</a>
    <a href="pagina2.php">Pagina2</a>
    <a href="pagina3.php">Pagina3</a>

    <?php
        if ( @$_SESSION['usuario'] ) { ?>
    <!-- Colocanod o @ fará que não seja exibida uma mensagem de erro caso a variável esteja vazia. -->
    <!-- Abrindo e fechando o código do php para que você possa colocar os elementos do html dentro de uma estrutura, como o if. -->

        <a href="consultar.php">Consultar</a>
    
        <?php if ( @$_SESSION['status'] == 'adm' ) { ?>
            <a href="incluir.php">Incluir</a>
            <a href="editar.php">Editar</a>
            <a href="excluir.php">Excluir</a>
        <?php } 
        ?>

    <?php } 
    ?>

    <a href="logout.php">Sair da sessão</a>
</body>
</html>