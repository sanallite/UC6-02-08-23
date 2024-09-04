<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de contatos</title>
    <link rel="stylesheet" href="lista-form.css">
</head>
<body>
    <h1>Cadastro e listagem de contatos:</h1>

    <form action="" method="post">
        <p>
            <label for="nome">Nome: </label>
            <input type="text" name="nome">
        </p>

        <p>
            <label for="idade">Idade: </label>
            <input type="text" name="idade">
        </p>

        <p>
            <label for="email">E-mail: </label>
            <input type="text" name="email">
        </p>

        <p>
            <label for="tele">Telefone: </label>
            <input type="text" name="tele">
        </p>

        <p>
            <label for="obs">Observações: </label>
            <textarea name="obs" id="" cols="30" rows="4"></textarea>
        </p>

        <p>
            <input type="submit" value="Cadastrar">
        </p>
        
        <?php
            session_start();

            /* Primeiro if que será fechado só lá embaixo. */
            if ( isset( $_POST['nome'] ) ) {
                $_SESSION['nome'] = $_POST['nome'];
                /* Criando uma variável de sessão apenas para o nome. */

                if ( !isset( $_SESSION['dados'] ) ) {
                    $_SESSION['dados'] = array();
                }
                /* Se a variável de sessão dados já não estiver sido criada, será criada essa mesma, e ela será definida como um vetor. */

                array_push( $_SESSION['dados'],
                    array( 'nome' => $_POST['nome'],
                        'idade' => $_POST['idade'],
                        'email' => $_POST['email'],
                        'telefone' => $_POST['tele'],
                        'obs' => $_POST['obs']
                    )
                );
                /* E ainda apenas se o nome tiver sido definido, será puxado para o final do vetor dados, outro vetor, que terá os dados, que também foram manualmente indexados, do que foi digitado pelo usuário. */
            ?>
    </form>

    <!-- Gerando um arquivo de texto com os dados do formulário. -->
    <?php
        if ( isset( $_POST['nome'] ) ) {
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
            $email = $_POST['email'];
            $telefone = $_POST['tele'];
            $obs = $_POST['obs'];
        
            $arquivo = fopen("dados.txt", "a");
            /* A função fopen, que é a abreviatura de file open, ou seja, abrir um arquivo. O prefixo "a" INDICA que se o valor não existir, ele será criado automáticamente. Se existir, o conteúdo será adicionado ao final do arquivo. */

            fwrite ( $arquivo, $nome. " - " .$idade. " - " .$email. " - " .$telefone. " - " .$obs. "\n");
            /* A função fwrite escreverá no arquivo selecionado atráves de uma variável o conteúdo que está após a vírgula. */
            /* O \n deveria quebrar a linha, mas sabe como é né? */
            fclose ( $arquivo );
        }
    ?>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Observações</th>
            </tr>
        </thead>

        <tbody>
            <?php
                if ( isset( $_SESSION['dados'] ) ) {
                    foreach ( @$_SESSION['dados'] as $lista ) {
            ?>
                        <tr>
                            <td> <?= @$lista['nome'] ?> </td>
                            <td> <?= @$lista['idade'] ?> </td>
                            <td> <?= @$lista['email'] ?> </td>
                            <td> <?= @$lista['telefone'] ?> </td>
                            <td> <?= @$lista['obs'] ?> </td>
                            <!-- Utilizando o echo de forma simplificada. -->
                            <!-- @ (arroba) para não exibir uma possível mensagem de erro. -->
                        </tr>
            <?php
                    }
                }
            ?>

            <?php } /* Fechamento do primeiro if */
                else {
            ?>

            <p>Por favor digite um nome.</p>

            <?php
                } /* Fechamento do else, que colocará um parágrafo dentro do form, porque o primeiro if iniciou lá. */
            ?>
        </tbody>
    </table>
</body>
</html>