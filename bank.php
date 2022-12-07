<?php

require_once 'src/Person.php';
require_once 'src/Account.php';
require_once 'src/OwnerAccount.php';
require_once 'src/CPF.php';
require_once 'src/Address.php';
require_once 'src/Employee.php';

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