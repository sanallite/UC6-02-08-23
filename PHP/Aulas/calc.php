<?php
    $v1 = $_POST['v1'];
    $v2 = $_POST['v2'];
    $op = $_POST['op'];

    if ( is_numeric($v1) && is_numeric($v2) ) {
        switch ($op) {
            case $op == '+':
                $c = $v1 + $v2;
                /* echo "O resultado da adição de " .$v1. " por " .$v2. " é " .$c. ".<br>"; */
            break;

            case $op == '-':
                $c = $v1 - $v2;
                /* echo "O resultado da subtração de " .$v1. " por " .$v2. " é " .$c. ".<br>"; */
            break;

            case $op == 'x':
                $c = $v1 * $v2;
                /* echo "O resultado da multiplicação de " .$v1. " por " .$v2. " é " .$c. ".<br>"; */
            break;

            case $op == '/':
                if ( $v2 > 0 ) {
                    $c = $v1 / $v2;
                    /* echo "O resultado da divisão de " .$v1. " por " .$v2. " é " .$c. ".<br>"; */
                }

                else { 
                    /* echo "Divisão por zero é impossível."; */
                    $c = "Divisão por zero ou por números negativos é impossível.";
                }
            break;
        }
    }

    else {
        echo "Escolha um número por favor...<br>Nota: Números decimais devem ser escritos com ponto, não vírgula.";
    }
?>