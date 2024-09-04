<?php
    /* Criando o objeto carro e definindo seus atributos e métodos, que são públicos, e por isso podem ser usados fora desse objeto. Também é uma boa prática colocar a primeira letra do nome da classe em maiúsculo. */
    class carro {
        public string $marca;
        public string $modelo;
        public string $combustivel;
        public string $tipo;
        public $preco;
        /* Também definindo o tipo das variáveis, como string, float etc. */

        public function ligar() {
            echo "Carro ligado vrummm<br>";
        }

        public function desligar() {
            echo "Carro desligado.<br>";
        }

        public function acelerar() {
            echo "Carro acelerando... acelerando!!!<br>";
        }
    }

    /* Criando novos atributos para o objeto carro */
    $novocarro = new carro();

    $novocarro -> marca = "Mercedes";
    $novocarro -> modelo = "SLK";
    $novocarro -> combustivel = "Etanol";
    $novocarro -> tipo = "Esportivo";
    $novocarro -> preco = number_format(40000, 2, ',', '.');
    /* Por causa da mascára de texto pelo number format, o atributo preco não pode ser definido como float */
    $novocarro -> ligar();
    $novocarro -> acelerar();

    var_dump($novocarro);
    echo "<hr>";

    /* Criando outra lista de novos atributos para o objeto carro. */
    $novocarro2 = new carro();

    $novocarro2 -> marca = "Dodge";
    $novocarro2 -> modelo = "Challenger";
    $novocarro2 -> combustivel = "Gasosa";
    $novocarro2 -> tipo = "Muscle Car";
    $novocarro2 -> preco = number_format(100000, 2, ',', '.');
    $novocarro2 -> desligar();

    var_dump($novocarro2);

    echo "<hr>";

    print_r($novocarro2);
    /* Duas formas de verificar os dados carregados nas variáveis. */
?>