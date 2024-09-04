<?php
    echo "<h1>O conteúdo abaixo surgiu pelo comando include: </h1>";
    echo "<p>Todo o conteúdo da página for_each.php foi incluído na programação. e pode ser incluido mais de uma vez. </p>";

    include("for_each.php");
    /* Se o arquivo indicado pelo include não exista, apenas aparecerá uma mensagem na tela e o programa continuará normalmente. */

    echo "<h2>Página for each utilizando o require</h2>";

    require("for_each.php");
    /* Exige a inclusão do arquivo existente para que o programa continue, caso contrário, ele interrompe a execução da programação. */

    echo "<h2>Página parâmetros</h2>";

    include_once("parametros.php");
    /* Só incluí uma vez. */

    echo "<br>" .$total;
    /* Escrevendo na tela uma variável que foi definida na página incluída. */
?>