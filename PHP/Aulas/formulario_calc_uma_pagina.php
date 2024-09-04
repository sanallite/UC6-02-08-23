<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="formulario_calc.css">
</head>
<body>
    <!-- Nesse caso é necessário colocar o código do php antes, para que o value do input text com name resultado possa pegar o valor da variável $c -->
    <?php
        @$v1 = $_POST['v1'];
        @$v2 = $_POST['v2'];
        @$op = $_POST['op'];

        if ( is_numeric($v1) && is_numeric($v2) ) {
            switch ($op) {
                case $op == '+':
                    $c = $v1 + $v2;
                    /* echo "O resultado da adição de " .$v1. " por " .$v2. " é " .$c. ".<br>"; */
                break;

                case $op == '-':
                    $c = $v1 - $v2;
                    /* echo "O resultado da subtração de " .$v1. " por " .$v2. " é " .$c. ".<br>"; */
                break;

                case $op == 'x':
                    $c = $v1 * $v2;
                    /* echo "O resultado da multiplicação de " .$v1. " por " .$v2. " é " .$c. ".<br>"; */
                break;

                case $op == '/':
                    if ( $v2 > 0 ) {
                        $c = $v1 / $v2;
                        /* echo "O resultado da divisão de " .$v1. " por " .$v2. " é " .$c. ".<br>"; */
                    }

                    else { 
                        /* echo "Divisão por zero é impossível."; */
                        $c = "Divisão por zero ou por números negativos é impossível.";
                    }
                break;
            }
        }
    ?>

    <main>
        <header>
            <h1>Calculadora fria e calculista</h1>
        </header>
        
        <form method="post">
            <p>
                Escolha um número por favor... <br>Nota: Números decimais devem ser escritos com ponto, não vírgula.
                <!-- Para fazer essa messagem aparecer apenas após a validação, seria melhor colocar o código do php dentro de uma função. -->
            </p>

            <p>
                <label for="v1">1º Valor:</label>
                <input type="text" id="v1" name="v1">
            </p>

            <p>
                <label for="v2">2º Valor:</label>
                <input type="text" id="v2" name="v2">
            </p>

            <p>
                <input type="submit" name="op" class="op" value="+">
                <input type="submit" name="op" class="op" value="-">
                <input type="submit" name="op" class="op" value="x">
                <input type="submit" name="op" class="op" value="/">
            </p>
            
            <p>
                <label for="resultado">O resultado é:</label>
                <input type="text" name="resultado" id="resultado" value="<?= @$c ?>">
            </p>
        </form>
    </main>
</body>
</html>