<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Café da manhã</title>
</head>
<body>
    <h1>Compras para o café</h1>

    <form method="post">
        <p>
            <label for="leite">Caixinha de leite - R$ 2.00</label>
            <input type="number" name="leite" id="leite">
            <label for="leite">Unidade(s)</label>
        </p>

        <p>
            <label for="boloc">Bolo de Cenoura Inteiro - R$ 6.00</label>
            <input type="number" name="boloc" id="boloc">
            <label for="boloc">Unidade(s)</label>
        </p>

        <p>
            <label for="bolac">Pacote de Bolachas Integrais - R$ 3.00</label>
            <input type="number" name="bolac" id="bolac">
            <label for="bolac">Unidade(s)</label>
        </p>

        <p>
            <label for="cafe">Pacote de Café - R$ 5.00</label>
            <input type="number" name="cafe" id="cafe">
            <label for="cafe">Unidade(s)</label>
        </p>

        <p>
            <label for="banana">Cacho de Bananas - R$ 1.00</label>
            <input type="number" name="banana" id="banana">
            <label for="banana">Unidade(s)</label>
        </p>

        <p>
            <label for="marg">Pote de Margarina - R$ 4.00</label>
            <input type="number" name="marg" id="marg">
            <label for="marg">Unidade(s)</label>
        </p>

        <p>
            <input type="submit" value="Adicionar ao carrinho" onsubmit="vazio()">
        </p>
    </form>
    
    <section>
        <h2>Resumo da compra</h2>

        <p>
            <?php
                $produtos = [ 'Leite' => @$_POST['leite'],
                    'Bolo de Cenoura' => @$_POST['boloc'],
                    'Bolacha Integral' => @$_POST['bolac'],
                    'Café' => @$_POST['cafe'],
                    'Bananas' => @$_POST['banana'],
                    'Margarina' => @$_POST['marg']
                ];

                $valores = [ 'Leite' => 2.00,
                    'Bolo de Cenoura' => 6.00,
                    'Bolacha Integral' => 3.00,
                    'Café' => 5.00,
                    'Bananas' => 1.00,
                    'Margarina' => 4.00
                ];

                /* Vetor que terá dados incluidos depois no algoritmo. */
                $valoresparciais = [];

                /* Para cada item do array produtos, onde os índices serão a variável $nome, e o valor a variável $quantidade, será executado o algoritmo abaixo. */
                foreach ( $produtos as $nome => $quantidade ) {

                    /* Verificando se o campo não está vazio ou o número está zerado. */
                    if ( !empty( $quantidade ) ) {

                        /* Verificando se quantidade é maior ou igual a zero e menor ou igual a 100. */
                        if ( $quantidade >= 0 && $quantidade <=100 ) {

                            /* Para cada item do array valores, será executado o algoritmo abaixo. */
                            foreach ( $valores as $nomevalor => $valor ) {

                                /* Se o valor do índice com a variável $nomevalor for igual ao valor do índice com a variável $nome, que está em outro vetor, será escrito na tela o resumo da compra daquele produto. */
                                if ( $nomevalor == $nome ) { $valorparcial = $quantidade*$valor;
                                    echo $nome. ": " .$quantidade. " unidade(s).<br>Valor: R$ " .number_format($valorparcial, 2, ','). "<br><br>";

                                    /* Será puxado para o final do array $valoresparciais o resultado da multiplicação da quantidade pelo valor unitário, com esse array podendo ser exibido pelo comando print_r  */
                                    array_push( $valoresparciais, $valorparcial );
                                }
                            }
                        }

                        else  {
                            echo $nome. ": Quantidade Inválida.<br>";
                        }
                    }
                }
                /* Dessa forma será verificado se todas as quantidades do vetor estão vazias, o que dificulta colocar um erro que apareceria caso o usuário clicasse no botão com todas as caixas vazias, mas não que não deveria aparecer no momento inicial, onde todas as caixas estão vazias por padrão. */
            ?>
        </p>

        <h3>Valor Total:
            <?php
                echo "R$ ". number_format( array_sum($valoresparciais), 2, ',', '.' );
                /* Definindo o formato de exibição do número, colocando a virgula antes de duas casas do decimal e definindo o primeiro separador como uma virgula e o segundo como um ponto, contando da direita para a esquerda. */
            ?>
        </h3>
    </section>
</body>
</html>