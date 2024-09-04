<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada de divisão</title>
    <style>
        html { background-color: darkblue;
        }

        body { width: 50%;
            border-radius: 0.5em;
            background-color: #fff;
            margin: auto;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            color: darkblue;
            padding-bottom: 1em;
            margin-bottom: 1em;
        }

        h1 { 
            padding-top: 1em;
        }

        p:last-of-type {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <h1>Dividindo um número</h1>

    <form>
        <input type="text" name="escolha" placeholder="Escolha um número positivo e inteiro.">

        <input type="text" name="EscolhaDiv" placeholder="Escolha um divisor">

        <input type="submit" value="Exibir resultados">
    </form>
    <?php
        $numE = filter_input(INPUT_GET, "escolha");

        $divisor = filter_input(INPUT_GET, "EscolhaDiv");

        if ( !empty($numE) && !empty($divisor) ) {
            switch ( $numE ) {
                case ( strval(intval($numE)) === strval($numE) ):
                    while ( $divisor > 0 ) {
                        echo "<p>" .$numE. " dividido por " .$divisor. " é: " .mb_strimwidth($numE/$divisor, 0 , 5). "</p>";
                        $divisor--;
                    }
                break;

                default:
                    echo "<p>Escolha um número válido.</p>";
            }
        }

        /* Se o número escolhido não estiver vazio (if), e se caso o número for inteiro (case), será feito um loop onde o número escolhido será dividido pelo divisor, que também é escolhido, e será subtraído enquanto o divisor for maior que 0.
        
        Com a quantidade de caracteres do resultado escritos na tela sendo limitada a 5, contando a partir do primeiro caractere. e incluindo o ponto. */
    ?>
</body>
</html>