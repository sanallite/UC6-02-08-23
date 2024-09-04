<?php
    for ($a = 1, $b = 3, $c = 5;
        $a<=8 && $b<=5 && $c<=8;
        $a++, $b++, $c++) {
        echo "A: " .$a. "<br>"; // Do 1 ao 8.
        echo "B: " .$b. "<br>"; // Do 3 ao 5.
        echo "C: " .$c. "<br>"; // Do 5 ao 8.

        /* Só irá executar quando a for menor ou igual a 8, b for menor ou igual a 5 e c menor ou igual a 8; quando os três forem verdadeiros.
        
        Cada elemento das três expressões do loop é dividido pela vírgula, com cada expressão sendo dividida pelo ponto e vírgula. */
    }
?>