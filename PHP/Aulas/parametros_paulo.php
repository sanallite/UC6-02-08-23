<?php
function msg($nome){
    return "Olá, seja bem-vindo: ".$nome;
}
echo msg("Paulo")."<br>";
echo msg("bill")."<br>";
echo msg("elí")."<br>";

echo "<br>";
echo "<hr>";
echo "<br>";

function soma($v1,$v2){
    echo "O resultado da soma é: ".$v1+$v2;
}
soma(10,30); // tem de estar nesta disposição e ter tofdos esses elementos

echo "<br>";
echo "<hr>";
echo "<br>";


function calc(&$v1,$v2){
    echo "<br>O resultado do cálculo é: ".$v1*$v2."<br>";
}
$total=10;
calc($total,2);



?>