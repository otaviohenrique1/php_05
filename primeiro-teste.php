<?php

require 'src/Conta.php';

$umaNovaConta = new Conta();
$umaNovaConta->defineCpfTitular('123.456.789-10');
$umaNovaConta->defineNomeTitular('Vinicius Dias');
echo $umaNovaConta->recuperarCpfTitular() . PHP_EOL;
echo $umaNovaConta->recuperarNomeTitular() . PHP_EOL;
$umaNovaConta->deposita(200);
echo $umaNovaConta->recuperarSaldo() . PHP_EOL;
$umaNovaConta->saca(200);
echo $umaNovaConta->recuperarSaldo() . PHP_EOL;
$umaNovaConta->deposita(200);
echo $umaNovaConta->recuperarSaldo() . PHP_EOL;
echo PHP_EOL;
$conta1 = new Conta();
$conta1->deposita(200);
echo $conta1->recuperarSaldo() . PHP_EOL;
$conta2 = new Conta();
$conta2->deposita(200);
echo $conta2->recuperarSaldo() . PHP_EOL;
$conta1->transfere(100, $conta2);
echo $conta1->recuperarSaldo() . PHP_EOL;
echo $conta2->recuperarSaldo() . PHP_EOL;
