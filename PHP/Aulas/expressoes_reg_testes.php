<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressões Regulares - Validação de telefone</title>
</head>
<body>
    <form action="fone_testes.php" method="post">
        Telefone:
        <input type="text" name="telefone" placeholder="(00) 00000-0000">
        <input type="submit" value="Validar">
        <!-- No momento é necessário digitar os dois primeiros números entre parênteses e colocar um hífen entre os dois grupos principais. -->
    </form>

    <!-- Expressões regulares são para validação, não máscaras de entrada. -->

    <p>

        <?php
            $texto = "Você sabia que hoje é um dia de uma semana de um mês de um ano de uma década de um século de um milênio?";

            echo $texto;

            $procura = '/dia/i';

            preg_match($procura, $texto, $resultado, PREG_OFFSET_CAPTURE);

            print_r($resultado) ;
            /* Ele localiza apenas a posição da palavra escolhida, colocando ela num array. e nesse caso a palavra dia começa no vigésimo sétimo caractere. */
        ?>
    </p>
</body>
</html>