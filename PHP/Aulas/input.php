<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada de dados</title>
</head>
<body>
    <h1>Entrada de dados</h1>
    <h3>Calculando a média de um aluno pela décima vez :)</h3>
    <h4>Dessa vez a média das médias dos últimos cinco anos!</h4>

    <form method="post">
        <p>
            <label for="nomeAluno">Nome do aluno: </label>
            <input type="text" name="nomeAluno">
        </p>

        <p>
            <label for="nota1">Digite a nota do 1° ano: </label>
            <input type="text" name="nota1">
        </p>

        <p>
            <label for="nota2">Digite a nota do 2° ano: </label>
            <input type="text" name="nota2">
        </p>

        <p>
            <label for="nota3">Digite a nota do 3° ano: </label>
            <input type="text" name="nota3">
        </p>

        <p>
            <label for="nota4">Digite a nota do 4° ano: </label>
            <input type="text" name="nota4">
        </p>

        <p>
            <label for="nota5">Digite a nota do 5° ano: </label>
            <input type="text" name="nota5">
        </p>

        <p>
            <input type="submit" value="Calcular" name="enviar">
        </p>
    </form>

    <?php
        $nomevar = filter_input(INPUT_POST, "nomeAluno");
        $nota1var = filter_input(INPUT_POST, "nota1");
        $nota2var = filter_input(INPUT_POST, "nota2");
        $nota3var = filter_input(INPUT_POST, "nota3");
        $nota4var = filter_input(INPUT_POST, "nota4");
        $nota5var = filter_input(INPUT_POST, "nota5");

        $media = ($nota1var+$nota2var+$nota3var+$nota4var+$nota5var)/5;

        if ( !empty($nomevar) ) {
            /* Retorna verdadeiro se a variável nomevar não estiver vazia ou com um valor igual a zero, com ! significando uma negação da lógica, caso contrário seria checado se a variável está vazia. */

            /* Pesquise mais sobre empty e isset ! */

            if ( $nota1var<=0 || $nota2var<=0 || $nota3var<=0 || $nota4var<=0 || $nota5var<=0 ) {
                echo "As notas não podem ser negativas.";
            }

            else if ( $nota1var<=10 && $nota2var<=10 && $nota3var<=10 && $nota4var<=10 && $nota5var<=10 ) {
                echo ("Aluno: " .$nomevar. "<br>");

                echo ("Média dos útlimos cinco anos: " .$media. "<br>");

                if ( $media >=7 ) {
                    echo "<strong>Boa garoto!</strong>";
                }

                else if ( $media >=4 ) {
                    echo "Hmmm...";
                }

                else { 
                    echo "<marquee>REPROVADO REPROVADO REPROVADO REPROVADO REPROVADO</marquee>";
                }
            }

            else {
                echo "Valor inválido.";
            }

            /* Primeiro verifica se alguma das notas é negativa.
            
            Segundo, se caso nenhuma for negativa e todas as notas forem menores que 10, será escrito na tela o cálculo da média e a situação do aluno.
            
            Terceiro, caso contrário das duas condições.*/
        }

        else {
            echo "Preencha o campo nome!";
        }
    ?>
</body>
</html>