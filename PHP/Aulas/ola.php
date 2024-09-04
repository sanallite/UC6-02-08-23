<?php
    print("Olá Mundo");

    $nome = "Márcio";
    $idade = 15;

    echo("<br>Seu nome é: ".$nome. "<br>");
    /* Usando o ponto para concatenar */
    echo("Sua idade é: " .$idade. "<br>");

    echo gettype($nome); // gettype mostra o tipo da variável.
    
    /* print($idade); Outra forma de escrever a idade */

    echo("<br>");

    var_dump($idade); // $var_dump comando que executa um debug da variável.

    $b = 3.1;
    $c = true;
    var_dump($b, $c);

    /* print_r usado para mostrar se a variável existe e o conteúdo dela. */

    print_r($peso);
?>