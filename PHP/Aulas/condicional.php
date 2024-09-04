<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando o IF</title>
</head>
<body>
    <h1>Testando a estrutura condicional IF em PHP</h1>

    <h3>Verificando a idade</h3>
    <?php
        $idade = 15;

        if ( $idade >= 18 ) {
           echo ("Sua idade é " .$idade. " anos. Entrada permitada.");
        }

        else {
            echo ("Sua idade é " .$idade. " anos. Entrada proibida.");
        }
    ?>

    <hr>

    <h3>IF encadeado</h3>
    <p>Se o número for maior ou igual a 70, será igual a BOM, caso contrário e se for maior que 40, REGULAR; E se for menor que 40, PÉSSIMO. </p>

    <?php
        $numero = 55;

        if ( $numero >= 70 ) {
            echo "BOM";
        }

        else if ( $numero >=40 ) { 
            echo "REGULAR";
        }

        else {
            echo "PÉSSIMO";
        }
    ?>
    <!-- Abrindo e fechando os scripts mais de uma vez. -->
</body>
</html>