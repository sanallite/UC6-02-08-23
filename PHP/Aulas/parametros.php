<?php
    function msg($nome) {
        return "Olá " .$nome. ". Seja bem vindo!";
    }

    echo msg("Márcio"). "<br>";
    echo msg("Estelle");
    /* O parâmetro da função cria a variável nome que terá o valor decidido depois, nesse caso pelo echo, que chama a função utilizando um parâmetro, nesse caso uma string de texto. e essa função pode ser chamada mais de uma vez, se ela tiver um parâmetro definido. */

    echo "<hr>";

    function soma($v1, $v2) {
        echo "O resultado da soma é: " .$v1+$v2;
    }

    soma( 25,13 );
    /* Chamando a função colocando os valores que serão calculados, devendo estar nessa disposição e contendo todos os elementos. */

    echo "<hr>";

    function calc(&$v1, $v2) {
        echo "O resultado do cálculo é: " .$v1*$v2. "<br>";
    }
    /* O & força a passagem do parâmetro por uma referência, ou seja o valor deve ser definido por uma variável, como está abaixo, caso a função fosse chamada com o parâmetro $v1 sendo uma string ou número, a função não funcionará. */

    $total = 10;
    calc($total, 5);
?>