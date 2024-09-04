<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Quiz Quiz</title>
</head>
<body>
    <h1>Responda a cinco perguntas e ganhe uma recompensa.</h1>
    <h3>Apenas uma opção é a correta!</h3>

    <section>
        <h2>Primeira Pegunta</h2>
        <p>Em qual estado está localizado a cidade de Nova Iorque?</p>
        <form method="post">
            <input type="checkbox" name="p1op1" id="">
            <label for="p1op1">New York</label>
        
            <input type="checkbox" name="p1op2" id="">
            <label for="p1op2">Maranhão</label>
        
            <input type="checkbox" name="p1op3" id="">
            <label for="p2op3">Paraná</label>

            <p><input type="submit" value="Responder"></p>
        </form>

        <p>
            <?php
                if ( isset( $_POST['p1op2'] ) || isset( $_POST['p1op1'] ) || isset( $_POST['p1op3'] ) ) {
                    if ( isset( $_POST['p1op2'] ) && !isset( $_POST['p1op1'] ) && !isset( $_POST['p1op3'] ) ) {
                        echo "Acertou!";
                        @$resposta1 = true;
                        unset( $_POST['p1op1'] );
                        unset( $_POST['p1op2'] );
                        unset( $_POST['p1op3'] );
                    }
                    else {
                        echo "Errou!";
                        @$resposta1 == false;
                        unset( $_POST['p1op1'] );
                        unset( $_POST['p1op2'] );
                        unset( $_POST['p1op3'] );
                    }
                }
            ?>
        </p>
        <hr>
    </section>

    <section>
        <h2>Segunda Pergunta</h2>
        <p>Com quantos anos Dom Pedro II foi coroado?</p>

        <form method="post">
            <input type="checkbox" name="p2op1" id="">
            <label for="p2op1">14</label>
            
            <input type="checkbox" name="p2op2" id="">
            <label for="p2op2">15</label>
            
            <input type="checkbox" name="p2op3" id="">
            <label for="p2op3">16</label>

            <p><input type="submit" value="Responder"></p>
        </form>

        <p>
            <?php
                if ( isset( $_POST['p2op2'] ) || isset( $_POST['p2op1'] ) || isset( $_POST['p2op3'] ) ) {
                    if ( isset( $_POST['p2op1'] ) && !isset( $_POST['p2op2'] ) && !isset( $_POST['p2op3'] ) ) {
                        echo "Acertou!";
                        $resposta2 = true;
                    }

                    else {
                        echo "Errou!";
                    }
                }   
            ?>
        </p>
        <hr>  
    </section>
</body>
</html>