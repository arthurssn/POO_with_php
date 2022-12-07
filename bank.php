<?php

require_once 'autoload.php';

use Bank\Model\Account\OwnerAccount;
use Bank\Model\Address;
use Bank\Model\CPF;
use Bank\Model\Employee;

$cpfOwnerAcc = new CPF('123.456.789-10');
$nameOwnerAcc = "Arthur";
$address = new Address("Cidade", "Bairro", "Rua", "123");
$user = new OwnerAccount($cpfOwnerAcc, $nameOwnerAcc, $address);

$cpf = new CPF('123.456.789-10');
$name = "Arthur";
$office = "Programador";
$employee = new Employee($cpf, $name, $office);

var_dump($employee);
var_dump($user);