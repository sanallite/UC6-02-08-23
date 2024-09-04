<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SwitchCase</title>
</head>
<body>
    <h1>Qual posição do dia da semana você quer?</h1>

    <form method="post">
        <label for="">Digite um número de 1 a 7:</label>

        <input type="text" name="dia">
        <input type="submit" value="Enviar" name="enviar">
    </form>

    <?php
        $dia = filter_input(INPUT_POST, "dia");

        if ( !empty($dia) ) {
            switch ( $dia ) {
                case 1;
                echo "Hoje é Domingo";
                break;

                case 2;
                echo "Hoje é Segunda-feira";
                break;

                case 3;
                echo "Hoje é Terça-feira";
                break;

                case 4;
                echo "Hoje é Quarta-feira";
                break;

                case 5;
                echo "Hoje é Quinta-feira";
                break;

                case 6;
                echo "Hoje é Sexta-feira";
                break;

                case 7;
                echo "Hoje é Sábado";
                break;

                default: echo "Opção Inválida, tente novamente.";
            }
        }
    ?>
</body>
</html>