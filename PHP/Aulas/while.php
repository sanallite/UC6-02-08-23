<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência</title>
</head>
<body>
    <h1>Sequência númerica</h1>
    <hr>

    <?php
        $a = 1;

        while ( $a<9 ) {
            echo "<p>" .$a. "</p>";
            $a++;
        }

        echo "<h2>Faça enquanto</h2>";

        $a = 2;
        do {
            echo $a. "<br>";
            $a++;
        }
        while ( $a<9 );
    ?>
</body>
</html>