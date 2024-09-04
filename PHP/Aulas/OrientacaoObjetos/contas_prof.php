<?php
// aqui encontraremos o conceito de abstração - a classe conta abstrai e representa a conta bancaria com suas caracteristicas. 
class Conta
{
    public $nomeTitular;
    public $cpfTitular;
    public $saldo;
//*******************/************/*****************/
// utilizaremos métodos para efetuar alterações no objeto criado.
public function depositar (float $valorAdepositar){
// aqui utilizaremos principios de encapsulamento: onde vamos validar o valorAdepositar aqui dentro da classe.
if ($valorAdepositar<0){
    echo "<br>";
    echo "Valor precisa ser maior que zero";
    return;
}
    $this->saldo += $valorAdepositar;
    // o this é uma variavel especial usada dentro dos metodos para se referir ao objeto atual.
    echo "o valor depositado foi:".$valorAdepositar."<br>";

}
public function sacar(float $valorAsacar){
if ($valorAsacar > $this->saldo){
    echo "O seu saque era de: $valorAsacar, o seu saldo é: ".$this->saldo. " Impossível Sacar<br>";
    return;
}
    $this->saldo -= $valorAsacar;
    // mais uma vez, o this é uma variavel especial usada dentro dos metodos para se referir ao objeto atual.
}

//**************  METODO TRANSFERIR ********************* */
public function transferir(float $valorAtransferir, Conta $contaDestino){
if ($valorAtransferir>$this->saldo){
    echo "Saldo indisponivel para transferir.";
    return;
}
    $this->sacar($valorAtransferir);
    $contaDestino->depositar($valorAtransferir);
}
}
///**************************   EXECUÇÃO DO PROGRAMA   ************************************ */
echo "<br>";
$novaConta=new Conta();
$novaConta->nomeTitular="Juvenal Silveira";
$novaConta->cpfTitular="888.555.666-55";
$novaConta->saldo="500";
print_r($novaConta);

echo "<br>";
$novaConta2=new Conta();
$novaConta2->nomeTitular="Marlene Mattos";
$novaConta2->cpfTitular="444.777.555-44";
$novaConta2->saldo="800";
print_r($novaConta2);

echo "<br>";
$novaConta3=new Conta();
$novaConta3->nomeTitular="Silvio Santos";
$novaConta3->cpfTitular="707.070.707-07";
$novaConta3->saldo="3000";
print_r($novaConta3);

// para ter uma visão mais completa de variáveis, é comum a utilização do 
// comando var_dump($nomeVariável) - assim teremos uma visão completa da variável em questão.
echo "<br>";
var_dump($novaConta);
echo "<br>";
var_dump($novaConta2);
echo "<br>";
var_dump($novaConta3);

//*******************/************/*****************/
// vamos executar os depósitos por métodos.
echo "<br>";
$novaConta->depositar(300);
var_dump($novaConta);
echo "<br>";
$novaConta2->depositar(50);
var_dump($novaConta2);

//*************** METODO SACAR ******************** */
echo "<br>";
$novaConta->sacar(150);
var_dump($novaConta);
//**************  METODO TRANSFERIR ********************* */
$novaConta->transferir(100,$novaConta3);
// após execução será transferido 100 da conta 1 para conta3
var_dump($novaConta);
echo "<br>";
var_dump($novaConta3);
?>