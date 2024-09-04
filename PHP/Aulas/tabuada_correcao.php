<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prof- Tabuada Personalizada</title>
</head>
<body>
    <h1>Tabuada</h1>
    <h2>Escolha um número:</h2>

    <form method="post">
        <input type="text" name="valor">
        <!-- Utilize o name no php, aparentemente... -->

        <input type="submit" value="Enviar">
    </form>

    <?php
        $num = filter_input(INPUT_POST,"valor");
        $i = 1;

        while ( $i<=10 ) {
            echo ( $num. "x" .$i. " = " .($num*$i). "<br>");
            $i++;
        }
    ?>
</body>
</html>