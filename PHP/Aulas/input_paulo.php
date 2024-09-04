<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entradas de dados</title>
</head>
<body>
    <h2>Entrada de dados</h2>
    <h3>Calculando a média de um aluno</h3>
    <hr>
    <form method="post">
        <label for="">Nome do aluno: </label><input type="text" name="nome"><br>
        <br>
        <label for="">Digite a 1ª nota do aluno: </label><input type="text" name="nota1"><br><br>
        <label for="">Digite a 2ª nota do aluno: </label><input type="text" name="nota2"><br><br>
        <label for="">Digite a 3ª nota do aluno: </label><input type="text" name="nota3"><br><br>
        <label for="">Digite a 4ª nota do aluno: </label><input type="text" name="nota4"><br><br>
        
        <input type="submit" name="Calcular"><br><br>
    </form>

    <?php
        
        echo "<br>";
        
        $nome = filter_input(INPUT_POST, "nome");
        echo "<br>";
        echo "<br>";
        $n1 = filter_input(INPUT_POST, "nota1");
        $n2 = filter_input(INPUT_POST, "nota2");
        $n3 = filter_input(INPUT_POST, "nota3");
        $n4 = filter_input(INPUT_POST, "nota4");
        
        echo "<br>";
 
    if (!empty($nome)){
        if (($n1>=0)&&($n2>=0)&&($n3>=0)&&($n4>=0)){
            // "Variáveis n1/n2/n3/n4 existem e não estão vazias.";
            $media=($n1+$n2+$n3+$n4)/4;
            echo ("Aluno: ".$nome."<br>");
            "<input type='submit' name='enviar' value='enviar'>";
            if ($media>=70){
                echo("Sua nota foi ".$media.": ALUNO APROVADO.");
            }else if($media>=40){
                echo ("Sua nota foi ".$media.": ALUNO EM RECUPERAÇÃO.");
            }else{
                echo ("Sua nota foi ".$media.": ALUNO REPROVADO.");
            }
            
        }else{
            echo("As notas devem ser preenchidas (todas) com valores 0 (zero), maiores que zero, até, no máximo, 100.");
        }
    }else{
        echo("Alguma (ou mais de uma) variável não existe ou está vazia. Verifique e preencha todos os valores requisitados.");        
    }
        
    ?>
    
</body>
</html>