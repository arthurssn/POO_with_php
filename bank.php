<?php

require_once 'src/Account.php';
require_once 'src/OwnerAccount.php';
require_once 'src/CPF.php';
require_once 'src/Address.php';

$cpfUser = new CPF('123.456.789-10');
$addressUser = new Address('Cidade', 'Bairro', 'Rua', 'Numero');
$user = new OwnerAccount($cpfUser, 'User', $addressUser);

$newAcc1 = new Account($user);
$newAcc1->depositMoney(1000);
$accBalance = $newAcc1->getAccountBalance();
echo $newAcc1->getAccountBalance() . PHP_EOL;

echo Account::getNumberOfAccountsCreated();

var_dump($newAcc1);