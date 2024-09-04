<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Zérói</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;400;600&display=swap" rel="stylesheet">
</head>


<body id="pgArtigos">
    <header>
        <a href="index.html">
            <img src="img/originais/logo.png" alt="Logotipo Zérói">
        </a>

        <h1>Manutenção Condominial</h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.html#confiar">Porque confiar na Zérói</a></li>
            <li><a href="">Solicite uma visita</a></li>
            <li><a href="">Contatos</a></li>
            <li><a href="index.html#cadastro">Cadastre-se</a></li>
            <li><a href="">Área do cliente</a></li>
            <li><a href="">Área do síndico</a></li>
            <li><a href="">Área do condômino</a></li>
            <li><a href="index.html#artigos">Dicas úteis</a></li>
        </ul>

        <h3>Rua Dr. Manoel Francisco Ferreira Correia, 620 - Portão, Curitiba, PR<br>
            CEP: 81320-260<br><br>
            Contatos:<br>
            Paulo: (41) 91111-1111<br>
            Márcio (41) 92222-2222<br><br>
            E-mail: zeroicondominial@zeroi.com.br
        </h3>
    </nav>

    <main>
        <section>
            <h1>Verificando o login</h1>
        </section>

        <?php
            $email = filter_input(INPUT_POST, "entraremailcl");
            $senha = "nerissa";
            $senhaDigitada = filter_input(INPUT_POST, "entrarsenhacl");
            /* $senhaDigitada = $_POST['entrarsenhacl']; Forma simplificada. */

            $senhaCripto = password_hash($senha, PASSWORD_DEFAULT);
            
            if ( password_verify($senhaDigitada, $senhaCripto) ) {
                echo "<h2>Login bem sucedido!</h2>";
            }

            else {
                /* header("location:index.html#cadastro"); */
                echo "<h2>Senha incorreta.</h2>";
            }
        ?>
    </main>
</body>
</html>

