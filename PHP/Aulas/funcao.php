<?php
    /* Uma função é um bloco de instruções que podem ser usadas repetidamente em um programa. */

    function tela() {
        echo "Olá olá bau bau bau bau<br>";

        echo "Esse texto está numa função bau bau<br>";

        echo "O texto é repetido bau bau<br>";

        echo "<hr>";
    }

    for ( $i = 0; $i <=5; $i++) {
        tela();
        tela();
        tela(); // Ativando a função três vezes, dentro de um loop que é executado cinco vezes, então a função será executada quinze vezes.
    }

    echo "<h2>Repetiremos a função tela mais uma vez abaixo bau bau:</h2>";

    tela();

    function valor() {
        $variavel = 10;
        echo "<br>O valor da variável é " .$variavel;
    }

    function valorReal() {
        global $variavel;
        /* Tornando a variável em uma variável global, antes ela era local, sendo usada apenas nas duas funções que a utilizam. */
        $variavel = 8;
        echo "<br>O valor da variável agora é " .$variavel;
    }

    valor();
    valorReal();

    /* Código apoiado por Fuwawa e Mococo */
?>