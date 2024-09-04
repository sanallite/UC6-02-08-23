<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Gerenciador de Tarefas</h1>
        <h2>Suporte</h2>
    </header>

    <nav class="navegacao">
        <a href="index.php?dir=arq&arquivo=home.php" class="laranja">Página Inicial</a>

        <a href="index.php?dir=arq&arquivo=produtos.php" class="amarelo">Produtos</a>

        <a href="index.php?dir=arq&arquivo=servicos.php" class="azul">Serviços</a>

        <a href="index.php?dir=arq&arquivo=duvidas.php" class="vermelho">Dúvidas</a>

        <a href="index.php?dir=arq&arquivo=sobre.php" class="branco">Sobre Nós</a>
    </nav>

    <main class="principal">
        <section class="conteudo">
            <?php
                $dir = isset( $_GET['dir'] )? $_GET['dir']:'arq';
                $arquivo = isset( $_GET['arquivo'] )? $_GET['arquivo']: 'home.php';
                include( __DIR__. "/$dir/$arquivo" );
            ?>
        </section>
    </main>

    <footer class="rodape">
        Prof. José Carlos - Márcio Teodoro - Senac PR - <?= date('Y') ?>
        <!-- A data não aparece no firefox ainda :( -->
    </footer>
</body>
</html>