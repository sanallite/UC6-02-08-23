<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada Personalizada</title>
</head>
<body>
    <h1>Tabuada</h1>
    <h2>Escolha um número:</h2>

    <form method="post">
        <input type="number" name="valor">
        <!-- Utilize o name no php, aparentemente... -->

        <input type="submit" value="Enviar">
    </form>

    <?php
        $num = filter_input(INPUT_POST, "valor");

        $multi = 0;

        if ( ($num>=0) ) {
            while ( $multi<20 ) {
                $multi++;
                $resul = $num*$multi;
                echo "<p>" .$num. " x " .$multi. " = " .$resul. "</p>";
                /* Fazendo dessa maneira, a definição do resultado deve ser feita dentro do loop, para que o valor possa ser incrementado, se não o resultado seria sempre zero, pois multi equivale a zero, e a multiplicação por esse número só tem esse resultado. */
            }
        }

        echo "<hr> <h2>Realizando a mesma coisa utilizando o For</h2>";

        for ($i = 0; $i<=10; $i++) {
            echo $num. " x " .$i. " = " .($num*$i). "<br>";
        }
    ?>
</body>
</html>