<?php
// Aqui encontraremos o conceito de abstração - a classe conta abstrai e representa a conta bancária com suas características
class Conta {
	public $nomeTitular;
	public $cpfTitular;
	public $saldo;

	public function depositar(float $valor){
		if($valor <= 0) {
			echo "O valor não pode ser menor ou igual a 0\n";
			return;
		}
		$this->saldo += $valor;
		// O this é uma variável especial usada dentro dos métodos para se referir ao objeto atual
		echo "O valor depositado foi $valor\n";
	}

	public function sacar(float $saque){
		if($saque > $this->saldo){
			echo "O seu saque não pode ser maior que seu saldo.\nSaque: $saque\nSaldo: $this->saldo";
			return;
		}
		$this->saldo -= $saque;
	}

	// Transferir
	public function transferir(float $vtrans, Conta $contaDest){
		if($vtrans > $this->saldo) {
			echo "Saldo indisponível para transferir";
			return;
		}
		$this->sacar($vtrans);
		$contaDest->depositar($vtrans);
	}
}
$novaConta = new Conta();
$novaConta->nomeTitular="Nome Nomeoso";
$novaConta->cpfTitular="208.099.600-28";
$novaConta->saldo=500;

$novaConta2 = new Conta();
$novaConta2->nomeTitular="Teste Testoso";
$novaConta2->cpfTitular="327.562.340-01";
$novaConta2->saldo=400;

$novaConta3 = new Conta();
$novaConta3->nomeTitular="Lorem Ipsum";
$novaConta3->cpfTitular="645.182.200-05";
$novaConta3->saldo=666;


var_dump($novaConta);
var_dump($novaConta2);
var_dump($novaConta3);

// Executar depósito
$novaConta->depositar(readline());
var_dump($novaConta);

// Executar saque
$novaConta2->sacar(readline());
var_dump($novaConta2);

// Método transferir
$novaConta->transferir(readline(), $novaConta3);
var_dump($novaConta);
