<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa 21/08/2023</title>
    <style>
        div {
            width: 40%;
            margin-left: 8%;

            height: auto;
            display: inline-block;
        }

        #tabela {
            margin-top: -200px;
        }
    </style>
</head>

<body>
    <div>
        <h2>Entrada de dados</h2>
        <h3>Calcular pagamento de horas trabalhadas por contratado temporário</h3>
        <hr>
        <form method="post">
            <label for="">Nome do contratado temporário: </label><input type="text" name="nome" required><br>
            <br>
            <p>Digite a quantidade de horas trabalhadas por período:</p>
            <br>
            <label for="">Normais (1): </label><input type="text" name="horas1" required><br><br>
            <label for="">Extras até 22h (2): </label><input type="text" name="horas2"><br><br>
            <label for="">Extras de 22h a 24h (3): </label><input type="text" name="horas3"><br><br>
            <label for="">Extras de 00h a 6h (4): </label><input type="text" name="horas4"><br><br>
            <label for="">Horas final de sem + (1): </label><input type="text" name="horas5"><br><br>
            <label for="">Horas final de sem + (2): </label><input type="text" name="horas6"><br><br>
            <label for="">Horas final de sem + (3): </label><input type="text" name="horas7"><br><br>
            <label for="">Horas final de sem + (4): </label><input type="text" name="horas8"><br><br>

            <br>
            <label for="">Valor da hora trabalhada: R$ </label><input type="text" name="valorh"><br><br>

            <input type="submit" name="Calcular"><br><br>
        </form>


        <hr>
        <p>OBS: quando não houver horas na faixa para registrar, digite 0 (zero).</p>
        <hr>
    </div>

    <div id="tabela">


        <h3>Valores por hora:</h3>
        <p>(1) : + R$ 12,00 p/h</p>
        <p>(2) : + 20% s/hn</p>
        <p>(3) : + 30% s/hn</p>
        <p>(4) : + 50% s/hn</p>
        <p>(5) : + 50% s/hn </p>
        <p>(6) : + 70% s/hn </p>
        <p>(7) : + 80% s/hn </p>
        <p>(8) : + 100% s/hn </p>
        <hr>

    </div>

    <?php


    echo "<br>";

    $nome = filter_input(INPUT_POST, "nome");

    $h1 = filter_input(INPUT_POST, "horas1");
    $h2 = filter_input(INPUT_POST, "horas2");
    $h3 = filter_input(INPUT_POST, "horas3");
    $h4 = filter_input(INPUT_POST, "horas4");
    $h5 = filter_input(INPUT_POST, "horas5");
    $h6 = filter_input(INPUT_POST, "horas5");
    $h7 = filter_input(INPUT_POST, "horas5");
    $h8 = filter_input(INPUT_POST, "horas5");
    $vh = filter_input(INPUT_POST, "valorh");

    echo ("Valor da hora normal: R$ " . $vh . "<br>");

    echo "<hr>";
    echo "<br>";
    // Cálculo do valor a ser pago pelas horas trabalhadas por faixa
    $h1v = $h1 * $vh;
    $h2v = ($h2 * $vh) * 1.2;
    $h3v = ($h3 * $vh) * 1.3;
    $h4v = ($h4 * $vh) * 1.5;
    $h5v = ($h5 * $vh) * 1.5;
    $h6v = ($h6 * $vh) * 1.7;
    $h7v = ($h7 * $vh) * 1.8;
    $h8v = ($h8 * $vh) * 2;

    $total = $h1v + $h2v + $h3v + $h3v + $h4v + $h5v + $h6v + $h7v + $h8v;

    echo "<br>";

    if (!empty($nome)) {
        if (($h1 >= 0) && ($h2 >= 0) && ($h3 >= 0) && ($h4 >= 0) && ($h5 >= 0) && ($h6 >= 0) && ($h7 >= 0) && ($h8 >= 0) && ($vh >= 0)) {

            echo ("Contratado: " . $nome . "<br><br>");
            echo ("Valor a receber: R$ " . $total);
        } else {
            echo ("As quantidades de horas trabalhadas (por faixa) devem ser preenchidas (todas) com valores 0 (zero), maiores que zero, até, no máximo, 100.");
        }
    } else {
        echo ("Alguma (ou mais de uma) variável obrigatória não existe ou está vazia. Verifique e preencha todos os dados requisitados.");
    }

    ?>

</body>

</html>