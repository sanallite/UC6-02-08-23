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
        $dias = ["domingo", "segunda", "terça", "quarta", "quinta", "sexta", "sábado"];

        $i = 0;
        while($i < count($dias)){
            if ( $dias[$i] == 'domingo' || $dias[$i] == 'sábado' ) {
                echo "Dia de descanso: " . $dias[$i] . "\n";
            }
            
            else {
                echo "Dia de trabalho: " . $dias[$i] . "\n";
            }
            $i++;
        }
    ?>
</body>
</html>