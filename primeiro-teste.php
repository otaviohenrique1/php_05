<?php

require 'src/Conta.php';
require 'src/Titular.php';
require 'src/CPF.php';

$vinicius = new Titular(cpf: new CPF('123.456.789-10'), nome: 'Vinicius Dias');
$umaNovaConta = new Conta($vinicius);
// $umaNovaConta->defineCpfTitular('123.456.789-10');
// $umaNovaConta->defineNomeTitular('Vinicius Dias');
echo $umaNovaConta->recuperarCpfTitular() . PHP_EOL;
echo $umaNovaConta->recuperarNomeTitular() . PHP_EOL;
$umaNovaConta->deposita(200);
echo $umaNovaConta->recuperarSaldo() . PHP_EOL;
$umaNovaConta->saca(200);
echo $umaNovaConta->recuperarSaldo() . PHP_EOL;
$umaNovaConta->deposita(200);
echo $umaNovaConta->recuperarSaldo() . PHP_EOL;
echo PHP_EOL;
$patricia = new Titular(cpf: new CPF('698.549.548-10'), nome: 'Patricia');
$conta1 = new Conta($patricia);
$conta1->deposita(200);
echo $conta1->recuperarSaldo() . PHP_EOL;
$AnaMaria = new Titular(new CPF('485.456.789-10'), 'Ana Maria');
$conta2 = new Conta($AnaMaria);
$conta2->deposita(200);
echo $conta2->recuperarSaldo() . PHP_EOL;
$conta1->transfere(100, $conta2);
echo $conta1->recuperarSaldo() . PHP_EOL;
echo $conta2->recuperarSaldo() . PHP_EOL;
echo Conta::recuperaNumeroDeContas() . PHP_EOL;
