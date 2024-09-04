<?php
/* Criando o objeto carro e definindo seus atributos, que são públicos, e por isso podem ser usados fora desse objeto. */
class Carro{
    public string $marca;
    public string $modelo;
    public string $combustivel;
    public string $tipo;
    public float $preco;

    public function ligar(){
        echo "carro ligado\n";
    }
    public function desligar(){
        echo "carro desligado\n";
    }
    public function acelerar(){
        echo "carro acelerando\n";
    }
}

/* Criando novos atributos para o objeto carro */
$novocarro = new Carro();

$novocarro->marca = "Mercedes";
$novocarro->modelo = "SLK";
$novocarro->combustivel = "Etanol";
$novocarro->tipo = "Esportivo";
$novocarro->preco = number_format(86000.99, 2, '.', '');
$novocarro->ligar();
$novocarro->acelerar();


$novocarro2 = new Carro();

$novocarro2->marca = "BMW";
$novocarro2->modelo = "M4";
$novocarro2->combustivel = "Gasolina";
$novocarro2->tipo = "Esportivo";
$novocarro2->preco = number_format(77658.89, 2, '.', '');
$novocarro2->desligar();

var_dump($novocarro);
var_dump($novocarro2);
?>