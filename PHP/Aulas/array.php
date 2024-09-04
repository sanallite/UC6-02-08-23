<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array / Vetor - Dias de Trabalho</title>
</head>
<body>
    <h1>Dias de Trabalho</h1>
    <hr>

    <form>
        <input type="text" name="dianm">

        <input type="submit">
    </form>
    <?php
        echo "<h1>Forma de fazer um array</h1>";

        $dia = ["domingo", "segunda", "terça", "quarta", "quinta", "sexta", "sábado"];

        $i = 0;
        $sele = filter_input(INPUT_GET, "dianm");

        while ( $i < 6 ) {
            $i++;

            if ( $sele != "terça" ) {
                if ( $dia[$i] == $sele ) {
                    echo $dia[$i]. " É dia de trabalho:<br>";
                }
            }

            else {
                if ( $dia[$i] == $sele ) {
                    echo $dia[$i]. " Não é dia de trabalho:<br>";
                }
            }
        }
    ?>
</body>
</html>