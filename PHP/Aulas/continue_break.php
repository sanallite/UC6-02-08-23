<?php
    for ($i = 1; $i <=20; $i++) {
        if ( $i == 12) {
            continue;
            // Pula o número 12, mas continua a sequência, ou laço de repetição.
        }
        
        if ( $i == 17 ) {
            break;
            // Interrompe o laço de repetição quando a condição for verdadeira.
        }
        
        echo $i. "<br>";
        // A posição do echo é importante aqui, pois se ele estivesse antes da condição se i é igual a 17, ele teria escrito na tela o número 17 antes de parar o loop.
    }
?>