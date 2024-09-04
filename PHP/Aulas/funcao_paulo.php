<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções em PHP</title>
</head>
<body>
    <?php
        // uma função é um conjunto de instruções que podem ser usadas repetidamente em um programa.

        function tela(){

            echo "olá!!! <br>";
            echo "Este texto está numa função. <br>";
            echo "O texto é repetido. <br>";
            echo "<hr>";
        }

        for($i=1;$i<=5;$i++){
            tela();
        }
      
        function valor(){
            $variavel=10;
            echo ("<br>O valor é: ".$variavel);
            echo ("<br>na função valor() a variável tem o valor de: ".$variavel);
        }
        
        
        function valorreal(){
            global $variavel;
            $variavel=8;
            echo ("<br>o valor da variável aqui na função é: ".$variavel);
        }

        valor();
        valorreal();
        // por estar dentro da função o primeiro valor da variável só vale ....

    ?>
    
</body>
</html>