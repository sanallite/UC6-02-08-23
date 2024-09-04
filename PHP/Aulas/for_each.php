<?php
    /* Vetor sem índice nomeado. */
    $cursos = ["CSS3", "PHP", "JavaScript", "HTML5",];

    foreach ( $cursos as $nomes ) {
        echo "Curso: " .$nomes. "<br>";
    }
    /* For each é um loop que *para cada* item do vetor, ele executará o comando, nesse caso o comando é escrever uma string e variável $nomes que tem o valor de cada item do array . */

    echo "<hr>";

    /* Índice nomeado manualmente. */
    $cursos = ["Curso 1:" => "CSS3", "Curso 2: " => "PHP", "Curso 3: " => "JavaScript", "Curso 4: " => "HTML5"];
    /* => Atribui o valor de uma váriavel para outra, nesse caso a string "Curso 1" é a variável $nomes e a string "CSS3" é a variável $valor . */

    foreach ( $cursos as $nomes => $valor ) {
        echo $nomes, $valor. "<br>";
        /* echo "$nomes $valor "<br>"; Outra forma de escrever na tela. */
    }

    echo "<hr>";

    /* Índice númerado automáticamente. */
    $cores = array("Azul", "Amarelo", "Vermelho", "Verde", "Laranja", "Roxo", "Rosa", "Branco");
    /* Outra forma de criar uma array. */

    foreach ( $cores as $num => $cor ) {
        echo "Minha cor no índice: " .$num. " é " .$cor. "<br>";
    }
?>