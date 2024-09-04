<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando em PHP</title>
</head>
<body>
    <h1>Testando cálculos</h1>
    <hr>

    <?php
        echo "<h2>Vamos testar</h2>";
        /* Os parênteses no início e fim da string não foram necessários nesse caso. */

        $n1 = 15;
        $n2 = 104;
        $x = 2;

        echo "Multiplicação: " .$n1*$n2. "<br>";
        echo "Divisão: " .$n1/$n2. "<br>";
        echo "Adição: " .$n1+$n2. "<br>";
        echo "Subtração: " .$n1-$n2. "<br>";
        echo "Potenciação: " .$n1**$n2. "<br>";

        echo "<p>Tabuada do " .$x. "</p>";

        echo $x. " x 1 = " . $x*1 . "<br>";
        echo $x. " x 2 = " . $x*2, "<br>";
        /* Também é possível utilizar a vírgula para dividir a concatenação. */
        echo $x. " x 3 = " . $x*3 . "<br>";
        echo $x. " x 4 = " . $x*4 . "<br>";
        echo $x. " x 5 = " . $x*5 . "<br>";
        echo $x. " x 6 = " . $x*6 . "<br>";
        echo $x. " x 7 = " . $x*7 . "<br>";
        echo $x. " x 8 = " . $x*8 . "<br>";
        echo $x. " x 9 = " . $x*9 . "<br>";
        echo $x. " x 10 = " . $x*10 . "<br>";
        /* Cuidado com os espaços, ou falta deles... Nesse caso, se colocar um ponto logo após o número, ele será idenficado como uma decimal, por isso o espaço para fazer o ponto ser reconhecido como concatenação. */

        echo "<hr> <h2>Cálculos em atribuições</h2>";

        $a = 10; // Atribuição simples.
        $a += 2; // Atribuição com incrementação de valores.

        echo $a. "<br>";
        
        $b = 10;
        $b *= 3; // Multiplicação por incrementação no valor da variável.

        echo $b. "<br>";
        
        $c = 100;
        $c /= 3; // Divisão por incrementação de valores.

        echo $c. "<br>";
    ?>
</body>
</html>